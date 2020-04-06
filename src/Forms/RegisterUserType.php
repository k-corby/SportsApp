<?php

namespace App\Forms;

use App\Entity\User;
use App\Forms\Models\AddressModel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            $builder->create('Account_Details:', FormType::class, ['inherit_data' => true])
                ->add('FirstName', TextType::class)
                ->add('LastName', TextType::class)
                ->add('PhoneNumber', TextType::class)
                ->add('Email', TextType::class)
                ->add('Password', PasswordType::class)
        )
        ->add(
            $builder->create('Address_Details', FormType::class, ['inherit_data' => true])
                ->add('Address', CollectionType::class, [
                    'entry_type' => AddressModel::class,
                    'entry_options' => ['label' => false],
                    'allow_add' => true,
                    'label' => false,
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
        ]);
    }
}
