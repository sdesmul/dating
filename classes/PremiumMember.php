<?php
/**
 * Created by PhpStorm.
 * User: saman
 * Date: 5/5/2019
 * Time: 8:09 PM
 */


class PremiumMember extends Member
{
    private $_indoorActivities, $_outdoorActivities;

    public function __construct($fname, $lname, $age, $gender, $phone, $indoorActivities,
                                $outdoorActivities)
    {
        parent::__construct($fname, $lname, $age, $gender, $phone);
        $this->_indoorActivities = $indoorActivities;
        $this->_outdoorActivities = $outdoorActivities;
        $this->setIsPremium(true);
    }

    /**
     * @return mixed
     */
    public function getIndoorActivities()
    {
        return $this->_indoorActivities;
    }

    /**
     * @param mixed $indoorActivities
     */
    public function setIndoorActivities($indoorActivities)
    {
        $this->_indoorActivities = $indoorActivities;
    }

    /**
     * @return mixed
     */
    public function getOutdoorActivities()
    {
        return $this->_outdoorActivities;
    }

    /**
     * @param mixed $outdoorActivities
     */
    public function setOutdoorActivities($outdoorActivities)
    {
        $this->_outdoorActivities = $outdoorActivities;
    }

}