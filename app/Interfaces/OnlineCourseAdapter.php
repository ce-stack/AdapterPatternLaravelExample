<?php

namespace App\Interfaces;

use App\Models\OnlineCourse;

class OnlineCourseAdapter implements CourseAdapterInterface
{
    private $onlineCourse;

    public function __construct(OnlineCourse $onlineCourse)
    {
        return $this->onlineCourse = $onlineCourse;
    }

    public function makeCourse($data)
    {
        return $this->onlineCourse->addCourse($data);
    }
}
