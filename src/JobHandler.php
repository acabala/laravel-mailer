<?php namespace DeSmart\Mailer;

use Illuminate\Support\Facades\App;

class JobHandler
{
    /**
     * @param Job $job
     */
    public function handle(Job $job)
    {
        $app = App::getFacadeApplication();
        $mail = new MailerManager($app);
        $mail->setData($job->getData());
        $mail->send();
    }
}