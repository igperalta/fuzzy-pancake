<?php

class PublicModel
{
    //CONEXION A BBDD
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_studio;charset=utf8', 'root', '');
    }

    //FUNCIONES PUBLICAS

    ///LOGIN

    function getUser($user)
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE email = ?');
        $query->execute(array($user));
        $DB_user = $query->fetch(PDO::FETCH_OBJ);
        return $DB_user;
    }

    //COMPONENTES
    function getComponentes()
    {
        $query = $this->db->prepare('SELECT * FROM componente');
        $query->execute();
        $componentes = $query->fetchAll(PDO::FETCH_OBJ);
        return $componentes;
        //var_dump($componentes);
    }

    function getComponenteByID($id_componente)
    {
        $query = $this->db->prepare('SELECT componente.tipo, componente.modelo, componente.precio, componente.gama, componente.id_componente, componente.id_marca, marca.marca FROM componente INNER JOIN marca ON componente.id_marca = marca.id_marca WHERE componente.id_componente=?');
        $query->execute(array($id_componente));
        $componente = $query->fetchAll(PDO::FETCH_OBJ);
        return $componente;
        //var_dump($componente);
    }

    function getComponentesPorMarca($marca)
    {
        $query = $this->db->prepare('SELECT componente.tipo, componente.modelo, componente.precio, componente.gama, marca.marca FROM componente INNER JOIN marca ON componente.id_marca = marca.id_marca WHERE marca.marca=?');
        $query->execute(array($marca));
        $componentes = $query->fetchAll(PDO::FETCH_OBJ);
        return $componentes;
    }

    //MARCAS
    function getMarcas()
    {
        $query = $this->db->prepare('SELECT * FROM marca');
        $query->execute();
        $marcas = $query->fetchAll(PDO::FETCH_OBJ);
        return $marcas;
        //var_dump($marcas);
    }

    function getMarcaByID($id_marca)
    {
        $query = $this->db->prepare('SELECT marca.id_marca, marca.marca, marca.origen FROM marca WHERE marca.id_marca=?');
        $query->execute(array($id_marca));
        $marca = $query->fetchAll(PDO::FETCH_OBJ);
        return $marca;
        //var_dump($marca);
    }

    function getMarcaByNombre($nombre)
    {
        $query = $this->db->prepare('SELECT marca.id_marca, marca.marca, marca.origen FROM marca WHERE marca.marca=?');
        $query->execute(array($nombre));
        $marca = $query->fetchAll(PDO::FETCH_OBJ);
        return $marca;
        //var_dump($marca);
    }
}
