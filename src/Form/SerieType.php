<?php

namespace App\Form;

use App\Entity\Serie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SerieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Title'
            ])
            ->add('overview', null, [
                'label' => 'Description',
                'required' => false,
            ])
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Cancelled' => 'Cancelled',
                    'ended' => 'ended',
                    'returning' => 'returning'
                ],
                'multiple' => false,
                'label' => 'Status'
            ])
            ->add('vote', null, [
                'label' => 'Vote'
            ])
            ->add('popularity', null, [
                'label' => 'Popularity'
            ])
            ->add('genres', null, [
                'label' => 'Genres'
            ])
            ->add('firstAirDate', DateType::class, [
                'html5' => true,
                'widget' => 'single_text',
                'label' => 'First air date'
            ])
            ->add('lastAirDate', DateType::class, [
                'html5' => true,
                'widget' => 'single_text',
                'label' => 'Last air date'
            ])
            ->add('backdrop', null, [
                'label' => 'Backdrop'
            ])
            ->add('poster', null, [
                'label' => 'Poster'
            ])
            ->add('tmdbId', null, [
                'label' => 'Id TMDB'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Serie::class,
        ]);
    }
}
