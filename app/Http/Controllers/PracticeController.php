<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PracticeController extends Controller {
    public function practice($param = 'Admin') {
        return 'Mi nombre es: '.$param;
    }
}