<?php
class DataBase
{
    public $DbName = 'nikoosabt_db';
    public $DbUserName = 'root';
    public $DbPassWord = '';
    public $DbHoste = 'localhost';
    private $ChekConnect = false;
    private $Con;
    public $Sql = null;

    public function __construct(/*$dbName, $dbUserName, $dbPassWord, $dbHoste*/)
    {
        /*$this->DbName = $dbName;
            $this->DbUserName = $dbUserName;
            $this->DbPassWord = $dbPassWord;
            $this->DbHoste = $dbHoste;*/
        if (isset($this->DbName, $this->DbUserName, $this->DbPassWord)) {
            $this->ChekConnect == true;
            $this->Con = new PDO("mysql:host=$this->DbHoste;dbname=$this->DbName", $this->DbUserName, $this->DbPassWord);
        }
        return $this->ChekConnect;
    }

    public function select($table, $fild, $id = null, $fild2 = null, $id2 = null, $resualt = false)
    {

        if (isset($table, $fild, $id)) {
            $this->Sql = 'SELECT * FROM ' . $table . ' WHERE ' . $fild . '=' . "'" . $id . "'";
        }

        if (isset($table, $fild, $id, $fild2, $id2)) {
            $this->Sql = 'SELECT * FROM ' . $table . ' WHERE ' . $fild . '=' . "'" . $id . "'" . " AND " . $fild2 . '=' . "'" . $id2 . "'";
        }

        if (empty($id) && empty($fild2) && empty($id2)) {
            $this->Sql = 'SELECT * FROM ' . $table;
        }

        //echo $this->Sql
        //$this->Con->exec($this->Sql);
        //$data = $this->Con->query($this->Sql);
        $data = $this->Con->prepare($this->Sql);
        $data->execute();
        if ($resualt === true) {
            return $data->fetch();
        }
        echo $data->rowCount();
        if ($data->rowCount() > 0) {
            $this->sql = null;
            //return $data->fetchAll();
            return true;
        }
    }

    public function read($fild, $id)
    {
        return $this->select('users', $fild, $id, $fild2 = null, $id2 = null, $resualt = true);
    }

    public function  insertUser($fname, $lname, $phone, $email, $cellPhone, $passWord)
    {
        try {
            $this->Con->exec("INSERT INTO `tbl_user`(`phone`, `PASSWORD`, `first_name`, `last_name`, `email`, `cell_phone`) VALUES ('$phone','$passWord','$fname','$lname','$email','$cellPhone')");
        } catch (PDOException $e) {
            echo $e;
        }
    }

    public function verifiedUser($phone)
    {
        try {
            //echo "UPDATE `tbl_user` SET `verified` = '1' WHERE `phone` = '$phone'";
            $this->Con->exec("UPDATE `tbl_user` SET `verified` = '1' WHERE `phone` = '$phone'");
        } catch (PDOException $e) {
            echo $e;
        }
    }
}