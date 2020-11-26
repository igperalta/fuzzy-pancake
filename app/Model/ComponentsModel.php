<?php

class ComponentsModel {
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_studio;charset=utf8', 'root', '');
    }

    function getComponents()
    {
        $query = $this->db->prepare('SELECT * FROM componente');
        $query->execute();
        $components = $query->fetchAll(PDO::FETCH_OBJ);
        return $components;
    }

    function getComponentByID($id_component)
    {
        $query = $this->db->prepare('SELECT componente.tipo, componente.modelo, componente.precio, componente.gama, componente.id_componente, componente.id_marca, marca.marca FROM componente INNER JOIN marca ON componente.id_marca = marca.id_marca WHERE componente.id_componente=?');
        $query->execute(array($id_component));
        $componente = $query->fetch(PDO::FETCH_OBJ);
        return $componente;
    }

    function getComponentsByBrand($id_brand)
    {
        $query = $this->db->prepare('SELECT componente.tipo, componente.modelo, componente.precio, componente.gama, marca.marca FROM componente INNER JOIN marca ON componente.id_marca = marca.id_marca WHERE marca.id_marca=?');
        $query->execute(array($id_brand));
        $components = $query->fetchAll(PDO::FETCH_OBJ);
        return $components;
    }

    function insertComponent($tipo, $modelo, $precio, $gama, $id_marca) 
    {
        $query = $this->db->prepare('INSERT INTO componente(tipo, modelo, precio, gama, id_marca) VALUES(?,?,?,?,?)');
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



}