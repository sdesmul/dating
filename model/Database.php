<?php
/**
 * Created by PhpStorm.
 * User: saman
 * Date: 5/27/2019
 * Time: 11:09 AM
 */

require '/home/sdesmulc/config.php';

class Database
{
    //connection to database
    private $_dbh;

    function __construct()
    {
//        $this->connect();
//        echo "success";
    }

    protected $memberValues = array(
        "fname" => "",
        "lname" => "",
        "gender" => "",
        "seeking" => "",
        "email" => "",
        "age" => "",
        "phone" => "",
        "interests" => "",
        "bio" => "",
        "premium" => "",
        "state" => "",
        "image" => "",
    );

    /**
     * databaseFunctions constructor.
     * @param array $memberValues
     */
    /*   public function __construct(array $memberValues)
       {
           //for every value display
           foreach ($memberValues as $key => $value)
           {
               $this->setValue($key, $value);
           }
       }*/


    //This setting value idea came from jacob to check the values

    /**
     * This method will allow us to pass into constructor an array and still be able to check
     * the inputted values and makes sure they are correct by ending them from their Varchar values
     * @param $key $key the required field
     * @param $value $value the data will be passed and retrieved
     * @return bool
     */
    function setValue($key, $value)
    {
        //fields
        $lowSub = 0;
        $char30 = 30;
        $char50 = 50;

        //check for every possible input and
        //does the two value exists?
        if (array_key_exists($key, $this->memberValues))  //check for every element to be in the
            // Object
        {
            //check if the key was fname or lname
            if ($key == 'fname' || $key == 'lname') {
                $value = substr($value, $lowSub, $char30);
            } //check age
            else if ($key == 'age') {
                if (!$key > 18) {
                    $key = 18;
                } else {
                    $key = (int)$key;
                }
            } //check state
            else if ($key == 'state') {
                $value = substr($value, $lowSub, 2);
            } else if ($key == 'email') {
                $value = substr($value, $lowSub, $char50);
            } else if ($key == 'bio') {
                $value = substr($value, $lowSub, 255); //text file 255 characters are allowed
            } else if ($key == 'image') {
                $value = substr($value, $lowSub, $char50);
            }

            $this->memberValues[$key] = $value;
        }

        return false;
    }

    /**
     * @return PDO|void Create a DB connection to sdesmul database.
     */
    function connect()
    {
        try {
            //instantiate a database object
            $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_PERSISTENT, true);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            echo "Connected to database for Trivia Quack!";
            //return connection
            return $conn;

        } catch (PDOException $ex) {
            echo "Connection failed" . "<br>";
            echo $ex->getMessage();
            return;
        }

    }


    /**
     * This method will display members
     * @return array List of member details
     */
    function displayMembers()
    {
        global $conn;
        //define query
        $sql = "Select * from datingMembers ORDER by lname";

        //preapare
        $statement = $conn->prepare($sql);

        //execute
        $statement->execute();

        //get all
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    /**
     * Adds a new account to the DB.
     * @param $fname
     * @param $lname
     * @param $gender
     * @param $seeking
     * @param $email
     * @param $age
     * @param $phone
     * @param $interests
     * @param $bio
     * @param $premium
     * @param $state
     * @param $image
     */
    function addAccount($fname, $lname, $gender, $seeking, $email, $age, $phone, $interests,
                        $bio, $premium,
                        $state,
                        $image)
    {
        //
        global $conn;

        //define sql
        $sql = "insert into datingMembers(fname,lname,gender,seeking,email,age,phone,interests,bio,premium,state,
image) values(:fname,:lname,:gender,:seeking,:email,:age,:phone,:interests,:bio,:premium,:state,
:image)";

        //prepare
        $statement = $conn->prepare($sql);


        //check the interests, gender, seeking, and premium here to display correctly
        /* $this->checkVal($fname);
         $this->checkVal($lname);
         $this->checkVal($gender);
         $this->checkVal($seeking);
         $this->checkVal($premium);
         $this->checkVal($state);
         $this->checkVal($age);
         $this->checkVal($interests);*/


        //bind the parameters
        $statement->bindParam(':fname', $fname, PDO::PARAM_STR);
        $statement->bindParam(':lname', $lname, PDO::PARAM_STR);
        $statement->bindParam(':gender', $gender, PDO::PARAM_STR);
        $statement->bindParam(':seeking', $seeking, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':age', $age, PDO::PARAM_INT);
        $statement->bindParam(':phone', $phone, PDO::PARAM_INT);
        $statement->bindParam(':interests', $interests, PDO::PARAM_STR);
        $statement->bindParam(':bio', $bio, PDO::PARAM_STR);
        $statement->bindParam(':premium', $premium, PDO::PARAM_BOOL);
        $statement->bindParam(':state', $state, PDO::PARAM_STR);
        $statement->bindParam(':image', $image, PDO::PARAM_STR);

        //execute
        $result = $statement->execute();

//        echo "<pre>";
//        print_r($result);
//        echo "</pre>";

    }

    protected static function disconnect(&$connection)
    {
        unset($connection);
    }

    function exists($value)
    {
        return isset($value) && !empty($value);
    }

    function checkVal($value)
    {
        if (exists($value)) {
            echo "<h1>" . $value . "</h1>";
        } else {
            echo "<h1>ERROR</h1>";
        }

    }
}