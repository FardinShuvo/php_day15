<?php


namespace App\classes;


class Blog
{
    protected $blogs;

    public function getAllBlog()
    {
        return [
            0=>[
                'title' => 'A new blog',
                'description' => 'Blog Description',
                'author' => 'Fardin',
                'image'=> 'a1.jpg'
            ],
            1=>[
            'title' => 'A new blog',
            'description' => 'Blog Description',
            'author' => 'Shuvo',
            'image'=> 'a2.jpg'
            ],
            2=>[
                'title' => 'A new blog',
                'description' => 'Blog Description',
                'author' => 'Motu',
                'image'=> 'a3.jpg'
            ]
        ];
    }
}