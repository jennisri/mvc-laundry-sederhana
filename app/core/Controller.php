<?php 

class Controller {
	// mengelola tampilan web
	public function view($view, $data=[])
	{
		// panggil seluruh file di folder views
		require_once '../app/views/'. $view . '.php';
	}

	public function model($model)
	{
		require_once '../app/models/'. $model . '.php';
		return new $model;
	}
}