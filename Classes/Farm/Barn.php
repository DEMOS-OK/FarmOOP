<?php

namespace Classes\Farm;

/**
 * Хлев с животными. Представляет собой хранилище животных
 */
class Barn
{

    /**
     * Хранилище животных. Содержит в себе разные места, где отдельно живут курицы и коровы.
     * @var array
     */
    public $repository;

    public function __construct()
    {
        $this->repository = [
            'chickens' => [],
            'cows'     => [],
        ];
    }

    /**
     * Добавить животных в хлев
     * @param array $animals - массив с ключами животных
     */
    public function add($animals)
    {
        foreach ($animals as $groupName => $group) {
            foreach ($group as $animal) {
                $this->addOne($groupName, $animal);
            }
        }
    }

    /**
     * Добавляет одно животное в хлев
     * @param string $group - к какой группе принадлежит животное
     * @param Animal $animal - наследник класса Animal
     */
    public function addOne($group, $animal)
    {
        if (key_exists($group, $this->repository)) {
            $this->repository[$group][] = $animal;
        }
    }

}