<?php

namespace App\Controllers;
use App\Models\InsertModel;

class TestInsert extends BaseController
{
	public function insert_contact()
	{
		$model = new InsertModel;
		print_r($model->insert_contact());
	}

    public function insert_ignore_contact()
    {
        $model = new InsertModel;
		print_r($model->insert_ignore_contact());
    }

    public function compiled_insert()
    {
        $model = new InsertModel;
		print_r($model->compiled_insert());
    }

    public function insert_batch()
    {
        $model = new InsertModel;
        print_r($model->insert_batch());
    }

    public function replacing()
    {
        $model = new InsertModel;
        print_r($model->replacing());
    }

    public function set_update()
    {
        $model = new InsertModel;
        print_r($model->set_update());
    }

    public function updating()
    {
        $model = new InsertModel;
        print_r($model->updating());
    }

    public function updating_2()
    {
        $model = new InsertModel;
        print_r($model->updating_2());
    }

    public function update_batch()
    {
        $model = new InsertModel;
        print_r($model->update_batch());
    }

    public function compiled_update()
    {
        $model = new InsertModel;
        print_r($model->compiled_update());
    }
}