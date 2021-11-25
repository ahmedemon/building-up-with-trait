<?php
namespace App\Http\Traits;

trait MathTrait {
    public function add($x, $y)
    {
        return $x + $y;
    }
    public function sub($x, $y)
    {
        return $x - $y;
    }
    public function mult($x, $y)
    {
        return $x * $y;
    }
    public function div($x, $y)
    {
        return $x / $y;
    }
    public function mod($x, $y)
    {
        return $x % $y;
    }
}
