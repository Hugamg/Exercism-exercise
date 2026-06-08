<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return trim($name)[0];
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)) . ".";
    }

    public function initials(string $name): string
    {
        $words = explode(" ", $name);
        
        return $this->initial($words[0]). " " . $this->initial($words[1]);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $firstName = $this->initials($sweetheart_a);
        $secondName = $this->initials($sweetheart_b);

        return "     ******       ******\n" .
           "   **      **   **      **\n" .
           " **         ** **         **\n" .
           "**            *            **\n" .
           "**                         **\n" .
           "**     $firstName  +  $secondName     **\n" .
           " **                       **\n" .
           "   **                   **\n" .
           "     **               **\n" .
           "       **           **\n" .
           "         **       **\n" .
           "           **   **\n" .
           "             ***\n" .
           "              *";
    }
}
