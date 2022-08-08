<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;
    protected $table = 'feeds';

    protected $fillable = [
        'title',
        'body',
        'category',
    ];
    protected $appends = [
        'created_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    protected function setCreateAtAtrribute($value)
    {
        $this->attributes['created_at'] = $value;
    }

    protected function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])->diffForHumans();
    }
}
