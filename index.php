<?php

//Un hôpital vous demande d'améliorer le code de son application de gestion de patients pour
// éviter au maximum que les données des utilisateurs soient mal manipulées.
// Voici la classe actuelle :


class Patient
{
    public int $id;
    public string $firstName;
    public string $lastName;

    public function __construct(int $id)
    {
        $this->loadPatient($id);
    }

    public function loadPatient(int $id)
    {
        // Nous simulons l'appel à une base de données en créant un tableau en dur
        $data = [
            'id' => $id,
            'firstName' => 'John',
            'lastName' => 'Doe',
        ];

        $this->id = $data['id'];
        $this->firstName = $data['firstName'];
        $this->lastName = $data['lastName'];
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

//Protégez cette classe en effectuant les modifications suivantes :
//
//La propriété id ne doit pouvoir être manipulée que par notre classe : on ne doit pas pouvoir modifier l'id sous peine de modifier un autre patient que celui que l'on a chargé.
//
//Les propriétés firstName et lastName ne doivent jamais être récupérées directement par les scripts externes, mais toujours via la méthode getFullName(). En revanche, elles peuvent être manipulées par les classes filles.
//
//La méthode loadPatient()ne doit pouvoir être appelée que par notre classe. Un objet représentant un patient, on ne doit pas pouvoir appeler cette méthode ailleurs que dans le constructeur de notre classe.