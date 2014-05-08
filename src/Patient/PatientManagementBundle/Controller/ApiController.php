<?php

namespace Patient\PatientManagementBundle\Controller;

use BreezeJsBundle\Controller\BreezeJsController;

class ApiController extends BreezeJsController {
    public function getClientClasses() {
//        return array(
//            'Patient\PatientManagementBundle\Entity\Doctor',
//            'Patient\PatientManagementBundle\Entity\Administrator',
//            'Patient\PatientManagementBundle\Entity\Appointment',
//            'Patient\PatientManagementBundle\Entity\Room',
//            'Patient\PatientManagementBundle\Entity\RoomType'
//        );
        
    }
    
    public function apiAction($route) {
        return parent::apiAction($route);
    }
}
