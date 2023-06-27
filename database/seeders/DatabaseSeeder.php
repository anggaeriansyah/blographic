<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        User::create([
            'name' => 'Angga Eriansyah',
            'username' => 'srgn',
            'email' => 'angga@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Edo Wardaya',
        //     'email' => 'edo@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Photoshop',
            'slug' => 'photoshop'
        ]);

        Category::create([
            'name' => 'Illustrator',
            'slug' => 'illustrator'
        ]);

        Category::create([
            'name' => 'After Effects',
            'slug' => 'after-effects'
        ]);

        Category::create([
            'name' => 'Premiere Pro',
            'slug' => 'premiere-pro'
        ]);

        Category::create([
            'name' => 'Corel Draw',
            'slug' => 'corel-draw'
        ]);

        Category::create([
            'name' => 'Lightroom',
            'slug' => 'lightroom'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit veniam aperiam earum animi eaque obcaecati mollitia consectetur in, iste quisquam iusto, optio ipsum molestiae cumque saepe hic assumenda est cum sapiente suscipit nostrum illo omnis reiciendis? Dolores nulla sequi sit veritatis quae obcaecati hic quos totam, enim repudiandae nisi ullam harum sunt natus ut tenetur fugit autem. Consequuntur officia quasi necessitatibus dolore enim iure, nihil quam animi eligendi quia harum fugiat reiciendis dicta eos, sunt minus quaerat modi esse asperiores maxime, hic quos explicabo! Libero voluptatibus corporis, quia numquam, cum inventore reprehenderit ut, sed provident officiis voluptatum dicta! Nulla, repellendus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit veniam aperiam earum animi eaque obcaecati mollitia consectetur in, iste quisquam iusto, optio ipsum molestiae cumque saepe hic assumenda est cum sapiente suscipit nostrum illo omnis reiciendis? Dolores nulla sequi sit veritatis quae obcaecati hic quos totam, enim repudiandae nisi ullam harum sunt natus ut tenetur fugit autem. Consequuntur officia quasi necessitatibus dolore enim iure, nihil quam animi eligendi quia harum fugiat reiciendis dicta eos, sunt minus quaerat modi esse asperiores maxime, hic quos explicabo! Libero voluptatibus corporis, quia numquam, cum inventore reprehenderit ut, sed provident officiis voluptatum dicta! Nulla, repellendus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit veniam aperiam earum animi eaque obcaecati mollitia consectetur in, iste quisquam iusto, optio ipsum molestiae cumque saepe hic assumenda est cum sapiente suscipit nostrum illo omnis reiciendis? Dolores nulla sequi sit veritatis quae obcaecati hic quos totam, enim repudiandae nisi ullam harum sunt natus ut tenetur fugit autem. Consequuntur officia quasi necessitatibus dolore enim iure, nihil quam animi eligendi quia harum fugiat reiciendis dicta eos, sunt minus quaerat modi esse asperiores maxime, hic quos explicabo! Libero voluptatibus corporis, quia numquam, cum inventore reprehenderit ut, sed provident officiis voluptatum dicta! Nulla, repellendus.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit veniam aperiam earum animi eaque obcaecati mollitia consectetur in, iste quisquam iusto, optio ipsum molestiae cumque saepe hic assumenda est cum sapiente suscipit nostrum illo omnis reiciendis? Dolores nulla sequi sit veritatis quae obcaecati hic quos totam, enim repudiandae nisi ullam harum sunt natus ut tenetur fugit autem. Consequuntur officia quasi necessitatibus dolore enim iure, nihil quam animi eligendi quia harum fugiat reiciendis dicta eos, sunt minus quaerat modi esse asperiores maxime, hic quos explicabo! Libero voluptatibus corporis, quia numquam, cum inventore reprehenderit ut, sed provident officiis voluptatum dicta! Nulla, repellendus.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
