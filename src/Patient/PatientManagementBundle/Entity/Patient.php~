<?php

namespace Patient\PatientManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 */
class Patient
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $initial;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $telephone;


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
     * Set initial
     *
     * @param string $initial
     * @return Patient
     */
    public function setInitial($initial)
    {
        $this->initial = $initial;

        return $this;
    }

    /**
     * Get initial
     *
     * @return string 
     */
    public function getInitial()
    {
        return $this->initial;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Patient
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Patient
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Patient
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Patient
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     * @return Patient
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
    /**
     * @var \Patient\PatientManagementBundle\Entity\Booking
     */
    private $booking;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $appointments;

    /**
     * @var \Patient\PatientManagementBundle\Entity\OPD
     */
    private $opd;

    /**
     * @var \Patient\PatientManagementBundle\Entity\PatientTest
     */
    private $patientTest;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->appointments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set booking
     *
     * @param \Patient\PatientManagementBundle\Entity\Booking $booking
     * @return Patient
     */
    public function setBooking(\Patient\PatientManagementBundle\Entity\Booking $booking = null)
    {
        $this->booking = $booking;

        return $this;
    }

    /**
     * Get booking
     *
     * @return \Patient\PatientManagementBundle\Entity\Booking 
     */
    public function getBooking()
    {
        return $this->booking;
    }

    /**
     * Add appointments
     *
     * @param \Patient\PatientManagementBundle\Entity\Appointment $appointments
     * @return Patient
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

    /**
     * Set opd
     *
     * @param \Patient\PatientManagementBundle\Entity\OPD $opd
     * @return Patient
     */
    public function setOpd(\Patient\PatientManagementBundle\Entity\OPD $opd = null)
    {
        $this->opd = $opd;

        return $this;
    }

    /**
     * Get opd
     *
     * @return \Patient\PatientManagementBundle\Entity\OPD 
     */
    public function getOpd()
    {
        return $this->opd;
    }

    /**
     * Set patientTest
     *
     * @param \Patient\PatientManagementBundle\Entity\PatientTest $patientTest
     * @return Patient
     */
    public function setPatientTest(\Patient\PatientManagementBundle\Entity\PatientTest $patientTest = null)
    {
        $this->patientTest = $patientTest;

        return $this;
    }

    /**
     * Get patientTest
     *
     * @return \Patient\PatientManagementBundle\Entity\PatientTest 
     */
    public function getPatientTest()
    {
        return $this->patientTest;
    }
}
