<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Notification extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->withPivot('read_at')
            ->withTimestamps()
            ->latest();
    }
    public function model()
    {
        return $this->morphTo();
    }
    public function byUser()
    {
        return $this->belongsTo(User::class, 'last_updated_by', 'id');
    }
    public function getNameAttribute()
    {
        if (App::getLocale() == "en") {
            return $this->name_en;
        } else {
            return $this->name_ar;
        }
    }

    public function created_at_ago()
    {
        return ($this->created_at) ? $this->created_at->diffForHumans() : '';
    }
}
