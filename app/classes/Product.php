<?php


namespace App\classes;


class Product
{
    protected $products;

    public function getAllProduct()
    {
        return [
            0=>[
                'name'        => 'T-Shirt',
                'price'       => '1000/-',
                'brand'       => 'Mens World',
                'catagory'    => 'T-Shirt',
                'image'       => 't1.jpg'
            ],
            1=>[
                'name'        => 'T-Shirt',
                'price' => '1100/-',
                'description' => 'Very Goog',
                'brand'=> 'Mens World',
                'catagory' => 'T-Shirt',
                'image'=> 't2.jpg'
            ],
            2=>[
                'name'        => 'Shirt',
                'price' => '2000/-',
                'description' => 'Very Goog',
                'brand'=> 'Mens World',
                'catagory' => 'Shirt',
                'image'=> 's1.jpg'
            ],
            3=>[
                'name'        => 'Shirt',
                'price' => '2000/-',
                'description' => 'Very Goog',
                'brand'=> 'Mens World',
                'catagory' => 'Shirt',
                'image'=> 's2.jpg'
            ],
            4=>[
                'name'        => 'Panjabi',
                'price' => '1500/-',
                'description' => 'Very Goog',
                'brand'=> 'Mens World',
                'catagory' => 'Panjabi',
                'image'=> 'pp1.jpg'
            ],
            5=>[
                'name'        => 'Pant',
                'price' => '2000/-',
                'description' => 'Very Goog',
                'brand'=> 'Mens World',
                'catagory' => 'Pant',
                'image'=> 'p1.jpg'
            ],
            6=>[
                'name'        => 'T-Shirt',
                'price' => '1000/-',
                'description' => 'Very Goog',
                'brand'=> 'Mens World',
                'catagory' => 'T-Shirt',
                'image'=> 't3.jpg'
            ],
            7=>[
                'name'        => 'Panjabi',
                'price' => '1700/-',
                'brand'=> 'Mens World',
                'catagory' => 'Panjabi',
                'image'=> 'pp2.jpg'
            ],
            8=>[
                'name'        => 'Pant',
                'price' => '2200/-',
                'description' => 'Very Goog',
                'brand'=> 'Mens World',
                'catagory' => 'Pant',
                'image'=> 'p2.jpg'
            ],
            9=>[
                'name'        => 'T-Shirt',
                'price' => '800/-',
                'description' => 'Very Goog',
                'brand'=> 'Mens World',
                'catagory' => 'T-Shirt',
                'image'=> 't4.jpg'
            ]
        ];
    }
}