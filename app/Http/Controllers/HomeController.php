<?php

namespace App\Http\Controllers;

use App\Models\Typography;
use App\Models\InstagramFeeds;
use App\Models\Photographies;
use App\Models\Posters;
use App\Models\BannerAndFlyers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $typographies = Typography::all();
        $feeds = InstagramFeeds::all();
        $posters = Posters::all();
        $banner_flyers = BannerAndFlyers::all();
        $photographies = Photographies::all();

        $allWorks = [];

        foreach ($typographies as $typo) {
            array_push($allWorks, $typo);
        }

        foreach ($feeds as $feed) {
            array_push($allWorks, $feed);
        }

        foreach ($posters as $poster) {
            array_push($allWorks, $poster);
        }

        foreach ($banner_flyers as $banner_flyer) {
            array_push($allWorks, $banner_flyer);
        }

        foreach ($photographies as $photo) {
            array_push($allWorks, $photo);
        }

        // Mengacak array
        shuffle($allWorks);

        $viewData = [];
        $viewData['title'] = 'Home - Azriel Akbar Sofyan';

        $viewData['previous_works'] = $allWorks;

        // dd($typographies = Typography::all());
        // dd($viewData['previous_works']);
        return view('home.index')->with('viewData', $viewData);
    }
}
