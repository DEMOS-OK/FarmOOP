<?php

namespace Classes\Animals;

/**
 * Абстрактный класс животного, содержащий общие свойства и методы
 */
abstract class Animal
{

    /**
     * Произведенная продукция
     * @var mixed
     */
    protected $production;

    /**
     * Каждое животное имеет уникальный для своего класса идентификатор
     */
    public $id;

    /**
     * Позволяет дать животному уникальный идентификатор
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Отдаёт продукцию
     * @return array
     */
    public function getProduction()
    {
        $production = $this->production;
        $this->production = [];

        return $production;
    }

}