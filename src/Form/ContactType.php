<?php

// src/Form/ContactType.php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;


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
            ])
            ->add('captcha', Recaptcha3Type::class, [
                'constraints' => new Recaptcha3(),
                'action_name' => 'contact',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configurer ici si tu veux relier ce formulaire à une entité spécifique
        ]);
    }
}
