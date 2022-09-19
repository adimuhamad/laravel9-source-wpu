<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mochamad Adi",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis voluptate odit culpa cum illum, velit possimus minus vel nesciunt quaerat minima aspernatur! Officia praesentium tempore repellendus non? Reiciendis nesciunt quasi nam dicta accusamus, unde veniam eos error ex dolore eum nihil? Suscipit asperiores expedita odio eveniet aut ipsum rerum quasi ab maiores reiciendis, delectus distinctio iure excepturi quas deserunt cumque? Explicabo impedit cumque labore facere nostrum! Delectus autem, iure architecto quibusdam ullam consectetur eveniet blanditiis, voluptates fuga cumque, illum cum!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Siti Hanifa",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis voluptate odit culpa cum illum, velit possimus minus vel nesciunt quaerat minima aspernatur! Officia praesentium tempore repellendus non? Reiciendis nesciunt quasi nam dicta accusamus, unde veniam eos error ex dolore eum nihil? Suscipit asperiores expedita odio eveniet aut ipsum rerum quasi ab maiores reiciendis, delectus distinctio iure excepturi quas deserunt cumque? Explicabo impedit cumque labore facere nostrum! Delectus autem, iure architecto quibusdam ullam consectetur eveniet blanditiis, voluptates fuga cumque, illum cum!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
 
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
