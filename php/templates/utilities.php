<?php

namespace Utilities;

class Utilities {

    public static function checkCounter(&$counter, &$tabIndex) {
        if ($counter > 0) {
            $counter = 0;
            $tabIndex++;
        }
    }

}
