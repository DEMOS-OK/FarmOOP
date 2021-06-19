<?php

namespace Classes\Animals;

use Classes\Products\Milk;
use Classes\Config;

/**
 * Класс коровы
 */
class Cow extends Animal
{

    /**
     * Конструктор класса
     */
    public function __construct()
    {
        $this->produceMilk();
    }

    /**
     * Вырабатывает молоко
     */
    private function produceMilk()
    {
        $minVolume = Config::get('cows_milk_volume')[0];
        $maxVolume = Config::get('cows_milk_volume')[1];
        $count = random_int($minVolume, $maxVolume);

        //Заполняем массив молоком
        for ($i = 0; $i < $count; $i++) {
            $this->production[] = new Milk;
        }
    }

}