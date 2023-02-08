<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    //
    use HasFactory;
    protected $fillable = [ 'subject', 'body', 'article_id' ];


    public function article() {
        return $this->belongsTo( Article::class); // комментарий относится к статье
    }
}
