<?php

namespace Eclipse\ModuleTemplate\Http\Controllers;

use Eclipse\Core\Foundation\Http\Controllers\AbstractController;
use Illuminate\Contracts\Support\Renderable;

class TestController extends AbstractController
{
    public function index(): Renderable
    {
        return view('test::test.index');
    }
}
