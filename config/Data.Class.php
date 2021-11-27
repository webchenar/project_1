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
            $this->Con = new PDO("mysql:host=$this->DbHoste;dbname=$this->DbName;charset=UTF8", $this->DbUserName, $this->DbPassWord);
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

    public function insertSjtamdidSahamiKhas($rel_user, $c_shenase_meli, $c_name, $c_shomare_sabt, $c_sarmaye, $time_shore_jalase, $date_shore_jalase, $rozname, $adress, $t_sahamdaran, $t_saham, $hozor, $file_rozname, $emza1 = '', $emza2 = ''){
        try{

            //echo "INSERT INTO `sj_tamdid_sahami_khas`(`rel_user`, `c_shenase_meli`, `c_name`, `c_shomare_sabt`, `c_sarmaye`, `t_shorooe_jalase`, `d_shorooe_jalase`, `rooz_name`, `rooz_name_file`, `c_adress`, `t_sahamdar`, `t_saham`, `va_ya`) VALUES ('$rel_user', '$c_shenase_meli','$c_name','$c_shomare_sabt','$c_sarmaye','$time_shore_jalase','$date_shore_jalase','$rozname','$file_rozname', '$adress', '$t_sahamdaran', '$t_saham', '$tedad_emza')";

            $this->Con->exec("INSERT INTO `sj_tamdid_sahami_khas`(`rel_user`, `c_shenase_meli`, `c_name`, `c_shomare_sabt`, `c_sarmaye`, `t_shorooe_jalase`, `d_shorooe_jalase`, `rooz_name`, `rooz_adress_file`, `c_adress`, `t_sahamdar`, `hozor`, `t_saham`) VALUES ('$rel_user', '$c_shenase_meli','$c_name','$c_shomare_sabt','$c_sarmaye','$time_shore_jalase','$date_shore_jalase','$rozname','$file_rozname', '$adress', '$t_sahamdaran','$hozor' , '$t_saham')");

        }catch(PDOException $e){
            echo $e;
        }
    }

    public function updateSjtamdidiSahamiKhas($fild, $value, $sj_id){
    try{

        $this->Con->exec("UPDATE `sj_tamdid_sahami_khas` SET `$fild` = '$value' WHERE `sj_id` = '$sj_id'");
    }catch (PDOException $e){
        echo $e;
    }
    }

    public function  insertUser($fname, $lname, $phone, $email, $cellPhone, $passWord, $verified)
    {
        
        try {
            
            $this->Con->exec("INSERT INTO `tbl_user`(`phone`, `PASSWORD`, `first_name`, `last_name`, `email`, `cell_phone`, `verified`) VALUES ('$phone','$passWord','$fname','$lname','$email','$cellPhone', '$verified')");
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

    public function searchFunction($table, $fild, $id)
    {
        //echo "SELECT * FROM `$table` WHERE `$fild` =" . "'" . $id . "'";
        //$this->Con->exec("SELECT `$fild` FROM `$table` WHERE `$fild` =" . "'" . $id . "'");
        $data = $this->Con->prepare("SELECT * FROM `$table` WHERE `$fild` =" . "'" . $id . "'");
        $data->execute();
        return $data;
    }

    public function search($table, $fild, $id){
        return $this->searchFunction($table, $fild, $id)->fetch();
    }


    public function searchAll($table, $fild, $id){
        return $this->searchFunction($table, $fild, $id)->fetchAll();
    }

    public function insertMasolTamdidSahamiKhas($id_sj, $fname, $lname, $phone, $code_meli, $masoliat, $adressShenasname){
        try{
            //echo "INSERT INTO `masolan_sj_tamdid_sahami_khas`(`id_sj`, `fname`, `lname`, `phone`, `code_meli`) VALUES ('$id_sj','$fname', '$lname', '$phone', '$code_meli'";

            $this->Con->exec("INSERT INTO `masolan_sj_tamdid_sahami_khas`(`id_sj`, `fname`, `lname`, `phone`, `code_meli`, `masoliat`, `scan_shenasname_meli`) VALUES ('$id_sj','$fname', '$lname', '$phone', '$code_meli', '$masoliat', '$adressShenasname')");
        }catch(PDOException $e){
            echo $e;
        }
    }

    public function searchLogIn($table, $fild1, $id1, $fild2, $id2)
    {
        //echo "SELECT * FROM `$table` WHERE `$fild1` =" . "'" . $id1 . "'" . "AND" . "`$fild2` ="  . "'" . $id2 . "'";

        $data = $this->Con->prepare("SELECT * FROM `$table` WHERE `$fild1` =" . "'" . $id1 . "'" . "AND" . "`$fild2` ="  . "'" . $id2 . "'");
        $data->execute();
        return $data->fetch();
    }

    public function update($table, $fild, $value, $fildsearch, $id)
    {
        try {
            $this->Con->exec("UPDATE `$table` SET `$fild` = '$value' WHERE `$fildsearch` = '$id' ");
        } catch (PDOException $e) {
            echo $e;
        }
    }

    public function updateUser($fname, $lname, $phone, $email, $cellPhone, $password, $oldPhone){
        try{
        $this->Con->exec("UPDATE `tbl_user` SET `phone`='$phone',`PASSWORD`='$password',`first_name`='$fname',`last_name`='$lname',`email`='$email', `cell_phone`='$cellPhone',`verified`='1' WHERE `phone` = '$oldPhone' ");
        }catch(PDOException $e){
            echo $e;
        }
    }

    public function inserMemberSjtamdidSahamiKhas($idsj, $fname, $lname, $phone, $meli_code, $tedadsaham, $cartmeli, $shenasname, $vazifejalase, $semat, $sematnahaie, $modirAmel, $chekVakil){
        try{

            //echo "INSERT INTO `sahamdaran`(`id_sj_tamdid_sahami_khas`, `phone`, `fname`, `lname`, `meli_code`, `tedad_saham`, `scan_cart_meli`, `scan_shenasname_meli`, `vazife_jalase`, `semat`, `semat_nahaei`) VALUES ('$idsj','$phone','$lname','$fname','$meli_code','$tedadsaham','$cartmeli','$shenasname','$vazifejalase','$semat','$sematnahaie')";

            $this->Con->exec("INSERT INTO `sahamdaran`(`id_sj_tamdid_sahami_khas`, `phone`, `fname`, `lname`, `meli_code`, `tedad_saham`, `scan_cart_meli`, `scan_shenasname`, `vazife_jalase`, `semat`, `semat_nahaei`, `chek_modiamel`, `chek_vakil`) VALUES ('$idsj','$phone','$fname','$lname','$meli_code','$tedadsaham','$cartmeli','$shenasname','$vazifejalase','$semat','$sematnahaie', '$modirAmel', '$chekVakil')");

        }catch(PDOException $e){
            echo $e;
        }
    }

    public function insertSjTaeinModiran($sj_id, $t_shore, $d_shore){
        try{
            $this->Con->exec("INSERT INTO `sj_taein_modiran`(`rel_sj_id`, `t_shorooe_jalase`, `d_shorooe_jalase`) VALUES ('$sj_id', '$t_shore', '$d_shore')");

        }catch(PDOException $e){
            echo $e;
        }
    }


}