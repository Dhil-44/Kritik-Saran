<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;
    protected $table='feeds';
    protected $fillable=[
        'title',
        'body',
        'category',
    ];
    protected $appends=[
        'created_at'
    ];

    protected function setCreateAtAtrribute($value){
    }
}
