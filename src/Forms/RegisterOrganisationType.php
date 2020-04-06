<?php

namespace App\Forms;

use App\Entity\User;
use App\Forms\Models\AddressModel;
use App\Forms\Models\OrganisationModel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterOrganisationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add($builder->create('Account_Details:', FormType::class, ['inherit_data' => true])
                ->add('FirstName', TextType::class)
                ->add('LastName', TextType::class)
                ->add('PhoneNumber', TextType::class)
                ->add('Email', TextType::class)
                ->add('Password', PasswordType::class)
            )
            ->add($builder->create('Address_Details', FormType::class, ['inherit_data' => true])
                    ->add('Address', CollectionType::class, [
                        'entry_type' => AddressModel::class,
                        'entry_options' => ['label' => false],
                        'allow_add' => true,
                        'label' => false,
                    ])
            )
            ->add($builder->create('Organisation_Details', FormType::class, ['inherit_data' => true])
                ->add('Organisation', CollectionType::class, [
                    'entry_type' => OrganisationModel::class,
                    'entry_options' => ['label' => false],
                    'allow_add' => true,
                    'label' => false,
                ])
                ->add('Register', SubmitType::class)
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
    //public function buildForm(FormBuilderInterface $builder, array $options)
    //{
    //$builder
    /*->add($builder->create('Organisation_Details:', FormType::class, ['inherit_data' => true])
        ->add('Name', TextType::class)
        ->add('URL', TextType::class)
        ->add('Description', TextType::class)
        ->add('TradingTime', TextType::class)
    )*/
    /*$builder
        ->add(
            $builder->create('Account_Details:', FormType::class, ['inherit_data' => true])
                ->add('FirstName', TextType::class)
                ->add('LastName', TextType::class)
                ->add('PhoneNumber', TextType::class)
                ->add('Email', TextType::class)
                ->add('Password', PasswordType::class)
        )
        ->add($builder->create('User', FormType::class, ['inherit_data' => true])
            ->add('user', CollectionType::class, [
                'entry_type' => AddressType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true,
                'label' => false,
                'prototype' => true,
            ])
            ->add('Register', SubmitType::class)
        )
        ->setMethod('POST')
        //->setAction('/event/add')
        ->getForm();
}

public function configureOptions(OptionsResolver $resolver)
{
    $resolver->setDefaults([
        'data_class' => User::class,
        'attr' => [
            'novalidate' => 'novalidate', // comment me to reactivate the html5 validation!  🚥
        ],
    ]);
}

/*public function buildForm(FormBuilderInterface $builder, array $options)
{
    $builder
        //->add('Name', TextType::class)
       // ->add('URL', TextType::class)
       // ->add('Description', TextareaType::class)
       // ->add('TradingTime', TextType::class)
        //->add('Submit', SubmitType::class)
        ->add('Address', CollectionType::class, [
            'entry_type' => AddressType::class,
            'entry_options' => ['label' => false],
            'allow_add' => true,
            'label' => false,
        ])
        ->setMethod('POST')
        ->setAction('/organisation/add')
        ->getForm();
}

public function configureOptions(OptionsResolver $resolver)
{
    $resolver->setDefaults([
        'data_class' => Organisation::class,
    ]);
}*/
}
