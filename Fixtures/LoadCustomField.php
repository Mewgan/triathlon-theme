<?php

namespace Jet\Themes\Triathlon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadCustomField extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        'Triathlon Default Global' => [
            'title' => 'Données globales',
            'rule' => 'global',
            'operation' => '=',
            'value' => null,
            'website' => 'Triathlon Website'
        ],
        'Triathlon Global Seo' => [
            'title' => 'Google analytics',
            'rule' => 'global',
            'operation' => '=',
            'value' => null,
            'website' => 'Triathlon Website'
        ],
        'Triathlon Social Network' => [
            'title' => 'Réseaux sociaux',
            'rule' => 'global',
            'operation' => '=',
            'value' => null,
            'website' => 'Triathlon Website'
        ],
        'Triathlon Custom Css & Js' => [
            'title' => 'Css & Js',
            'rule' => 'global',
            'operation' => '=',
            'value' => null,
            'access_level' => 2,
            'website' => 'Triathlon Website',
        ],
        'Triathlon Seo' => [
            'title' => 'SEO Référencement naturel - Pour améliorer vos positions dans Google veuillez remplir les champs suivants',
            'rule' => 'everywhere',
            'operation' => '=',
            'value' => null,
            'website' => 'Triathlon Website',
        ],
        'Triathlon Home Page' => [
            'title' => 'Page d\'accueil',
            'rule' => 'page',
            'operation' => '=',
            'reference' => 'society-triathlon-home',
            'website' => 'Triathlon Website'
        ],
        'Triathlon About Us Page' => [
            'title' => 'A propos',
            'rule' => 'page',
            'operation' => '=',
            'reference' => 'society-triathlon-about-us',
            'website' => 'Triathlon Website'
        ],
        'Triathlon Race Category' => [
            'title' => 'Catégorie course',
            'rule' => 'post_category',
            'operation' => '=',
            'reference' => 'course',
            'website' => 'Triathlon Website'
        ],
    ];


    public function load(ObjectManager $manager)
    {
        $this->loadCustomField($manager);
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
        ];
    }
}