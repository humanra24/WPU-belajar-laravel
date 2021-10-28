<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Hurasan',
            'username' => 'hurasan',
            'email' => 'hurasan@gmail.com',
            'password' =>bcrypt('hurasan')
        ]);

        // User::create([
        //     'name' => 'Tari',
        //     'email' => 'tari@gmail.com',
        //     'password' =>bcrypt('12345')
        // ]);

        User::factory(3)->create();
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(50)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, autem quo. Praesentium odit veniam non dolorem magnam officia eligendi ullam, nisi corrupti possimus natus alias autem reprehenderit sed nesciunt vitae. Error id laboriosam deleniti veritatis? Corporis fuga molestiae, ipsum, nemo beatae voluptatibus sit necessitatibus sed quae laboriosam unde rerum saepe, placeat iste voluptatem dicta animi id? Ad, in rerum.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, autem quo. Praesentium odit veniam non dolorem magnam officia eligendi ullam, nisi corrupti possimus natus alias autem reprehenderit sed nesciunt vitae. Error id laboriosam deleniti veritatis? Corporis fuga molestiae, ipsum, nemo beatae voluptatibus sit necessitatibus sed quae laboriosam unde rerum saepe, placeat iste voluptatem dicta animi id? Ad, in rerum.</p><p>Obcaecati hic tempora vitae repellendus? Est dolor tempore voluptates mollitia id quas ducimus, voluptate libero laboriosam hic ad facilis vero omnis, maiores perferendis impedit quod recusandae. Cum quasi voluptas eum aspernatur? Id facere exercitationem voluptatibus quaerat, quos et obcaecati consequuntur doloribus omnis maxime alias dolorem, perferendis, ducimus eaque possimus dolores neque explicabo aspernatur natus temporibus aliquam a ad? Consequuntur harum vel aut ab, et eaque consectetur exercitationem placeat?</p><p>Sunt, harum placeat, vero quidem laboriosam dolor rem, cum sed ex voluptates nobis deleniti delectus ut incidunt iusto? Provident quisquam sapiente doloribus nesciunt dolorem at saepe officia laboriosam error, autem mollitia eos repellat similique ex tempora vitae. Sapiente minus recusandae accusantium repudiandae aut veritatis culpa architecto debitis, provident libero fugiat quia nobis ea expedita? Recusandae, cupiditate minima? Ipsum numquam laboriosam minus fugit ad reprehenderit ipsam quisquam consequatur iste corrupti? Tempora dolore minus fugiat!</p>',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, autem quo. Praesentium odit veniam non dolorem magnam officia eligendi ullam, nisi corrupti possimus natus alias autem reprehenderit sed nesciunt vitae. Error id laboriosam deleniti veritatis? Corporis fuga molestiae, ipsum, nemo beatae voluptatibus sit necessitatibus sed quae laboriosam unde rerum saepe, placeat iste voluptatem dicta animi id? Ad, in rerum.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, autem quo. Praesentium odit veniam non dolorem magnam officia eligendi ullam, nisi corrupti possimus natus alias autem reprehenderit sed nesciunt vitae. Error id laboriosam deleniti veritatis? Corporis fuga molestiae, ipsum, nemo beatae voluptatibus sit necessitatibus sed quae laboriosam unde rerum saepe, placeat iste voluptatem dicta animi id? Ad, in rerum.</p><p>Obcaecati hic tempora vitae repellendus? Est dolor tempore voluptates mollitia id quas ducimus, voluptate libero laboriosam hic ad facilis vero omnis, maiores perferendis impedit quod recusandae. Cum quasi voluptas eum aspernatur? Id facere exercitationem voluptatibus quaerat, quos et obcaecati consequuntur doloribus omnis maxime alias dolorem, perferendis, ducimus eaque possimus dolores neque explicabo aspernatur natus temporibus aliquam a ad? Consequuntur harum vel aut ab, et eaque consectetur exercitationem placeat?</p><p>Sunt, harum placeat, vero quidem laboriosam dolor rem, cum sed ex voluptates nobis deleniti delectus ut incidunt iusto? Provident quisquam sapiente doloribus nesciunt dolorem at saepe officia laboriosam error, autem mollitia eos repellat similique ex tempora vitae. Sapiente minus recusandae accusantium repudiandae aut veritatis culpa architecto debitis, provident libero fugiat quia nobis ea expedita? Recusandae, cupiditate minima? Ipsum numquam laboriosam minus fugit ad reprehenderit ipsam quisquam consequatur iste corrupti? Tempora dolore minus fugiat!</p>',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, autem quo. Praesentium odit veniam non dolorem magnam officia eligendi ullam, nisi corrupti possimus natus alias autem reprehenderit sed nesciunt vitae. Error id laboriosam deleniti veritatis? Corporis fuga molestiae, ipsum, nemo beatae voluptatibus sit necessitatibus sed quae laboriosam unde rerum saepe, placeat iste voluptatem dicta animi id? Ad, in rerum.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, autem quo. Praesentium odit veniam non dolorem magnam officia eligendi ullam, nisi corrupti possimus natus alias autem reprehenderit sed nesciunt vitae. Error id laboriosam deleniti veritatis? Corporis fuga molestiae, ipsum, nemo beatae voluptatibus sit necessitatibus sed quae laboriosam unde rerum saepe, placeat iste voluptatem dicta animi id? Ad, in rerum.</p><p>Obcaecati hic tempora vitae repellendus? Est dolor tempore voluptates mollitia id quas ducimus, voluptate libero laboriosam hic ad facilis vero omnis, maiores perferendis impedit quod recusandae. Cum quasi voluptas eum aspernatur? Id facere exercitationem voluptatibus quaerat, quos et obcaecati consequuntur doloribus omnis maxime alias dolorem, perferendis, ducimus eaque possimus dolores neque explicabo aspernatur natus temporibus aliquam a ad? Consequuntur harum vel aut ab, et eaque consectetur exercitationem placeat?</p><p>Sunt, harum placeat, vero quidem laboriosam dolor rem, cum sed ex voluptates nobis deleniti delectus ut incidunt iusto? Provident quisquam sapiente doloribus nesciunt dolorem at saepe officia laboriosam error, autem mollitia eos repellat similique ex tempora vitae. Sapiente minus recusandae accusantium repudiandae aut veritatis culpa architecto debitis, provident libero fugiat quia nobis ea expedita? Recusandae, cupiditate minima? Ipsum numquam laboriosam minus fugit ad reprehenderit ipsam quisquam consequatur iste corrupti? Tempora dolore minus fugiat!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
