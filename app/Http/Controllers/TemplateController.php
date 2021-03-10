<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class TemplateController extends Controller
{
    public function index()
    {       
        $premiere_live = Event::where('type', 1)->where('timing', 1)->where('group', 1)->get();
        $premiere_upcoming = Event::where('type', 1)->where('timing', 2)->where('group', 1)->get();
        $sports_live = Event::where('type', 1)->where('timing', 1)->where('group', 2)->get();
        $sports_upcoming = Event::where('type', 1)->where('timing', 2)->where('group', 2)->get();
        $events_live = Event::where('type', 1)->where('timing', 1)->where('group', 3)->get();
        $events_upcoming = Event::where('type', 1)->where('timing', 2)->where('group', 3)->get();
        
        return view('templates.index', ['premiere_live'=>$premiere_live, 'premiere_upcoming'=>$premiere_upcoming, 'sports_live'=>$sports_live, 'sports_upcoming'=>$sports_upcoming, 'events_live'=>$events_live, 'events_upcoming'=>$events_upcoming]);
    }


    public function admin()
    {     
        $category_count = \DB::table('categories')->count();
        $language_count = \DB::table('languages')->count();
        $event_count = \DB::table('events')->count();
        $user_count = \DB::table('users')->count();
        return view('admin.index', ['category_count'=>$category_count, 'language_count'=>$language_count, 'event_count'=>$event_count, 'user_count'=>$user_count]);
    }

    public function professional()
    {       
        $premiere_live = Event::where('type', 1)->where('timing', 1)->where('group', 1)->get();
        $premiere_upcoming = Event::where('type', 1)->where('timing', 2)->where('group', 1)->get();
        $premiere_archive = Event::where('type', 1)->where('timing', 3)->where('group', 1)->get();
        
        $sports_live = Event::where('type', 1)->where('timing', 1)->where('group', 2)->get();
        $sports_upcoming = Event::where('type', 1)->where('timing', 2)->where('group', 2)->get();
        $sports_archive = Event::where('type', 1)->where('timing', 3)->where('group', 2)->get();
        
        $events_live = Event::where('type', 1)->where('timing', 1)->where('group', 3)->get();
        $events_upcoming = Event::where('type', 1)->where('timing', 2)->where('group', 3)->get();
        $events_archive = Event::where('type', 1)->where('timing', 3)->where('group', 3)->get();

        return view('templates.professional', ['premiere_live'=>$premiere_live, 'premiere_upcoming'=>$premiere_upcoming, 'premiere_archive'=>$premiere_archive, 'sports_live'=>$sports_live, 'sports_upcoming'=>$sports_upcoming, 'sports_archive'=>$sports_archive, 'events_live'=>$events_live, 'events_upcoming'=>$events_upcoming, 'events_archive'=>$events_archive]);
    }

    public function community()
    {           
        $premiere_live = Event::where('type', 2)->where('timing', 1)->where('group', 1)->get();
        $premiere_upcoming = Event::where('type', 2)->where('timing', 2)->where('group', 1)->get();
        $premiere_archive = Event::where('type', 2)->where('timing', 3)->where('group', 1)->get();
        
        $sports_live = Event::where('type', 2)->where('timing', 1)->where('group', 2)->get();
        $sports_upcoming = Event::where('type', 2)->where('timing', 2)->where('group', 2)->get();
        $sports_archive = Event::where('type', 2)->where('timing', 3)->where('group', 2)->get();
        
        $events_live = Event::where('type', 2)->where('timing', 1)->where('group', 3)->get();
        $events_upcoming = Event::where('type', 2)->where('timing', 2)->where('group', 3)->get();
        $events_archive = Event::where('type', 2)->where('timing', 3)->where('group', 3)->get();

        return view('templates.community', ['premiere_live'=>$premiere_live, 'premiere_upcoming'=>$premiere_upcoming, 'premiere_archive'=>$premiere_archive, 'sports_live'=>$sports_live, 'sports_upcoming'=>$sports_upcoming, 'sports_archive'=>$sports_archive, 'events_live'=>$events_live, 'events_upcoming'=>$events_upcoming, 'events_archive'=>$events_archive]);
    }

    public function livestream()
    {       
        return view('templates.livestream');
    }

    public function login()
    {       
        return view('templates.login');
    }

    public function signupPro()
    {       
        return view('templates.signupPro');
    }

    public function profile()
    {       
        // if (\Auth::check() && \Gate::allows('isConfirmed')) {
        //     return view('templates.profile');      
        // } else {
        //     return redirect()->route('login')->with('warning', 'Please wait till the verification process ends');
        // }
        return view('templates.profile');      
    }

    public function watchlist(Request $request)
    {       
        // dd($request->user());
        $user = $request->user();
        $is_watchlist = $request->watchlist;
        $event_id = $request->event_id;
        if ($is_watchlist) {
            $user->events()->attach($event_id);
            // return response()->json($user);
            return response()->json("Attached");
        }
        else {
            $user->events()->detach($event_id);
            return response()->json("Detached");
        }
        
        

        // return view('templates.signupPro');
    }
}
