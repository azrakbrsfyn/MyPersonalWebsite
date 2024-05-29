<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Photographies;

class AdminPhotographyController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Photography - Azriel Personal Website";
        $viewData['photos'] = Photographies::all();
        return view('admin.photography.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "image" => "image",
        ]);

        $newFeed = new Photographies();
        $newFeed->setName($request->input('name'));
        $newFeed->setDescription($request->input('description'));
        $newFeed->setImage('photo.png');
        $newFeed->save();

        if ($request->hasFile("image")) {
            $imageName = $newFeed->getId() . "." . "photography" . $request->file('image')->extension();
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
        Photographies::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData['title'] = "Admin Page - Edit Photography - Azriel Akbar Sofyan";
        $viewData['photo'] = Photographies::findOrFail($id);
        return view('admin.photography.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'image',
        ]);

        $newFeed = Photographies::findOrFail($id);
        $newFeed->setName($request->input('name'));
        $newFeed->setDescription($request->input('description'));

        if ($request->hasFile('image')) {
            $imageName = $newFeed->getId() . "." . "photography" . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newFeed->setImage($imageName);
        }

        $newFeed->save();
        return redirect()->route('admin.photography.index');
    }
}
