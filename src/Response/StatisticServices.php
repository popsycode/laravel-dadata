<?php


namespace Popsy\Dadata\Response;

/**
 * Агрегированная статистика
 *
 * @package Popsy\Dadata\Response
 */
class StatisticServices
{

    /**
     * Поиск дублей
     *
     * @var int
     */
    public $merging = 0;

    /**
     * Подсказки
     *
     * @var int
     */
    public $suggestions = 0;

    /**
     * Стандартизация
     *
     * @var int
     */
    public $clean = 0;
}