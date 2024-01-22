<?php

namespace App\Services;

class MailchimpNewsletter implements NewsletterInterface
{
    public function subscribe(string $email, string $list = null)
    {
        // TODO: Implement subscribe() method.
        return $email;
    }
}
