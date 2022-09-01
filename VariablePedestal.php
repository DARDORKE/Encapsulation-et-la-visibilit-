<?php

include_once 'Pedestal.php';

class VariablePedestal implements Pedestal
{
    private int $height = 5;

    public function __construct(int $height)
    {
        $this->setHeight($height);
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        if ($height < 15 && $height > 5) {
            $this->height = $height;
        }
    }

    public function getPedestalHeight(): int
    {
        return $this->getHeight();
    }
}