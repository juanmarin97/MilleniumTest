<?php
$rutaCarpeta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$rutaProyecto = explode("/", $rutaCarpeta);

require_once $_SERVER['DOCUMENT_ROOT'] . "/" . $rutaProyecto[1] . '/core/Connection.php';

class User extends Connection
{
    private $nombre;
    private $apellido;

    public function __construct($nom = null, $ape = null)
    {
        $this->nombre = $nom;
        $this->apellido = $ape;

        parent::__construct();
    }

    public function insert_user()
    {
        try {
            $sql = $this->dbConnection->prepare("INSERT INTO user(nombre,apellido)values(?,?)");
            $sql->bindParam(1, $this->nombre);
            $sql->bindParam(2, $this->apellido);

            // Execute Query
            $sql->execute();
            return $sql;
        } catch (PDOException $ex) {
            echo '<div class="alert alert-danger container text-center" role="alert">
                    <strong>ERROR EN SISTEMA CONSULTE A SU TI MAS CERCANO</strong>
                </div>';
            die();

        }

    }

    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * Get the value of direccion
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
        return $this;
    }

}
