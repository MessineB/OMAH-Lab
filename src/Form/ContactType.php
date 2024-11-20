<?php

// src/Form/ContactType.php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom', TextType::class, [
                'label' => 'Prénom *',
                'required' => true,
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom de famille *',
                'required' => true,
            ])
            ->add('email', EmailType::class, [
                'label' => 'E-mail *',
                'required' => true,
            ])
            ->add('sujet', ChoiceType::class, [
                'label' => 'Votre demande porte sur ? *',
                'choices' => [
                    'Services' => 'services',
                    'L\'association' => 'association',
                    'Autre' => 'autre',
                ],
                'placeholder' => 'Sélectionnez un sujet',
                'required' => true,
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message *',
                'required' => true,
            ])
            ->add('consent', CheckboxType::class, [
                'label' => 'En soumettant ce formulaire, j\'accepte que les informations saisies soient utilisées pour me recontacter *',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configurer ici si tu veux relier ce formulaire à une entité spécifique
        ]);
    }
}
