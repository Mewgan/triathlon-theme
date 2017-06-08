<?php

namespace Jet\Themes\Triathlon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadWebsite extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        'Triathlon Website' => [
            'society' => 'Triathlon Society',
            'domain' => 'triathlon-society',
            'theme' =>  'Triathlon',
            'layout' => 'triathlon_layout',
            'render_system' => 'php',
            'expiration_date' => '2017-12-20 10:00:00',
            'modules' => [
                'navigation',
                'post'
            ],
            'templates' => [
                'triathlon_layout',
                'triathlon_navigation_partial',
                'triathlon_home_page_layout',
                'triathlon_home_list_race_partial',
                'triathlon_home_list_news_partial',
                'triathlon_page_layout',
                'triathlon_single_post_partial',
                'triathlon_post_list_partial',
                'triathlon_race_list_partial',
                'triathlon_about_us_layout',
                'triathlon_contact_layout',
            ],
            'medias' => [
                '/public/media/default/thumbnail/theme-triathlon-thumbnail.png',
                '/src/Themes/Triathlon/Resources/public/img/logo.png',
                '/src/Themes/Triathlon/Resources/public/img/slider-images/img1.png',
                '/src/Themes/Triathlon/Resources/public/img/slider-images/img2.png',
                '/src/Themes/Triathlon/Resources/public/img/slider-images/img3.png',
                '/src/Themes/Triathlon/Resources/public/img/img2.jpg',
                '/src/Themes/Triathlon/Resources/public/img/img3.jpg',
                '/src/Themes/Triathlon/Resources/public/img/img4.jpg',
                '/src/Themes/Triathlon/Resources/public/img/img5.jpg',
                '/src/Themes/Triathlon/Resources/public/img/img6.jpg',
                '/src/Themes/Triathlon/Resources/public/img/img7.jpg',
                '/src/Themes/Triathlon/Resources/public/img/img8.jpg',
                '/src/Themes/Triathlon/Resources/public/img/img9.jpg',
                '/src/Themes/Triathlon/Resources/public/img/img10.jpg',
                '/src/Themes/Triathlon/Resources/public/img/img11.jpg',
                '/src/Themes/Triathlon/Resources/public/img/sponsor-01.png',
                '/src/Themes/Triathlon/Resources/public/img/sponsor-02.png',
                '/src/Themes/Triathlon/Resources/public/img/sponsor-03.png',
                '/src/Themes/Triathlon/Resources/public/img/sponsor-04.png',
                '/src/Themes/Triathlon/Resources/public/img/sponsor-05.png',
                '/src/Themes/Triathlon/Resources/public/img/about-us/img4.jpg',
                '/src/Themes/Triathlon/Resources/public/img/about-us/img5.jpg',
                '/src/Themes/Triathlon/Resources/public/img/about-us/img6.jpg',
                '/src/Themes/Triathlon/Resources/public/img/about-us/img7.jpg',
                '/src/Themes/Triathlon/Resources/public/img/race/flag-icon-01.png',
                '/src/Themes/Triathlon/Resources/public/img/race/flag-icon-02.png',
                '/src/Themes/Triathlon/Resources/public/img/race/flag-icon-03.png',
            ],
            'data' => [
                'parent_exclude' => [],
                'parent_replace' => [],
            ]
        ],
        'Sanji Triathlon Website' => [
            'society' => 'Sanji Triathlon Society',
            'domain' => 'sanji-triathlon-society',
            'theme' =>  'Triathlon',
            'layout' => 'triathlon_layout',
            'render_system' => 'php',
            'expiration_date' => '2017-12-20 10:00:00',
            'modules' => [
                'navigation',
                'post',
            ],
            'templates' => [],
            'medias' => [],
            'data' => [
                'parent_exclude' => [],
                'parent_replace' => [],
            ]
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadWebsite($manager);
        $this->setThemeWebsite($manager, 'Triathlon', 'Triathlon Website');
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
            'Jet\Themes\Triathlon\Fixtures\LoadMedia',
            'Jet\Themes\Triathlon\Fixtures\LoadTheme',
            'Jet\Themes\Triathlon\Fixtures\LoadSociety',
            'Jet\Themes\Triathlon\Fixtures\LoadTemplate'
        ];
    }
}