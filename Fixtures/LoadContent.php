<?php

namespace Jet\Themes\Triathlon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Navigation\Services\LoadNavigationFixture;
use Jet\Services\LoadFixture;
use Jet\Modules\Post\Services\LoadPostFixture;

class LoadContent extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;
    use LoadPostFixture;
    use LoadNavigationFixture;

    protected $data = [
        /* Triathlon website navigation module content */
        'triathlon_navigation_content' => [
            'cat_mod' => 'navigation',
            'name' => 'Menu',
            'block' => 'navigation',
            'website' => 'triathlon-society',
            'module' => 'navigation',
            'template' => 'triathlon_navigation_partial',
            'section' => null,
            'page' => null,
            'data' => [
                'class' => '',
                'navigation' => 'triathlon-menu'
            ]
        ],
        'triathlon_list_post_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste d\'articles',
            'block' => 'list_post',
            'website' => 'triathlon-society',
            'module' => 'list-post',
            'template' => 'triathlon_post_list_partial',
            'section' => null,
            'page' => 'society-triathlon-list-post',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'max' => 9,
                'total' => '',
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'dynamic',
                        'column' => 'slug',
                        'route' => 'slug',
                        'value' => [],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'triathlon_single_post_content' => [
            'cat_mod' => 'post',
            'name' => 'Article',
            'block' => 'single_post',
            'website' => 'triathlon-society',
            'module' => 'single-post',
            'template' => 'triathlon_single_post_partial',
            'section' => null,
            'page' => 'society-triathlon-single-post',
            'data' => [
                'class' => '',
                'db' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'column' => 'slug',
                        'route' => 'slug',
                        'value' => [],
                    ]
                ]
            ]
        ],
        /* Home page */
        'triathlon_list_home_race_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste des courses',
            'block' => 'home_list_race',
            'website' => 'triathlon-society',
            'module' => 'list-post',
            'template' => 'triathlon_home_list_race_partial',
            'section' => null,
            'page' => 'society-triathlon-home',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'max' => '',
                'total' => 6,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['course'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'triathlon_list_home_news_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste d\'actualités',
            'block' => 'home_list_news',
            'website' => 'triathlon-society',
            'module' => 'list-post',
            'template' => 'triathlon_home_list_news_partial',
            'section' => null,
            'page' => 'society-triathlon-home',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'max' => '',
                'total' => 9,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['actualite'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        /* Race page */
        'triathlon_list_race_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste des courses',
            'block' => 'list_race',
            'website' => 'triathlon-society',
            'module' => 'list-post',
            'template' => 'triathlon_race_list_partial',
            'section' => null,
            'page' => 'society-triathlon-race',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'max' => 10,
                'total' => '',
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['course'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->addContentCallback('post', 'getPostContent');
        $this->addContentCallback('navigation', 'getNavigationContent');
        $this->loadContent($manager);
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
            'Jet\Themes\Triathlon\Fixtures\LoadPage',
            'Jet\Themes\Triathlon\Fixtures\LoadTemplate',
            'Jet\Themes\Triathlon\Fixtures\LoadPost',
            'Jet\Themes\Triathlon\Fixtures\LoadNavigation',
        ];
    }
}