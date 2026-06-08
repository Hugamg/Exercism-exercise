<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas, $persons)
    {
        return  $pizzas * (($persons * 20) + 200);
    }

    public function calculateSauceRequirement($pizzas, $sauce_can_volume)
    {
        return ($pizzas * 125) / $sauce_can_volume;
    }

    public function calculateCheeseCubeCoverage($cheese_dimension, $thickness, $diameter)
    {
        return floor(($cheese_dimension**3) / ($thickness * M_PI * $diameter));
    }

    public function calculateLeftOverSlices($pizzas, $persons)
    {
        $nb_of_slices = $pizzas * 8;

        return $nb_of_slices % $persons;
    }
}

$pizza_pi = new PizzaPi();

$pizza_pi->calculateDoughRequirement(4, 8);
$pizza_pi->calculateSauceRequirement(8, 250);
$pizza_pi->calculateCheeseCubeCoverage(25, 0.5, 30);
$pizza_pi->calculateLeftOverSlices(2, 4);
$pizza_pi->calculateLeftOverSlices(4, 3);