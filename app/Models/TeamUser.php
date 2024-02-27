<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class TeamUser extends Model
{
    protected $table = 'team_user';

    public function team()
    {
        return $this->belongsTo(Team::class , 'team_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id','id');
    }
    
    public function created_by_user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
