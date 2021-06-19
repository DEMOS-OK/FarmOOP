<?php

namespace Classes;

/**
 * Класс конфигурации фермы
 */
class Config
{

    /**
     * Основные настройки
     */
    const settings = [
        'chickens_count'       => 20,
        'chickens_eggs_count'  => [0, 1],
        'cows_count'           => 10,
        'cows_milk_volume'     => [8, 12],
    ];

    /**
     * Возвращает нужное значение из конфигурацмии
     * @param string $key
     * @return mixed
     */
    public static function get($key)
    {
        if (key_exists($key, self::settings))
            return self::settings[$key];
        
        return null;
    }

}