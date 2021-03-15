<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     * 
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $em)
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = new User();
        $user->setUsername('demo');
        $user->setPassword($this->encoder->encodePassword($user, 'demo'));
        $em->persist($user);
        $em->flush();
    }
}
