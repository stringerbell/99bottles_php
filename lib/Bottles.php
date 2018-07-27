<?php

class Bottles
{
    public function song()
    {
        return $this->verses(99, 0);
    }

    private function verses($starting, $ending)
    {
        return implode(
            "\n",
            array_map(
                function ($number) {
                    return $this->verse($number);
                },
                range($starting, $ending, -1)
            )
        );
    }

    private function verse($number)
    {
        switch ($number) {
            case 0:
                return "No more bottles of beer on the wall, " .
                    "no more bottles of beer.\n" .
                    "Go to the store and buy some more, " .
                    "99 bottles of beer on the wall.\n";
            case 1:
                return "1 bottle of beer on the wall, " .
                    "1 bottle of beer.\n" .
                    "Take it down and pass it around, " .
                    "no more bottles of beer on the wall.\n";
            case 2:
                return "{$number} bottles of beer on the wall, " .
                    "{$number} bottles of beer.\n" .
                    "Take one down and pass it around, " .
                    ($number - 1) . " bottle of beer on the wall.\n";
            default:
                return "{$number} bottles of beer on the wall, " .
                    "{$number} bottles of beer.\n" .
                    "Take one down and pass it around, " .
                    ($number - 1) . " " . $this->container() .
                    " of beer on the wall.\n";
        }
    }

    private function container()
    {
        return "bottles";
    }
}
