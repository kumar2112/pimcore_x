<?php
namespace KrishMarDigitalBundle\EventListener;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SecurityListener
 *
 * @author praveen
 */
 use Pimcore\Event\Admin\IndexActionSettingsEvent;
 
 
class SecurityListener {
    public function onAuthentication(IndexActionSettingsEvent $event){
        
    }
}
