<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\InstagramFeeds;

class AdminInstagramController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Instagram Feeds - Azriel Personal Website";
        $viewData['feeds'] = InstagramFeeds::all();
        return view('admin.feeds.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "image" => "image",
        ]);

        $newFeed = new InstagramFeeds();
        $newFeed->setName($request->input('name'));
        $newFeed->setDescription($request->input('description'));
        $newFeed->setImage('feed.png');
        $newFeed->save();

        if ($request->hasFile("image")) {
            $imageName = $newFeed->getId() . "." . "feeds" . $request->file('image')->extension();
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
        InstagramFeeds::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData['title'] = "Admin Page - Edit Feed - Azriel Akbar Sofyan";
        $viewData['feed'] = InstagramFeeds::findOrFail($id);
        return view('admin.feeds.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'image',
        ]);

        $newFeed = InstagramFeeds::findOrFail($id);
        $newFeed->setName($request->input('name'));
        $newFeed->setDescription($request->input('description'));

        if ($request->hasFile('image')) {
            $imageName = $newFeed->getId() . "." . "feeds" . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newFeed->setImage($imageName);
        }

        $newFeed->save();
        return redirect()->route('admin.instagram.index');
    }
}
