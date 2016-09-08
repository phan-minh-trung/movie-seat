<?php
namespace App\Services;

class FizzbuzzService
{

    /**
     *
     * @param int $number
     * @return string
     */
    public function handle($number)
    {
        $division3 = $number % 3 == 0;
        $division5 = $number % 5 == 0;

        if ($division3 && $division5) {
            return 'Fizz Buzz';
        } elseif ($division3) {
            return 'Fizz';
        } elseif ($division5) {
            return 'Buzz';
        } else {
            return $number;
        }
    }
}
