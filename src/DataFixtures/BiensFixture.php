<?php

namespace App\DataFixtures;

use App\Entity\Biens;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class BiensFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 100; $i++)
        {
            $bien = new Biens();
            $bien->setTitre($faker->words(3, true))
                 ->setDescription($faker->sentences(3, true))
                 ->setSurface($faker->numberBetween(20, 350))
                 ->setPiece($faker->numberBetween(2, 10))
                 ->setChambre($faker->numberBetween(1,9))
                 ->setVille($faker->city)
                 ->setCodePostale(75018)
                 ->setPrix($faker->numberBetween(100000, 1000000))
                 ->setVendu(false)
                 ->setImage($faker->imageUrl());


            $manager->persist($bien);
        }
        

        $manager->flush();
    }
}
