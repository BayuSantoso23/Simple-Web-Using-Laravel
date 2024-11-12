<?php 

namespace App\Models;

use Illuminate\Support\Arr;
use PhpParser\Node\Expr\StaticCall;

class Manual_Post{
    public static function all(){
        return [
            [
                'id' => 1,
                'slug' => 'Article-1-Title',
                'title' => 'Article 1',
                'author' => 'Iwan Sihombing',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aperiam perferendis, 
                maiores facilis nostrum earum ad odio molestiae incidunt, aut rem ipsum saepe dicta magnam, 
                sint pariatur quia est vel!'
            ],
            [
                'id' => 2,
                'slug' => 'Article-2-Title',
                'title' => 'Article 2',
                'author' => 'Bayu Santoso',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aperiam perferendis, 
                maiores facilis nostrum earum ad odio molestiae incidunt, aut rem ipsum saepe dicta magnam, 
                sint pariatur quia est vel!'
            ]
        ];
    }

    public static function find($slug): array {
        $post =  Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(!$post){
            abort(404);
        }

        return $post;
    }
}