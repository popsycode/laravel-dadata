<?php

namespace Popsy\Dadata\Response;

abstract class AbstractResponse
{
    /**
     * @var string Исходная строка
     */
    public $source;

    /**
     * @var integer Код качества (see QC_* constants)
     */
    public $qc;
}
