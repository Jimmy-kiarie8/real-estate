<?php

namespace App\Traits;

use App\Models\Tickets\Ticket;
use App\Models\TicketComment;

trait TicketingTrait
{
    /**
     * Create a new support ticket.
     *
     * @param array $data
     * @return Ticket
     */
    public function createTicket($data)
    {
        // Validate and process data, then create a new ticket
        return Ticket::create($data);
    }

    /**
     * Get all support tickets.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllTickets()
    {
        return Ticket::paginate();
    }

    /**
     * Get a specific support ticket by ID.
     *
     * @param int $ticketId
     * @return Ticket|null
     */
    public function getTicketById($ticketId)
    {
        return Ticket::find($ticketId);
    }

    /**
     * Update the status of a support ticket.
     *
     * @param int $ticketId
     * @param string $status
     * @return bool
     */
    public function updateTicketStatus($ticketId, $status)
    {
        $ticket = Ticket::find($ticketId);

        if ($ticket) {
            $ticket->status = $status;
            $ticket->save();

            return true;
        }

        return false;
    }

    public function assignTicket($ticketId)
    {
        $ticket = Ticket::findOrFail($ticketId);

        // Check if the authenticated user is an agent and can assign tickets
        if (auth()->user()->role === 'agent') {
            $ticket->agent_id = auth()->user()->id;
            $ticket->status = 'In Progress';
            $ticket->save();
            return true;
        }

            return false;
    }

    public function addComment($ticketId, $body)
    {
        $ticket = Ticket::findOrFail($ticketId);

        // Create a new comment
        $comment = new TicketComment([
            'body' => $body,
            'user_id' => auth()->user()->id,
        ]);

        $ticket->comments()->save($comment);

        return true;
    }
    // Add more methods as needed for ticket-related functionalities
}
