<?php

namespace App\Forms\Models;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressModel extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Number', TextType::class, [
                'label' => 'Street Number',
            ])
            ->add('StreetName', TextType::class, [
                'label' => 'Street Name',
            ])
            ->add('Suburb', TextType::class, [
                'label' => 'Suburb',
            ])
            ->add('Postcode', IntegerType::class, [
                'label' => 'Postcode',
            ])
            ->add('State', TextType::class, [
                'label' => 'State',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
