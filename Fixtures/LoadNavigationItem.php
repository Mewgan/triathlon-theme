<?php
namespace Jet\Themes\Triathlon\Fixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Modules\Navigation\Services\LoadNavigationFixture;
use Jet\Modules\Post\Services\LoadPostFixture;

/**
 * Class LoadNavigationItem
 * @package Jet\Modules\Navigation\Fixtures
 */
class LoadNavigationItem extends AbstractFixture implements DependentFixtureInterface
{
    use LoadPostFixture;
    use LoadNavigationFixture;
    /**
     * @var array
     */
    protected $data = [
        [
            'title' => 'Accueil',
            'navigation' => 'triathlon-menu',
            'parent' => null,
            'children' => [],
            'url' => '/',
            'route' => 'home',
            'type' => 'page',
            'type_id' => 'society-triathlon-home',
            'position' => 0,
            'website' => 'triathlon-society',
        ],
        [
            'title' => 'A propos',
            'navigation' => 'triathlon-menu',
            'parent' => null,
            'children' => [],
            'url' => '/a-propos',
            'route' => 'about',
            'type' => 'page',
            'type_id' => 'society-triathlon-about-us',
            'position' => 1,
            'website' => 'triathlon-society',
        ],
        [
            'title' => 'Courses',
            'navigation' => 'triathlon-menu',
            'parent' => null,
            'children' => [],
            'url' => '/courses',
            'route' => 'race',
            'type' => 'page',
            'type_id' => 'society-triathlon-race',
            'position' => 2,
            'website' => 'triathlon-society',
        ],
        [
            'title' => 'Actualités',
            'navigation' => 'triathlon-menu',
            'parent' => null,
            'children' => [],
            'url' => '/articles/actualite',
            'route' => 'module:post.type:dynamic.action:all',
            'type' => 'post_category',
            'type_id' => 'actualite',
            'position' => 3,
            'website' => 'triathlon-society',
        ],
        [
            'title' => 'Contact',
            'navigation' => 'triathlon-menu',
            'parent' => null,
            'children' => [],
            'url' => '/contact',
            'route' => 'module:contact.type:static.action:show',
            'type' => 'page',
            'type_id' => 'society-triathlon-contact',
            'position' => 4,
            'website' => 'triathlon-society',
        ]
    ];

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $this->addNavigationTypeCallback('post','getPostTypeId');
        $this->addNavigationTypeCallback('post_category','getPostCategoryTypeId');
        $this->loadNavigationItem($manager);
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
            'Jet\Themes\Triathlon\Fixtures\LoadNavigation',
            'Jet\Themes\Triathlon\Fixtures\LoadPage',
        ];
    }
}