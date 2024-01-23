<?php

namespace App\Form;

use App\Entity\Medecins;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Services;

class MedecinsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_med')
            ->add('adresse')
            ->add('email')
            ->add('serv',EntityType::class,['class'=>Services::class,'choice_label'=>'id']);

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Medecins::class,
        ]);
    }
}
