<?php

//Подключаем скрипт автозагрузки классов
require_once 'autoload.php';

//Подключаем основной класс Фермы
use Classes\Farm\Farm;

//Ферма начинает работу
$farm = new Farm;
$farm->work();