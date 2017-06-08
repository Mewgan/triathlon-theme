<?php

namespace Jet\Themes\Triathlon\Fixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadAddress extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;

    protected $data = [
        'triathlon' => [
            'address' => '1 Rue Portefoin',
            'city' => 'Paris 3',
            'postal_code' => '75003',
            'society' => 'Triathlon Society',
            'country' => 'FRANCE',
        ],
        'sanji-triathlon-address' => [
            'address' => '11 Rue Ave Maria',
            'city' => 'Paris',
            'postal_code' => '75000',
            'society' => 'Sanji Triathlon Society',
            'country' => 'FRANCE',
        ]
    ];

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $this->loadAddress($manager);
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    function getDependencies()
    {
        return [
            'Jet\Themes\Triathlon\Fixtures\LoadSociety'
        ];
    }
}