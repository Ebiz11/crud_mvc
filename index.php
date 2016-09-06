<?php

	spl_autoload_register(function($class){
    require_once 'Controller/'.$class.'.php';
	});

	$crud = new crud();

	if(isset($_GET['edit'])){
		$id = $_GET['edit'];
		$crud->update($id);
	}else if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$crud->hapus($id);
	}else if(isset($_GET['page'])){
		if ($_GET['page']=="add"){
		  $crud->tambah();
		}elseif ($_GET['page']=="welcome"){
		  $crud->welcome();
		}else{
		}
	}else{
		$crud->index();
	}
?>
