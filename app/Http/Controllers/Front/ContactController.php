<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSendMail;


use App\Models\Contact;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact(){

        return view('front.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $this -> validate($request,[
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required'
        ]);


        try {
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => config('services.recaptcha.secret'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]);

            $responseData = $response->json();

            if (!$response->successful() || !$responseData['success']) {
                return back()->withErrors(['g-recaptcha-response' => 'Por favor, verifica que no eres un robot.'])
                             ->withInput();
            }
        } catch (\Exception $e) {
            return back()->withErrors(['g-recaptcha-response' => 'Error al validar el CAPTCHA. Inténtalo de nuevo.'])
                         ->withInput();
        }


        $contact = new Contact;
        $contact -> name = $request -> name;
        $contact -> subject = $request -> subject;
        $contact -> email = $request -> email;
        $contact -> message = $request -> message;
        $contact -> save();

        if ($contact->save()==true) {

            Mail::to('info@uniblockweb.com')->send(new ContactSendMail($data));
            // https://uniblockweb.com
            $newsletter = new Newsletter;
            $newsletter -> name = $request -> name;
            $newsletter -> email = $request -> email;
            $newsletter -> statusx = 1;
            $newsletter -> save();

            return back()->with('success', '¡Gracias por contactarnos! Hemos recibido tu mensaje.');
            //return view('emails.thanks');

        }else {

            return back()->withErrors(['error' => 'Ocurrió un error al procesar tu solicitud. Inténtalo de nuevo.'])
                                 ->withInput();

        }

    }

}
