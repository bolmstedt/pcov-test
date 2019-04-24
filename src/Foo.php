<?php

namespace Bolmis\PcovTest;

final class Foo
{
    public function doFirstThing(string $string): string
    {
        return strrev($string.$string);
    }

    public function doSecondThing(string $string): string
    {
        $otherString = strrev($string);

        return $string.$otherString;
    }
}