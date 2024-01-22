<?php

namespace App\Http\Controllers;

use App\Services\MailchimpNewsletter;
use App\Services\NewsletterInterface;
use Illuminate\Validation\ValidationException;

class Subscription extends Controller
{
    /**
     * @throws ValidationException
     */
    public function __invoke(MailchimpNewsletter $newsletter)
    {


        $attribute = request()->validate([
           'subscribe' =>['required','email']
        ]);


        try{
            $newsletter->subscribe($attribute["subscribe"]);
        }catch (Exception $e){
            throw new ValidationException('subscribe',"Failed to add Subscription");
        }

        return redirect('/')->with('success','Subscription added');

    }
}
