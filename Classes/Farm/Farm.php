<?php

namespace Classes\Farm;

use Classes\Collectors\Collector;
use Classes\God\God;

class Farm
{

    /**
     * Ферма использует Бога для получения животных
     * @var God
     */
    private $god;

    /**
     * У фермы есть хлев с животными
     * @var Barn
     */
    private $barn;

    /**
     * Автоматический сборщик продукции
     * @var Collector
     */
    private $collector;

    /**
     * Собранная продукция на ферме.
     * @var array
     */
    private $production;

    /**
     * Конструктор класса
     */
    public function __construct()
    {
        $this->barn = new Barn;
        $this->god = new God;
        $this->collector = new Collector($this->barn);

        $this->production = [];
    }

    /**
     * Ферма начинает работу
     */
    public function work()
    {
        //Создаём животных
        $animals = $this->god->createAnimals();

        //Даём каждому животному уникальный идентификатор
        $this->setAnimalIds($animals);

        //Добавляем их в хлев
        $this->barn->add($animals);

        //Производим сбор продукции, используя сборщик
        $this->production = $this->collector->collectProduction();

        //Подсчёт продукции
        $this->countingProduction();
    }

    /**
     * Устанавливает уникальные идентификаторы для животных
     * @param array $animals
     */
    private function setAnimalIds($animals)
    {
        $id = 1;
        foreach ($animals as $group) {
            foreach ($group as $animal) {
                $animal->setId($id);
                $id++;
            }
        }
    }

    /**
     * Подсчитывает произведённую продукцию и выводит значение
     */
    private function countingProduction()
    {
        foreach ($this->production as $products) {
            //Устанавливаем тип продукта
            $productType = explode('\\', get_class($products[0]));
            $productType = end($productType);

            //Подсчитываем количество
            $productsCount = count($products);

            //Выводим на экран
            $this->displayCount($productType, $productsCount);
        }
    }

    /**
     * Выводит на экран количество указанных продуктов
     * @param string $group
     * @param integer $productsCount
     */
    private function displayCount($group, $productsCount) {
        echo "{$group} : {$productsCount} <br>";
    }

}