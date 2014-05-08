<?php

namespace Patient\PatientManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doctor
 */
class Doctor extends Employee
{
   
    /**
     * @var integer
     */
    private $doctorType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $appointments;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->appointments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set doctorType
     *
     * @param integer $doctorType
     * @return Doctor
     */
    public function setDoctorType($doctorType)
    {
        $this->doctorType = $doctorType;

        return $this;
    }

    /**
     * Get doctorType
     *
     * @return integer 
     */
    public function getDoctorType()
    {
        return $this->doctorType;
    }

    /**
     * Add appointments
     *
     * @param \Patient\PatientManagementBundle\Entity\Appointment $appointments
     * @return Doctor
     */
    public function addAppointment(\Patient\PatientManagementBundle\Entity\Appointment $appointments)
    {
        $this->appointments[] = $appointments;

        return $this;
    }

    /**
     * Remove appointments
     *
     * @param \Patient\PatientManagementBundle\Entity\Appointment $appointments
     */
    public function removeAppointment(\Patient\PatientManagementBundle\Entity\Appointment $appointments)
    {
        $this->appointments->removeElement($appointments);
    }

    /**
     * Get appointments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAppointments()
    {
        return $this->appointments;
    }
}
