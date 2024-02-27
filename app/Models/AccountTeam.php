<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountTeam extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function last_updated_by_user()
    {
        return $this->belongsTo(User::class, 'last_updated_by', 'id');
    }

    public function account(){
        return $this->belongsTo(Account::class , "account_id"  ,"id");
    }

    public function team(){
        return $this->belongsTo(Team::class , "team_id"  ,"id");
    }

}
