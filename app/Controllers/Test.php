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

	public function like()
	{
		$model = new CustomModel;
		$data = $model->like();
		foreach($data->getResult() as $row){
			print_r($row->Name);echo " | ";
			print_r($row->Platform);
			echo '<hr><br>';
		}
	}

	public function associative_like()
	{
		$model = new CustomModel;
		$data = $model->associative_like();
		foreach($data->getResult() as $row){
			print_r($row->Name);echo " | ";
			print_r($row->Platform);
			echo '<hr><br>';
		}
	}

	public function or_like()
	{
		$model = new CustomModel;
		$data = $model->or_like();
		foreach($data->getResult() as $row){
			print_r($row->Name);echo " | ";
			print_r($row->Platform);
			echo '<hr><br>';
		}
	}

	public function not_like()
	{
		$model = new CustomModel;
		$data = $model->not_like();
		foreach($data->getResult() as $row){
			print_r($row->Name);echo " | ";
			print_r($row->Platform);
			echo '<hr><br>';
		}
	}

	public function or_not_like()
	{
		$model = new CustomModel;
		$data = $model->or_not_like();
		foreach($data->getResult() as $row){
			print_r($row->Name);echo " | ";
			print_r($row->Platform);
			echo '<hr><br>';
		}
	}
	
	public function group_by()
	{
		$model = new CustomModel;
		$data = $model->group_by();
		foreach($data->getResult() as $row){
			print_r($row);
			echo '<hr><br>';
		}
	}

	public function distinct()
	{
		$model = new CustomModel;
		$data = $model->distinct();
		foreach($data->getResult() as $row){
			print_r($row);
			echo '<hr><br>';
		}
	}

	public function having()
	{
		$model = new CustomModel;
		$data = $model->having();
		foreach($data->getResult() as $row){
			print_r($row);
			echo '<hr><br>';
		}
	}

	public function order_by()
	{
		$model = new CustomModel;
		$data = $model->order_by();
		foreach($data->getResult() as $row){
			print_r($row->Name);echo " | ";
			print_r($row->Year_of_Release);
			echo '<hr><br>';
		}
	}

	public function limit()
	{
		$model = new CustomModel;
		$data = $model->limit();
		foreach($data->getResult() as $row){
			print_r($row->Name);echo " | ";
			print_r($row->Year_of_Release);
			echo '<hr><br>';
		}
	}

	public function count_all_results()
	{
		$model = new CustomModel;
		$data = $model->count_all_results();
		print_r($data);
	}

	public function count_all()
	{
		$model = new CustomModel;
		$data = $model->count_all();
		print_r($data);
	}

	public function delete_data()
	{
		$model = new CustomModel;
		print_r($model->delete_data());
	}

	public function empty_table()
	{
		$model = new CustomModel;
		print_r($model->empty_table());
	}

	public function truncate_table()
	{
		$model = new CustomModel;
		print_r($model->truncate_table());
	}

	public function compiled_delete()
	{
		$model = new CustomModel;
		echo $model->compiled_delete();
	}
}
