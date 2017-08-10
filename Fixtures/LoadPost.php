<?php

namespace Jet\Themes\Triathlon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Post\Services\LoadPostFixture;

class LoadPost extends AbstractFixture implements DependentFixtureInterface
{

    use LoadPostFixture;

    protected $data = [
        /* Triathlon website posts */
        'triathlon-welcome-post' => [
            'title' => 'Bienvenue sur notre Triathlon !',
            'slug' => 'bienvenue-sur-notre-triathlon',
            'short_description' => 'Je sais que je peux réussir tout type de défi, car ... Je cours.',
            'content' => '<p>Le succès est le résultat de la perfection, d\'un travail acharné, d\'un apprentissage à partir des échecs, de loyauté et de persistance.</p>
            <p>Pour être un champion, je pense qu\'il faut voir les choses en grand. Il ne s\'agit pas de gagner ou de perdre; il s\'agit d\'un travail quotidien et de prospérité sur un défi que l\'on se fixe. Il s\'agit d\'embrasser la douleur que vous allez vivre au bout d\'une course et de ne pas avoir peur. Je pense que les gens pensent trop et prennent peur par rapport à la difficulté.</p>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/img2.jpg',
            'categories' => [],
            'website' => 'triathlon-society'
        ],
        'triathlon-service-1' => [
            'title' => 'Athlète vedette',
            'slug' => 'athlete-vedette',
            'short_description' => 'Paula Browns',
            'content' => '<p>Le succès est le résultat de la perfection, d\'un travail acharné, d\'un apprentissage à partir des échecs, de loyauté et de persistance.</p>
            <p>Pour être un champion, je pense qu\'il faut voir les choses en grand. Il ne s\'agit pas de gagner ou de perdre; il s\'agit d\'un travail quotidien et de prospérité sur un défi que l\'on se fixe. Il s\'agit d\'embrasser la douleur que vous allez vivre au bout d\'une course et de ne pas avoir peur. Je pense que les gens pensent trop et prennent peur par rapport à la difficulté.</p>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/img3.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'triathlon-society'
        ],
        'triathlon-service-2' => [
            'title' => 'On recherche des photographes',
            'slug' => 'on-recherche-des-photographes',
            'short_description' => 'NYC Tri Race Weekend',
            'content' => '<p>Le succès est le résultat de la perfection, d\'un travail acharné, d\'un apprentissage à partir des échecs, de loyauté et de persistance.</p>
            <p>Pour être un champion, je pense qu\'il faut voir les choses en grand. Il ne s\'agit pas de gagner ou de perdre; il s\'agit d\'un travail quotidien et de prospérité sur un défi que l\'on se fixe. Il s\'agit d\'embrasser la douleur que vous allez vivre au bout d\'une course et de ne pas avoir peur. Je pense que les gens pensent trop et prennent peur par rapport à la difficulté.</p>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/img4.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'triathlon-society'
        ],
        'triathlon-service-3' => [
            'title' => 'Réservez votre hôtel',
            'slug' => 'reservez-votre-hotel',
            'short_description' => 'For The Triathlon Today!',
            'content' => '<p>Le succès est le résultat de la perfection, d\'un travail acharné, d\'un apprentissage à partir des échecs, de loyauté et de persistance.</p>
            <p>Pour être un champion, je pense qu\'il faut voir les choses en grand. Il ne s\'agit pas de gagner ou de perdre; il s\'agit d\'un travail quotidien et de prospérité sur un défi que l\'on se fixe. Il s\'agit d\'embrasser la douleur que vous allez vivre au bout d\'une course et de ne pas avoir peur. Je pense que les gens pensent trop et prennent peur par rapport à la difficulté.</p>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/img5.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'triathlon-society'
        ],
        'triathlon-actu-1' => [
            'title' => 'Actualité 1',
            'slug' => 'actualite-1',
            'short_description' => 'Aliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibuste.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies, odio at congue tincidunt, libero odio tincidunt est, vel sollicitudin purus odio non leo. Vestibulum vel congue quam, sed convallis elit. Etiam porta, elit ut pharetra finibus, justo odio sagittis libero, eu ullamcorper sem lectus sit amet neque. Donec ultricies erat eu massa feugiat commodo. Nunc id tristique orci. Donec dignissim lacinia velit in semper. Sed malesuada, augue sit amet mattis finibus, erat lacus viverra nibh, vitae semper tortor erat interdum purus. Etiam gravida at lorem in hendrerit. Integer quis neque justo. Ut pellentesque feugiat tortor nec blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Donec sit amet vestibulum nisi, quis aliquet neque. Aenean turpis risus, luctus eu accumsan eget, consectetur eu quam.</p>
                          <blockquote><q>Phasellus sodales dignissim lacus, aliquam accumsan eros interdum ut. Aliquam in placerat felis. Duis a urna vitae justo efficitur sagittis. Aenean turpis risus, luctus eu accumsan eget, consectetur eu quam.</q></blockquote>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/img3.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'triathlon-society'
        ],
        'triathlon-actu-2' => [
            'title' => 'Actualité 2',
            'slug' => 'actualite-2',
            'short_description' => 'Boliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibustew.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies, odio at congue tincidunt, libero odio tincidunt est, vel sollicitudin purus odio non leo. Vestibulum vel congue quam, sed convallis elit. Etiam porta, elit ut pharetra finibus, justo odio sagittis libero, eu ullamcorper sem lectus sit amet neque. Donec ultricies erat eu massa feugiat commodo. Nunc id tristique orci. Donec dignissim lacinia velit in semper. Sed malesuada, augue sit amet mattis finibus, erat lacus viverra nibh, vitae semper tortor erat interdum purus. Etiam gravida at lorem in hendrerit. Integer quis neque justo. Ut pellentesque feugiat tortor nec blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Donec sit amet vestibulum nisi, quis aliquet neque. Aenean turpis risus, luctus eu accumsan eget, consectetur eu quam.</p>
                          <blockquote><q>Phasellus sodales dignissim lacus, aliquam accumsan eros interdum ut. Aliquam in placerat felis. Duis a urna vitae justo efficitur sagittis. Aenean turpis risus, luctus eu accumsan eget, consectetur eu quam.</q></blockquote>',
            'thumbnail' =>  '/src/Themes/Triathlon/Resources/public/img/img4.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'triathlon-society'
        ],
        'triathlon-actu-3' => [
            'title' => 'Actualité 3',
            'slug' => 'actualite-3',
            'short_description' => 'Boliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibustew.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies, odio at congue tincidunt, libero odio tincidunt est, vel sollicitudin purus odio non leo. Vestibulum vel congue quam, sed convallis elit. Etiam porta, elit ut pharetra finibus, justo odio sagittis libero, eu ullamcorper sem lectus sit amet neque. Donec ultricies erat eu massa feugiat commodo. Nunc id tristique orci. Donec dignissim lacinia velit in semper. Sed malesuada, augue sit amet mattis finibus, erat lacus viverra nibh, vitae semper tortor erat interdum purus. Etiam gravida at lorem in hendrerit. Integer quis neque justo. Ut pellentesque feugiat tortor nec blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Donec sit amet vestibulum nisi, quis aliquet neque. Aenean turpis risus, luctus eu accumsan eget, consectetur eu quam.</p>
                          <blockquote><q>Phasellus sodales dignissim lacus, aliquam accumsan eros interdum ut. Aliquam in placerat felis. Duis a urna vitae justo efficitur sagittis. Aenean turpis risus, luctus eu accumsan eget, consectetur eu quam.</q></blockquote>',
            'thumbnail' =>  '/src/Themes/Triathlon/Resources/public/img/img5.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'triathlon-society'
        ],
        'triathlon-actu-4' => [
            'title' => 'Actualité 4',
            'slug' => 'actualite-4',
            'short_description' => 'Boliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibustew.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies, odio at congue tincidunt, libero odio tincidunt est, vel sollicitudin purus odio non leo. Vestibulum vel congue quam, sed convallis elit. Etiam porta, elit ut pharetra finibus, justo odio sagittis libero, eu ullamcorper sem lectus sit amet neque. Donec ultricies erat eu massa feugiat commodo. Nunc id tristique orci. Donec dignissim lacinia velit in semper. Sed malesuada, augue sit amet mattis finibus, erat lacus viverra nibh, vitae semper tortor erat interdum purus. Etiam gravida at lorem in hendrerit. Integer quis neque justo. Ut pellentesque feugiat tortor nec blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Donec sit amet vestibulum nisi, quis aliquet neque. Aenean turpis risus, luctus eu accumsan eget, consectetur eu quam.</p>
                          <blockquote><q>Phasellus sodales dignissim lacus, aliquam accumsan eros interdum ut. Aliquam in placerat felis. Duis a urna vitae justo efficitur sagittis. Aenean turpis risus, luctus eu accumsan eget, consectetur eu quam.</q></blockquote>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/img6.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'triathlon-society'
        ],
        'triathlon-actu-5' => [
            'title' => 'Actualité 5',
            'slug' => 'actualite-5',
            'short_description' => 'Boliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibustew.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies, odio at congue tincidunt, libero odio tincidunt est, vel sollicitudin purus odio non leo. Vestibulum vel congue quam, sed convallis elit. Etiam porta, elit ut pharetra finibus, justo odio sagittis libero, eu ullamcorper sem lectus sit amet neque. Donec ultricies erat eu massa feugiat commodo. Nunc id tristique orci. Donec dignissim lacinia velit in semper. Sed malesuada, augue sit amet mattis finibus, erat lacus viverra nibh, vitae semper tortor erat interdum purus. Etiam gravida at lorem in hendrerit. Integer quis neque justo. Ut pellentesque feugiat tortor nec blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Donec sit amet vestibulum nisi, quis aliquet neque. Aenean turpis risus, luctus eu accumsan eget, consectetur eu quam.</p>
                          <blockquote><q>Phasellus sodales dignissim lacus, aliquam accumsan eros interdum ut. Aliquam in placerat felis. Duis a urna vitae justo efficitur sagittis. Aenean turpis risus, luctus eu accumsan eget, consectetur eu quam.</q></blockquote>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/img7.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'triathlon-society'
        ],
        'triathlon-actu-6' => [
            'title' => 'Actualité 6',
            'slug' => 'actualite-6',
            'short_description' => 'Boliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibustew.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies, odio at congue tincidunt, libero odio tincidunt est, vel sollicitudin purus odio non leo. Vestibulum vel congue quam, sed convallis elit. Etiam porta, elit ut pharetra finibus, justo odio sagittis libero, eu ullamcorper sem lectus sit amet neque. Donec ultricies erat eu massa feugiat commodo. Nunc id tristique orci. Donec dignissim lacinia velit in semper. Sed malesuada, augue sit amet mattis finibus, erat lacus viverra nibh, vitae semper tortor erat interdum purus. Etiam gravida at lorem in hendrerit. Integer quis neque justo. Ut pellentesque feugiat tortor nec blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Donec sit amet vestibulum nisi, quis aliquet neque. Aenean turpis risus, luctus eu accumsan eget, consectetur eu quam.</p>
                          <blockquote><q>Phasellus sodales dignissim lacus, aliquam accumsan eros interdum ut. Aliquam in placerat felis. Duis a urna vitae justo efficitur sagittis. Aenean turpis risus, luctus eu accumsan eget, consectetur eu quam.</q></blockquote>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/img8.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'triathlon-society'
        ],
        'triathlon-race-1' => [
            'title' => 'Course 1',
            'slug' => 'course-1',
            'short_description' => 'Aliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibuste.',
            'content' => '<table class="table theme-table">
                                        <thead>
                                            <tr>
                                                <th><strong>Informations de contact</strong></th>
                                                <th><strong>Informations sur l\'événement</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Lieu de l\'événement:</strong> Versailles, France</td>
                                                <td><strong>Frais d\'entrée:</strong> 99€</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email:</strong> Lotye Léveillé</td>
                                                <td><strong>Lot à gagner:</strong> 5000€</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Téléphone:</strong> 563-232-4318</td>
                                                <td><strong>Description:</strong> La Coupe de France du Triathlon Sprint CAMTRI aura une distance de sprint pour les athlètes d\'élite.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Date de début:</strong> 24/06/15</td>
                                                <td><strong>Natation:</strong> 1 tour de 750 m</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Date de fin:</strong> 28/06/15</td>
                                                <td><strong>Course de vélo:</strong> 3 tours de 7 km; Vallonné et technique</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Dernier jour de réservation:</strong> 22/06/15</td>
                                                <td><strong>Course à pieds:</strong> 2 tours de 2,6 km; Totalement plat</td>
                                            </tr>
                                        </tbody>
                                    </table>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/race/flag-icon-01.png',
            'categories' => [
                'triathlon-course'
            ],
            'website' => 'triathlon-society'
        ],
        'triathlon-race-2' => [
            'title' => 'Course 2',
            'slug' => 'course-2',
            'short_description' => 'Boliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibustew.',
            'content' => '<table class="table theme-table">
                                        <thead>
                                            <tr>
                                                <th><strong>Informations de contact</strong></th>
                                                <th><strong>Informations sur l\'événement</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Lieu de l\'événement:</strong> Versailles, France</td>
                                                <td><strong>Frais d\'entrée:</strong> 99€</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email:</strong> Lotye Léveillé</td>
                                                <td><strong>Lot à gagner:</strong> 5000€</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Téléphone:</strong> 563-232-4318</td>
                                                <td><strong>Description:</strong> La Coupe de France du Triathlon Sprint CAMTRI aura une distance de sprint pour les athlètes d\'élite.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Date de début:</strong> 24/06/15</td>
                                                <td><strong>Natation:</strong> 1 tour de 750 m</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Date de fin:</strong> 28/06/15</td>
                                                <td><strong>Course de vélo:</strong> 3 tours de 7 km; Vallonné et technique</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Dernier jour de réservation:</strong> 22/06/15</td>
                                                <td><strong>Course à pieds:</strong> 2 tours de 2,6 km; Totalement plat</td>
                                            </tr>
                                        </tbody>
                                    </table>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/race/flag-icon-02.png',
            'categories' => [
                'triathlon-course'
            ],
            'website' => 'triathlon-society'
        ],
        'triathlon-race-3' => [
            'title' => 'Course 3',
            'slug' => 'course-3',
            'short_description' => 'Boliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibustew.',
            'content' => '<table class="table theme-table">
                                        <thead>
                                            <tr>
                                                <th><strong>Informations de contact</strong></th>
                                                <th><strong>Informations sur l\'événement</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Lieu de l\'événement:</strong> Versailles, France</td>
                                                <td><strong>Frais d\'entrée:</strong> 99€</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email:</strong> Lotye Léveillé</td>
                                                <td><strong>Lot à gagner:</strong> 5000€</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Téléphone:</strong> 563-232-4318</td>
                                                <td><strong>Description:</strong> La Coupe de France du Triathlon Sprint CAMTRI aura une distance de sprint pour les athlètes d\'élite.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Date de début:</strong> 24/06/15</td>
                                                <td><strong>Natation:</strong> 1 tour de 750 m</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Date de fin:</strong> 28/06/15</td>
                                                <td><strong>Course de vélo:</strong> 3 tours de 7 km; Vallonné et technique</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Dernier jour de réservation:</strong> 22/06/15</td>
                                                <td><strong>Course à pieds:</strong> 2 tours de 2,6 km; Totalement plat</td>
                                            </tr>
                                        </tbody>
                                    </table>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/race/flag-icon-03.png',
            'categories' => [
                'triathlon-course'
            ],
            'website' => 'triathlon-society'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadPost($manager);
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
            'Jet\Themes\Triathlon\Fixtures\LoadMedia',
            'Jet\Themes\Triathlon\Fixtures\LoadPostCategory',
        ];
    }
}