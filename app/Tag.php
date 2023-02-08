<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
         use HasFactory;

    protected $fillable = ['label'];

    public $timestamps = false;

//определим метод articles в нашей модели
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
