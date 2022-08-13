<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
    protected $with = ['getUser', 'getUserTarget', 'getCategory'];

    // tidak dipakai
    public static function groupByThisItem($email): array
    {
        $hasil = DB::select("SELECT * FROM submissions INNER JOIN users
                                        ON submissions.id_user_pengirim = users.id
                                        where users.email = %s", $email);
        return $hasil;
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

    public function user($as): BelongsTo
    {
        return $this->belongsTo(User::class, foreignKey:__("$as"),ownerKey: 'id');
    }

    //-------------------sama-----------------
    public function getUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user_pengirim', 'id');
    }

    function getUserTarget(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user_target', 'id');
    }

    //-------------------sama-----------------

    function getCategory()
    {
        return $this->belongsTo(Category::class, 'id_cat', 'id');
    }

    static function countSubs(): int
    {
        $count = Submission::where('id', '!=', auth('web')->id())->get();
        return count($count);
    }

    protected function setCreatedAtAttribute($value)
    {
        $this->attributes['created_at'] = $value;
    }

    protected function getCreatedAtAttribute(): string
    {
        // \Carbon\Carbon::parse($this->attributes['created_at'])->format('d,M Y H:i');
        return Carbon::parse($this->attributes['created_at'])->diffForHumans();
    }

    protected function setUpdatedAtAttribute($value): void
    {
        $this->attributes['updated_at'] = $value;
    }

    // harus ada di magic property appends
    protected function getUpdatedAtAttribute(): string
    {
        return Carbon::parse($this->attributes['updated_at'])->diffForHumans();
    }
}
