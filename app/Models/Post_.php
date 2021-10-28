<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'hurasan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, sed iure. Labore repellat, temporibus atque laboriosam nemo repellendus est voluptatum pariatur in cumque veniam autem id nisi nihil, culpa quisquam repudiandae eaque, odit facere itaque quibusdam quasi officiis asperiores architecto. Officia modi nisi temporibus totam, provident ullam, esse ipsa commodi fugiat dolorem aspernatur? Magnam, nisi, ratione dolores, possimus nesciunt veritatis voluptatum repudiandae a ipsum voluptas unde. In, earum. Blanditiis deleniti illo, impedit porro rem commodi nihil illum voluptate hic provident!'
        ],[
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'tari',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, ullam, quaerat consequatur a numquam vitae asperiores non deserunt fugit temporibus velit quae! Praesentium sapiente quos earum nostrum quam. Quo assumenda eveniet error odit iste quos modi. Possimus ratione sint accusamus quam necessitatibus suscipit rem voluptate aliquid, fugiat at voluptatum laudantium itaque eveniet nisi laboriosam ut et obcaecati molestias deleniti laborum hic velit molestiae. Error similique architecto optio voluptates? Obcaecati vel architecto voluptate libero dolor doloribus fugit aut similique exercitationem blanditiis. Doloribus excepturi ratione repellendus in similique autem et iusto facilis unde inventore labore tenetur aliquid eum, consectetur commodi molestias ex.'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
