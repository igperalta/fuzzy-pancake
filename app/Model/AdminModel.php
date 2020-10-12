<?php

class AdminModel {
                                                //CONEXION A BBDD
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_studio;charset=utf8', 'root', 'root');
    }

                                            //FUNCIONES ADMINISTRADOR

    //COMPONENTES
    function altaNuevoComponente($tipo, $modelo, $precio, $gama, $id_marca) {
        //comillas dobles o simples?
        $query=$this->db->prepare('INSERT INTO componente(tipo, modelo, precio, gama, id_marca) VALUES(?,?,?,?,?)');
        $query->execute(array($tipo, $modelo, $precio, $gama, $id_marca));
    }

    function bajaComponente($id) {
        $query=$this->db->prepare('DELETE * FROM componente WHERE id=?');
        $query->execute(array($id));
    }

    function modificarComponente($tipo, $modelo, $precio, $gama, $id_componente, $id_marca) {
        $query=$this->db->prepare('UPDATE componente SET tipo=?, modelo=?, precio=?, gama=?, id_marca=? WHERE componente.id_componente=?');
        $query->execute(array($tipo, $modelo, $precio, $gama, $id_componente, $id_marca));
    }

    //MARCAS
    function altaNuevaMarca($nombre, $origen) {
        //comillas dobles o simples?
        $query=$this->db->prepare('INSERT INTO marca(tipo, origen) VALUES(?,?)');
        $query->execute(array($tipo, $origen));
    }

    function bajaMarca($id) {
        $query=$this->db->prepare('DELETE * FROM marca WHERE id=?');
        $query->execute(array($id));
    }

    function modificarMarca($nombre, $origen, $id_marca) {
        $query=$this->db->prepare('UPDATE marca SET nombre=?, origen=? WHERE marca.id_marca=?');
        $query->execute(array($nombre, $origen, $id_marca));
    }


    function getComponentesAdmin() {
        $query=$this->db->prepare('SELECT * FROM componente');
        $query->execute();
        $componentes=$query->fetchAll(PDO::FETCH_OBJ);
        return $componentes;
        //var_dump($componentes);
    }

    function getMarcasAdmin() {
        $query=$this->db->prepare('SELECT * FROM marca');
        $query->execute();
        $marcas=$query->fetchAll(PDO::FETCH_OBJ);
        return $marcas;
        //var_dump($marcas);
    }
}