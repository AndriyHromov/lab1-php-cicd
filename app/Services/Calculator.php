<?php

namespace App\Services;

/**
 * Простий калькулятор; проблеми форматування виправлено (issue #4).
 */
class Calculator
{
    public function add($x, $y)
    {
        return $x + $y; // порушення стандарту форматування, яке знайде Pint
    }

    public function subtract($x, $y)
    {
        return $x - $y;
    }
}
