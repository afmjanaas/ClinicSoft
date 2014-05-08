<?php

namespace Patient\PatientManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appointment
 */
class Appointment
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $doctorId;

    /**
     * @var string
     */
    private $nic;

    /**
     * @var integer
     */
    private $patientId;

    /**
     * @var \DateTime
     */
    private $time;

    /**
     * @var \DateTime
     */
    private $date;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set doctorId
     *
     * @param integer $doctorId
     * @return Appointment
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

    /**
     * Set nic
     *
     * @param string $nic
     * @return Appointment
     */
    public function setNic($nic)
    {
        $this->nic = $nic;

        return $this;
    }

    /**
     * Get nic
     *
     * @return string 
     */
    public function getNic()
    {
        return $this->nic;
    }

    /**
     * Set patientId
     *
     * @param integer $patientId
     * @return Appointment
     */
    public function setPatientId($patientId)
    {
        $this->patientId = $patientId;

        return $this;
    }

    /**
     * Get patientId
     *
     * @return integer 
     */
    public function getPatientId()
    {
        return $this->patientId;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     * @return Appointment
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Appointment
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * @var \Patient\PatientManagementBundle\Entity\Patient
     */
    private $patient;

    /**
     * @var \Patient\PatientManagementBundle\Entity\Doctor
     */
    private $doctor;


    /**
     * Set patient
     *
     * @param \Patient\PatientManagementBundle\Entity\Patient $patient
     * @return Appointment
     */
    public function setPatient(\Patient\PatientManagementBundle\Entity\Patient $patient = null)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \Patient\PatientManagementBundle\Entity\Patient 
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set doctor
     *
     * @param \Patient\PatientManagementBundle\Entity\Doctor $doctor
     * @return Appointment
     */
    public function setDoctor(\Patient\PatientManagementBundle\Entity\Doctor $doctor = null)
    {
        $this->doctor = $doctor;

        return $this;
    }

    /**
     * Get doctor
     *
     * @return \Patient\PatientManagementBundle\Entity\Doctor 
     */
    public function getDoctor()
    {
        return $this->doctor;
    }
}
