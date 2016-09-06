<?php
/**
 *
 */
class Crud_Model
{
  private $db;

  function __construct($nama_db, $root, $pass){
    $this->db = new PDO('mysql:host=localhost;dbname='.$nama_db, $root, $pass);
  }

  public function select_all(){
    $stmt = $this->db->prepare("SELECT*FROM buah ORDER BY id");
		$stmt->execute();
		return $stmt;
  }

  public function insert_data($nama, $harga, $jumlah){
    $stmt = $this->db->prepare("INSERT INTO buah (nama, harga, jumlah) VALUES (:nama, :harga, :jumlah)");
    $stmt->bindparam(":nama",$nama);
    $stmt->bindparam(":harga",$harga);
    $stmt->bindparam(":jumlah",$jumlah);
    $stmt->execute();
  }

  public function select_data($id){
    $stmt = $this->db->prepare("SELECT*FROM buah WHERE id=:id");
    $stmt->bindparam(":id",$id);
    $stmt->execute();
    return $this->fetch($stmt);
  }

  public function update_data($id, $nama, $harga, $jumlah){
    $stmt = $this->db->prepare("UPDATE buah SET nama=:nama, harga=:harga, jumlah=:jumlah WHERE id=:id ");
    $stmt->bindparam(":nama",$nama);
    $stmt->bindparam(":jumlah",$jumlah);
    $stmt->bindparam(":harga",$harga);
    $stmt->bindparam(":id",$id);
    $stmt->execute();
  }

  public function delete($id){
    $stmt = $this->db->prepare("DELETE FROM buah WHERE id=:id");
    $stmt->bindparam(":id",$id);
    $stmt->execute();
  }

  public function fetch($query){
    $data=$query->fetch(PDO::FETCH_ASSOC);
    return $data;
  }
}
 ?>
