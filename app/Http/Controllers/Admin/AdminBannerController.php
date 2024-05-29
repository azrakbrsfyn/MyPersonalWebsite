<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\BannerAndFlyers;

class AdminBannerController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Banner & Flyers - Azriel Personal Website";
        $viewData['banner_flyers'] = BannerAndFlyers::all();
        return view('admin.banner-flyers.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "image" => "image",
        ]);

        $newBanner = new BannerAndFlyers();
        $newBanner->setName($request->input('name'));
        $newBanner->setDescription($request->input('description'));
        $newBanner->setImage('banner.png');
        $newBanner->save();

        if ($request->hasFile("image")) {
            $imageName = $newBanner->getId() . "." . "banner-flyers" . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newBanner->setImage($imageName);
            $newBanner->save();
        }

        return back();
    }

    public function delete($id)
    {
        BannerAndFlyers::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData['title'] = "Admin Page - Edit Banner & Flyers - Azriel Akbar Sofyan";
        $viewData['banner_flyers'] = BannerAndFlyers::findOrFail($id);
        return view('admin.banner-flyers.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'image',
        ]);

        $newBanner = BannerAndFlyers::findOrFail($id);
        $newBanner->setName($request->input('name'));
        $newBanner->setDescription($request->input('description'));

        if ($request->hasFile('image')) {
            $imageName = $newBanner->getId() . "." . "banner-flyers" . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newBanner->setImage($imageName);
        }

        $newBanner->save();
        return redirect()->route('admin.banner-flyers.index');
    }
}
