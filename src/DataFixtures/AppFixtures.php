<?php

namespace App\DataFixtures;

use App\Entity\CheeseListing;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $data = [
            [
                'title' => 'Half eaten blue-cheese',
                'desc'  => "it's a little\n bit\n whiffy",
                'price' => 100,
                'published' => true
            ],
            [
                'title' => 'Giant block of cheddar cheese',
                'desc'  => "woah\n big block of cheese",
                'price' => 1000,
                'published' => true
            ],
            [
                'title' => 'Delicious Chevre',
                'desc'  => "I hade to\n lookup\n chevre",
                'price' => 4500,
                'published' => false
            ],
            [
                'title' => 'Crumbs of some blue cheese',
                'desc'  => "something\n something",
                'price' => 20,
                'published' => false
            ],
            [
                'title' => 'Brie',
                'desc'  => "something\n something",
                'price' => 3500,
                'published' => true
            ],
            [
                'title' => 'Red Leicester',
                'desc'  => "something\n something",
                'price' => 600,
                'published' => true
            ],
            [
                'title' => 'Camembert',
                'desc'  => "something\n something",
                'price' => 7700,
                'published' => true
            ],
            [
                'title' => 'Wensleydale',
                'desc'  => "something\n something",
                'price' => 2250,
                'published' => true
            ],
            [
                'title' => 'Edam',
                'desc'  => "something\n something",
                'price' => 3600,
                'published' => true
            ],
            [
                'title' => 'Gouda',
                'desc'  => "something\n something",
                'price' => 2800,
                'published' => true
            ],
            [
                'title' => 'Parmesan',
                'desc'  => "something\n something",
                'price' => 4200,
                'published' => true
            ]
        ];

        foreach ($data as $item) {
            $cheese = new CheeseListing($item['title']);
            $cheese->setTextDescription($item['desc']);
            $cheese->setPrice($item['price']);
            $cheese->setIsPublished($item['published']);
            $manager->persist($cheese);            
        }

        $manager->flush();
    }
}
