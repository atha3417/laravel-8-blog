<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Atha Tsaqif",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, voluptatum. Ullam natus, inventore odit neque quibusdam provident impedit dolor ad sequi magni ipsam maiores aperiam soluta porro delectus, culpa quia. Commodi sit rem nobis placeat non. Corporis, obcaecati mollitia dolores facere magnam pariatur vero quaerat. Dicta debitis culpa deleniti blanditiis labore accusantium rerum. Tempora, id eaque quis fuga pariatur aspernatur sint eos deleniti qui mollitia inventore ducimus. Accusantium itaque nemo in natus eaque! Cum necessitatibus ea eveniet quaerat obcaecati eaque."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nafisa Zahra",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et iure soluta ad sint perspiciatis quibusdam hic consequatur eaque aliquid obcaecati non corrupti sit at quis minus in, quasi corporis molestiae nesciunt repellat, exercitationem nihil iste nobis! Facere facilis eius quae voluptatibus eum maxime beatae nemo deserunt eligendi fugit, perspiciatis nostrum, voluptatem quasi libero explicabo. Corrupti tenetur, facere nihil accusamus quis fugit voluptates ab perferendis rerum ut eaque distinctio consequuntur numquam qui nostrum enim quos itaque suscipit. Iusto at eveniet nesciunt, officiis saepe odio consectetur sapiente possimus? Fuga corrupti tempora consectetur modi corporis iusto fugiat ea. Accusantium quasi fugiat dolorem deserunt."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find(String $slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
