<?php

namespace Jet\Themes\Triathlon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Navigation\Services\LoadNavigationFixture;
use Jet\Modules\Post\Services\LoadPostFixture;
use Jet\Services\LoadFixture;

class LoadAdminCustomField extends AbstractFixture implements DependentFixtureInterface
{
    use LoadPostFixture;
    use LoadNavigationFixture;
    use LoadFixture;

    protected $data = [
        /* Triathlon fields */
        'triathlon_seo_title' => [
            'scope' => 'specified',
            'title' => 'Meta titre',
            'name' => 'meta_title',
            'type' => 'string',
            'position' => 0,
            'parent' => null,
            'cf' => 'Triathlon Seo',
            'data' => [],
            'content' => []
        ],
        'triathlon_seo_description' => [
            'scope' => 'specified',
            'title' => 'Meta description',
            'name' => 'meta_description',
            'type' => 'textarea',
            'position' => 1,
            'parent' => null,
            'cf' => 'Triathlon Seo',
            'data' => [],
            'content' => []
        ],
        'triathlon_seo_keywords' => [
            'scope' => 'specified',
            'title' => 'Meta mots clef',
            'name' => 'meta_keywords',
            'type' => 'string',
            'position' => 2,
            'parent' => null,
            'cf' => 'Triathlon Seo',
            'data' => [],
            'content' => []
        ],
        /* Global CSS and JS */
        'triathlon_css' => [
            'scope' => 'global',
            'title' => 'Css',
            'name' => 'css_block',
            'type' => 'editor',
            'position' => 0,
            'parent' => null,
            'cf' => 'Triathlon Custom Css & Js',
            'data' => [
                'file_type' => 'css'
            ],
            'content' => ['value' => '']
        ],
        'triathlon_js' => [
            'scope' => 'global',
            'title' => 'Javascript',
            'name' => 'js_block',
            'type' => 'editor',
            'position' => 1,
            'parent' => null,
            'cf' => 'Triathlon Custom Css & Js',
            'data' => [
                'file_type' => 'javascript'
            ],
            'content' => ['value' => '']
        ],
        /* Global social networks */
        'triathlon_social' => [
            'scope' => 'global',
            'title' => 'Réseaux sociaux',
            'name' => 'social_networks',
            'type' => 'repeater',
            'position' => 0,
            'parent' => null,
            'cf' => 'Triathlon Social Network',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows' => [0,1,2,3]
            ]
        ],
        'triathlon_social_name' => [
            'scope' => 'global',
            'title' => 'Nom',
            'name' => 'name',
            'type' => 'string',
            'position' => 0,
            'parent' => 'triathlon_social',
            'cf' => 'Triathlon Social Network',
            'data' => [],
            'content' => [
                'value' => [
                    'Facebook',
                    'Twitter',
                    'Google Plus',
                    'Instagram',
                ]
            ]
        ],
        'triathlon_social_link' => [
            'scope' => 'global',
            'title' => 'Lien',
            'name' => 'link',
            'type' => 'string',
            'position' => 1,
            'parent' => 'triathlon_social',
            'cf' => 'Triathlon Social Network',
            'data' => [],
            'content' => [
                'value' => [
                    '',
                    '',
                    '',
                    '',
                ]
            ]
        ],
        /* Global seo */
        'triathlon_global_seo_analytics' => [
            'scope' => 'global',
            'title' => 'Google Analytics',
            'name' => 'meta_title',
            'type' => 'string',
            'position' => 0,
            'parent' => null,
            'description' => 'Renseigner votre script analytics',
            'cf' => 'Triathlon Global Seo',
            'data' => [],
            'content' => []
        ],
        /* Global skin */
        'triathlon_favicon' => [
            'scope' => 'global',
            'title' => 'Favicon',
            'name' => 'favicon',
            'type' => 'media',
            'position' => 0,
            'parent' => null,
            'cf' => 'Triathlon Default Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => '/public/media/default/favicon.ico']
        ],
        'triathlon_logo' => [
            'scope' => 'global',
            'title' => 'Logo',
            'name' => 'logo',
            'type' => 'media',
            'position' => 0,
            'parent' => null,
            'cf' => 'Triathlon Default Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => '/src/Themes/Triathlon/Resources/public/img/logo.png']
        ],
        'triathlon_booking' => [
            'scope' => 'global',
            'title' => 'Lien de réservation',
            'name' => 'booking_link',
            'type' => 'string',
            'position' => 1,
            'parent' => null,
            'cf' => 'Triathlon Default Global',
            'data' => [],
            'content' => ['value' => '']
        ],
        /* Triathlon home page fields */
        'triathlon_home_carrousel' => [
            'scope' => 'specified',
            'title' => 'Carrousel',
            'name' => 'home_slider',
            'type' => 'repeater',
            'position' => 0,
            'parent' => null,
            'cf' => 'Triathlon Home Page',
            'data' => [
                'min_row' => '1',
                'max_row' => ''
            ],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-triathlon-home' => [0,1,2]
            ]
        ],
        'triathlon_home_carrousel_title' => [
            'scope' => 'specified',
            'title' => 'Titre',
            'name' => 'title',
            'type' => 'string',
            'position' => 0,
            'parent' => 'triathlon_home_carrousel',
            'cf' => 'Triathlon Home Page',
            'data' => [],
            'content' => [
                'page@society-triathlon-home' => [
                    'Courir pour la santé',
                    'Rapide comme le vent',
                    'Ne jamais s\'arrêter',
                ]
            ]
        ],
        'triathlon_home_carrousel_sub_title' => [
            'scope' => 'specified',
            'title' => 'Sous titre',
            'name' => 'sub_title',
            'type' => 'string',
            'position' => 1,
            'parent' => 'triathlon_home_carrousel',
            'cf' => 'Triathlon Home Page',
            'data' => [],
            'content' => [
                'page@society-triathlon-home' => [
                    '29 Juin 2015',
                    '29 Juin 2015',
                    '29 Juin 2015',
                ]
            ]
        ],
        'triathlon_home_carrousel_description' => [
            'scope' => 'specified',
            'title' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'position' => 2,
            'parent' => 'triathlon_home_carrousel',
            'cf' => 'Triathlon Home Page',
            'data' => [],
            'content' => [
                'page@society-triathlon-home' => [
                    'Économisez 20% en réservant maintenant pour notre triathlon.',
                    'Économisez 20% en réservant maintenant pour notre triathlon.',
                    'Économisez 20% en réservant maintenant pour notre triathlon.',
                ]
            ]
        ],
        'triathlon_home_carrousel_link' => [
            'scope' => 'specified',
            'title' => 'Lien',
            'name' => 'link',
            'type' => 'navigation',
            'position' => 3,
            'parent' => 'triathlon_home_carrousel',
            'cf' => 'Triathlon Home Page',
            'data' => [
                'types' => []
            ],
            'content' => [
                'page@society-triathlon-home' => [
                    'page@society-triathlon-home',
                    'page@society-triathlon-home',
                    'page@society-triathlon-home',
                ]
            ]
        ],
        'triathlon_home_carrousel_img' => [
            'scope' => 'specified',
            'title' => 'Image',
            'name' => 'image',
            'type' => 'media',
            'position' => 4,
            'parent' => 'triathlon_home_carrousel',
            'cf' => 'Triathlon Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => [
                'page@society-triathlon-home' => [
                    '/src/Themes/Triathlon/Resources/public/img/slider-images/img1.png',
                    '/src/Themes/Triathlon/Resources/public/img/slider-images/img2.png',
                    '/src/Themes/Triathlon/Resources/public/img/slider-images/img3.png',
                ]
            ]
        ],
        'triathlon_home_post' => [
            'scope' => 'specified',
            'title' => 'Article de bienvenue',
            'name' => 'home_welcome_post',
            'type' => 'post',
            'position' => 1,
            'parent' => null,
            'cf' => 'Triathlon Home Page',
            'data' => [
                'categories' => []
            ],
            'content' => ['page@society-triathlon-home' => 'triathlon-welcome-post']
        ],
        'triathlon_home_3_blocs' => [
            'scope' => 'specified',
            'title' => 'Bloc de 3',
            'name' => 'home_3_blocs',
            'type' => 'repeater',
            'position' => 2,
            'parent' => null,
            'cf' => 'Triathlon Home Page',
            'data' => [
                'min_row' => '3',
                'max_row' => '3'
            ],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-triathlon-home' => [0,1,2]
            ]
        ],
        'triathlon_home_3_blocs_post' => [
            'scope' => 'specified',
            'title' => 'Article',
            'name' => 'post',
            'type' => 'post',
            'position' => 0,
            'parent' => 'triathlon_home_3_blocs',
            'cf' => 'Triathlon Home Page',
            'data' => [
                'categories' => []
            ],
            'content' => [
                'page@society-triathlon-home' => [
                    'triathlon-service-1',
                    'triathlon-service-2',
                    'triathlon-service-3',
                ]
            ]
        ],
        'triathlon_home_race_background' => [
            'scope' => 'specified',
            'title' => 'Image de fond pour la liste de courses',
            'name' => 'section4_image',
            'type' => 'media',
            'position' => 3,
            'parent' => null,
            'cf' => 'Triathlon Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => [
                'page@society-triathlon-home' => '/src/Themes/Triathlon/Resources/public/img/race-img.png'
            ]
        ],
        'triathlon_home_gallery_categories' => [
            'scope' => 'specified',
            'title' => 'Catégories de galerie',
            'name' => 'home_galleries_categories',
            'type' => 'repeater',
            'position' => 4,
            'parent' => null,
            'cf' => 'Triathlon Home Page',
            'data' => [
                'min_row' => '',
                'max_row' => ''
            ],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-triathlon-home' => [0,1,2,3]
            ]
        ],
        'triathlon_home_gallery_categories_title' => [
            'scope' => 'specified',
            'title' => 'Texte',
            'name' => 'name',
            'type' => 'string',
            'position' => 0,
            'parent' => 'triathlon_home_gallery_categories',
            'cf' => 'Triathlon Home Page',
            'data' => [],
            'content' => [
                'page@society-triathlon-home' => [
                    'Printemps',
                    'Été',
                    'Automne',
                    'Hiver',
                ]
            ]
        ],
        'triathlon_home_galleries' => [
            'scope' => 'specified',
            'title' => 'Galerie',
            'name' => 'home_galleries',
            'type' => 'repeater',
            'position' => 5,
            'parent' => null,
            'cf' => 'Triathlon Home Page',
            'data' => [
                'min_row' => '',
                'max_row' => ''
            ],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-triathlon-home' => [0,1,2,3,4,5]
            ]
        ],
        'triathlon_home_galleries_image' => [
            'scope' => 'specified',
            'title' => 'Image',
            'name' => 'image',
            'type' => 'media',
            'position' => 0,
            'parent' => 'triathlon_home_galleries',
            'cf' => 'Triathlon Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => [
                'page@society-triathlon-home' => [
                    '/src/Themes/Triathlon/Resources/public/img/img2.jpg',
                    '/src/Themes/Triathlon/Resources/public/img/img3.jpg',
                    '/src/Themes/Triathlon/Resources/public/img/img4.jpg',
                    '/src/Themes/Triathlon/Resources/public/img/img5.jpg',
                    '/src/Themes/Triathlon/Resources/public/img/img6.jpg',
                    '/src/Themes/Triathlon/Resources/public/img/img7.jpg',
                ]
            ]
        ],
        'triathlon_home_galleries_category' => [
            'scope' => 'specified',
            'title' => 'Catégories (séparé par des virgules)',
            'name' => 'categories',
            'type' => 'string',
            'position' => 1,
            'parent' => 'triathlon_home_galleries',
            'cf' => 'Triathlon Home Page',
            'data' => [],
            'content' => [
                'page@society-triathlon-home' => [
                    'Printemps',
                    'Été',
                    'Hiver',
                    'Automne,Hiver',
                    'Été,Printemps',
                    'Automne,Été',
                ]
            ]
        ],
        'triathlon_home_partners' => [
            'scope' => 'specified',
            'title' => 'Partenaires',
            'name' => 'home_list_partners',
            'type' => 'repeater',
            'position' => 6,
            'parent' => null,
            'cf' => 'Triathlon Home Page',
            'data' => [
                'min_row' => '',
                'max_row' => ''
            ],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-triathlon-home' => [0,1,2,3,4,5]
            ]
        ],
        'triathlon_home_partners_image' => [
            'scope' => 'specified',
            'title' => 'Texte',
            'name' => 'image',
            'type' => 'media',
            'position' => 0,
            'parent' => 'triathlon_home_partners',
            'cf' => 'Triathlon Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => [
                'page@society-triathlon-home' => [
                    '/src/Themes/Triathlon/Resources/public/img/sponsor-01.png',
                    '/src/Themes/Triathlon/Resources/public/img/sponsor-02.png',
                    '/src/Themes/Triathlon/Resources/public/img/sponsor-03.png',
                    '/src/Themes/Triathlon/Resources/public/img/sponsor-04.png',
                    '/src/Themes/Triathlon/Resources/public/img/sponsor-05.png',
                    '/src/Themes/Triathlon/Resources/public/img/sponsor-03.png',
                ]
            ]
        ],
        /* Triathlon about us page */
        'triathlon_about_us_description' => [
            'scope' => 'specified',
            'title' => 'Description',
            'name' => 'description',
            'type' => 'wysiwyg',
            'position' => 0,
            'parent' => null,
            'cf' => 'Triathlon About Us Page',
            'data' => [],
            'content' => [
                'page@society-triathlon-about-us' => '<p>De la concentration et un travail acharné sont les véritables clés du succès. Gardez vos yeux sur l\'objectif, et continuez de suivre l\'étape suivante pour le compléter. Si vous n\'êtes pas sûr de la façon de faire quelque chose, faites-le dans les deux sens et voyez ce qui fonctionne le mieux.</p>',
            ]
        ],
        'triathlon_about_us_blocs' => [
            'scope' => 'specified',
            'title' => 'Bloc d\'images',
            'name' => 'blocs',
            'type' => 'repeater',
            'position' => 1,
            'parent' => null,
            'cf' => 'Triathlon About Us Page',
            'data' => [
                'min_row' => '',
                'max_row' => ''
            ],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-triathlon-about-us' => [0,1,2]
            ]
        ],
        'triathlon_about_us_blocs_image' => [
            'scope' => 'specified',
            'title' => 'Image',
            'name' => 'image',
            'type' => 'media',
            'position' => 0,
            'parent' => 'triathlon_about_us_blocs',
            'cf' => 'Triathlon About Us Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => [
                'page@society-triathlon-about-us' => [
                    '/src/Themes/Triathlon/Resources/public/img/img3.jpg',
                    '/src/Themes/Triathlon/Resources/public/img/img4.jpg',
                    '/src/Themes/Triathlon/Resources/public/img/img5.jpg',
                ]
            ]
        ],
        'triathlon_about_us_organizers' => [
            'scope' => 'specified',
            'title' => 'Organisateurs',
            'name' => 'organizers',
            'type' => 'repeater',
            'position' => 2,
            'parent' => null,
            'cf' => 'Triathlon About Us Page',
            'data' => [
                'min_row' => '',
                'max_row' => ''
            ],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-triathlon-about-us' => [0,1,2,3]
            ]
        ],
        'triathlon_about_us_organizers_image' => [
            'scope' => 'specified',
            'title' => 'Image',
            'name' => 'image',
            'type' => 'media',
            'position' => 0,
            'parent' => 'triathlon_about_us_organizers',
            'cf' => 'Triathlon About Us Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => [
                'page@society-triathlon-about-us' => [
                    '/src/Themes/Triathlon/Resources/public/img/about-us/img4.jpg',
                    '/src/Themes/Triathlon/Resources/public/img/about-us/img5.jpg',
                    '/src/Themes/Triathlon/Resources/public/img/about-us/img6.jpg',
                    '/src/Themes/Triathlon/Resources/public/img/about-us/img7.jpg',
                ]
            ]
        ],
        'triathlon_about_us_testimonials' => [
            'scope' => 'specified',
            'title' => 'Témoignages',
            'name' => 'testimonials',
            'type' => 'repeater',
            'position' => 3,
            'parent' => null,
            'cf' => 'Triathlon About Us Page',
            'data' => [
                'min_row' => '',
                'max_row' => ''
            ],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-triathlon-about-us' => [0,1]
            ]
        ],
        'triathlon_about_us_testimonials_author' => [
            'scope' => 'specified',
            'title' => 'Nom',
            'name' => 'user',
            'type' => 'string',
            'position' => 0,
            'parent' => 'triathlon_about_us_testimonials',
            'cf' => 'Triathlon About Us Page',
            'data' => [],
            'content' => [
                'page@society-triathlon-about-us' => [
                    'Edward M. Hepburn',
                    'Edward M. Hepburn',
                ]
            ]
        ],
        'triathlon_about_us_testimonials_content' => [
            'scope' => 'specified',
            'title' => 'Texte',
            'name' => 'content',
            'type' => 'textarea',
            'position' => 1,
            'parent' => 'triathlon_about_us_testimonials',
            'cf' => 'Triathlon About Us Page',
            'data' => [],
            'content' => [
                'page@society-triathlon-about-us' => [
                    'J\'ai passé un bon moment à leur triathlon. Très bonne organisation et du beau temps.',
                    'J\'ai passé un bon moment à leur triathlon. Très bonne organisation et du beau temps.',
                ]
            ]
        ],
        /* Triathlon race category fields */
        'triathlon_race_date' => [
            'scope' => 'specified',
            'title' => 'Date de la course',
            'name' => 'race_date',
            'type' => 'date',
            'position' => 0,
            'parent' => null,
            'cf' => 'Triathlon Race Category',
            'data' => [
                'date_format' => 'dd/mm/yyyy'
            ],
            'content' => [
                'post@triathlon-race-1' => '14/06/2018',
                'post@triathlon-race-2' => '21/10/2018',
                'post@triathlon-race-3' => '12/01/2019',
            ]
        ],
        'triathlon_race_booking_link' => [
            'scope' => 'specified',
            'title' => 'Lien de réservation',
            'name' => 'race_booking_link',
            'type' => 'string',
            'position' => 1,
            'parent' => null,
            'cf' => 'Triathlon Race Category',
            'data' => [],
            'content' => [
                'post@triathlon-race-1' => '',
                'post@triathlon-race-2' => '',
                'post@triathlon-race-3' => '',
            ]
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->addNavigationTypeCallback('post','getPostTypeId');
        $this->addNavigationTypeCallback('post_category','getPostCategoryTypeId');
        $this->addCustomFieldCallback('navigation', 'getCustomFieldNavigation');
        $this->addCustomFieldCallback('post', 'getCustomFieldPost');
        $this->loadAdminCustomField($manager);
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
            'Jet\Themes\Triathlon\Fixtures\LoadPage',
            'Jet\Themes\Triathlon\Fixtures\LoadPost',
            'Jet\Themes\Triathlon\Fixtures\LoadWebsite',
            'Jet\Themes\Triathlon\Fixtures\LoadCustomField'
        ];
    }
}