<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{

    use hasFactory; //
    protected $fillable = [ 'title', 'body', 'img', 'slug'];// поля доступные при массовом заполнении
  //  protected $guarded = [];   поля недоступные при массовом заполнении
  // взаимоотношения с другими моделями
    public function comments() {
        return $this->hasMany( Comment::class); // много комментариев
    }
    public function state() {
        return $this->hasOne(State::class);  // один к одному
    }
    public function tags() {
        return $this->belongsToMany(Tag::class);// многие ко многим
    }
}
