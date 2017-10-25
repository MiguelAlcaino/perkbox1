<?php

/**
 * Created by PhpStorm.
 * User: malcaino
 * Date: 25/10/17
 * Time: 23:22
 */
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Coupon;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Fixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 40; $i++) {
            $coupon = new Coupon();
            $coupon
                ->setBrand('Brand'.$i)
                ->setValue(mt_rand(10, 100));

            $manager->persist($coupon);
        }

        for ($i = 0; $i < 20; $i++) {
            $coupon = new Coupon();
            $coupon
                ->setBrand('Brand'.$i)
                ->setValue(mt_rand(10, 100));

            $manager->persist($coupon);
        }

        for ($i = 0; $i < 10; $i++) {
            $coupon = new Coupon();
            $coupon
                ->setBrand('Brand'.$i)
                ->setValue(mt_rand(10, 100));

            $manager->persist($coupon);
        }

        $manager->flush();
    }

}