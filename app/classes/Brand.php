<?php


namespace App\classes;


class Brand
{
    public $bandies;
    public function getBand($name) {
        $this->bandies = $this->allBand();

        foreach ($this->bandies as $band) {
            if ($band['name'] == $name) {
                return $band;
            }
        }
    }

    public function allBand() {
        return [
            [
                'id' =>1,
                'name' => 'Apple'
            ],
            [
                'id' =>2,
                'name' => 'Lenovo'
            ],
            [
                'id' =>3,
                'name' => 'Microsoft'
            ],
            [
                'id' =>4,
                'name' => 'Logitech'
            ],
            [
                'id' =>5,
                'name' => 'Google'
            ],
            [
                'id' =>6,
                'name' => 'Jabra'
            ],
            [
            'id' =>7,
            'name' => 'LogiTeach'
            ],
            [
                'id' =>8,
                'name' => 'Tesla'
            ],
        ];
    }
}