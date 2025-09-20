<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class BirthdayReminderJob
{
    use Queueable;
    private $receiver;

    /**
     * Create a new job instance.
     */
    public function __construct($name="Guest")
    {
        $this->receiver = $name;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        \Log::debug("Happy Birthday {$this->receiver}");
    }
}
