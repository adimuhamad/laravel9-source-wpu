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
        // \App\Models\User::factory(10)->create();

        User::create([
            'username' => 'mochadi12',
            'name' => 'Mochamad Adi',
            'email' => 'mmochamadadi23gmail.com',
            'password' => bcrypt(123456789)
        ]);

        User::create([
            'username' => 'sihaaa12',
            'name' => 'Siti Hanifa',
            'email' => 'sitihanifa23gmail.com',
            'password' => bcrypt(123456789)
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Android Programming',
            'slug' => 'android-programming',
        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam temporibus, quod repellendus alias distinctio, rerum possimus et ad ducimus fugit, neque nobis laborum saepe eius perspiciatis tenetur at eum tempore architecto id explicabo quasi omnis',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero doloremque at, unde cumque provident culpa tempore veritatis eveniet ad reprehenderit. Rerum autem nesciunt sed ullam doloribus tempora atque quidem facilis cumque, excepturi deleniti aut quod, eveniet nostrum provident, accusamus placeat? Dicta enim cupiditate laborum. Error vero sed dicta commodi quaerat cumque! Repellendus eos ab neque aperiam, consequatur ipsa a perferendis ratione at totam, ducimus voluptate quod iste expedita.</p><p>Consequatur natus eos id perspiciatis cumque. Odio accusamus delectus necessitatibus nemo eveniet numquam nam, vero corrupti ipsam quisquam enim blanditiis tenetur accusantium explicabo quo sint assumenda nisi consequatur fuga consectetur. Saepe eum molestias reprehenderit architecto dolores nihil explicabo libero, doloremque quas voluptates eaque id illum nesciunt magnam natus provident recusandae repellat iusto.</p><p>Et recusandae alias non, perspiciatis quas illo hic numquam quae sint vel maxime voluptatum, explicabo eligendi facere culpa impedit maiores soluta fugiat natus. Eveniet at repellat perspiciatis sequi hic temporibus!</p>'
        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam temporibus, quod repellendus alias distinctio, rerum possimus et ad ducimus fugit, neque nobis laborum saepe eius perspiciatis tenetur at eum tempore architecto id explicabo quasi omnis',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero doloremque at, unde cumque provident culpa tempore veritatis eveniet ad reprehenderit. Rerum autem nesciunt sed ullam doloribus tempora atque quidem facilis cumque, excepturi deleniti aut quod, eveniet nostrum provident, accusamus placeat? Dicta enim cupiditate laborum. Error vero sed dicta commodi quaerat cumque! Repellendus eos ab neque aperiam, consequatur ipsa a perferendis ratione at totam, ducimus voluptate quod iste expedita.</p><p>Consequatur natus eos id perspiciatis cumque. Odio accusamus delectus necessitatibus nemo eveniet numquam nam, vero corrupti ipsam quisquam enim blanditiis tenetur accusantium explicabo quo sint assumenda nisi consequatur fuga consectetur. Saepe eum molestias reprehenderit architecto dolores nihil explicabo libero, doloremque quas voluptates eaque id illum nesciunt magnam natus provident recusandae repellat iusto.</p><p>Et recusandae alias non, perspiciatis quas illo hic numquam quae sint vel maxime voluptatum, explicabo eligendi facere culpa impedit maiores soluta fugiat natus. Eveniet at repellat perspiciatis sequi hic temporibus!</p>'
        ]);

        Post::create([
            'category_id' => 2,
            'user_id' => 2,
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam temporibus, quod repellendus alias distinctio, rerum possimus et ad ducimus fugit, neque nobis laborum saepe eius perspiciatis tenetur at eum tempore architecto id explicabo quasi omnis',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero doloremque at, unde cumque provident culpa tempore veritatis eveniet ad reprehenderit. Rerum autem nesciunt sed ullam doloribus tempora atque quidem facilis cumque, excepturi deleniti aut quod, eveniet nostrum provident, accusamus placeat? Dicta enim cupiditate laborum. Error vero sed dicta commodi quaerat cumque! Repellendus eos ab neque aperiam, consequatur ipsa a perferendis ratione at totam, ducimus voluptate quod iste expedita.</p><p>Consequatur natus eos id perspiciatis cumque. Odio accusamus delectus necessitatibus nemo eveniet numquam nam, vero corrupti ipsam quisquam enim blanditiis tenetur accusantium explicabo quo sint assumenda nisi consequatur fuga consectetur. Saepe eum molestias reprehenderit architecto dolores nihil explicabo libero, doloremque quas voluptates eaque id illum nesciunt magnam natus provident recusandae repellat iusto.</p><p>Et recusandae alias non, perspiciatis quas illo hic numquam quae sint vel maxime voluptatum, explicabo eligendi facere culpa impedit maiores soluta fugiat natus. Eveniet at repellat perspiciatis sequi hic temporibus!</p>'
        ]);
    }
}
