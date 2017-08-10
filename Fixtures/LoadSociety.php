<?php
namespace Jet\Themes\Triathlon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadSociety extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;

    protected $data = [
        [
            'name' => 'Triathlon Society',
            'email' => 'contact@triathlon.com',
            'phone' => '0123456789',
            'address' => 'triathlon-address',
            'account' => 'sumugan.sinnarasa@desico.fr'
        ],
        [
            'name' => 'Sanji Triathlon Society',
            'email' => 'contact@sanji-triathlon.com',
            'phone' => '0123456789',
            'address' => 'sanji-triathlon-address',
            'account' => 'sanji@onepiece.com'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadSociety($manager);
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
            'Jet\Themes\Triathlon\Fixtures\LoadAddress'
        ];
    }
}