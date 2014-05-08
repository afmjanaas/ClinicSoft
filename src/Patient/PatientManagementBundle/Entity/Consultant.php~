<?php

namespace Patient\PatientManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultant
 */
class Consultant extends Employee
{
   
    /**
     * @var integer
     */
    private $doctorId;


    /**
     * Set doctorId
     *
     * @param integer $doctorId
     * @return Consultant
     */
    public function setDoctorId($doctorId)
    {
        $this->doctorId = $doctorId;

        return $this;
    }

    /**
     * Get doctorId
     *
     * @return integer 
     */
    public function getDoctorId()
    {
        return $this->doctorId;
    }
}
