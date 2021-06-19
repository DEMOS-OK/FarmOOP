<?php

namespace Classes\Collectors;

use Classes\Farm\Barn;

/**
 * Автоматический сборщик
 */
class Collector
{

    /**
     * Сборщик привязан к хлеву, откуда он собирает продукцию
     * @var Barn
     */
    private $barn;

    /**
     * Временное хранилище продукции у сборщика, аналогично в строении с хлевом,
     * то есть продукты отдельных групп животных хранятся отдельно
     * @var array
     */
    private $production;

    /**
     * Конструктор класса
     * @param Barn $barn - хлев, в котором сборщик собирает продукцию
     */
    public function __construct($barn)
    {
        $this->barn = $barn;
        $this->production = $this->barn->repository;
    }

    /**
     * Сбор продукции
     * @return array
     */
    public function collectProduction()
    {
        foreach ($this->barn->repository as $group => $animals) {
            foreach ($animals as $animal) {
                $production = $animal->getProduction();
                if (!empty($production))
                    $this->production[$group] = array_merge($this->production[$group], $production);
            }
        }

        return $this->production;
    }


}