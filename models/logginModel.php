<?php
//require_once $_SERVER['DOCUMENT_ROOT']."doctor/config/modeloBase.php";
require_once $_SERVER['DOCUMENT_ROOT']."/sapi/config/modeloBase.php";


class Login extends ModeloBase{
    private $id;
    private $idUsuario;
    private $email;
    private $pass;

    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 

         /**
     * Get the value of pass
     */ 
    public function getPass()
    {
        //return $this->pass;
        return password_hash($this->db->real_escape_string($this->pass), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
        /**
     * Get the value of idUsuario
     */ 
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */ 
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }
    public function __construct() {
        parent::__construct();
    }

    public function getDoctor(){
        $result = false;
        $password = $this->pass;
        $get = "SELECT * FROM usuario ud WHERE ud.correoUsuario = '{$this->getEmail()}'";
        $qiery = $this->db->query($get);
        if($qiery && $qiery->num_rows == 1){
            $Usurario = $qiery->fetch_object();

            // verifica contraseña
            $verify = password_verify($password, $Usurario->passwordUsuario);

            if($verify){
                $result = $Usurario;
            }
        }
        return $result;
    }

    public function getConsultorio(){
        $con = "SELECT c.id_consultorio,c.nombreConsultorio FROM consultorio c WHERE c.id_consultorio = '{$this->getId()}'";
        $query = $this->db->query($con);
    
        if($query && $query->num_rows == 1){
            $consultorio = $query->fetch_object();
            return $consultorio;
        }
    }

    public function changePassword(){
         $update ="UPDATE usuario
                    SET                            
                        passwordUsuario='{$this->getPass()}',
                        verifChangePassword=0
                    WHERE idUsuario='{$this->getId()}'";
        $query = $this->db->query($update);
        $pass = false;
        if($query){
            $pass = true;
        }
        return $pass;
    }


    





}
