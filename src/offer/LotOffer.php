<?php

namespace bmwx591\yrl\offer;

use bmwx591\yrl\Lot;

class LotOffer extends BaseOffer
{
    use Lot;

    public function isValid()
    {
        $isValid = parent::isValid();
        if ($isValid) {

        }
        return $isValid;
    }
}
