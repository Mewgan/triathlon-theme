<?php

namespace Jet\Themes\Triathlon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadRoute extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        [
            'url' => '/a-propos',
            'name' => 'about',
            'method' => ['GET'],
            'argument' => null,
            'middleware' => null,
            'subdomain' => null,
            'position' => 0,
            'website' => 'Triathlon Website'
        ],
        [
            'url' => '/courses',
            'name' => 'race',
            'method' => ['GET'],
            'argument' => null,
            'middleware' => null,
            'subdomain' => null,
            'position' => 0,
            'website' => 'Triathlon Website'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadRoute($manager);
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
            'Jet\Themes\Triathlon\Fixtures\LoadWebsite'
        ];
    }

}