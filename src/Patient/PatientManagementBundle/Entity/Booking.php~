<?php

namespace Patient\PatientManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Booking
 */
class Booking
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $roomNo;

    /**
     * @var string
     */
    private $nic;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;


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
     * Set roomNo
     *
     * @param string $roomNo
     * @return Booking
     */
    public function setRoomNo($roomNo)
    {
        $this->roomNo = $roomNo;

        return $this;
    }

    /**
     * Get roomNo
     *
     * @return string 
     */
    public function getRoomNo()
    {
        return $this->roomNo;
    }

    /**
     * Set nic
     *
     * @param string $nic
     * @return Booking
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
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Booking
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Booking
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    /**
     * @var \Patient\PatientManagementBundle\Entity\Room
     */
    private $room;

    /**
     * @var \Patient\PatientManagementBundle\Entity\Patient
     */
    private $patient;


    /**
     * Set room
     *
     * @param \Patient\PatientManagementBundle\Entity\Room $room
     * @return Booking
     */
    public function setRoom(\Patient\PatientManagementBundle\Entity\Room $room = null)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return \Patient\PatientManagementBundle\Entity\Room 
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Set patient
     *
     * @param \Patient\PatientManagementBundle\Entity\Patient $patient
     * @return Booking
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
}
