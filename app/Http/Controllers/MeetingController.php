<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function index()
    {
        return view('meetingmain');
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'meetingname' => 'required',
            'meetingid' => 'required|unique:meetings,meetingid',
        ]);
        $meetingname = $data['meetingname'];
        $meetingid = $data['meetingid'];

        Meeting::create([
            'meetingname' => $data['meetingname'],
            'user_id' => auth()->user()->id,
            'meetingid' => $data['meetingid'],
        ]);

        return view('meeting', compact('meetingname', 'meetingid'));
    }

    public function join(Request $request)
    {
        $data = $request->validate([
            'meetingid' => 'required',
        ]);

        $meeting = Meeting::where('meetingid', $data['meetingid'])->first();
        $meetings = Meeting::count();

        if ($meetings == 0) {
            return redirect('meeting')->with('error', 'No On Going Meeting!');
        } elseif (empty($meeting)) {
            return redirect('meeting')->with('error', 'Meeting ID is incorrect!');
        }

        $meetingid = $data['meetingid'];

        return view('meeting', compact('meetingid'));
    }

    public function ended()
    {
        Meeting::firstOrFail()->delete();
        return redirect('/meeting')->with('success', 'Meeting Ended Successfully!');
    }
}
