<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventUser;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $events = Event::paginate(3);
        return view('front.index', compact('events'));
    }

    public function showevent($id)
    {
        $event = Event::findOrFail($id);
        return view('front.eventdetail', compact('event'));
    }

    public function userdashboard()
    {

        $eventUsers = EventUser::where('user_id', auth()->id())->get();
        return view('front.userdashboard', compact('eventUsers'));
    }
}
