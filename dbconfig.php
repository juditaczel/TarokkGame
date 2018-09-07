<?php
class Mysql
{
    public $hostname = "localhost";
    public $dbname = "data";
    public $username = "root";
    public $passw = "";
    public $conn;
     
    public function dbConnection()
	{
     
	    $this->conn = null;    
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->hostname . ";dbname=" . $this->dbname, $this->username, $this->passw);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }
         
        return $this->conn;
    }
}

class superuser
{

    private $conn;

    public function __construct()
    {
        $database = new Mysql();
        $db = $database->dbConnection();
        $this->conn = $db;
    }

    public function running($sql)
    {
        $dbh = $this->conn->prepare($sql);
        return $dbh;
    }

    public function registri($snev,$smail,$spassw)
    {
        try
        {
            $new_password = password_hash($spassw, PASSWORD_DEFAULT);

            $dbh = $this->conn->prepare("INSERT INTO user( name, email, password)
		                                               VALUES(:snev, :smail, :spassw)");

            $dbh->bindparam(":snev", $snev);
            $dbh->bindparam(":smail", $smail);
            $dbh->bindparam(":spassw", $new_password);

            $dbh->execute();

            return $dbh;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }


    public function login($snev,$smail,$spassw)
    {
        
        try
        {
            $dbh = $this->conn->prepare("SELECT id, name, email, password FROM user WHERE name=:snev OR email=:smail ");
            $dbh->execute(array(':snev'=>$snev, ':smail'=>$smail));
            $userRow=$dbh->fetch(PDO::FETCH_ASSOC);
            //echo 'a';
            if($dbh->rowCount() == 1)
            {
                //echo 'b';
                $passhash=password_hash($spassw, PASSWORD_DEFAULT);
                /*echo 'passhash = ' .  $passhash . '  ';
                echo $spassw;
                echo $userRow['password'];*/
                echo " xyz ".password_verify($spassw, $userRow['password']) ? 'true' : 'false';
                if(password_verify($spassw, $userRow['password']))
                {
                   //echo 'c';

                    $_SESSION['user_session'] = $userRow['id'];
                    $_SESSION['username'] = $userRow['name'];
                    $_SESSION['userid'] = $userRow['id'];
                    print_r($_SESSION);
                    return true;
                }
                else
                {
                  //echo 'd';
                    return false;
                }
            }

        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function enter()
    {
        if(isset($_SESSION['user_session']))
        {
            return true;
        }
    }

    public function redirect($url)
    {
        header("Location: $url");
    }

    public function exitt()
    {
        session_unset();
        session_destroy();
        /*session_unset($_SESSION['user_session']);
        session_destroy();*/
        return true;
    }

    public function getotherusers(){

        try
        {
            $dbh = $this->conn->prepare("SELECT id, name FROM user WHERE id <>:id ");
            $dbh->execute(array(':id'=>$_SESSION['userid']));
            $userRow = $dbh->fetchAll();

            if($dbh->rowCount() >= 3)
            {

                return $userRow;

                }
                else
                {

                    return false;
            }
        }


        catch(PDOException $e)
        {
            echo $e->getMessage();
        }


    }

    public function insertorupdategame(){
        try
        {
            $dbh = $this->conn->prepare("SELECT id FROM game WHERE id=1");
            $dbh->execute();
            $userRow = $dbh->fetchAll();

            if($dbh->rowCount() >= 1)
            {
                $dbhh = $this->conn->prepare("UPDATE game set roundno = 1 WHERE id = 1");

                $dbhh->execute();

            }
            else
            {

            $dbhh = $this->conn->prepare("INSERT INTO game( id,roundno)
		                                               VALUES(1,1)");

            $dbhh->execute();

        }

            $dbbh = $this->conn->prepare("DELETE FROM  usergame ");

            $dbbh->execute();

            return $dbbh;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function setgamer($userid,$cards){
        try
        {

            $dbh = $this->conn->prepare("SELECT id FROM usergame WHERE userid=:userid");
            $dbh->execute(array(':userid'=>$userid));


            if($dbh->rowCount() >= 1)
            {
                $dbhh = $this->conn->prepare("UPDATE usergame set cards =:cards WHERE userid=:userid");
                $dbhh->execute(array(':cards'=>$cards,':userid'=>$userid));


                return $dbhh;

            }
            else
            {
                $dbhh = $this->conn->prepare("INSERT INTO usergame( userid, gameid, cards)
		                                               VALUES(:userid,1, :cards)");

                $dbhh->execute(array(':cards'=>$cards,':userid'=>$userid));

                return $dbhh;
            }}
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }


}
?>