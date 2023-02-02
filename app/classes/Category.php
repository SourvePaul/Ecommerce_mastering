<?php


namespace App\classes;


class Category
{

    public $categories;
    public function getCategory($id) {
        $this->categories = $this->allCategory();

        foreach ($this->categories as $category) {
            if ($category['id'] == $id) {
                return $category;
            }
        }
    }

    public function allCategory() {
        return [
            [
                'id'=> 1,
                'name'=>'Laptop',
                'image'=>'laptop1.jpg',
            ],
            [
                'id'=> 2,
                'name'=>'Mobile',
                'image'=>'smartphone.jpg',
            ],
            [
                'id'=> 3,
                'name'=>'HeadPhone',
                'image'=>'headphones.jpg',
            ],
            [
                'id'=> 4,
                'name'=>'Mouse',
                'image'=>'mouse.jpg',
            ],
            [
                'id'=> 5,
                'name'=>'KeyBoard',
                'image'=>'keyboard.jpg',
            ],
            [
                'id'=> 6,
                'name'=>'shoe',
                'image'=>'category_img_02.jpg',
            ],
            [
                'id'=> 7,
                'name'=>'Watch',
                'image'=>'smart-watch.jpg',
            ],
            [
                'id'=> 8,
                'name'=>'Blazer',
                'image'=>'shirt.jpg',
            ],
            [
            'id'=> 9,
            'name'=>'Sun Glass',
            'image'=>'sunglasses.jpg',
        ],
        ];
    }
}