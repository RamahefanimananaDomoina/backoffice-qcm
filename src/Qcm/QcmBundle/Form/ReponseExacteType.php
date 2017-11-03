<?php

namespace Qcm\QcmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Qcm\QcmBundle\Form\QuestionType;

class ReponseExacteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('question', 'entity', array(
                'class'=> 'Qcm\QcmBundle\Entity\Question',
                'property'=> 'contenu_question',
                'multiple' => false
            ))
            ->add('reponse', 'entity', array(
               'class' => 'Qcm\QcmBundle\Entity\Reponse',
               'property' => 'contenu_reponse'
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Qcm\QcmBundle\Entity\ReponseExacte'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'qcm_qcmbundle_reponseexacte';
    }
}
