<?php

namespace App\Http\Controllers;

use App\Mail\TestingYZMail as MailTestingYZMail;
use Illuminate\Support\Facades\Mail; //mandatory imports
use App\Mail\TestingYZMail; //mandatory imports

class EmailYZController extends Controller
{
    public function send(){
        $data=
        [
            'name'=>'Anu',
            'info'=>'Please upload the marks'
        ];
        mail::to('gillanu2003@gmail.com')->send(new 
        TestingYZMail($data));
        return "Email successfully sent";
    }
}
