<?php

namespace Jet\Themes\Triathlon\Fixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Services\LoadFixture;

class LoadMedia extends AbstractFixture
{
    use LoadFixture;

    protected $data = [
        [
            'title' => 'Theme triathlon thumbnail',
            'path' => '/public/media/default/thumbnail/theme-triathlon-thumbnail.png',
            'type' => 'image/png',
            'size' => 137577,
            'access_level' => 2,
            'alt' => 'Theme triathlon thumbnail'
        ],
        [
            'title' => 'Logo theme triathlon',
            'path' => '/src/Themes/Triathlon/Resources/public/img/logo.png',
            'type' => 'image/png',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Logo triathlon'
        ],
        [
            'title' => 'Theme triathlon home page slide 1',
            'path' => '/src/Themes/Triathlon/Resources/public/img/slider-images/img1.png',
            'type' => 'image/png',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Theme triathlon home page slide 1'
        ],
        [
            'title' => 'Theme triathlon home page slide 2',
            'path' => '/src/Themes/Triathlon/Resources/public/img/slider-images/img2.png',
            'type' => 'image/png',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Theme triathlon home page slide 2'
        ],
        [
            'title' => 'Theme triathlon home page slide 3',
            'path' => '/src/Themes/Triathlon/Resources/public/img/slider-images/img3.png',
            'type' => 'image/png',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Theme triathlon home page slide 3'
        ],
        [
            'title' => 'Race background image',
            'path' => '/src/Themes/Triathlon/Resources/public/img/race-img.png',
            'type' => 'image/png',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Race background image'
        ],
        [
            'title' => 'Image 2',
            'path' => '/src/Themes/Triathlon/Resources/public/img/img2.jpg',
            'type' => 'image/jpg',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Image 2'
        ],
        [
            'title' => 'Image 3',
            'path' => '/src/Themes/Triathlon/Resources/public/img/img3.jpg',
            'type' => 'image/jpg',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Image 3'
        ],
        [
            'title' => 'Image 4',
            'path' => '/src/Themes/Triathlon/Resources/public/img/img4.jpg',
            'type' => 'image/jpg',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Image 4'
        ],
        [
            'title' => 'Image 5',
            'path' => '/src/Themes/Triathlon/Resources/public/img/img5.jpg',
            'type' => 'image/jpg',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Image 5'
        ],
        [
            'title' => 'Image 6',
            'path' => '/src/Themes/Triathlon/Resources/public/img/img6.jpg',
            'type' => 'image/jpg',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Image 6'
        ],
        [
            'title' => 'Image 7',
            'path' => '/src/Themes/Triathlon/Resources/public/img/img7.jpg',
            'type' => 'image/jpg',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Image 7'
        ],
        [
            'title' => 'Image 8',
            'path' => '/src/Themes/Triathlon/Resources/public/img/img8.jpg',
            'type' => 'image/jpg',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Image 8'
        ],
        [
            'title' => 'Image 9',
            'path' => '/src/Themes/Triathlon/Resources/public/img/img9.jpg',
            'type' => 'image/jpg',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Image 9'
        ],
        [
            'title' => 'Image 10',
            'path' => '/src/Themes/Triathlon/Resources/public/img/img10.jpg',
            'type' => 'image/jpg',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Image 10'
        ],
        [
            'title' => 'Image 11',
            'path' => '/src/Themes/Triathlon/Resources/public/img/img11.jpg',
            'type' => 'image/jpg',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Image 11'
        ],
        [
            'title' => 'Partenaire 1',
            'path' => '/src/Themes/Triathlon/Resources/public/img/sponsor-01.png',
            'type' => 'image/png',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Partenaire'
        ],
        [
            'title' => 'Partenaire 3',
            'path' => '/src/Themes/Triathlon/Resources/public/img/sponsor-02.png',
            'type' => 'image/png',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Partenaire'
        ],
        [
            'title' => 'Partenaire 3',
            'path' => '/src/Themes/Triathlon/Resources/public/img/sponsor-03.png',
            'type' => 'image/png',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Partenaire'
        ],
        [
            'title' => 'Partenaire 4',
            'path' => '/src/Themes/Triathlon/Resources/public/img/sponsor-04.png',
            'type' => 'image/png',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Partenaire'
        ],
        [
            'title' => 'Partenaire 5',
            'path' => '/src/Themes/Triathlon/Resources/public/img/sponsor-05.png',
            'type' => 'image/png',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Partenaire'
        ],
        [
            'title' => 'Stanley T. Bullard',
            'path' => '/src/Themes/Triathlon/Resources/public/img/about-us/img4.jpg',
            'type' => 'image/jpg',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Organisateur'
        ],
        [
            'title' => 'Iris R. Carter',
            'path' => '/src/Themes/Triathlon/Resources/public/img/about-us/img5.jpg',
            'type' => 'image/jpg',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Organisateur'
        ],
        [
            'title' => 'Teresa Hughes',
            'path' => '/src/Themes/Triathlon/Resources/public/img/about-us/img6.jpg',
            'type' => 'image/jpg',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Organisateur'
        ],
        [
            'title' => 'Elisa Stephen',
            'path' => '/src/Themes/Triathlon/Resources/public/img/about-us/img7.jpg',
            'type' => 'image/jpg',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Organisateur'
        ],
        [
            'title' => 'Flag 1',
            'path' => '/src/Themes/Triathlon/Resources/public/img/race/flag-icon-01.png',
            'type' => 'image/png',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Flag'
        ],
        [
            'title' => 'Flag 2',
            'path' => '/src/Themes/Triathlon/Resources/public/img/race/flag-icon-02.png',
            'type' => 'image/png',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Flag'
        ],
        [
            'title' => 'Flag 3',
            'path' => '/src/Themes/Triathlon/Resources/public/img/race/flag-icon-03.png',
            'type' => 'image/png',
            'size' => 0,
            'access_level' => 2,
            'alt' => 'Flag'
        ],
    ];
    
    public function load(ObjectManager $manager)
    {
        $this->loadMedia($manager);
    }
}