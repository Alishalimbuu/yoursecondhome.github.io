<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AbouthostelResource;
use App\Http\Resources\AboutusResource;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\FacilityResource;
use App\Http\Resources\FeedbackResource;
use App\Http\Resources\GalleryResource;
use App\Http\Resources\MealResource;
use App\Http\Resources\RoomgalleryResource;
use App\Http\Resources\RoomResource;
use App\Http\Resources\ServiceResource;
use App\Http\Resources\SlideResource;
use App\Http\Resources\WelcomeResource;
use App\Models\About;
use App\Models\Abouthostel;
use App\Models\Company;
use App\Models\Facility;
use App\Models\Feedback;
use App\Models\Gallery;
use App\Models\Meal;
use App\Models\Room;
use App\Models\Roomgallery;
use App\Models\Rule;
use App\Models\Service;
use App\Models\Slide;
use App\Models\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public $data;
    //company Infromation
    public function company()
    {
        $company = Company::first();
        return new CompanyResource($company);
    }
    //Slide
    public function slide()
    {
        $slides = Slide::orderBy('created_at', 'asc')->get();
        return SlideResource::collection($slides);
    }
    //Gallery
    public function gallery()
    {
        $galleries = Gallery::all();
        return GalleryResource::collection($galleries);
    }
    //Services
    public function service()
    {
        $services = Service::all();
        return ServiceResource::collection($services);
    }
    //facility
    public function facility()
    {
        $facilities = Facility::all();
        return FacilityResource::collection($facilities);
    }
    //about us
    public function about()
    {
        $abouts = About::all();
        return AboutusResource::collection($abouts);
    }

    //Meal time table
    public function meal()
    {
        $meals = Meal::all();
        return MealResource::collection($meals);
    }

    //Rooms Details
    public function room()
    {
        // $this->data = Room::all();
        $room = Room::with('beds')->get();
        return RoomResource::collection($room);
    }

    //Rules & Regulations
    public function rule()
    {
        $rule = Rule::all();
        return response()->json($rule);
    }
    //Welcome Message
    public function welcome()
    {
        $welcome = Welcome::first();
        return new WelcomeResource($welcome);
    }
    public function roomgallery()
    {
        $roomgalleries = Roomgallery::all();
        return RoomgalleryResource::collection($roomgalleries);
    }
    //about hostel Message
    public function abouthostel()
    {
        $abouthostel = Abouthostel::first();
        return new AbouthostelResource($abouthostel);
    }

    //Get Feedback
    public function getFeedback()
    {
        $getfeedback = Feedback::orderBy('created_at', 'desc')->get();
        return FeedbackResource::collection($getfeedback);
    }
}
