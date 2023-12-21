<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProductFixure extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        

        $iphone = new Product();
        $iphone->setName('iPhone 12');
        $iphone->setPrice(999);
        $iphone->setCategory($this->getReference(CategoryFixture::CATEGORY_SMARTPHONES));
        $manager->persist($iphone);

        $samsung = new Product();
        $samsung->setName('Samsung Galaxy S21');
        $samsung->setPrice(1099);
        $samsung->setCategory($this->getReference(CategoryFixture::CATEGORY_SMARTPHONES));
        $manager->persist($samsung);

        $ipad = new Product();
        $ipad->setName('iPad Pro');
        $ipad->setPrice(799);
        $ipad->setCategory($this->getReference(CategoryFixture::CATEGORY_TABLETS));
        $manager->persist($ipad);

        $surface = new Product();
        $surface->setName('Surface Pro');
        $surface->setPrice(899);
        $surface->setCategory($this->getReference(CategoryFixture::CATEGORY_TABLETS));
        $manager->persist($surface);


        $macbook = new Product();
        $macbook->setName('MacBook Pro');
        $macbook->setPrice(1299);
        $macbook->setCategory($this->getReference(CategoryFixture::CATEGORY_COMPUTERS));
        $manager->persist($macbook);

        $dell = new Product();
        $dell->setName('Dell XPS');
        $dell->setPrice(1199);
        $dell->setCategory($this->getReference(CategoryFixture::CATEGORY_COMPUTERS));
        $manager->persist($dell);

        $madrid = new Product();
        $madrid->setName('Madrid');
        $madrid->setPrice(1000);
        $madrid->setCategory($this->getReference(CategoryFixture::CATEGORY_TRAVELS));
        $manager->persist($madrid);

        $barcelone = new Product();
        $barcelone->setName('Barcelone');
        $barcelone->setPrice(1000);
        $barcelone->setCategory($this->getReference(CategoryFixture::CATEGORY_TRAVELS));
        $manager->persist($barcelone);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            CategoryFixture::class,
        ];
    }
}
