<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabby extends Model
{
    use HasFactory;
    public $body_content;

    public function __construct( Customer $customer , $amount , $cart_id) {

        $items =    $this->items() ;

        // Set the default timezone to UTC
        date_default_timezone_set('UTC');

        // Get the current time in UTC
        $currentTimeUtc = new \DateTime('now');

        $tenMinutesAgo = $currentTimeUtc->modify('-10 minutes');

        // Format the time in ISO 8601 datetime format
        $iso8601DateTime = $tenMinutesAgo->format('Y-m-d\TH:i:s\Z');



        $this->body_content = [
            "payment" => [
                "amount"        => "$amount",
                "currency"      => "SAR",
                "description"   => "order created by tabby.",
                "buyer" => [
                    "email"     => $customer->email,
                    "phone"     => $customer->mobile,
                    "name"      => $customer->name,
                    "dob"       => "2000-01-01"
                ],
                "buyer_history" => [
                    "registered_since"  => "$iso8601DateTime",
                    "loyalty_level"     => 0
                ],
                "order" => [
                    "updated_at"        => "$iso8601DateTime",
                    "reference_id"      => "$cart_id",
                    "items"             =>  $items
                ],
                "order_history" => [
                    [
                        "purchased_at"  => "$iso8601DateTime",
                        "amount"        => "$amount",
                        "payment_method" => "card",
                        "status"        => "new",
                        "buyer" => [
                            "email"     => "$customer->email",
                            "phone"     => "$customer->mobile",
                            "name"      => "$customer->name",
                            "dob"       => "1998-10-12"
                        ],
                        "items" =>  $items
                    ]
                ],

                "meta" => [
                     "customer" => $customer->id
                ]

            ],
            "lang"  => "ar",
            "merchant_code" => "proleaders_sa",
            "merchant_urls"     => [
                "success"       => route('proCo.order.success') . "/7",
                "cancel"        => route('proCo.order.cancel'),
                "failure"       => route('proCo.order.failure')
            ]
        ];



        //dd($this->body_content );


    }

    public function items(){

        $cart = session()->get('my_cart');

        $items = [];
        foreach( $cart as $model_type => $model){
            foreach( $model as $product_id => $cart_item){
                $items[] =  $this->item(  $model_type , $product_id , $cart_item );
            }
        }
        return $items;
    }

    public function item( $model_type ,$product_id , $cart_item){

        $is_offer       = $cart_item['is_offer'];
        $plus_offer     = $cart_item['plus_offer'];
        $is_plus_offer  = $cart_item['is_plus_offer'];
        $unit_price     = $cart_item['price'];

        return array(

            "title"             => $cart_item['title'],
            //"model_type"        => $model_type,
            "description"       => "string",
            "quantity"          => $cart_item['qty'],
            "unit_price"        => "$unit_price",
            "reference_id"      => "$product_id",
            "category"          => "courses",

        );
    }

    public function get_body_content(){

        return $this->body_content ;
    }
}
