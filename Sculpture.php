<?php

include_once 'Artwork.php';

final class Sculpture extends Artwork
{
    private int $height;
    private Pedestal $pedestal;

    public function __construct(string $title, string $artist, int $height, Pedestal $pedestal)
    {
        $this->height = $height;
        $this->pedestal = $pedestal;
        parent::__construct($title, $artist);
    }

    public function getHeight(): int
    {
        return $this->height + $this->pedestal->getPedestalHeight();
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }
}