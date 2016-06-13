<?php namespace Models;

	class Seccion
	{
		public $id;
		public $nombre;
		public $con;

		public function __construct()
		{
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido)
		{
			$this->$atributo = $contenido;
		}

		public function get($atributo)
		{
			return $this->$atributo;
		}

		public function listar()
		{
			$sql = "SELECT * FROM secciones ORDER BY nombre ASC";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function add()
		{
			$sql = "INSERT INTO secciones (nombre) VALUES ('{$this->nombre}')";
			$this->con->consultaSimple($sql);
		}

		public function delete()
		{
			$sql = "DELETE FROM secciones WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function edit()
		{
			$sql = "UPDATE secciones SET nombre = '{$this->nombre}' WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function view()
		{
			$sql = "SELECT * FROM secciones WHERE id = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}
	} 

 ?>