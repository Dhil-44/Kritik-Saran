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
    function getUserTarget()
    {
        return $this->belongsTo(User::class, 'id_user_target', 'id');
    }
    function getCategory()
    {
        return $this->belongsTo(Category::class, 'id_cat', 'id');
    }
}
