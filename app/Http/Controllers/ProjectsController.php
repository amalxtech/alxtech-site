<?php

namespace App\Http\Controllers;


class ProjectsController extends Controller{

    public function scada()
    {
        return view('projects.scada');
    }

    public function dispatching()
    {
        return view('projects.dispatching');
    }

    public function readiness()
    {
        return view('projects.readiness');
    }
}