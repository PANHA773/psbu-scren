<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Stat;
use App\Models\Skill;
use App\Models\Contact;
use App\Models\Announcement;

class HomeController extends Controller
{
    public function index()
    {
        if (session()->has('locale')) {
            app()->setLocale(session('locale'));
        } else {
            app()->setLocale('kh');
        }

        $sliders       = Slider::orderBy('order', 'asc')->get();
        $stats         = Stat::all();
        $skills        = Skill::all();
        $contacts      = Contact::orderBy('order', 'asc')->get();
        $announcements = Announcement::where('is_active', true)
            ->where(function ($q) {
                $q->whereNull('published_at')
                  ->orWhere('published_at', '<=', now());
            })
            ->orderBy('order', 'asc')
            ->get();

        return view('index', compact('sliders', 'stats', 'skills', 'contacts', 'announcements'));
    }
}
