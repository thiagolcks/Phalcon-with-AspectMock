<?php

class ClientEmails
{

    public function sendFirstNotifications($client)
    {
        if (filter_var($client->email, FILTER_VALIDATE_EMAIL) && $client->active == 1){
            $this->sendWelcomeEmail($client);
            $this->sendAlertEmail($client);
        }
    }

    public function sendWelcomeEmail($client)
    {
        Mailer::send();
    }

    public function sendAlertEmail($client)
    {
        Mailer::send();
    }

}
