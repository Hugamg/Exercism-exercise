<?php

class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake)
    {
        return !$is_knight_awake ? true : false;
    }
         
    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        if( $is_knight_awake || $is_archer_awake || $is_prisoner_awake) {
            return true;
        }

        return false;
    }

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        return !$is_archer_awake && $is_prisoner_awake ? true : false;
    }

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {
        if ($is_dog_present) {
            return !$is_archer_awake;
        } else {
            return $is_prisoner_awake && !$is_knight_awake && !$is_archer_awake;
        }    
    }
        
}


$is_knight_awake = true;

$infiltration = new AnnalynsInfiltration();
$infiltration->canFastAttack($is_knight_awake);

$is_knight_awake = false;
$is_archer_awake = true;
$is_prisoner_awake = false;
$infiltration->canSpy($is_knight_awake, $is_archer_awake, $is_prisoner_awake);

$is_archer_awake = false;
$is_prisoner_awake = true;
$infiltration->canSignal($is_archer_awake, $is_prisoner_awake);

$is_knight_awake = false;
$is_archer_awake = true;
$is_prisoner_awake = false;
$is_dog_present = false;
$infiltration->canLiberate(
    $is_knight_awake,
    $is_archer_awake,
    $is_prisoner_awake,
    $is_dog_present
);

