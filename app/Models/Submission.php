<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;
    protected $table = 'submissions';
    protected $guarded = [];

    function getUser()
    {
        return $this->belongsTo(User::class, 'id_user_pengirim', 'id');
    }
}
