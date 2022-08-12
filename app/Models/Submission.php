<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Submission extends Model
{
    use HasFactory;
    protected $table = 'submissions';
    protected $guarded = ['id',];
    protected $appends = [
        'created_at',
        'updated_at'
    ];

    // tidak dipakai
    public static function groupByThisItem($email)
    {
        $hasil = DB::select("SELECT * FROM submissions INNER JOIN users
                                        ON submissions.id_user_pengirim = users.id
                                        where users.email = %s", $email);
        return $hasil;
    }
    static function getGroupByCategory($id_cat)
    {
        $result = null;
        // CAC
        if ($id_cat == 5) {
            $result =  Submission::where("id_cat", $id_cat)
                ->where('status', 'public')
                ->get();
        }
        // AO Kalbis
        else if ($id_cat == 4) {
            $result = Submission::where("id_cat", $id_cat)
                //                ->where('status','public')
                ->get();
        }
        // CSD
        else if ($id_cat == 6) {
            $result = Submission::where("id_cat", $id_cat)
                ->where('status', 'public')
                ->get();
        }
        // Finance
        else if ($id_cat == 7) {
            $result = Submission::where("cat", $id_cat)
                ->where('status', 'public')
                ->get();
        }
        return $result;
    }
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
        $this->attributes['updated_at'] = $value;
    }

    // harus ada di magic property appends
    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at'])->diffForHumans();
    }
}
