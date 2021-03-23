<?php

namespace App\Mail;

use App\Models\Job;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobContact extends Mailable
{
    use Queueable, SerializesModels;

    private $job;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Job $job)
    {
        $this->job = $job;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Um novo talento - PayTour');
        $this->to($this->job->email);
        return $this->markdown('mail.JobMailPage', ['job' => $this->job]);
    }
}
