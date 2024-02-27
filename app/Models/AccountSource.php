<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountSource extends Model
{
    use HasFactory;

    protected $table = 'account_sources';
    protected $fillable = ['name' ,'last_updated_by' ,"account_source_id"];

    public function sub_account_sources()
    {
        return $this->hasMany(AccountSource::class, 'account_source_id', 'id');
    }

    public function main_account_source()
    {
        return $this->belongsTo(AccountSource::class, 'account_source_id', 'id');
    }
    public function last_updated_by_user()
    {
        return $this->belongsTo(User::class, 'last_updated_by', 'id');
    }
    public function customers()
    {
        return $this->hasMany(Customer::class, 'account_source_id', 'id');
    }

}
