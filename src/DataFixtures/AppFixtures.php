<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName('product1');
        $product->setDescription('This is the first product');
        $product->setSize(100);
        $manager->persist($product);

        $product = new Product();
        $product->setName('product2');
        $product->setDescription('This is the second product');
        $product->setSize(150);
        $manager->persist($product);

        $manager->flush();
    }
}
