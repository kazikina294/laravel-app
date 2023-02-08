<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTagTable extends Migration
{
    /**
     * Run the migrations.
     *(SQL: insert into `article_tag` (`article_id`, `tag_id`) values (21, 14), (21, 17), (21, 20))
     * @return void
     */
    //используется для добавления новых таблиц, столбцов или индексов в вашу БД
    public function up()
    {
        // поля article_id и tag_id сводной таблицы.
        Schema::create('article_tag', function (Blueprint $table) {
          //  $table->id();
          //  $table->unsignedBigInteger('article_id');
          //  $table->foreign('article_id')->references('id')->on('articles');
            // article_id это ссылка на id в таблице  articles
            // Метод foreignId создает столбец, эквивалентный BIGINT без знака, при удалении использовать каскадные миграции

            $table->foreignId('article_id')->constrained()->onDelete('cascade');
            $table->foreignId('tag_id')->constrained()->onDelete('cascade');

         //   $table->unsignedBigInteger('tag_id');
         //   $table->foreign('tag_id')->references('id')->on('tags');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_tag');
    }
}
