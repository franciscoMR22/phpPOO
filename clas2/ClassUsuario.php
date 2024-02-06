<?php 

    class Usuario{

        private $strNombre;
        private $strEmail;
        private $strRol;
        private $strClave;
        protected $strFechaRegistro;
        static $strEstado="Activo";//No es necesario instanciar este tipo de variables, se puede acceder de manera directa con ::

        function __construct(string $nombre, string $email, string $rol){

            $this->strNombre= $nombre;
            $this->strEmail= $email;
            $this->strRol= $rol;
            $this->strClave= rand();
            $this->strFechaRegistro= date('Y-m-d H:m:s'); //Asi instanciamos una variable tipo fecha 
        }

        //Obtenemos acceso a la variables privadas con GET
        public function getNombre():string{ return $this->strNombre;}
        public function getEmail():string{ return $this->strEmail;}
        public function getRol():string{ return $this->strRol;}

        //Método para crear un perfil
        function getPerfil(){

            echo "Datos del usuario <br>";
            echo "Nombre: ".$this->strNombre."<br>";
            echo "Email: ".$this->strEmail."<br>";
            echo "Rol: ".$this->strRol."<br>";
            echo "Clave: ".$this->strClave."<br>";
            echo "Fecha de registro: ".$this->strFechaRegistro."<br>";
            echo "Estado: ".self::$strEstado."<br>";//Asi accedemos a una variable de tipo static
        }

        //Vamos a cambiar un valor predefinido con el método SET

        public function setCambiarClave(string $passw){
            $this->strClave=$passw;//Asignamos la variable que le estamos pasando
        }

    }//Fin de la clase

?>