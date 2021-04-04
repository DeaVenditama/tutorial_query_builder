<?php

namespace App\Controllers;
use App\Models\CustomModel;

class Test extends BaseController
{
	public function test_get()
	{
		$model = new CustomModel;
		$all_data = $model->get();
		foreach($all_data->getResult() as $key=>$row)
		{
			echo ($key+1).'. '; 
			echo $row->Name;
			echo '<br>';
		}
	}

	public function test_get_compiled_select()
	{
		$model = new CustomModel;
		$query = $model->get_compiled_select();
		echo $query;
	}

	public function test_get_where()
	{
		$model = new CustomModel;
		$data = $model->get_where();
		foreach($data->getResult() as $key=>$row)
		{
			echo ($key+1).'. '; 
			echo $row->Name;
			echo ' - ';
			echo $row->Publisher;
			echo '<br>';
		}
	}

	public function test_select()
	{
		$model = new CustomModel;
		$data = $model->select();
		print_r($data->getResult());
	}

	public function test_max()
	{
		$model = new CustomModel;
		$data = $model->select_max();
		print_r($data->getResult());
	}

	public function test_min()
	{
		$model = new CustomModel;
		$data = $model->select_min();
		print_r($data->getResult());
	}

	public function test_avg()
	{
		$model = new CustomModel;
		$data = $model->select_avg();
		print_r($data->getResult());
	}

	public function test_sum()
	{
		$model = new CustomModel;
		$data = $model->select_sum();
		print_r($data->getResult());
	}

	public function test_count()
	{
		$model = new CustomModel;
		$data = $model->select_count();
		print_r($data->getResult());
	}

	public function test_from()
	{
		$model = new CustomModel;
		$data = $model->from();
		print_r($data);
	}

	public function test_join()
	{
		$model = new CustomModel;
		$data = $model->join();
		print_r($data->getResult());
	}
	
	public function test_and_where()
	{
		$model = new CustomModel;
		$data = $model->and_where();
		foreach($data->getResult() as $row){
			print_r($row);
			echo '<hr><br>';
		}
	}

	public function custom_key()
	{
		$model = new CustomModel;
		$data = $model->custom_key();
		foreach($data->getResult() as $row){
			print_r($row);
			echo '<hr><br>';
		}
	}

	public function test_associative_array()
	{
		$model = new CustomModel;
		$data = $model->associative_array();
		foreach($data->getResult() as $row){
			print_r($row);
			echo '<hr><br>';
		}
	}

	public function test_custom_string()
	{
		$model = new CustomModel;
		$data = $model->custom_string();
		foreach($data->getResult() as $row){
			print_r($row);
			echo '<hr><br>';
		}
	}

	public function test_subqueries()
	{
		$model = new CustomModel;
		$data = $model->subqueries();
		foreach($data->getResult() as $row){
			print_r($row);
			echo '<hr><br>';
		}
	}

	public function test_or_where()
	{
		$model = new CustomModel;
		$data = $model->or_where();
		foreach($data->getResult() as $row){
			print_r($row);
			echo '<hr><br>';
		}
	}

	public function where_in()
	{
		$model = new CustomModel;
		$data = $model->where_in();
		foreach($data->getResult() as $row){
			print_r($row);
			echo '<hr><br>';
		}
	}

	public function or_where_in()
	{
		$model = new CustomModel;
		$data = $model->or_where_in();
		foreach($data->getResult() as $row){
			print_r($row);
			echo '<hr><br>';
		}
	}

	public function where_not_in()
	{
		$model = new CustomModel;
		$data = $model->where_not_in();
		foreach($data->getResult() as $row){
			print_r($row);
			echo '<hr><br>';
		}
	}

	public function or_where_not_in()
	{
		$model = new CustomModel;
		$data = $model->or_where_not_in();
		foreach($data->getResult() as $row){
			print_r($row);
			echo '<hr><br>';
		}
	}
}
