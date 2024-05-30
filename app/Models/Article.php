<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Article {
    public static function all() {
        return [
            [
                'id'=> 1,
                'slug'=> 'judul-artikel-1',
                'title'=> 'Judul Artikel 1',
                'author' => 'admin pokarez',
                'body'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat mollitia ipsam aliquid debitis hic eius ex necessitatibus molestias consectetur illo ea, nobis aperiam provident itaque dolor porro quaerat aspernatur minus, quibusdam qui vitae labore. Debitis, iste, officia ut non neque minus, eum aspernatur excepturi reiciendis dicta vero fugiat necessitatibus similique!',
                'created_at' => '27 Mei 2024'
            ],
            [
                'id'=> 2,
                'slug'=> 'judul-artikel-2',
                'title'=> 'Judul Artikel 2',
                'author' => 'admin pokarez',
                'body'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa nobis blanditiis facere esse temporibus nesciunt! Hic ullam cum eligendi qui perspiciatis reprehenderit ad distinctio iste voluptas accusantium illum pariatur, et culpa architecto aspernatur iusto quam voluptate magnam animi est aut quidem obcaecati sint. Ea nesciunt mollitia praesentium ad quod eligendi, ipsum nobis veniam eaque quam aperiam? Esse recusandae voluptatum perferendis praesentium cumque placeat veniam pariatur excepturi, quis ipsam inventore eligendi numquam voluptatem ut alias sint odit harum suscipit nisi vero quod corrupti distinctio deserunt maiores? Placeat natus cupiditate quaerat eveniet modi perspiciatis ipsam odit magni necessitatibus! Iusto libero non tempore?',
                'created_at' => '30 Mei 2024'
            ],
            [
                'id'=> 3,
                'slug'=> 'judul-artikel-3',
                'title'=> 'Judul Artikel 3',
                'author' => 'admin pokarez',
                'body'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa nobis blanditiis facere esse temporibus nesciunt! Hic ullam cum eligendi qui perspiciatis reprehenderit ad distinctio iste voluptas accusantium illum pariatur, et culpa architecto aspernatur iusto quam voluptate magnam animi est aut quidem obcaecati sint. Ea nesciunt mollitia praesentium ad quod eligendi, ipsum nobis veniam eaque quam aperiam? Esse recusandae voluptatum perferendis praesentium cumque placeat veniam pariatur excepturi, quis ipsam inventore eligendi numquam voluptatem ut alias sint odit harum suscipit nisi vero quod corrupti distinctio deserunt maiores? Placeat natus cupiditate quaerat eveniet modi perspiciatis ipsam odit magni necessitatibus! Iusto libero non tempore?',
                'created_at' => '30 Mei 2024'
            ],
            [
                'id'=> 4,
                'slug'=> 'judul-artikel-4',
                'title'=> 'Judul Artikel 4',
                'author' => 'admin pokarez',
                'body'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa nobis blanditiis facere esse temporibus nesciunt! Hic ullam cum eligendi qui perspiciatis reprehenderit ad distinctio iste voluptas accusantium illum pariatur, et culpa architecto aspernatur iusto quam voluptate magnam animi est aut quidem obcaecati sint. Ea nesciunt mollitia praesentium ad quod eligendi, ipsum nobis veniam eaque quam aperiam? Esse recusandae voluptatum perferendis praesentium cumque placeat veniam pariatur excepturi, quis ipsam inventore eligendi numquam voluptatem ut alias sint odit harum suscipit nisi vero quod corrupti distinctio deserunt maiores? Placeat natus cupiditate quaerat eveniet modi perspiciatis ipsam odit magni necessitatibus! Iusto libero non tempore?',
                'created_at' => '30 Mei 2024'
            ],
            
        ];
    }

    public static function find($slug) {
        return Arr::first(static::all(), function($article) use ($slug) {
            return $article['slug'] == $slug;
    
        });
    }
}