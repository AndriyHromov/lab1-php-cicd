<?php

namespace App\Services;

/**
 * Простий калькулятор; проблеми форматування виправлено (issue #4).
 */
class Calculator
{
    public function add($x, $y)
    {
        return $x+$y; // тимчасово відновлено для демонстрації заблокованого Merge
    }

    public function subtract($x, $y)
    {
        return $x - $y;
    }
}
