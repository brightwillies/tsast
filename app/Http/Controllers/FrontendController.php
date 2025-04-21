<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\GalleryImage;
use App\Models\News;

class FrontendController extends Controller
{

    public function viewGallery($id)
    {

        $gallery = Gallery::find($id);
        $images = GalleryImage::where('gallery_id', $gallery->id)->get();
        return view('galleryview', compact('gallery', 'images'));
    }

    public function home()
    {

        // return view('index');
        // $events = News::take('3')->get();
        $title = 'Home';

        $events = Event::latest()->where('status', 1)->take(3)->get();
        return view('index', compact('title', 'events'));
    }
    public function events()
    {
        // return view('index');
        // $events = News::take('3')->get();
        $title = 'Events';
        $activeEvents = Event::latest()->where('status', 1)->get();
        $pastEvents = Event::latest()->where('status', 0)->get();
        return view('events', compact('title', 'activeEvents', 'pastEvents'));
    }
    public function blogs()
    {
        // return view('index');
        // $events = News::take('3')->get();
        $title = 'Blogs';
        $activeBlogs = News::select('*')->orderBy('date', 'DESC')->get();
        // $pastEvents = Blog::latest()->where('status', 0)->get();
        return view('blogs', compact('title', 'activeBlogs'));
    }
    public function singleBlog($id)
    {
        $title = 'Blogs';
        $blog = News::find($id);
        $otherBlogs = News::where('id','<>', $id)->take(5)->get();
        return view('blog', compact('title', 'blog','otherBlogs'));
    }
    public function singleEvent($id)
    {
        $title = 'Events';
        $event = Event::find($id);
        $events = Event::latest()->where('status', 1)->where('id','<>', $id)->take(3)->get();
        return view('event', compact('title', 'event','events'));
    }



    public function gallery()
    {

        $title = 'Gallery';
        $galleries  = Gallery::all();
        return view('gallery', compact('title','galleries'));
    }

    public function about()
    {$title = 'About Us';
        return view('about', compact('title'));}

    public function contact()
    {
        $title = 'Contact Us';
        return view('contact', compact('title'));
    }
    public function programs()
    {
        $title = 'Contact Us';
        return view('program', compact('title'));
    }

}
