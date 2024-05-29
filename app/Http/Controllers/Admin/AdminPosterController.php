<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Posters;

class AdminPosterController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Poster - Azriel Personal Website";
        $viewData['posters'] = Posters::all();
        return view('admin.poster.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "image" => "image",
        ]);

        $newFeed = new Posters();
        $newFeed->setName($request->input('name'));
        $newFeed->setDescription($request->input('description'));
        $newFeed->setImage('poster.png');
        $newFeed->save();

        if ($request->hasFile("image")) {
            $imageName = $newFeed->getId() . "." . "poster" . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newFeed->setImage($imageName);
            $newFeed->save();
        }

        return back();
    }

    public function delete($id)
    {
        Posters::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData['title'] = "Admin Page - Edit Poster - Azriel Akbar Sofyan";
        $viewData['poster'] = Posters::findOrFail($id);
        return view('admin.poster.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'image',
        ]);

        $newFeed = Posters::findOrFail($id);
        $newFeed->setName($request->input('name'));
        $newFeed->setDescription($request->input('description'));

        if ($request->hasFile('image')) {
            $imageName = $newFeed->getId() . "." . "poster" . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newFeed->setImage($imageName);
        }

        $newFeed->save();
        return redirect()->route('admin.poster.index');
    }
}
