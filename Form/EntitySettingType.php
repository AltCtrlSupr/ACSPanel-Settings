<?php

namespace ACS\ACSPanelSettingsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use ACS\ACSPanelSettingsBundle\Form\EventListener\AdaptFormSubscriber;

class EntitySettingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user_fields = array();

        $builder
            ->add('setting_key','hidden')
            ->add('context', 'hidden')
            ->add('focus', 'hidden')
        ;

        $subscriber = new AdaptFormSubscriber($builder->getFormFactory(), $user_fields);
        $builder->addEventSubscriber($subscriber);
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ACS\ACSPanelBundle\Entity\PanelSetting',
        ));
    }

    public function getName()
    {
        return 'acs_settingsbundle_configsettingtype';
    }
}
