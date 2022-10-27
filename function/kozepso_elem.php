<?php
function szamitas($szam)
{
    $id = 0;
    if (strlen($szam) % 2 == 0) {
        for ($x = 0; $x <= strlen($szam); $x++) {
            if ($x > $id) {
                $id++;
            }
        }
        return 'A megadott szám páros ezért a számsor közepe: ' . $szam[($id / 2) - 1] . '' . $szam[$id / 2];
    } else if (strlen($szam) % 2 != 0) {
        for ($x = 0; $x <= strlen($szam); $x++) {
            if ($x >= $id) {
                $id++;
            }
        }
        return 'A megadott szám páratlan ezért a számsor közepe: ' . $szam[($id / 2) - 1];
    }
}
echo szamitas('1234');
