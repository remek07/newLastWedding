<?php

namespace App\Form;

use App\Entity\ListaObecnosci;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListaObecnosciType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Imie')
            ->add('Nazwisko')
            ->add('Email')
            ->add('save', SubmitType::class, ['label' => 'Potwierdz obecność']);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ListaObecnosci::class,
        ]);
    }
}
