<?php

namespace App\Models;

use function PHPUnit\Framework\returnSelf;

class post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Angga Eriansyah",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia sapiente maxime ducimus consequuntur perspiciatis similique, sequi commodi dolorem nisi obcaecati esse blanditiis, dolore, eius odio a? Corporis nulla omnis quaerat veniam temporibus beatae deleniti ex! Corporis id placeat ratione consectetur sit itaque libero debitis ipsa molestiae?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Edo Wardaya",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque assumenda ut, fugit esse labore eos suscipit, eum impedit accusantium rem molestias hic debitis ea rerum omnis eius officia deserunt harum dicta ad molestiae quidem beatae. Reprehenderit repellat minus incidunt dolorem aliquid. Voluptas ea debitis nesciunt et ab quos cum vel soluta error eligendi quidem quia quaerat tenetur, tempore eveniet, odio animi neque velit labore! Tempora in dolorum sapiente ab facilis explicabo. Aspernatur explicabo officia non perspiciatis culpa eum veniam in voluptates facere, aperiam odio perferendis possimus consequatur dolorum minus dignissimos inventore distinctio, odit natus ratione, totam impedit vitae. Neque, placeat provident. Amet sit dolorem reiciendis natus nam."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }


    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }
}
