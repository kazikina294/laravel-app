<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    //
    use HasFactory;
    protected $fillable = ['likes','views','article_id'];
    // статистику достаём из статьи
    public $timestamps = false;
}
