<?php

namespace Patient\PatientManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RoomType
 */
class RoomType
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $price;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set type
     *
     * @param string $type
     * @return RoomType
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return RoomType
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

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
     * @var \Patient\PatientManagementBundle\Entity\Room
     */
    private $room;


    /**
     * Set room
     *
     * @param \Patient\PatientManagementBundle\Entity\Room $room
     * @return RoomType
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
}
