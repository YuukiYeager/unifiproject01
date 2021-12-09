<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "nama" => "Eren Yeager",
            "region" => "Attack On Titan",
            "slug" => "Judul-post-pertama",
            "info" => "Eren Yeager (エレン・イェーガー Eren Yēgā?) was a former member of the Survey Corps. He was the main protagonist of Attack on Titan. He lived in Shiganshina District with his parents until the fall of Wall Maria, where he impotently witnessed his mother being eaten by a Titan.[32] This event would lead to Eren's intense hatred towards the Titans as he swore to wipe all of them off the face of the Earth.[33]"
        ],
        [
            "nama" => "Osamu Dazai",
            "region" => "Bungou Stray Dogs",
            "slug" => "Judul-post-kedua",
            "info" => "Dazai is a young man with mildly wavy, short, dark brown hair and narrow dark brown eyes. His bangs frame his face, while some are gathered at the center of his forehead. He is quite tall and slim in terms of physique.

            For his attire, Dazai wears a long sand-colored trench coat, the belt of which he leaves untied. Under it is a black vest over a striped dress shirt that is light blue in hue. He wears a bolo tie, which is held by a brown ribbon and a turquoise pendant. He also dons beige pants, dark brown shoes, and has bandages wrapped around his entire body; only his face, hands, and feet are left uncovered."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
