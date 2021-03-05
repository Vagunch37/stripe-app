<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
        // $this->middleware(['auth']);
    }
    
    public function index()
    {
        // $events = Event::all();
        $events = Event::orderBy('id', 'desc')->paginate(25);
        return view('admin.events.index', ['events'=>$events]);
    }

        
    public function create()
    {
        $categories = \DB::table('categories')->pluck('name', 'id');
        $languages = \DB::table('languages')->pluck('name', 'id');
        return view('admin.events.create', ['categories'=>$categories, 'languages'=>$languages]);
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required|integer',
            'timing' => 'required|integer',
            'group' => 'required|integer',
            'category_id' => 'required|integer',
            'language_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'views' => 'required|integer',
            'image_name' => 'nullable',
        ]);

        $event =  Event::create([
            'type' => $request->type,
            'timing' => $request->timing,
            'group' => $request->group,
            'category_id' => $request->category_id,
            'language_id' => $request->language_id,
            'name' => $request->name,
            'views' => $request->views,
        ]);

        if($request->hasFile('image_name')){
            $file = $request->file('image_name');    
    
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $file->move('images/events', $fileNameToStore);
    
            $event->image_name = $fileNameToStore;
        }
        $event->save();

        return redirect(route('events.index'))->with('success',  __('global.Data_created') );

    }

    public function show(Event $event)
    {
        return view('admin.events.show', ['event'=>$event]);
    }

    public function edit(Event $event)
    {
        $categories = \DB::table('categories')->pluck('name', 'id');
        $languages = \DB::table('languages')->pluck('name', 'id');
        return view('admin.events.edit', ['event'=>$event, 'categories'=>$categories, 'languages'=>$languages]);
    }

    public function update(Request $request, Event $event)
    {   
        $this->validate($request, [
            'type' => 'required|integer',
            'timing' => 'required|integer',
            'group' => 'required|integer',
            'category_id' => 'required|integer',
            'language_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'views' => 'required|integer',
            'image_name' => 'nullable',
        ]);

        if($request->hasFile('image_name')){
            $file = $request->file('image_name');
    
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
    
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $file->move('images/events', $fileNameToStore);
    
            if( isset($item->image_name) ) {
                \File::delete('images/events/'.$event->image_name);
            }
            
            $event->image_name = $fileNameToStore;
        }

        
        $event->update([
            'type' => $request->type,
            'timing' => $request->timing,
            'group' => $request->group,
            'category_id' => $request->category_id,
            'language_id' => $request->language_id,
            'name' => $request->name,
            'views' => $request->views,
        ]);

        
        return redirect(route('events.index'))->with('success',  __('global.Data_updated') );
        
    }

    public function destroy(Event $event)
    {
        if( isset($event->image_name) ) {
            \File::delete('images/events/'.$event->image_name);
        }
        $event->delete();
        return redirect(route('events.index'))->with('success',  __('global.Data_deleted') );
    }
}
