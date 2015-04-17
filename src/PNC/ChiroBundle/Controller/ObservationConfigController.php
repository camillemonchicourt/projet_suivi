<?php

namespace PNC\ChiroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class ObservationConfigController extends Controller{
    // path : GET chiro/config/observation/form
    public function getFormAction(){

        $out = array(
            '__groups__'=>array('Observation'),
            'Observation'=>array(
                array(
                    'name'=>'id',
                    'label'=>'Id',
                    'type'=>'hidden',
                    'help'=>'',
                    'options'=>array()
                ),
                array(
                    'name'=>'siteId',
                    'label'=>'Site',
                    'type'=>'hidden',
                    'help'=>'',
                    'options'=>array()
                ),
                array(
                    'name'=>'observateurs',
                    'label'=>'Observateurs',
                    'type'=>'xhr',
                    'help'=>'',
                    'options'=>array('multi'=>true, 'url'=>'chiro/observateurs', 'reverseurl'=>'chiro/observateurs/id', 'ref'=>'nomComplet'),
                    'default'=>array()
                ),
                array(
                    'name'=>'obsDate',
                    'label'=>'Date',
                    'type'=>'date',
                    'help'=>'',
                    'options'=>array()
                ),
                array(
                    'name'=>'obsCommentaire',
                    'label'=>'Commentaires',
                    'type'=>'text',
                    'help'=>'',
                    'options'=>array()
                ),
                array(
                    'name'=>'obsTemperature',
                    'label'=>'Température',
                    'type'=>'string',
                    'help'=>'',
                    'options'=>array()
                ),
                array(
                    'name'=>'obsHumidite',
                    'label'=>'Humidité',
                    'type'=>'string',
                    'help'=>'',
                    'options'=>array()
                ),
                array(
                    'name'=>'geom',
                    'label'=>'Geom',
                    'type'=>'geom',
                    'help'=>'',
                    'options'=>array(),
                    'default'=>array(),
                )
            ),

        );

        return new JsonResponse($out);
    }

    // path : GET chiro/config/observation/list
    public function getListAction(){

        //TODO
        $out = array();

        return new JsonResponse($out);
    }

    // path : GET chiro/config/observation/detail
    public function getDetailAction(){

        $out = array(
            array(
                'name'=>'siteNom',
                'label'=>'Site',
                'type'=>'string',
                'help'=>'',
                'options'=>array()
            ),
            array(
                'name'=>'obsDate',
                'label'=>'Date',
                'type'=>'date',
                'help'=>'',
                'options'=>array()
            ),
            array(
                'name'=>'numerisateur',
                'label'=>'Numerisateur',
                'type'=>'string',
                'help'=>'',
                'options'=>array()
            ),
            array(
                'name'=>'observateurs',
                'label'=>'Observateurs',
                'type'=>'multi',
                'help'=>'',
                'options'=>array('nomComplet')
            ),
            array(
                'name'=>'obsCommentaire',
                'label'=>'Commentaires',
                'type'=>'string',
                'help'=>'',
                'options'=>array()
            ),
            array(
                'name'=>'obsTemperature',
                'label'=>'Température',
                'type'=>'string',
                'help'=>'',
                'options'=>array()
            ),
            array(
                'name'=>'obsHumidite',
                'label'=>'Humidité',
                'type'=>'string',
                'help'=>'',
                'options'=>array()
            ),
        );

        return new JsonResponse($out);
    }
}
