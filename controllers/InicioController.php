<?php

    //require_once $_SERVER['DOCUMENT_ROOT']."/sapi/models/logginModel.php";

    class InicioController{
       
        public function index(){
            require_once 'views/inicio/index.php';
        }
        public function nosotros(){
            require_once 'views/inicio/nosotros.php';
        }

        public function sirdo(){
            require_once 'views/inicio/sirdo.php';
        }
/*         public function verifEmailLog($email){
            $validarEmail = Validacion::validarEmail($email);
            if($validarEmail != '0'){
                $login = new Login();
                $tipoUser = $login->getEmailExis($validarEmail);
                if($tipoUser && $tipoUser->num_rows == 1){
                    $tipo = $tipoUser->fetch_object();
                    $logiin["correo"] = $tipo->correoUsuario;
                    $logiin["tipo"] = $tipo->tipoUsuario;
            
                    header('content-type: application/json; charset=utf8');
                    echo json_encode($logiin);
                }

            }
        
        }
 
        public function verificar(){
            
            $user = (Validacion::validarEmail($_POST["username"]) == '0') ? false : $_POST["username"];
            //$password = (Validacion::validarPass($_POST["pass"]) == '0') ? false : $_POST["pass"];
            $tipo = (Validacion::validarNumero($_POST["tipoUser"]) == '-1') ? false : $_POST["tipoUser"];
            
            if($tipo === "0"){
                $_SESSION['loggin'] = 'USUARIO O CONTRASEÑA SON INCORRECTOS';
                echo '<script>window.location="'.base_url.'"</script>';
            }elseif($tipo === "2" || $tipo === '3'){
                $consul = (Validacion::validarNumero($_POST["consul"]) == '-1') ? false : $_POST["consul"];
                if($consul == false){;
                    $_SESSION['loggin'] = 'SE HAN INGRESADO DATOS INCORRECTAMENTE VERIFIQUE POR FAVOR';
                    echo '<script>window.location="'.base_url.'"</script>';
                }else{
                    // buscar el usuario en la tabla consultorio
                    $doctor = new Login();
                    $doctor->setEmail($user);
                    $doctor->setPass($_POST["pass"]);
                    $resupuesta = $doctor->getDoctor();
                    if($resupuesta){
                        $consulName = new Login();
                        $consulName->setId($consul);
                        $cosnultorio = $consulName->getConsultorio();
                        if($cosnultorio){
                            $getMnu = new ModeloBase();
                            $mostrarMEnu = $getMnu->getMenUsuario($resupuesta->idUsuario);
                            if($mostrarMEnu){

                            
                                // creamos una session para mostrar titulos y para validaciones
                                $_SESSION['usuario'] = array(
                                    'id' => $resupuesta->idUsuario,
                                    'consultorio' =>$consul,
                                    'nombre'=>$resupuesta->nombreUsuario,
                                    'apeliidos'=>$resupuesta->apellidoUsuario,
                                    'tipo'=>$resupuesta->tipoUsuario,
                                    'status'=>$resupuesta->statusUusario,
                                    'passwd'=>$resupuesta->verifChangePassword,
                                    'datos'=>$cosnultorio,
                                    'menu'=>$mostrarMEnu
                                );  
                                // redireccionamos
                                echo '<script>window.location="'.base_url.'Consultorio/nuevo"</script>';
                            }else{
                                $_SESSION['loggin'] = 'ALGO SALIO MAL NO SE RECUPERARON TODOS LOS DATOS, INTENTE DE NUEVO O LLAME A SU ADMINISTRADOR';
                                echo '<script>window.location="'.base_url.'"</script>';
                            }
                            
                        }else{
                            $_SESSION['loggin'] = 'ALGO SALIO MAL NO SE RECUPERARON TODOS LOS DATOS,LLAME A SU ADMINISTRADOR';
                            echo '<script>window.location="'.base_url.'"</script>';
                        }
                    }else{
                        $_SESSION['loggin'] = 'USUARIO O CONTRASEÑA SON INCORRECTOS';
                        echo '<script>window.location="'.base_url.'"</script>';
                    }
                }
                
            }else{
                echo "no pasas";
            }
        }

        public function logout(){
            session_destroy();
            echo '<script>
            sessionStorage.removeItem("lasTUrl");
            sessionStorage.removeItem("logguin");
            window.location="'.base_url.'"</script>';
        }
/* 
        public function getMunicipio($id){
            $idMun = Validacion::validarNumero($id);
    
            if($idMun != -1){           
                $estado = new Usuario();
                $estado->setIdEstado($idMun);
                $verMun = $estado->getMunModels();
                if($verMun->num_rows>0){
                    $whileJson = array();
                    while ($muni = $verMun->fetch_object()){
                        $data = array(
                        'id'=>$muni->idMunicipio,
                        'name'=>$muni->municipio  
                    );
                        array_push($whileJson,$data);                       
                    }
                    header('Content-type: application/json; charset=utf-8');
                    echo json_encode($whileJson, JSON_FORCE_OBJECT);
                    exit();
    
                }
    
            }
        }

        public function getCorreoExistent($email){
            $correo = Validacion::validarEmail($email);
    
            if($correo != '0'){
                $mail = new Usuario();
                $resultado = $mail->getEmailExis($correo);
                if($resultado->num_rows>0){
                    echo 1;
                }else{
                    echo 0;
                }
    
            }else{
                echo 2;
            }
        } */

        
    }
