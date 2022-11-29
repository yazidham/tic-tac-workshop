<?php

namespace App\DataFixtures;

use App\Entity\Squirrel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SquirrelFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 5; $i++) {
            $squirrel = new Squirrel();
            $squirrel->setName('name' . $i);
            $manager->persist($squirrel);
        }
        $manager->flush();
    }
}
