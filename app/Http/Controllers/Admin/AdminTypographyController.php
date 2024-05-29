<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Typography;

class AdminTypographyController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Typography - Azriel Personal Website";
        $viewData['typographies'] = Typography::all();
        return view('admin.typography.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "image" => "image",
        ]);

        $newFeed = new Typography();
        $newFeed->setName($request->input('name'));
        $newFeed->setDescription($request->input('description'));
        $newFeed->setImage('typo.png');
        $newFeed->save();

        if ($request->hasFile("image")) {
            $imageName = $newFeed->getId() . "." . "typography" . $request->file('image')->extension();
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
        Typography::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData['title'] = "Admin Page - Edit Typography - Azriel Akbar Sofyan";
        $viewData['typo'] = Typography::findOrFail($id);
        return view('admin.typography.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'image',
        ]);

        $newFeed = Typography::findOrFail($id);
        $newFeed->setName($request->input('name'));
        $newFeed->setDescription($request->input('description'));

        if ($request->hasFile('image')) {
            $imageName = $newFeed->getId() . "." . "typography" . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newFeed->setImage($imageName);
        }

        $newFeed->save();
        return redirect()->route('admin.typography.index');
    }
}
