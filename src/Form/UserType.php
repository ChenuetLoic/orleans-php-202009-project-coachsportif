<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('age')
            ->add('size')
            ->add('imc')
            ->add('weight')
            ->add('fatMass')
            ->add('bodyWater')
            ->add('muscleMass')
            ->add('armCircumference')
            ->add('waistSize')
            ->add('thighCircumference')
            ->add('ruffierDickstonTest')
            ->add('three')
            ->add('pathology')
            ->add('treatment')
            ->add('prescription')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}