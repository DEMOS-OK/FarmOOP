<?php

namespace Classes\Products;

/**
 * Литр молока
 */
class Milk extends Product
{

    /**
     * Возвращает массу молока в килограммах
     * @return float
     */
    protected function getWeight()
    {
        $weight = 1.03;

        return $weight;
    }

    /**
     * Рассчитывает калорийность молока по его массе
     * @return float
     */
    protected function calcCalorieContent()
    {
        $calorieContent = 660;
        
        return $calorieContent;
    }

}