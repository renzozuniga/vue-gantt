<?php
namespace App\Repositories;
use App\Repositories\BaseRepository;
use Illuminate\Container\Container as App;
use App\Models\Course;

class CoursesRepository extends BaseRepository
{
    public function __construct(App $app)
    {
        parent::__construct($app, Course::class);
    }
}