<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = [
        'user_id',
        'submission_id',
        'message'
    ];
    protected $with = [
        'user'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    protected $casts = [
        'post_at' => 'datetime'
    ];
    protected $appends = [
        'post_at'
    ];
    protected function setPostAtAttribute($value)
    {
        $this->attributes['post_at'] = $value;
    }
    protected function getPostAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['post_at'])->diffForHumans();
    }

    protected function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at'])->diffForHumans();
    }
    // id	user_id	message	post_at	created_at	updated_at
}
