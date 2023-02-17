<?php

namespace App\Interfaces;

use App\Models\OfflineCourse;

class OfflineCourseAdapter implements CourseAdapterInterface
{
    private $offlineCourse;

    public function __construct(OfflineCourse $offlineCourse)
    {
        return $this->offlineCourse = $offlineCourse;
    }

    public function makeCourse($data)
    {
        return $this->offlineCourse->create($data);
    }
}
