<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Session;
use App\Models\Event;

class SessionController extends Controller
{
    public function create(Event $event)
    {
        return view('sessions.create', compact('event'));
    }

    public function store(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'speaker' => 'required|string|max:255',
        ]);

        // Check for time conflicts
        $conflict = $event->sessions()->whereBetween('start_time', [$request->start_time, $request->end_time])
            ->orWhereBetween('end_time', [$request->start_time, $request->end_time])
            ->exists();

        if ($conflict) {
            return back()->withErrors(['time_conflict' => 'Session times conflict with an existing session.']);
        }

        $event->sessions()->create($request->all());

        return redirect()->route('events.show', $event);
    }

    public function edit(Session $session)
    {
        return view('sessions.edit', compact('session'));
    }

    public function update(Request $request, Session $session)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'speaker' => 'required|string|max:255',
        ]);

        // Check for time conflicts
        $event = $session->event;
        $conflict = $event->sessions()->where('id', '!=', $session->id)
            ->whereBetween('start_time', [$request->start_time, $request->end_time])
            ->orWhereBetween('end_time', [$request->start_time, $request->end_time])
            ->exists();

        if ($conflict) {
            return back()->withErrors(['time_conflict' => 'Session times conflict with an existing session.']);
        }

        $session->update($request->all());

        return redirect()->route('events.show', $event);
    }

    public function destroy(Session $session)
    {
        $session->delete();
        return redirect()->route('events.show', $session->event);
    }
}
