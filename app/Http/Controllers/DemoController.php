<?php

namespace App\Http\Controllers;

use App\Jobs\DemoJob;

class DemoController extends Controller
{

    public function testJob()
    {
        DemoJob::dispatch();
    }
}
