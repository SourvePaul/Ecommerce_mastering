<?php


namespace App\classes;

use App\classes\Category;
use App\classes\Brand;

class Product
{
    public $product=[];
    public $products;
    public $category;
    public $categoryById;
    public $band;
    public $bandByName;
    public $res = [];
    public function __construct()
    {
        $this->product = [
            [
                'id' => 1,
                'category_id' => 1,
                'band_id' => 2,
                'name' => 'Lenovo IdeaPad D330',
                'price' => '39000 BDT',
                'description' => 'Intel Celeron N4020 (4M Cache,1.10 GHz up to 2.80 GHz) 4GB DDR4 128GB eMMC 10.1" (1280 x 800) HD Touchscreen',
                'company_name' => 'Lenovo',
                'image' => 'Lenovo_IdeaPad.jpg'
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'band_id' => 2,
                'name' => 'Lenovo IdeaPad Slim 3i',
                'price' => '36000 BDT',
                'description' => 'Intel Celeron N4020 (4M Cache, 1.10 GHz up to 2.80 GHz) 4GB DDR4 2400MHz RAM 1TB 5400rpm 2.5" HDD 15.6" HD (1366 x 768)',
                'company_name' => 'Lenovo',
                'image' => 'Lenovo_slim.jpg'
            ],
            [
                'id' => 3,
                'category_id' => 1,
                'band_id' => 1,
                'name' => 'Apple MacBook Pro',
                'price' => '170000 BDT',
                'description' => 'Apple M2 chip, 8-core CPU with 4 performance & 4 efficiency cores 8GB 256GB SSD 13.3-inch (diagonal) LED-backlit display with IPS technology',
                'company_name' => 'Apple',
                'image' => 'macbook-pro.jpg'
            ],
            [
                'id' => 4,
                'category_id' => 1,
                'band_id' => 3,
                'name' => 'Microsoft Surface 3',
                'price' => '210000 BDT',
                'description' => 'Intel Core i7-1065G7 Processor (8M Cache, 1.30 GHz up to 3.90 GHz) 13.3"Multi-Touch (2256 x 1504) 16GB Ram, 256GB SSD Genuine Windows 10',
                'company_name' => 'Microsoft',
                'image' => 'laptop1.jpg'
            ],
            [
                'id' => 5,
                'category_id' => 2,
                'band_id' => 2,
                'name' => 'Apple 13 ',
                'price' => '90000 BDT',
                'description' => 'CPU, Hexa-core (2x3.23 GHz Avalanche + 4x1.82 GHz Blizzard) ; GPU, Apple GPU (4-core graphics) ; Memory, Card slot ; Internal, 128GB 4GB RAM',
                'company_name' => 'Apple',
                'image' => 'Apple iPhone13.jpg'
            ],
            [
                'id' => 6,
                'category_id' => 3,
                'band_id' => 6,
                'name' => 'Headphone Xi43',
                'price' => '20000 BDT',
                'description' => ' Up to 36hr single charge battery life Great for flexibility in noisy offices Bluetooth, up to 30m Connect to up to 2 devices',
                'company_name' => 'Jabra',
                'image' => 'headphones.jpg'
            ],
            [
                'id' => 7,
                'category_id' => 4,
                'band_id' => 5,
                'name' => 'Mouse Xi43',
                'price' => '2000 BDT',
                'description' => 'USB Black Gaming Mouse, Delta Zero Sensor - USB Connection - 6000DPI Resolution - Compatible with Several Operating Systems - 6',
                'company_name' => 'Google',
                'image' => 'gmouse.jpg'
            ],
            [
                'id' => 8,
                'category_id' => 4,
                'band_id' => 6,
                'name' => 'Mouse X43',
                'price' => '2300 BDT',
                'description' => 'well-built sound a bit better',
                'company_name' => 'Jabra',
                'image' => 'mouse1.jpg'
            ],
            [
                'id' => 9,
                'category_id' => 2,
                'band_id' => 8,
                'name' => 'Nothing Phone1 ',
                'price' => '120000 BDT',
                'description' => 'Internal, 128GB 8GB RAM, 256GB 8GB RAM, 256GB 12GB RAM ; Main Camera, Dual ; Features, LED flash, panorama, HDR ; Video, 4K@30fps',
                'company_name' => 'Tesla',
                'image' => 'mobile09.jpg'
            ],
            [
                'id' => 10,
                'category_id' => 5,
                'band_id' => 7,
                'name' => 'Logi M350',
                'price' => '2200 BDT',
                'description' => 'well-built sound a bit better',
                'company_name' => 'LogiTeach',
                'image' => 'keyboard01.jpg'
            ],
        ];
    }
    public function allProduct() {
        return $this->product;
    }

    public function categoryProduct($cat_id) {
        $products = $this->allProduct();
        foreach ($products as $product) {
            if ($product['category_id'] == $cat_id) {
                array_push($this->res, $product);
            }
        }
        return $this->res;
    }
    public function detailsProduct($id) {
        $products = $this->allProduct();
        foreach ($products as $product) {
            if ($product['id'] == $id) {

                $this->category = new Category();
                $this->categoryById = $this->category->getCategory($product['category_id']);
                $product['category_name'] = $this->categoryById['name'];

                $this->band = new Brand();
                $this->bandByName = $this->band->getBand($product['company_name']);
                $product['band_name'] = $this->bandByName['name'];

                return $product;
            }
        }
    }
}