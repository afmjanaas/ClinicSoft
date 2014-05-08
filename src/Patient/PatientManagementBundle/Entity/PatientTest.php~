<?php

namespace Patient\PatientManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PatientTest
 */
class PatientTest
{
    /**
     * @var integer
     */
    private $id;


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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $patients;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tests;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->patients = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tests = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add patients
     *
     * @param \Patient\PatientManagementBundle\Entity\Patient $patients
     * @return PatientTest
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

    /**
     * Add tests
     *
     * @param \Patient\PatientManagementBundle\Entity\Test $tests
     * @return PatientTest
     */
    public function addTest(\Patient\PatientManagementBundle\Entity\Test $tests)
    {
        $this->tests[] = $tests;

        return $this;
    }

    /**
     * Remove tests
     *
     * @param \Patient\PatientManagementBundle\Entity\Test $tests
     */
    public function removeTest(\Patient\PatientManagementBundle\Entity\Test $tests)
    {
        $this->tests->removeElement($tests);
    }

    /**
     * Get tests
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTests()
    {
        return $this->tests;
    }
}
