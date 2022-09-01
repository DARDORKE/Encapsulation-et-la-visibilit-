<?php

include_once 'Pedestal.php';

class FixedPedestal implements Pedestal
{
    public function getPedestalHeight(): int
    {
        return 10;
    }
}