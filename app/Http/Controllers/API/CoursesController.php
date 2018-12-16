<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CoursesService;
use Carbon\Carbon;

class CoursesController extends Controller
{
    protected $courses_service;

    public function __construct(CoursesService $courses_service)
    {
        $this->courses_service = $courses_service;
    }
    public function index(Request $request)
    {
        return response()->json($this->courses_service->getCourses(), 200);
    }
}
