<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded=['id'];


        Post::create([
            'title' => "Web Design",
            'category_id' =>1,
            'slug'=> "web-design"
            'excerpt'=> "web-design"
            'body'=> "lorem100"
            ]);
    }
