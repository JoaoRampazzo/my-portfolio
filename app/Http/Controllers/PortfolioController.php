<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Experience;
use App\Models\Skill;
use Inertia\Inertia;

class PortfolioController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'projects' => Project::all(),
            'experiences' => Experience::orderBy('order')->get(),
            'skills' => Skill::all()->groupBy('category'),
        ]);
    }
}
