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
            'short_description' => 'I know I can conquer any challenge, because... I run.',
            'content' => '<p>To be a champion, I think you have to see the big picture. It\'s not about winning and losing; it\'s about every day hard work and about thriving on a challenge. It\'s about embracing the pain that you\'ll experience at the end of a race and not being afraid. I think people think too hard and get afraid of a challenge.</p>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/img2.jpg',
            'categories' => [],
            'website' => 'triathlon-society'
        ],
        'triathlon-service-1' => [
            'title' => 'Featured Athlete',
            'slug' => 'featured-athlete',
            'short_description' => 'Paula Browns',
            'content' => '<p>Success is the result of perfection, hard work, learning from failure, loyalty, and persistence.</p><p>To be a champion, I think you have to see the big picture. It\'s not about winning and losing; it\'s about every day hard work and about thriving on a challenge. It\'s about embracing the pain that you\'ll experience at the end of a race and not being afraid. I think people think too hard and get afraid of a challenge.</p>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/img3.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'triathlon-society'
        ],
        'triathlon-service-2' => [
            'title' => 'Photographers Wanted',
            'slug' => 'photographers-wanted',
            'short_description' => 'NYC Tri Race Weekend',
            'content' => '<p>Success is the result of perfection, hard work, learning from failure, loyalty, and persistence.</p><p>To be a champion, I think you have to see the big picture. It\'s not about winning and losing; it\'s about every day hard work and about thriving on a challenge. It\'s about embracing the pain that you\'ll experience at the end of a race and not being afraid. I think people think too hard and get afraid of a challenge.</p>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/img4.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'triathlon-society'
        ],
        'triathlon-service-3' => [
            'title' => 'Book Your Hotel',
            'slug' => 'book-your-hotel',
            'short_description' => 'For The Triathlon Today!',
            'content' => '<p>Success is the result of perfection, hard work, learning from failure, loyalty, and persistence.</p><p>To be a champion, I think you have to see the big picture. It\'s not about winning and losing; it\'s about every day hard work and about thriving on a challenge. It\'s about embracing the pain that you\'ll experience at the end of a race and not being afraid. I think people think too hard and get afraid of a challenge.</p>',
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
												<th><strong>Contact Information</strong></th>
												<th><strong>Event Information</strong></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><strong>Event Location:</strong> Versailles, France</td>
												<td><strong>Entry Fee:</strong> $99</td>
											</tr>
											<tr>
												<td><strong>Email:</strong> Lotye Léveillé</td>
												<td><strong>Money Prize:</strong> $5000</td>
											</tr>
											<tr>
												<td><strong>Phone:</strong> 563-232-4318</td>
												<td><strong>Description:</strong> CAMTRI Sprint Triathlon French Cup will feature a sprint distance for elite athletes.</td>
											</tr>
											<tr>
												<td><strong>Start date:</strong> 24/06/15</td>
												<td><strong>Swim Course:</strong> 1 lap of 750 m</td>
											</tr>
											<tr>
												<td><strong>End date:</strong> 28/06/15</td>
												<td><strong>Bike Course:</strong> 3 laps of 7 km; hilly and technical</td>
											</tr>
											<tr>
												<td><strong>Last day to book by:</strong> 22/06/15</td>
												<td><strong>Run Course:</strong> 2 laps of 2,6 km; totally flat</td>
											</tr>
										</tbody>
									</table>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/race/flag-icon-01.png',
            'categories' => [
                'course'
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
												<th><strong>Contact Information</strong></th>
												<th><strong>Event Information</strong></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><strong>Event Location:</strong> Versailles, France</td>
												<td><strong>Entry Fee:</strong> $99</td>
											</tr>
											<tr>
												<td><strong>Email:</strong> Lotye Léveillé</td>
												<td><strong>Money Prize:</strong> $5000</td>
											</tr>
											<tr>
												<td><strong>Phone:</strong> 563-232-4318</td>
												<td><strong>Description:</strong> CAMTRI Sprint Triathlon French Cup will feature a sprint distance for elite athletes.</td>
											</tr>
											<tr>
												<td><strong>Start date:</strong> 24/06/15</td>
												<td><strong>Swim Course:</strong> 1 lap of 750 m</td>
											</tr>
											<tr>
												<td><strong>End date:</strong> 28/06/15</td>
												<td><strong>Bike Course:</strong> 3 laps of 7 km; hilly and technical</td>
											</tr>
											<tr>
												<td><strong>Last day to book by:</strong> 22/06/15</td>
												<td><strong>Run Course:</strong> 2 laps of 2,6 km; totally flat</td>
											</tr>
										</tbody>
									</table>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/race/flag-icon-02.png',
            'categories' => [
                'course'
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
												<th><strong>Contact Information</strong></th>
												<th><strong>Event Information</strong></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><strong>Event Location:</strong> Versailles, France</td>
												<td><strong>Entry Fee:</strong> $99</td>
											</tr>
											<tr>
												<td><strong>Email:</strong> Lotye Léveillé</td>
												<td><strong>Money Prize:</strong> $5000</td>
											</tr>
											<tr>
												<td><strong>Phone:</strong> 563-232-4318</td>
												<td><strong>Description:</strong> CAMTRI Sprint Triathlon French Cup will feature a sprint distance for elite athletes.</td>
											</tr>
											<tr>
												<td><strong>Start date:</strong> 24/06/15</td>
												<td><strong>Swim Course:</strong> 1 lap of 750 m</td>
											</tr>
											<tr>
												<td><strong>End date:</strong> 28/06/15</td>
												<td><strong>Bike Course:</strong> 3 laps of 7 km; hilly and technical</td>
											</tr>
											<tr>
												<td><strong>Last day to book by:</strong> 22/06/15</td>
												<td><strong>Run Course:</strong> 2 laps of 2,6 km; totally flat</td>
											</tr>
										</tbody>
									</table>',
            'thumbnail' => '/src/Themes/Triathlon/Resources/public/img/race/flag-icon-03.png',
            'categories' => [
                'course'
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