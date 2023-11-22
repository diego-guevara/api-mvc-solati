<?php

class personaModel extends Mysql
{
    /* Propiedades */
    private $intId;
    private $strNombre;
    private $strApellido;
    private $strSexo;
    private $strDireccion;
    private $strEmail;
    private $strCelular;
    /* Propiedades */



    public function __construct(int $id=null, string $nombre=null, string $apellido=null, string $sexo=null, string $direccion=null, string $email=null, string $celular=null)
    {
        parent::__construct();

        $this->intId = $id;
        $this->strNombre = $nombre;
        $this->strApellido = $apellido;
        $this->strSexo = $sexo;
        $this->strDireccion = $direccion;
        $this->strEmail = $email;
        $this->strCelular = $celular;
    }


    public function selectData()
    {
        $sql = "SELECT * FROM persona WHERE id = $this->intId ";
        $request = $this->select($sql);
        return $request;
    }


    public function selectAllData()
    {
        $sql = "SELECT * FROM persona ";
        $request = $this->selectall($sql);
        return $request;
    }


    public function insertData()
    {
        $sql = "INSERT INTO persona (nombre , apellido, sexo, direccion, email, celular) VALUES (?,?,?,?,?,?)";
        $arrData = array($this->strNombre, $this->strApellido, $this->strSexo, $this->strDireccion, $this->strEmail, $this->strCelular);
        $request = $this->insert($sql, $arrData);
        return $request;
    }


    public function updateData()
    {
        $sql = "UPDATE persona SET nombre = ?, apellido = ?, sexo = ?, direccion = ?, email = ?, celular = ? WHERE id = $this->intId ";
        $arrData = array($this->strNombre, $this->strApellido, $this->strSexo, $this->strDireccion, $this->strEmail, $this->strCelular);
        $request = $this->update($sql, $arrData);
        return $request;
    }


    public function deleteData()
    {
        $sql = "DELETE FROM persona WHERE id = $this->intId ";
        $request = $this->delete($sql);
        return $request;
    }



    /* getters para acceder a las propiedades privadas */
    public function getId()
    {
        return $this->intId;
    }

    public function getNombre()
    {
        return $this->strNombre;
    }

    public function getApellido()
    {
        return $this->strApellido;
    }


    public function getSexo()
    {
        return $this->strSexo;
    }

    public function getDireccion()
    {
        return $this->strDireccion;
    }

    public function getEmail()
    {
        return $this->strEmail;
    }


    public function getCelular()
    {
        return $this->strCelular;
    }

    /* getters para acceder a los atributos privados */


    /*  setters para modificar el valor de las propiedades */
    public function setId(int $id)
    {
        $this->intId = $id;
    }

    public function setNombre(string $nombre)
    {
        $this->strNombre = $nombre;
    }

    public function setApellido(string $apellido)
    {
        $this->strApellido = $apellido;
    }

    public function setSexo(string $sexo)
    {
        $this->strSexo = $sexo;
    }

    public function setDireccion(string $direccion)
    {
        $this->strDireccion = $direccion;
    }

    public function setEmail(string $email)
    {
        $this->strEmail = $email;
    }

    public function setCelular(string $celular)
    {
        $this->strCelular = $celular;
    }
    /*  setters para modificar el valor de las propiedades */


   
}

?>