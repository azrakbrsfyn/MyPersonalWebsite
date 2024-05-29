<?php

namespace App\Http\Controllers;

use App\Models\InstagramFeeds;
use App\Models\BannerAndFlyers;
use App\Models\Photographies;
use App\Models\Typography;
use App\Models\Posters;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Portfolio - Azriel Akbar Sofyan';
        return view('portfolio.index')->with('viewData', $viewData);
    }

    public function instagramFeeds()
    {
        $viewData = [];
        $viewData['title'] = 'Instagram Feeds - Azriel Akbar Sofyan';
        $viewData['instagramFeeds'] = InstagramFeeds::all();
        return view('portfolio.instagramFeeds')->with('viewData', $viewData);
    }

    public function instagramFeedsDetail($id)
    {
        $viewData = [];
        $feed = InstagramFeeds::findOrFail($id);
        $viewData['title'] = $feed->getName() . '- Detail';
        $viewData['subtitle'] = $feed->getName();
        $viewData['item'] = $feed;
        return view('portfolio.detail')->with('viewData', $viewData);
    }

    public function typography()
    {
        $viewData = [];
        $viewData['title'] = 'Typography - Azriel Akbar Sofyan';
        $viewData['typographies'] = Typography::all();
        return view('portfolio.typography')->with('viewData', $viewData);
    }

    public function typographyDetail($id)
    {
        $viewData = [];
        $typography = Typography::findOrFail($id);
        $viewData['title'] = $typography->getName() . '- Detail';
        $viewData['subtitle'] = $typography->getName();
        $viewData['item'] = $typography;
        return view('portfolio.detail')->with('viewData', $viewData);
    }

    public function posterDesign()
    {
        $viewData = [];
        $viewData['title'] = 'Poster Design - Azriel Akbar Sofyan';
        $viewData['posters'] = Posters::all();
        return view('portfolio.posterDesign')->with('viewData', $viewData);
    }

    public function posterDesignDetail($id)
    {
        $viewData = [];
        $poster = Posters::findOrFail($id);
        $viewData['title'] = $poster->getName() . '- Detail';
        $viewData['subtitle'] = $poster->getName();
        $viewData['item'] = $poster;
        return view('portfolio.detail')->with('viewData', $viewData);
    }

    public function bannerFlyersDesign()
    {
        $viewData = [];
        $viewData['title'] = 'Banner & Flyers Design - Azriel Akbar Sofyan';
        $viewData['banners_flyers'] = BannerAndFlyers::all();
        return view('portfolio.bannerFlyers')->with('viewData', $viewData);
    }

    public function bannerFlyersDesignDetail($id)
    {
        $viewData = [];
        $banner_flyer = BannerAndFlyers::findOrFail($id);
        $viewData['title'] = $banner_flyer->getName() . '- Detail';
        $viewData['subtitle'] = $banner_flyer->getName();
        $viewData['item'] = $banner_flyer;
        return view('portfolio.detail')->with('viewData', $viewData);
    }

    public function photography()
    {
        $viewData = [];
        $viewData['title'] = 'Photography - Azriel Akbar Sofyan';
        $viewData['photos'] = Photographies::all();
        return view('portfolio.photography')->with('viewData', $viewData);
    }

    public function photographyDetail($id)
    {
        $viewData = [];
        $photo = Photographies::findOrFail($id);
        $viewData['title'] = $photo->getName() . '- Detail';
        $viewData['subtitle'] = $photo->getName();
        $viewData['item'] = $photo;
        return view('portfolio.detail')->with('viewData', $viewData);
    }
}
