<?php

/**
 *
 */
include "Model/crud_model.php";

class Crud extends Crud_Model
{

  protected $model;
  protected $nama_db = "new";//nama database
  protected $username = "root";//username database
  protected $password = "";// password database

  function __construct(){
    $this->model=new Crud_Model($this->nama_db, $this->username, $this->password);//load model
  }

  public function index(){
    $data=$this->model->select_all();
    include "View/view.php";
  }

  public function tambah(){
    if (isset($_POST['tambah'])) {
      $nama = $_POST['nama'];
  		$harga = $_POST['harga'];
  		$jumlah = $_POST['jumlah'];

  		$this->model->insert_data($nama, $harga, $jumlah);
  		header("location:index.php");
    }else{
    $crud = new crud();
    include "View/add.php";
    }
  }

  public function update($id){
    if (isset($_POST['update'])) {
      $id = $_POST['id'];
      $nama = $_POST['nama'];
      $harga = $_POST['harga'];
      $jumlah = $_POST['jumlah'];

      $this->model->update_data($id, $nama, $harga, $jumlah);
      header("location:index.php");
    }else{
      $data=$this->model->select_data($id);
      // $data=$this->model->fetch($query);
      $crud = new crud();
      include "View/edit.php";
    }
  }

  public function hapus($id){
    $this->model->delete($id);
    header("location:index.php");
  }

  public function detail_data($id){
    $query = $this->model->select_data($id);
    $data = $this->model->fetch($query);
    $crud = new crud();
    include "View/detail.php";

  }

  public function welcome(){
    include "View/welcome.php";
  }

}

 ?>
