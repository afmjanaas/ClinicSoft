<?php

namespace Patient\PatientManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 */
class Room
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $typeId;


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
     * Set typeId
     *
     * @param integer $typeId
     * @return Room
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return integer 
     */
    public function getTypeId()
    {
        return $this->typeId;
    }
    /**
     * @var \Patient\PatientManagementBundle\Entity\RoomType
     */
    private $roomType;

    /**
     * @var \Patient\PatientManagementBundle\Entity\Booking
     */
    private $booking;


    /**
     * Set roomType
     *
     * @param \Patient\PatientManagementBundle\Entity\RoomType $roomType
     * @return Room
     */
    public function setRoomType(\Patient\PatientManagementBundle\Entity\RoomType $roomType = null)
    {
        $this->roomType = $roomType;

        return $this;
    }

    /**
     * Get roomType
     *
     * @return \Patient\PatientManagementBundle\Entity\RoomType 
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Set booking
     *
     * @param \Patient\PatientManagementBundle\Entity\Booking $booking
     * @return Room
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
}
