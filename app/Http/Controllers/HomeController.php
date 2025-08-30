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
        $activities = Activity::latest('date')->paginate(6);
        return view('activities', compact('activities'));
    }
    
    public function activityDetail($id)
    {
        $activity = Activity::findOrFail($id);
        return view('activity-detail', compact('activity'));
    }

        public function news()
    {
        $allNews = News::latest('published_at')->get();
        
        // Main news list
        $news = News::latest('published_at')->take(6)->get();
        
        // Highlight news (featured)
        $highlight = $allNews->first();
        
        // More news (exclude highlight)
        $moreNews = $allNews->skip(1)->take(3);
        
        // Recent posts for tags
        $recentPosts = $allNews->take(5);
        
        return view('news', compact('news', 'highlight', 'moreNews', 'recentPosts'));
    }
    
    public function newsDetail($id)
    {
        $news = News::findOrFail($id);
        $recentNews = News::where('id', '!=', $id)
                          ->latest('published_at')
                          ->take(3)
                          ->get();
        
        return view('news-detail', compact('news', 'recentNews'));
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