<?php
// Un musée est en charge de peintures et de sculptures. Ces deux œuvres ont des caractéristiques communes :
// un titre, et le nom de l'artiste qui l'a réalisée.
// Cependant, les peintures ont aussi un type (aquarelle, peinture à l'huile, gouache...).
// Les sculptures, quant à elles, ont une hauteur en centimètres.
//
//Le logiciel actuel du musée permet déjà de gérer la base des informations avec la classe abstraite suivante :


abstract class Artwork
{
    private string $title;
    private string $artist;

    public function __construct(string $title, string $artist)
    {
        $this->title = $title;
        $this->artist = $artist;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getArtist(): string
    {
        return $this->artist;
    }

    public function setArtist(string $artist): void
    {
        $this->artist = $artist;
    }
}

// Implémentez cette classe abstraite en créant deux classes finales représentant les peintures et les sculptures.

// Les statues sont posées sur des socles, ce qui augmente leur taille finale.
// Le musée dispose de deux types de socles : des socles fixes de 10 cm et des socles extensibles,
// qui peuvent avoir une taille entre 5 et 15 cm, avec une position de base à 5 cm.
//
// Intégrez les socles dans votre code pour calculer correctement la taille de la statue dans son accesseur.
//
// Attention : normalement, votre classe représentant les sculptures est une classe finale.
// Interdiction donc de créer des classes filles SculptureWithFixedPedestal et SculptureWithVariablePedestal
// pour gérer ces nouveaux cas !