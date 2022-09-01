<?php

// Une agence immobilière a besoin d'une application pour gérer ses biens immobiliers.
// Il existe deux types de biens immobiliers : les appartements et les maisons.
// Un appartement possède une adresse, un étage (0 pour rez-de-chaussée, 1 pour premier étage, etc.),
// un prix et une surface habitable.
// Une maison, quant à elle, possède une adresse, une surface habitable, un prix et un nombre de niveaux
// (1 pour plain-pied, 2 s'il y a un étage, etc.). Le nombre de niveaux doit toujours être strictement positif
// (en cas de donnée invalide, on peut le mettre à 1), tandis que le numéro de l'étage peut être négatif
// (pour les appartements en sous-sol).
//
// L'adresse et la surface ne doivent pas pouvoir être modifiées une fois l'objet créé. En revanche, le prix peut être négocié.
//
// Écrivez le code de cette application en utilisant une structure de code facilement maintenable.