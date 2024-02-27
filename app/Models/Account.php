<?php

namespace App\Models;

use App\Models\Traits\HasCompanyTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Log;

class Account extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasCompanyTrait;

    public function last_updated_by_user()
    {
        return $this->belongsTo(User::class, 'last_updated_by', 'id');
    }

    public function created_by_user()
    {
        return $this->belongsTo(User::class, 'last_updated_by', 'id');
    }

    public function lead_customers(){
        return $this->hasMany(LeadCustomer::class , "account_id"  ,"id");
    }

    public function campaigns(){
        return $this->hasMany(Campaign::class , "account_id"  ,"id");
    }

    public function account_teams(){
        return $this->hasMany(AccountTeam::class , "account_id"  ,"id");
    }

    public function orders(){
        return $this->hasMany(Order::class , "sales_account_id"  ,"id");
    }

    public function teams(){
        return $this->belongsToMany( Team::class , AccountTeam::class );
    }


}
