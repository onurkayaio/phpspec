<?php

namespace Acme;

class Converter
{
    public function convert($argument1)
    {
        $romans = array(
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        );


        $roman = $argument1;
        $result = 0;

        foreach ($romans as $key => $value) {
            while (0 === strpos($roman, $key)) {
                $result += $value;
                $roman = substr($roman, strlen($key));
            }
        }
        return $result;
    }
}
