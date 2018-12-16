<?php
namespace App\Contracts;

class AbstractBaseRepository
{
    public function __construct($app, $model){}
    public function setUpModel($model){}
    public function all(){}
    public function find($id){}
    public function create($create_data){}
    public function update($id, $update_data){}
    public function delete($id){}
    public function allPaginated($per_page){}
}