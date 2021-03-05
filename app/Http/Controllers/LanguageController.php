<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
        // $this->middleware(['auth']);
    }
    
    public function index()
    {
        // $languages = Language::all();
        $languages = Language::orderBy('id', 'desc')->paginate(25);
        return view('admin.languages.index', ['languages'=>$languages]);
    }

        
    public function create()
    {
        return view('admin.languages.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);

        $language =  Language::create([
            'name' => $request->name,
        ]);

        return redirect(route('languages.index'))->with('success',  __('global.Data_created') );

    }

    public function show(Language $language)
    {
        return view('admin.languages.show', ['language'=>$language]);
    }

    public function edit(Language $language)
    {
        return view('admin.languages.edit', ['language'=>$language]);
    }

    public function update(Request $request, Language $language)
    {   
        $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);

        $language->update([
            'name' => $request->name,
        ]);

        return redirect(route('languages.index'))->with('success',  __('global.Data_updated') );
        
    }

    public function destroy(Language $language)
    {
        $language->delete();
        return redirect(route('languages.index'))->with('success',  __('global.Data_deleted') );
    }
}
