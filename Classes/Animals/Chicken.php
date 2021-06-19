<?php

namespace Classes\Animals;

use Classes\Products\Egg;
use Classes\Config;

/**
 * Класс курицы
 */
class Chicken extends Animal
{

    /**
     * Какую категорию яиц даёт эта курица
     * -1 - высшая категория
     *  0 - отборная
     *  1 - первая
     *  2 - вторая
     *  3 - третья
     * @var integer
     */
    private $eggCategory;

    /**
     * Конструктор класса Animal
     * @param integer $eggCategory - категория яиц. Даруется Богом.
     */
    public function __construct($eggCategory)
    {
        $this->eggCategory = $eggCategory;
        $this->layAnEggs();
    }

    /**
     * Кладка яиц
     */
    private function layAnEggs()
    {
        //Курица производит от 0 до 1 яиц
        $minEggsCount = Config::get('chickens_eggs_count')[0];
        $maxEggsCount = Config::get('chickens_eggs_count')[1];
        $count = random_int($minEggsCount, $maxEggsCount);

        //Заполняем массив яйцами
        for ($i = 0; $i < $count; $i++) {
            $this->production[] = new Egg($this->eggCategory);
        }
    }

}