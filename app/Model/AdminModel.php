<?php

class AdminModel {
                                                //CONEXION A BBDD
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_studio;charset=utf8', 'root', '');
    }

                                            //FUNCIONES ADMINISTRADOR

    //COMPONENTES
    function altaNuevoComponente($tipo, $modelo, $precio, $gama, $id_marca) 
    {
        //comillas dobles o simples?
        $query = $this->db->prepare("INSERT INTO componente(tipo, modelo, precio, gama, id_marca) VALUES(?,?,?,?,?)");
        $query->execute(array($tipo, $modelo, $precio, $gama, $id_marca));
    }

    function bajaComponente($id_componente) 
    {
        $query = $this->db->prepare('DELETE FROM componente WHERE id_componente=?');
        $query->execute(array($id_componente));
    }

    function modificarComponente($id_componente, $tipo, $modelo, $precio, $gama, $id_marca) 
    {
        $query = $this->db->prepare('UPDATE componente SET tipo=?, modelo=?, precio=?, gama=?, id_marca=? WHERE componente.id_componente=?');
        
        $query->execute(array($tipo, $modelo, $precio, $gama, $id_marca, $id_componente));
    }

    function getComponenteInfoByID($id_componente) 
    {
        $query = $this->db->prepare('SELECT * FROM componente WHERE componente.id_componente=?');
        $query->execute(array($id_componente));
        $componente = $query->fetchAll(PDO::FETCH_OBJ);
        return $componente;
    }

    //MARCAS
    function altaNuevaMarca($marca, $origen) 
    {
        $query = $this->db->prepare("INSERT INTO marca(marca, origen) VALUES(?,?)");
        $query->execute(array($marca, $origen));
    }

    function bajaMarca($id_marca) 
    {
        $query = $this->db->prepare('DELETE FROM marca WHERE id_marca =?');
        $query->execute(array($id_marca));
    }

    function modificarMarca($id_marca, $marca, $origen) 
    {
        $query = $this->db->prepare('UPDATE marca SET marca=?, origen=? WHERE marca.id_marca=?');
        $query->execute(array($marca, $origen, $id_marca));
    }

    function getComponentesAdmin() 
    {
        $query = $this->db->prepare('SELECT * FROM componente');
        $query->execute();
        $componentes = $query->fetchAll(PDO::FETCH_OBJ);
        return $componentes;
        //var_dump($componentes);
    }

    function getMarcasAdmin() {
        $query = $this->db->prepare('SELECT * FROM marca');
        $query->execute();
        $marcas = $query->fetchAll(PDO::FETCH_OBJ);
        return $marcas;
        //var_dump($marcas);
    }

    function getMarcaInfoByID($id_marca) 
    {
        $query = $this->db->prepare('SELECT * FROM marca WHERE marca.id_marca=?');
        $query->execute(array($id_marca));
        $marca = $query->fetchAll(PDO::FETCH_OBJ);
        return $marca;
    }
}