<?php

namespace Classes\Products;

/**
 * Яйцо
 */
class Egg extends Product
{

    /**
     * Категория этого яйца
     * @var integer
     */
    private $category;

    public function __construct($category)
    {
        $this->category = $category;
        $this->weight = $this->getWeight();
        $this->calorieContent = $this->calcCalorieContent();
    }

    /**
     * Возвращает вес яйца по его категории
     * @return float
     */
    protected function getWeight()
    {
        $weight = 35;
        for ($i = 0; $i < (3 - $this->category); $i++) {
            $weight += 9.9;
        }
        
        return $weight;
    }

    /**
     * Рассчитывает калорийность яйца по его массе
     * @return float
     */
    protected function calcCalorieContent()
    {
        $calorieContent = 142*($this->weight / 100);
        
        return $calorieContent;
    }

}