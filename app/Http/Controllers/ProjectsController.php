<?php

namespace App\Http\Controllers;


class ProjectsController extends Controller{

    public function scada()
    {
        return view('projects.scada');
    }

    public function dispatching()
    {
        return view('projects.dispatch');
    }

    public function readiness()
    {
        return view('projects.readiness');
    }

    public function compsforkids()
    {
        return view('projects.readiness');
    }
}