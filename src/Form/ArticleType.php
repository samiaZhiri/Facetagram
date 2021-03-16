<?php 
// src/Form/ArticleType.php
namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, ['label' => 'Titre', 'required'=> true])
            ->add('content', TextareaType::class, ['label' => 'Description de l\'article'])
            ->add('author', TextType::class)
            ->add('price', CurrencyType::class)
            ->add('startDate', DateType::class)
            ->add('endDate', DateType::class)
            ->add('email', EmailType::class)
            ->add('phoneNumber', TelType::class)
            ->add('color', CheckboxType::class, [
                'label'    => 'Se faire livrer',
                'required' => false,
            ])            
            ->add('signed', RadioType::class)
            ->add('city', CountryType::class)
            ->add('country', CountryType::class)
            ->add('save', SubmitType::class, [
                'attr' => ['class' => 'save'],
            ]);
            

        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}