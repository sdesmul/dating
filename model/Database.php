<?php
/**
 * Created by PhpStorm.
 * User: saman
 * Date: 5/27/2019
 * Time: 11:09 AM
 */

require '/home/sdesmulc/config-student.php';

class Database
{
    //connection to database
    private $_dbh;

    function __construct()
    {
        $this->connect();
    }

    function connect()
    {
        try {


            //instantiate a database object
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            return $this->_dbh;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function getStudents()
    {
        //define the query
        $sql = "SELECT * FROM student
              ORDER BY last, first";

        //prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //bind parameters
        //no parameters for this

        // execute the statement
        $statement->execute();

        //return the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getDetails($sid)
    {

        //define query
        $sql = "SELECT * FROM student WHERE sid = :sid";

        //prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //bind the parameters
        $statement->bindParam(':sid', $sid, PDO::PARAM_STR);

        //execute
        $statement->execute();
        //PDO error reporting
        $err = $statement->errorInfo();
        if (isset($err[2])) {
            print $err[2];
        }

        //return the result
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

}