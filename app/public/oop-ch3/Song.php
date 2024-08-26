<?php

class Song
{
    public string $name;
    public int $numberOfPlays;

    /**
     * @var int|float
     * Song rating from 0 - 5
     * Half ratings allowed eg 3.5
     */
    private int | float $rating = 0;

    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }

    public function getRating(): float|int
    {
        return $this->rating;
    }

    public function setRating(float|int $rating): void
    {
        if ($rating < 0)
        {
            $this->rating = 0;
        }
        elseif ($rating > 5)
        {
            $this->rating = 5;
        }

        //$this->rating = $rating;
    }


}