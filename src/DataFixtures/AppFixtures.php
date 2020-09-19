<?php

namespace App\DataFixtures;

use App\Entity\CheeseListing;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setEmail('cheeselover1@example.com');
        $user1->setUsername('cheeselover1');
        $user1->setPassword('pass');
        $manager->persist($user1);

        $user2 = new User();
        $user2->setEmail('mrcheese9000@example.com');
        $user2->setUsername('mrcheese9000');
        $user2->setPassword('pass');
        $manager->persist($user2);

        $data = [
            [
                'title' => 'Half eaten blue-cheese',
                'desc'  => "it's a little\n bit\n whiffy",
                'price' => 100,
                'published' => true,
                'owner' => $user1
            ],
            [
                'title' => 'Giant block of cheddar cheese',
                'desc'  => "woah\n big block of cheese",
                'price' => 1000,
                'published' => true,
                'owner' => $user1
            ],
            [
                'title' => 'Delicious Chevre',
                'desc'  => "I hade to\n lookup\n chevre",
                'price' => 4500,
                'published' => false,
                'owner' => $user2
            ],
            [
                'title' => 'Crumbs of some blue cheese',
                'desc'  => "something\n something",
                'price' => 20,
                'published' => false,
                'owner' => $user1
            ],
            [
                'title' => 'Brie',
                'desc'  => "something\n something",
                'price' => 3500,
                'published' => true,
                'owner' => $user2
            ],
            [
                'title' => 'Red Leicester',
                'desc'  => "something\n something",
                'price' => 600,
                'published' => true,
                'owner' => $user1
            ],
            [
                'title' => 'Camembert',
                'desc'  => "something\n something",
                'price' => 7700,
                'published' => true,
                'owner' => $user2
            ],
            [
                'title' => 'Wensleydale',
                'desc'  => "something\n something",
                'price' => 2250,
                'published' => true,
                'owner' => $user2
            ],
            [
                'title' => 'Edam',
                'desc'  => "something\n something",
                'price' => 3600,
                'published' => true,
                'owner' => $user1
            ],
            [
                'title' => 'Gouda',
                'desc'  => "something\n something",
                'price' => 2800,
                'published' => true,
                'owner' => $user1
            ],
            [
                'title' => 'Parmesan',
                'desc'  => "something\n something",
                'price' => 4200,
                'published' => true,
                'owner' => $user2
            ]
        ];

        foreach ($data as $item) {
            $cheese = new CheeseListing($item['title']);
            $cheese->setTextDescription($item['desc']);
            $cheese->setPrice($item['price']);
            $cheese->setIsPublished($item['published']);
            $cheese->setOwner($item['owner']);
            $manager->persist($cheese);            
        }

        $manager->flush();
    }
}
