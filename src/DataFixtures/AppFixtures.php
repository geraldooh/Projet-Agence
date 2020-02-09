<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    
    public function load(ObjectManager $manager)
    {
        
        $user = new User();
        $password = $this->encoder->encodePassword($user, 'bonjour');
        $user->setEmail('jean@robert.com')
             ->setRoles(['ROLE_ADMIN'])
             ->setPassword($password);

        $user1 = new User();
        $password = $this->encoder->encodePassword($user1, '1234');
        $user1->setEmail('jean1@robert.com')
             ->setRoles(['ROLE_USER'])
             ->setPassword($password);


        $manager->persist($user);
        $manager->persist($user1);

        $manager->flush();
    }
}
