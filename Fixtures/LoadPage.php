<?php

namespace Jet\Themes\Triathlon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadPage extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        /* Triathlon pages */
        'society-triathlon-single-post' =>  [
            'title' => 'Page d\'un article',
            'route' => 'module:post.type:dynamic.action:read',
            'website' => 'Triathlon Website',
            'layout' => 'triathlon_page_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'dynamic'
        ],
        'society-triathlon-list-post' =>  [
            'title' => 'Liste d\'articles',
            'route' => 'module:post.type:dynamic.action:all',
            'website' => 'Triathlon Website',
            'layout' => 'triathlon_page_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'dynamic'
        ],
        'society-triathlon-home' =>  [
            'title' => 'Accueil',
            'route' => 'home',
            'website' => 'Triathlon Website',
            'layout' => 'triathlon_home_page_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'static',
        ],
        'society-triathlon-about-us' =>  [
            'title' => 'A propos',
            'route' => 'about',
            'website' => 'Triathlon Website',
            'layout' => 'triathlon_about_us_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'static',
        ],
        'society-triathlon-race' =>  [
            'title' => 'Courses',
            'route' => 'race',
            'website' => 'Triathlon Website',
            'layout' => 'triathlon_page_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'static',
        ],
        'society-triathlon-contact' =>  [
            'title' => 'Contact',
            'route' => 'module:contact.type:static.action:show',
            'website' => 'Triathlon Website',
            'layout' => 'triathlon_contact_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'static',
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadPage($manager);
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
            'Jet\Themes\Triathlon\Fixtures\LoadWebsite',
            'Jet\Themes\Triathlon\Fixtures\LoadTemplate',
            'Jet\Themes\Triathlon\Fixtures\LoadRoute',
        ];
    }
}