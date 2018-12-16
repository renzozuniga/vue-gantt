<?php
namespace App\Services;
use App\Repositories\CoursesRepository;
use Validator;
use DB;

class CoursesService
{
    protected $courses_repository;
    protected $rules = [
        'name'              =>  'required',
        'order'             =>  'required',
        'register_date'     =>  'required'
    ];
    function __construct(CoursesRepository $courses_repository)
    {
        $this->courses_repository = $courses_repository;
    }
    public function find($id)
    {
        return $this->courses_repository->find($id);
    }
    public function getCourses()
    {
        $courses = $this->courses_repository->all();
        $values = array();
        foreach ($courses as $course){
            $values[] = $course["name"];
        }
        return $values;
    }
}