<?php

namespace App\Traits;

use App\Models\Callcenter;
use App\Models\Lead;

trait CallCenterAnalytics
{
    /**
     * Get total calls completed by an agent.
     */
    public function getTotalCallsCompleted()
    {
        return $this->calls()->where('status', 'completed')->count();
    }

    /**
     * Get total calls missed by an agent.
     */
    public function getTotalCallsMissed()
    {
        return $this->calls()->where('status', 'missed')->count();
    }

    /**
     * Get total leads contacted by an agent.
     */
    public function getTotalLeadsContacted()
    {
        return $this->leads()->where('status', 'contacted')->count();
    }

    /**
     * Get total leads converted by an agent.
     */
    public function getTotalLeadsConverted()
    {
        return $this->leads()->where('status', 'converted')->count();
    }

    /**
     * Get total calls completed across all agents.
     */
    public static function getTotalSystemCallsCompleted()
    {
        return Callcenter::where('status', 'completed')->count();
    }

    /**
     * Get total calls missed across all agents.
     */
    public static function getTotalSystemCallsMissed()
    {
        return Callcenter::where('status', 'missed')->count();
    }

    /**
     * Get total leads contacted across all agents.
     */
    public static function getTotalSystemLeadsContacted()
    {
        return Lead::where('status', 'contacted')->count();
    }

    /**
     * Get total leads converted across all agents.
     */
    public static function getTotalSystemLeadsConverted()
    {
        return Lead::where('status', 'converted')->count();
    }

    /**
     * Get first call resolution rate for an agent.
     */
    public function getFirstCallResolutionRate()
    {
        $totalCallsCompleted = $this->getTotalCallsCompleted();
        $totalLeadsConverted = $this->getTotalLeadsConverted();

        return ($totalCallsCompleted > 0) ? ($totalLeadsConverted / $totalCallsCompleted) * 100 : 0;
    }

    /**
     * Get average call time for an agent.
     */
    public function getAverageCallTime()
    {
        $totalCallsCompleted = $this->getTotalCallsCompleted();
        $totalCallDuration = $this->calls()->where('status', 'completed')->sum('durationInSeconds');

        return ($totalCallsCompleted > 0) ? $totalCallDuration / $totalCallsCompleted : 0;
    }

    /**
     * Get total amount sent by an agent.
     */
    public function getTotalAmountSent()
    {
        return $amount_sent = 1;
        // Assuming you have a column like 'amount_sent' in your agents table
        return $this->amount_sent;
    }
    /**
     * Get total amount sent by an agent.
     */
    public function getTotalLeads()
    {
        return Lead::count();
    }

    /**
     * Get call abandonment rate for an agent.
     */
    public function getCallAbandonmentRate()
    {
        $totalCallsMissed = $this->getTotalCallsMissed();
        $totalCallsInitiated = $this->calls()->where('status', 'initiated')->count();

        return ($totalCallsInitiated > 0) ? ($totalCallsMissed / $totalCallsInitiated) * 100 : 0;
    }
}
