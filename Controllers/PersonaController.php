<?php


class PersonaController extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }


    public function store()
    {

        $arrayErrorInputs = array();
        /* Parametros recibidos por POST */
        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
        } else {
            array_push($arrayErrorInputs, "Campo nombre requerido.");
        }
        if (isset($_POST['apellido'])) {
            $apellido = $_POST['apellido'];
        } else {
            array_push($arrayErrorInputs, "Campo apellido requerido.");
        }
        if (isset($_POST['sexo'])) {
            $sexo = $_POST['sexo'];
        } else {
            array_push($arrayErrorInputs, "Campo sexo requerido.");
        }
        if (isset($_POST['direccion'])) {
            $direccion = $_POST['direccion'];
        } else {
            array_push($arrayErrorInputs, "Campo direccion requerida.");
        }
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        } else {
            array_push($arrayErrorInputs, "Campo email requerido.");
        }
        if (isset($_POST['celular'])) {
            $celular = $_POST['celular'];
        } else {
            array_push($arrayErrorInputs, "Campo celular requerido.");
        }
        /* Parametros recibidos por POST */

        if (empty($arrayErrorInputs)) {
            $objPersona = $this->model;
            $objPersona->setNombre($nombre);
            $objPersona->setApellido($apellido);
            $objPersona->setSexo($sexo);
            $objPersona->setDireccion($direccion);
            $objPersona->setEmail($email);
            $objPersona->setCelular($celular);
            $data = $objPersona->insertData();
            $respuesta = array('code' => '200', 'mensaje' => 'Registro guardado', 'id' => $data);
        } else {
            $respuesta = array('Error' => 'Campos requeridos', 'mensaje' => $arrayErrorInputs);
        }

        $this->views->getView($this, "persona", $respuesta);
    }

    public function show($id)
    {

        if (filter_var($id, FILTER_VALIDATE_INT) !== false) {
            $objPersona = $this->model;
            $objPersona->setId($id);
            $data = $objPersona->selectData();
            if ($data == false) {
                $respuesta = array('code' => '200', 'mensaje' => 'No se encontraron resultados');
            } else {
                $respuesta = $data;
            }
        } else {
            $respuesta = array('Error' => 'Parámetro invalido', 'mensaje' => 'El parámetro debe ser numerico');
        }

        $this->views->getView($this, "persona", $respuesta);
    }


    public function showAll()
    {
        $objPersona = $this->model;
        $data = $objPersona->selectAllData();
        if ($data == false) {
            $respuesta = array('code' => '200', 'mensaje' => 'No se encontraron resultados');
        } else {
            $respuesta = $data;
        }
        $this->views->getView($this, "persona", $respuesta);
    }


    public function update()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if ('PUT' === $method) {
            parse_str(file_get_contents('php://input'), $_PUT);
        }


        $arrayErrorInputs = array();
        /* Parametros recibidos por PUT */
        if (isset($_PUT['id'])) {
            $id = $_PUT['id'];
        } else {
            array_push($arrayErrorInputs, "Campo id requerido.");
        }
        if (isset($_PUT['nombre'])) {
            $nombre = $_PUT['nombre'];
        } else {
            array_push($arrayErrorInputs, "Campo nombre requerido.");
        }
        if (isset($_PUT['apellido'])) {
            $apellido = $_PUT['apellido'];
        } else {
            array_push($arrayErrorInputs, "Campo apellido requerido.");
        }
        if (isset($_PUT['sexo'])) {
            $sexo = $_PUT['sexo'];
        } else {
            array_push($arrayErrorInputs, "Campo sexo requerido.");
        }
        if (isset($_PUT['direccion'])) {
            $direccion = $_PUT['direccion'];
        } else {
            array_push($arrayErrorInputs, "Campo direccion requerida.");
        }
        if (isset($_PUT['email'])) {
            $email = $_PUT['email'];
        } else {
            array_push($arrayErrorInputs, "Campo email requerido.");
        }
        if (isset($_PUT['celular'])) {
            $celular = $_PUT['celular'];
        } else {
            array_push($arrayErrorInputs, "Campo celular requerido.");
        }
        /* Parametros recibidos por PUT */

        if (empty($arrayErrorInputs)) {
            $objPersona = $this->model;
            $objPersona->setId($id);
            $objPersona->setNombre($nombre);
            $objPersona->setApellido($apellido);
            $objPersona->setSexo($sexo);
            $objPersona->setDireccion($direccion);
            $objPersona->setEmail($email);
            $objPersona->setCelular($celular);
            $data = $objPersona->updateData();
            $respuesta = array('code' => '200', 'mensaje' => 'Registro actualizado');
        } else {
            $respuesta = array('Error' => 'Campos requeridos', 'mensaje' => $arrayErrorInputs);
        }
        $this->views->getView($this, "persona", $respuesta);
    }

    public function destroy($id)
    {
        if (filter_var($id, FILTER_VALIDATE_INT) !== false) {
            $objPersona = $this->model;
            $objPersona->setId($id);
            $data = $objPersona->deleteData();
            $respuesta = array('code' => '200', 'mensaje' => 'Registro Eliminado');
        } else {
            $respuesta = array('Error' => 'Parámetro invalido', 'mensaje' => 'El parámetro debe ser numerico');
        }
        $this->views->getView($this, "persona", $respuesta);
    }
}
