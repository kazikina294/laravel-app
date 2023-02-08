<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * up создание таблицы, добавление, удаление поля
     */

    // Миграции описывают какими должны быть таблицы, мы прописываем каждое поле
    //нужно определить, какие у нас должны быть колонки в нашей таблице
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
          //  $table->bigIncrements('id'); алиас создает эквивалент автоинкрементного столбца UNSIGNED BIGINT (первичный ключ):
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('body');
            $table->string('img');
            $table->timestamps();             // создание 2х полей created_at   updated_at
            // когда запись создана и изменена
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * down удаление созданной таблицы, поля
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
