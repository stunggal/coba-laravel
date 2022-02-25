<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "judul pertama",
            "slug" => "judul-pertama",
            "author" => "wahid alfaridsi achmad zein",
            "body" => "lorem iujh uioh uh fl ih fyujslku vilhs lifu hs luh rgfuih ilugvUDh fgluh slierufh iuh irguh iu liuhlkuh liuh o;uh LIUSEHRf ;ouiHlufh lUIHR if7uh:URHfg ;uHRLiguh IYUdfg u HRLIufgL IUGH ee?"
        ],
        [
            "title" => "judul kedua",
            "slug" => "judul-kedua",
            "author" => "Stunggal",
            "body" => "lorem iujh uioh uh fl ih fyujslku vilhs lifu hs luh rgfuih ilugvUDh fgluh slierufh iuh irguh iu liuhlkuh liuh o;uh LIUSEHRf ;ouiHlufh lUIHR if7uh:URHfg ;uHRLiguh IYUdfg u HRLIufgL IUGH ee?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
