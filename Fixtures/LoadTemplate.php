<?php

namespace Jet\Themes\Triathlon\Fixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Services\LoadFixture;

class LoadTemplate extends AbstractFixture
{
    use LoadFixture;

    protected $data = [
        /* Triathlon templates */
        'triathlon_layout' => [
            'name' => 'ThemeTriathlonFileLayout',
            'title' => 'Theme Triathlon Template',
            'content' => 'Triathlon/Views/layout',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'triathlon_navigation_partial' => [
            'name' => 'ThemeTriathlonNavigationFilePartial',
            'title' => 'Theme Triathlon Navigation Template',
            'content' => 'Triathlon/Views/navigation',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'triathlon_home_page_layout' => [
            'name' => 'ThemeTriathlonHomePageFileLayout',
            'title' => 'Theme Triathlon Home Page Template',
            'content' => 'Triathlon/Views/index',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'triathlon_home_list_race_partial' => [
            'name' => 'ThemeTriathlonHomeRaceListFilePartial',
            'title' => 'Theme Triathlon Home Race List Template',
            'content' => 'Triathlon/Views/home_list_race',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'triathlon_home_list_news_partial' => [
            'name' => 'ThemeTriathlonHomeNewsListFilePartial',
            'title' => 'Theme Triathlon Home News List Template',
            'content' => 'Triathlon/Views/home_list_news',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'triathlon_page_layout' => [
            'name' => 'ThemeTriathlonPageFileLayout',
            'title' => 'Theme Triathlon Page Template',
            'content' => 'Triathlon/Views/page',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'triathlon_single_post_partial' => [
            'name' => 'ThemeTriathlonPostFilePartial',
            'title' => 'Theme Triathlon Post Template',
            'content' => 'Triathlon/Views/post',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'triathlon_post_list_partial' => [
            'name' => 'ThemeTriathlonPostListFilePartial',
            'title' => 'Theme Triathlon Post List Template',
            'content' => 'Triathlon/Views/post_list',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'triathlon_about_us_layout' => [
            'name' => 'ThemeTriathlonAboutFileLayout',
            'title' => 'Theme Triathlon About Template',
            'content' => 'Triathlon/Views/about',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'triathlon_race_list_partial' => [
            'name' => 'ThemeTriathlonRaceFilePartial',
            'title' => 'Theme Triathlon Race Template',
            'content' => 'Triathlon/Views/race',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'triathlon_contact_layout' => [
            'name' => 'ThemeTriathlonContactFileLayout',
            'title' => 'Theme Triathlon Contact Template',
            'content' => 'Triathlon/Views/contact',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadTemplate($manager);
    }
}