<?php

declare(strict_types=1);

function rebase(int $fromBase, array $digits, int $toBase): array
{
    if ($fromBase < 2) {
        throw new InvalidArgumentException("input base must be >= 2");
    }
    if ($toBase < 2) {
        throw new InvalidArgumentException("output base must be >= 2");
    }

    foreach ($digits as $digit) {
        if ($digit < 0 || $digit >= $fromBase) {
            throw new InvalidArgumentException("all digits must satisfy 0 <= d < input base");

        }
    }

    $conversion = 0;
    for ($i = 0; $i < count($digits); $i++) {
        $conversion += $digits[$i] * ($fromBase ** (count($digits) - 1 - $i));
    }

    if ($conversion === 0) {
        return [0];
    }

    $result = [];
    while ($conversion > 0) {
        $result[] = $conversion % $toBase;
        $conversion = intdiv($conversion, $toBase);
    }

    return array_reverse($result);
}
