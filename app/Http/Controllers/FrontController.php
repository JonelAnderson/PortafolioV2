<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\Email;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Portafolio;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        $educations = Education::get();
        $experiences = Experience::get();
        $portafolios = Portafolio::get();

        return view('welcome', compact('educations', 'experiences','portafolios'));
    }
    public function send(Request $request)
    {
        $correo = 'turismostingomaria@gmail.com';
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'subject' => 'required',
        ]);
        try {
            $email = new Email($request->all());
            $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ];

            Mail::to($correo)->send(new SendMail($data));
            $email->save();
			notify()->success('Mensaje enviado exitosamente! ⚡️');
			return back();
        } catch (\Exception $e) {
			notify()->error('Hubo un error al enviar el mensaje, intente de nuevo! 🥺');
            return back()->with('success','Error al enviar el mensaje, intente de nuevo!');
        }
    }
}
