<?php
/**
 * Created by PhpStorm.
 * User: saman
 * Date: 5/5/2019
 * Time: 8:09 PM
 */

/**This is the class for a premium memeber
 *
 * The premium member class is an option users
 * may choose to pay for extra features
 * Class PremiumMember
 * @author samantha desmul <samanthadesmul@mail.greenriver.edu>
 */
class PremiumMember extends Member
{
    private $_indoorActivities, $_outdoorActivities;

    /**
     * PremiumMember constructor.
     * @param $fname first name
     * @param $lname last name
     * @param $age age of user
     * @param $gender gender
     * @param $phone phone number
     * @param $indoorActivities indoor activities
     * @param $outdoorActivities outdoor actitities
     */
    public function __construct($fname, $lname, $age, $gender, $phone, $indoorActivities,
                                $outdoorActivities)
    {
        parent::__construct($fname, $lname, $age, $gender, $phone);
        $this->_indoorActivities = $indoorActivities;
        $this->_outdoorActivities = $outdoorActivities;
        $this->setIsPremium(true);
    }

    /**get indoor activities
     * @return indoor
     */
    public function getIndoorActivities()
    {
        return $this->_indoorActivities;
    }

    /**set indoor activities
     * @param $indoorActivities
     */
    public function setIndoorActivities($indoorActivities)
    {
        $this->_indoorActivities = $indoorActivities;
    }

    /**get outdooractitities
     * @return outdoor
     */
    public function getOutdoorActivities()
    {
        return $this->_outdoorActivities;
    }

    /**set outdoor activities
     * @param $outdoorActivities
     */
    public function setOutdoorActivities($outdoorActivities)
    {
        $this->_outdoorActivities = $outdoorActivities;
    }

}