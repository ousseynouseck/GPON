<?php

namespace App\Form;

use App\Entity\Ncha;
use App\Entity\Nchd;
use App\Entity\Nomsr;
use App\Entity\Autres;
use App\Entity\Statut;
use App\Entity\Blocage;
use App\Entity\Central;
use App\Entity\Pochage;
use App\Entity\Support;
use App\Entity\Etiquette;
use App\Entity\TypeBoite;
use App\Entity\TypeCable;
use App\Entity\GaineGrise;
use App\Entity\GaineVerte;
use App\Entity\TypeTirage;
use App\Entity\GaineGalvar;
use App\Entity\CapaciteCable;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class AutreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            


            ->add('centrales', EntityType::class, array(
                "class" => Central::class,
                'choice_label' => function ($nomcentral) {
                    return $nomcentral->getNom();
                }
            ))
           
            ->add('items', EntityType::class, array(
                "class" => Nomsr::class,
                'choice_label' => function ($nomcentral) {
                    return $nomcentral->getNoms();
                }
            ))
           


            ->add('nchas', EntityType::class, array(
                "class" => Ncha::class,
                'choice_label' => function ($nomcentral) {
                    return $nomcentral->getNomcha();
                }
            ))
            ->add('nchads', EntityType::class, array(
                "class" => Nchd::class,
                'choice_label' => function ($nomcentral) {
                    return $nomcentral->getNomchd();
                }
            ))
            ->add('bmd', IntegerType::class)
            ->add('bma')
            ->add('longueurtirage')
            ->add('actions')
            ->add('commentaires')
            ->add('typeboites', EntityType::class, array(
                "class" => TypeBoite::class,
                'choice_label' => function ($nomcentral) {
                    return $nomcentral->getNomtypeb();
                }
            ))
            ->add('typecables', EntityType::class, array(
                "class" => TypeCable::class,
                'choice_label' => function ($nomcentral) {
                    return $nomcentral->getNomtypec();
                }
            ))
            ->add('capacitecables', EntityType::class, array(
                "class" => CapaciteCable::class,
                'choice_label' => function ($nomcentral) {
                    return $nomcentral->getNomcapacite();
                }
            ))
            ->add('eql')
            ->add('zoneblocage')
            ->add('numerocoupleur')
            ->add('blocages', EntityType::class, array(
                "class" => Blocage::class,
                'choice_label' => function ($nomcentral) {
                    return $nomcentral->getNomblocage();
                }
            ))
          
            ->add('etiquettes', EntityType::class, array(
                "class" => Etiquette::class,
                'choice_label' => function ($nomcentral) {
                    return $nomcentral->getNometq();
                }
            ))
            ->add('gainegalvars', EntityType::class, array(
                "class" => GaineGalvar::class,
                'choice_label' => function ($nomcentral) {
                    return $nomcentral->getNomggv();
                }
            ))
            ->add('gainegrise', EntityType::class, array(
                "class" => GaineGrise::class,
                'choice_label' => function ($nomcentral) {
                    return $nomcentral->getNomgg();
                }
            ))
            ->add('gainevertes', EntityType::class, array(
                "class" => GaineVerte::class,
                'choice_label' => function ($nomcentral) {
                    return $nomcentral->getNomgv();
                }
            ))
           
            ->add('pochages', EntityType::class, array(
                "class" => Pochage::class,
                'choice_label' => function ($nomcentral) {
                    return $nomcentral->getNompochage();
                }
            ))
            ->add('statuts', EntityType::class, array(
                "class" => Statut::class,
                'choice_label' => function ($nomcentral) {
                    return $nomcentral->getNomstatut();
                }
            ))
           
            ->add('typetirages', EntityType::class, array(
                "class" => TypeTirage::class,
                'choice_label' => function ($nomcentral) {
                    return $nomcentral->getNomtypt();
                }
            ))

            ->add('port', EntityType::class, array(
                "class" => Support::class,
                'choice_label' => function ($nomcentral) {
                    return $nomcentral->getNomsupport();
                }
            ))
         
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Autres::class,
        ]);
    }
}
