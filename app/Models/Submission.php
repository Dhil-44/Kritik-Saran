<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Submission extends Model
{
    use HasFactory;

    protected $table = 'submissions';
    protected $guarded = ['id',];

    protected $appends = [
        'created_at',
    ];
    // protected $touches = [
    //     'submissions'
    // ];

    static function category(int $category, string $column)
    {
        $data = null;
        if ($category == 1) {
            $data = Submission::whereRaw("$column =" . auth('web')->id() . " AND ID_CAT = $category")->latest()->get();
        } else if ($category == 2) {
            $data = Submission::whereRaw("$column =" . auth('web')->id() . " AND ID_CAT = $category")->latest()->get();
        } else if ($category == 3) {
            $data = Submission::whereRaw("$column =" . auth('web')->id() . " AND ID_CAT = $category")->latest()->get();
        }

        return $data;
    }


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

    static function countSubs(): int
    {
        $count = Submission::where('id', '!=', auth('web')->id())->get();
        return count($count);
    }

    public function setCreatedAtAttribute($value)
    {
        $this->attributes['created_at'] = $value;
    }

    public function getCreatedAtAttribute()
    {
        // \Carbon\Carbon::parse($this->attributes['created_at'])->format('d,M Y H:i');
        return \Carbon\Carbon::parse($this->attributes['created_at'])->diffForHumans();
    }

    public function setUpdatedAtAttribute($value)
    {
        \Carbon\Carbon::parse($value)->format('d,M Y H:i');
    }

    // harus ada di magic property appends
    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at'])->diffForHumans();
    }
}
