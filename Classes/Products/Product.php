<?php

namespace Classes\Products;

/**
 * Класс продукта, содержит в себе основные свойства продуктов
 */
abstract class Product
{

    /**
     * Калорийность продукта
     */
    protected $calorieContent;

    /**
     * Масса продукта
     */
    protected $weight;

    /**
     * Конструктор класса
     */
    public function __construct()
    {
        $this->weight = $this->getWeight();
        $this->calorieContent = $this->calcCalorieContent();
    }

    /**
     * Возвращает массу продукта
     */
    abstract protected function getWeight();

    /**
     * Возвращает калорийность продукта
     */
    abstract protected function calcCalorieContent();

}