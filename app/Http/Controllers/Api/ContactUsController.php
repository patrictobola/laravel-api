<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function message()
    {
        $mail = new ContactUsMail(
            sent_by: 'polando@sama.com',
            subject: 'Yo',
            content: 'pojnvajkvnak',
        );
        Mail::to(env('MAIL_TO_ADDRESS'))->send($mail);

        return response(null, 204);
    }
}
