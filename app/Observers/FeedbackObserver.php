<?php

namespace App\Observers;

use App\Mail\FeedbackShipped;
use App\Models\Feedback;
use App\Service\SendMail;
use Illuminate\Support\Facades\Mail;

class FeedbackObserver
{
    /**
     * Handle the Feedback "created" event.
     *
     * @param \App\Models\Feedback $feedback
     * @return void
     */
    public function created(Feedback $feedback)
    {
        try {
            $config = (new SendMail())->getConfig()->setConfig();
            $letter = new FeedbackShipped($feedback);
            Mail::to($config->config->to)->queue($letter);
        } catch (\Throwable $throwable) {
            \Log::critical('FeedbackObserver', $throwable->getTrace());
        }
    }

    /**
     * Handle the Feedback "updated" event.
     *
     * @param \App\Models\Feedback $feedback
     * @return void
     */
    public function updated(Feedback $feedback)
    {
        //
    }

    /**
     * Handle the Feedback "deleted" event.
     *
     * @param \App\Models\Feedback $feedback
     * @return void
     */
    public function deleted(Feedback $feedback)
    {
        //
    }

    /**
     * Handle the Feedback "restored" event.
     *
     * @param \App\Models\Feedback $feedback
     * @return void
     */
    public function restored(Feedback $feedback)
    {
        //
    }

    /**
     * Handle the Feedback "force deleted" event.
     *
     * @param \App\Models\Feedback $feedback
     * @return void
     */
    public function forceDeleted(Feedback $feedback)
    {
        //
    }
}
