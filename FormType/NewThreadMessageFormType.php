<?php

namespace FOS\MessageBundle\FormType;

use AppBundle\Entity\User;
use FOS\UserBundle\Form\Type\UsernameFormType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Message form type for starting a new conversation
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 */
class NewThreadMessageFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recipient', EntityType::class, array('class' => User::class, 'label' => 'recipient', 'translation_domain' => 'FOSMessageBundle'))
            ->add('subject', TextType::class, array('label' => 'subject', 'translation_domain' => 'FOSMessageBundle'))
            ->add('body', TextareaType::class, array('label' => 'body', 'translation_domain' => 'FOSMessageBundle'));
    }

    public function getName()
    {
        return '';
    }
}
