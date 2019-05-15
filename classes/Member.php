<?php
/**
 * Created by PhpStorm.
 * User: saman
 * Date: 5/5/2019
 * Time: 7:31 PM
 */

/**This class is for normal members
 *
 * This class is the non paid for option for
 * member
 * Class Member
 * @author samantha desmul <samanthadesmul@mail.greenriver.edu>
 */

class Member
{
    protected $fname, $lname, $age, $gender, $phone, $email, $state, $seeking, $bio, $img,
        $isPremium = false;

    /**Constructor for member
     * Member constructor.
     * @param $fname firstname
     * @param $lname lastname
     * @param $age age
     * @param $gender gender
     * @param $phone phone
     */
    public function __construct($fname, $lname, $age, $gender, $phone)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;
    }

    /**get state
     * @return state
     */
    public function getState()
    {
        return $this->state;
    }

    /**set state
     *
     * @param $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**get imgage
     * @return img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**set image
     * @param  $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**get is premium membership
     * @return $isPremium
     */
    public function getIsPremium()
    {
        return $this->isPremium;
    }

    /**set is premium
     * @param $isPremium
     */
    public function setIsPremium($isPremium)
    {
        $this->isPremium = $isPremium;
    }

    /**get first name
     *
     * @return $Fname
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**set first name
     * @param $fname
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    /**get last name
     * @return $lname
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**set last name
     * @param  $lname
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    /**get age
     * @return $age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**set age
     * @param  $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**get gender
     * @return $gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**set gender
     * @param  $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**get phone number
     * @return $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**set phone number
     * @param $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**get email
     * @return $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**set email
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**get seeking
     * @return $seeking
     */
    public function getSeeking()
    {
        return $this->seeking;
    }

    /**set seeking
     * @param $seeking
     */
    public function setSeeking($seeking)
    {
        $this->seeking = $seeking;
    }

    /**get bio
     * @return $bio
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**set bio
     * @param  $bio
     */
    public function setBio($bio)
    {
        $this->bio = $bio;
    }


}