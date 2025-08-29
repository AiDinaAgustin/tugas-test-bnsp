<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::latest('published_at')->take(3)->get();
        $activities = Activity::latest('date')->take(3)->get();
        return view('home.index', compact('news', 'activities'));
    }

    public function about()
    {
        return view('about');
    }

    public function activities()
    {
        $activities = Activity::all();
        return view('activities', compact('activities'));
    }
    
    public function activityDetail($id)
    {
        $activity = Activity::findOrFail($id);
        return view('activity-detail', compact('activity'));
    }

    public function news()
    {
        $news = News::all();
        return view('news', compact('news'));
    }
    
    public function newsDetail($id)
    {
        $news = News::findOrFail($id);
        return view('news-detail', compact('news'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        // Handle contact form submission logic here
        // Validation example:
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        
        // Send email, save to database, etc.
        
        return redirect()->route('contact')->with('success', 'Pesan anda telah terkirim!');
    }
}