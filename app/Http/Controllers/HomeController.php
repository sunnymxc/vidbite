<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\View;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Add Comment for Testing
        // dd(auth()->user()->roles()->get()[0]->name);

        # code...
        // Get active user count
        $countUsers = User::where('is_active', 1)
            ->count();
        // Get active user count in an hour
        $hourUsers = User::where('is_active', 1)
            ->whereDate('updated_at', '<=', date('H') )
            ->count();
        // Get active user count in a day 
        $dayUsers = User::where('is_active, 1')
            ->whereDay('updated_at', '<=', date('d') )
            ->count();
        // Get active user count in a week
        $weekUsers = User::where('is_active', 1)
            ->whereDate('updated_at', '<=', date('W') )
            ->count();
        // Get active user count in a month
        $monthUsers = User::where('is_active', 1)
            ->whereMonth('updated_at', '<=', date('m') )
            ->count();
        
        // Get Number of hours watched
        $countHours = DB::table('continue_watches')
            ->count('time');
        // Get number of hours watched in an hour
        $countHours = DB::table('continue_watches')
            ->whereDate('updated_at', '<=', date('H') )
            ->count('time');
        // Get most engaged videos
        $enVideos = View::join('video_contents', 'views.id', '=', 'video_contents.id')
            ->orderBy('total_views', 'desc')
            ->first(['views.*', 'video_contents.name']);



        return view('dashboard', compact('countUsers', 'countHours', 'enVideos'));
    }
}
