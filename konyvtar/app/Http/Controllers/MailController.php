<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index()
    {
        $recipients = [
            'lajkogege@gmail.com',
            'kepirobalazs204@gmail.com',
            'nemjani0923@gmail.com'
        ];

        $mailData = [
            'title' => 'Ez egy próba email',
            'body' => 'Test email'
        ];

        // Loop through recipients and send the email to each
        foreach ($recipients as $recipient) {
            Mail::to($recipient)->send(new DemoMail($mailData));
        }

        dd("Email küldése sikeres.");
    }
}
