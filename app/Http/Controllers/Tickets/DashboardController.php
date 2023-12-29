<?php

namespace App\Http\Controllers\Tickets;

use App\Http\Controllers\Controller;

use Coderflex\LaravelTicket\Models\Ticket;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $totalTickets = Ticket::count();
        $openTickets = Ticket::opened()->count();
        $closedTickets = Ticket::closed()->count();

        return view('tickets.dashboard', compact('totalTickets', 'openTickets', 'closedTickets'));
    }
}
