<?php

namespace Patient\PatientManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OPD
 */
class OPD
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nic;

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
     * Set nic
     *
     * @param string $nic
     * @return OPD
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
     * Set date
     *
     * @param \DateTime $date
     * @return OPD
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $patients;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->patients = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add patients
     *
     * @param \Patient\PatientManagementBundle\Entity\Patient $patients
     * @return OPD
     */
    public function addPatient(\Patient\PatientManagementBundle\Entity\Patient $patients)
    {
        $this->patients[] = $patients;

        return $this;
    }

    /**
     * Remove patients
     *
     * @param \Patient\PatientManagementBundle\Entity\Patient $patients
     */
    public function removePatient(\Patient\PatientManagementBundle\Entity\Patient $patients)
    {
        $this->patients->removeElement($patients);
    }

    /**
     * Get patients
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPatients()
    {
        return $this->patients;
    }
}
