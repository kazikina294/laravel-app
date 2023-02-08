<?php
//namespace Database\Seeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    // Запускают фабрики
    public function run()
    {
        //У Laravel есть простой механизм наполнения вашей БД начальными данными (seeding) с использованием классов-наполнителей.
        //Seeder запускают фабрики
        // Класс DatabaseSeeder уже определен по умолчанию. В этом классе вы можете использовать метод call для запуска других наполнителей
        //php artisan make:seeder UserSeeder  Чтобы сгенерировать новый наполнитель
        //php artisan db:seed
        // $this->call(UserSeeder::class);



      $tags = \App\Tag::factory(10)->create();
        //создали 10 тэгов и коллекцию из них присвои в переменную $tags

        $articles = \App\Article::factory(20)->create();
        //создали 20 статей и коллекцию из них присвои в переменную $articles



        $tags_id = $tags->pluck('id');
        // по имени поля id проходит по всем элементам коллекции и сохраняет в массив значение данных полей
        // мы сохраняем все id айдишники  всех тэгов в массив  $tags_id
        // https://laravel.com/docs/8.x/collections#method-pluck

        // В цикле each проходим по коллекции статей, для каждой статьи,  используя  $article->tags(), заполняем таблицу
        // тремя random тэгами из $tags_id
        // для каждой статьи создаем 3 комментария, используя article_id каждой конкретной статьи,
        // для каждой статьи создаем 1 элемент статистики, используя article_id


        $articles->each(function ($article) use ($tags_id)   {

        $article->tags()->attach($tags_id->random(3));

        \App\Comment::factory(3)->create([  'article_id' => $article->id   ]);

        \App\State::factory(1)->create([
            'article_id' => $article->id  ]);
        });
          // В итоге будет 10 тэгов, 20 статей. Для каждой статьи будет связь с тремя тэгами
          //  3 комментария и 1 статистика
    }
}
