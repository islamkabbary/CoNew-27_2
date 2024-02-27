<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NotifyUser extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $guarded = [];

    public function model()
    {
        $this->morphTo();
    }
    public function last_updated_by_user()
    {
        return $this->belongsTo(User::class, 'last_updated_by', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
