<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfflineCourse extends Controller
{
    public function create($data) {
        return 'course has been created' .$data;
    }
}
