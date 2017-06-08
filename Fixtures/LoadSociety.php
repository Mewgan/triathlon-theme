<?php
namespace Jet\Themes\Triathlon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadSociety extends AbstractFixture
{

    use LoadFixture;

    protected $data = [
        [
            'name' => 'Triathlon Society',
            'email' => 'contact@triathlon.com',
            'phone' => '0123456789',
            'account' => 'sumugan.sinnarasa@desico.fr'
        ],
        [
            'name' => 'Sanji Triathlon Society',
            'email' => 'contact@sanji-triathlon.com',
            'phone' => '0123456789',
            'account' => 'sanji@onepiece.com'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadSociety($manager);
    }

}