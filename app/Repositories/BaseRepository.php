<?php
namespace App\Repositories;
use App\Contracts\AbstractBaseRepository;
use Illuminate\Container\Container as App;

class BaseRepository extends AbstractBaseRepository
{
    protected $model;
    private $app;
    public function __construct(App $app, $model)
    {
        $this->app = $app;
        $this->setUpModel($model);
    }
    public function setUpModel($model)
    {
        $this->model = $this->app->make($model);
    }
    public function all()
    {
        return $this->model->all();
    }
    public function find($id)
    {
        return $this->model->find($id);
    }
    public function create($data)
    {
        return $this->model->create($data);
    }
    public function update($id, $data)
    {
        $model = $this->find($id)->update($data);
    }
    public function delete($id)
    {
        return $this->find($id)->delete();
    }
    public function allPaginated($perPage)
    {
        return $this->model->paginate($perPage);
    }
}