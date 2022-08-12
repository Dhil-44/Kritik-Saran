<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table='news';
    protected $fillable = [
        'title',
        'body',
        'link',
        'gambar',
    ];
    protected $appends = [
        'created_at'
    ];

    protected function setCreatedAtAttribute($value){
        $this->attributes['created_at'] = $value;
// \Carbon\Carbon::parse($value)->format('d,M Y H:i');
    }
    protected function getCreatedAtAttribute(){
        return \Carbon\Carbon::parse($this->attributes['created_at'])->diffForHumans();
    }

//    protected function getUpdatedAtAttribute()
//    {
//        return \Carbon\Carbon::parse($this->attributes['created_at'])->diffForHumans();
//    }

}
