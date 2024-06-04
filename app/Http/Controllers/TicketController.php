<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }
    public function showindex()
    {
        $tickets = Ticket::all();
        return view('tickets.showindex', compact('tickets'));
        // Alternatively:
        // return view('tickets.showindex', ['tickets' => $tickets]);
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'route_id' => 'required|exists:routes,id',
            'purchaseDate' => 'required|date',
            'traveldate' => 'required|date',
            'traveltime' => 'required|date_format:H:i',
            'seatnumber' => 'nullable|string|max:10',
            'price' => 'required|numeric|min:0',
        ]);

        Ticket::create($validated);

        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
    }

    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'route_id' => 'required|exists:routes,id',
            'purchaseDate' => 'required|date',
            'traveldate' => 'required|date',
            'traveltime' => 'required|date_format:H:i',
            'seatnumber' => 'nullable|string|max:10',
            'price' => 'required|numeric|min:0',
        ]);

        $ticket->update($validated);

        return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully.');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')->with('success', 'Ticket deleted successfully.');
    }
}
