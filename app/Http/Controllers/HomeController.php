<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Stat;
use App\Models\Skill;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        if (session()->has('locale')) {
            app()->setLocale(session('locale'));
        } else {
            app()->setLocale('kh');
        }

        $sliders = Slider::orderBy('order', 'asc')->get();
        $stats = Stat::all();
        $skills = Skill::all();
        $contacts = Contact::orderBy('order', 'asc')->get();
        
        return view('index', compact('sliders', 'stats', 'skills', 'contacts'));
    }
}
