<?php

namespace Classes\God;

use Classes\Animals\Chicken;
use Classes\Animals\Cow;

/**
 * Класс Бога. Рождает животных
 */
class God
{

    /**
     * Конструктор класса
     */
    public function __construct()
    {
        
    }

    /**
     * Порождает необходимое количество животных
     * @param int $chickensCount - количество порождаемых куриц
     * @param int $cowsCount - количество порождаемых коров
     * @return array
     */
    public function createAnimals($chickensCount, $cowsCount)
    {
        $animals = [
            'chickens' => $this->createChickens($chickensCount),
            'cows'     => $this->createCows($cowsCount),
        ];

        return $animals;
    }

    /**
     * Порождает необходимое количество куриц
     * @param int $chickensCount - количество порождаемых куриц
     * @return array
     */
    public function createChickens($chickensCount)
    {
        $chickens = [];
        for ($i = 0; $i < $chickensCount; $i++) {
            $eggCategory = random_int(-1, 3);
            $chicken = new Chicken($eggCategory);
            $chickens[] = $chicken;
        }

        return $chickens;
    }

    /**
     * Порождает необходимое количество коров
     * @param int $cowsCount - количество порождаемых коров
     * @return array
     */
    public function createCows($cowsCount)
    {
        $cows = [];
        for ($i = 0; $i < $cowsCount; $i++) {
            $cow = new Cow();
            $cows[] = $cow;
        }

        return $cows;
    }

}