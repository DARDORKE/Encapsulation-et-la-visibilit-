<?php

include_once 'Artwork.php';

final class Painting extends Artwork
{
    private int $height;

    public function __construct(string $title, string $artist, int $height)
    {
        parent::__construct($title, $artist);
        $this->height = $height;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function addPedestal(int $size): int
    {
        return $this->getHeight() + $size;
    }
}