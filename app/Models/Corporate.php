<?php

namespace App\Models;

use App\Models\Traits\HasCompanyTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corporate extends Model
{
    use HasFactory;
    use HasCompanyTrait;

    protected $table = 'corporates';

    protected $fillable = [
        'name'  ,'last_updated_by' ,'comment' , "branch_id",

    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }

    public function last_updated_by_user()
    {
        return $this->belongsTo(User::class, 'last_updated_by', 'id');
    }

    public function customers()
    {
        return $this->hasMany(Customer::class, 'corporate_id', 'id');
    }
    public function contacts()
    {
        return $this->morphMany(Contact::class, 'account');
    }
    public function orders()
    {
        return $this->morphMany(Order::class, 'account');
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'account');
    }
    public function tickets()
    {
        return $this->morphMany(Ticket::class, 'account');
    }
    public function tasks()
    {
        return $this->morphMany(Task::class, 'account');
    }
    public function opportunities()
    {
        return $this->morphMany(Opportunity::class, 'account');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function customer_exams(){
        /*$query = CourseCustomerExam::query();
        $customers_ids = Customer::where("corporate_id" ,'=', $this->id)->pluck("id");
        $corporate_customer_exams = $query->whereIn('customer_id',$customers_ids)->get();
        return $corporate_customer_exams;*/
        return CourseCustomerExam::whereHas('course_exam', function ($query){
                    $query->whereHas('exam', function ($query2){
                        $query2->where('is_placement_test','=',1);
                    });
                })->whereHas('customer',function($q){
                    $q->where('corporate_id','=',$this->id);
                })->get();
    }
    public function opened_by_user()
    {
        return $this->belongsTo(User::class, 'opened_by', 'id');
    }
    public function last_follow_up_by_user()
    {
        return $this->belongsTo(User::class, 'last_follow_up_by', 'id');
    }
    public function force_free_by_user()
    {
        return $this->belongsTo(User::class, 'force_free_by', 'id');
    }

    public function promo_codes()
    {
        return $this->morphMany(PromoCode::class, 'model');
    }
}
