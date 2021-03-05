<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
        // $this->middleware(['auth']);
    }
    
    public function index()
    {
        // $categories = Category::all();
        $categories = Category::orderBy('id', 'desc')->paginate(25);

        return view('admin.categories.index', ['categories'=>$categories]);
    }

        
    public function create()
    {
        return view('admin.categories.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'type' => 'required|integer',
            // 'timing' => 'required|integer',
            'name' => 'required|string|max:255',
        ]);

        $category =  Category::create([
            // 'type' => $request->type,
            // 'timing' => $request->timing,
            'name' => $request->name,
        ]);

        return redirect(route('categories.index'))->with('success',  __('global.Data_created') );

    }

    public function show(Category $category)
    {
        return view('admin.categories.show', ['category'=>$category]);
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', ['category'=>$category]);
    }

    public function update(Request $request, Category $category)
    {   
        $this->validate($request, [
            // 'type' => 'required|integer',
            // 'timing' => 'required|integer',
            'name' => 'required|string|max:255',
        ]);

        $category->update([
            // 'type' => $request->type,
            // 'timing' => $request->timing,
            'name' => $request->name,
        ]);

        return redirect(route('categories.index'))->with('success',  __('global.Data_updated') );
        
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('categories.index'))->with('success',  __('global.Data_deleted') );
    }
}
