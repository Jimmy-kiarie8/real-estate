<?php

namespace App\Traits;

use App\Http\Requests\StoreCallcenterRequest;
use App\Http\Requests\UpdateCallcenterRequest;
use App\Models\Callcenter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait CallcenterTrait
{
    public function voice(Request $request)
    {
        $inhouse = false;
        $agents = [];
        $users = User::where('agent_sip', '!=', null)->get('agent_sip');

        foreach ($users as $key => $user) {
            $agents[] = $user->agent_sip;
        }

        if ($request->callSessionState == 'Ringing') {
            if (in_array($request->clientDialedNumber, $agents) && in_array($request->callerNumber, $agents)) {
                $inhouse = true;
                $this->outgoing($request->clientDialedNumber);
            } elseif (in_array($request->callerNumber, $agents)) {
                $this->outgoing($request->clientDialedNumber);
            } else {
                $this->incoming_call($request->callerNumber);
            }

            $calls = new Callcenter();
            $call_data = $request->all();

            if (in_array($request->callerNumber, $agents)) {
                $call_data['direction'] = 'Outbound';
            }
            $calls->create_call($call_data);

            // if (!$inhouse) {
            //     $lead = new Lead();
            //     $data['phone'] = $request->callerNumber;
            //     $lead->lead($data);
            // }
        }
    }

    public function event(Request $request)
    {
        $agents = [];
        $users = User::where('agent_sip', '!=', null)->get('agent_sip');

        foreach ($users as $key => $user) {
            $agents[] = $user->agent_sip;
        }

        if (in_array($request->callerNumber, $agents)) {
            $call_data['direction'] = 'Outbound';
            $call_data['user_id'] = Auth::id();
        }

        $calls = new Callcenter();
        $calls->create_call($request->all());
    }

    // Rest of the methods...

    // You can continue to add other methods from your original class here.
}
