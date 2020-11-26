<?php

class BrandsModel
{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_studio;charset=utf8', 'root', '');
    }

    function getBrands()
    {
        $query = $this->db->prepare('SELECT * FROM marca');
        $query->execute();
        $brands = $query->fetchAll(PDO::FETCH_OBJ);
        return $brands;
    }

    function getBrandByID($id_brand)
    {
        $query = $this->db->prepare('SELECT marca.id_marca, marca.marca, marca.origen FROM marca WHERE marca.id_marca=?');
        $query->execute(array($id_brand));
        $brand = $query->fetch(PDO::FETCH_OBJ);
        return $brand;
    }

    function getBrandByName($name)
    {
        $query = $this->db->prepare('SELECT marca.id_marca, marca.marca, marca.origen FROM marca WHERE marca.marca=?');
        $query->execute(array($name));
        $brand = $query->fetch(PDO::FETCH_OBJ);
        return $brand;
    }

    function insertBrand($brand, $origin)
    {
        $query = $this->db->prepare("INSERT INTO marca(marca, origen) VALUES(?,?)");
        $query->execute(array($brand, $origin));
    }

    function deleteBrand($id_brand)
    {
        $query = $this->db->prepare('DELETE FROM marca WHERE id_marca =?');
        $query->execute(array($id_brand));
    }

    function updateBrand($id_brand, $brand, $origin)
    {
        $query = $this->db->prepare('UPDATE marca SET marca=?, origen=? WHERE marca.id_marca=?');
        $query->execute(array($brand, $origin, $id_brand));
    }


}
