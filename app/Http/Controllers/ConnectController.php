<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Hash,Auth,Mail;
use App\Models\User;
use App\Mail\UserSendRecover; 
class ConnectController extends Controller
{ 
	 public function __construct(){
        $this->middleware('guest')->except(['getLogout']);
    }


    public function getLogin(){
        return view('connect.login');

    }

    public function getRegister(){
        return view('connect.register');

    }

    public function postLogin(Request $request){
        $rules=[   
              'email' => 'required|email',
              'password' => 'required|min:8'
            ];
        $messages =[
            'email.required'=>'Su correo electrónico es requerido.',
            'email.email'=>'El formato de su correo electrónico es invalido.',
            'password.required'=>'Por favor escriba una contraseña.',
            'password.min'=>'La contraseña debe de tener al menos 8 caracteres.',
        ];
        $validator = Validator::make($request->all(),$rules, $messages);
        if($validator->fails()):
        return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger');
    else:
        if(Auth::attempt(['email'=> $request->input('email'),'password'=> $request->input('password')],true)):
            if(Auth::user()->status=="100"):
                return redirect('/logout');
            else:
                return redirect('/');
            endif;
    else:
        return back()->with('message', 'Correo electrónico o contraseña incorrectas.')->with('typealert', 'danger');
    endif;
    endif;
    }


    public function postRegister(Request $request){
        $rules = [
        'name' => 'required',
        'number' => 'required|min:10',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
        'cpassword'=> 'required|same:password'
        ];

        $messages =[
        'name.required'=>'Su nombre es requerido.',
        'number.required'=>'Su número de teléfono es requerido.',
        'number.min'=>'Ingrese correctamente su número telefonico.',
        'email.required'=>'Su correo electrónico es requerido.',
        'email.email'=>'El formato de su correo electrónico es invalido.',
        'email.unique'=>'Ya existe un usuario registrado con este correo electrónico.',
        'password.required'=>'Por favor escriba una contraseña.',
        'password.min'=>'La contraseña debe de tener al menos 8 caracteres.',
        'cpassword.required'=>'Es necesario confirmar la contraseña.',
        'cpassword.min'=>'La confirmación de la contraseña debe de tener al menos 8 caracteres.',
        'cpassword.same'=>'Las contraseñas no coinciden.',
        ]; 

        $validator = Validator::make($request->all(),$rules, $messages);
        if($validator->fails()):
        return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger');
        else:
            $user = new User;
            $user->name = e($request->input('name'));
            $user->number = e($request->input('number'));
            $user->email = e($request->input('email'));
            $user->password = Hash::make($request->input('password'));

            if($user->save()):
              return redirect ('/login')->with('message', 'Su usuario se creo con éxito,ahora puede iniciar sesión')->with('typealert', 'success');
           endif;
        endif;
}
public function getLogout(){
    $status = Auth::user()->status;
    Auth::logout();
    if($status =="100"):
         return redirect ('/login')->with('message', 'Su usuario fue suspendido')->with('typealert', 'danger');
    else:
    return redirect ('/');
    endif;
}

public function getRecover(){ 
    return view('connect.recover');

}

public function postRecover(Request $request){
     $rules=[   
        'email' => 'required|email',
    ];
    $messages = [ 
        'email.required'=>'Su correo electrónico es requerido.',
        'email.email'=>'El formato de su correo electrónico es invalido.',

    ];
    $validator = Validator::make($request->all(),$rules, $messages);
    if($validator->fails()):
        return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger');
    else:
        $user = User::where('email', $request->input('email'))->count();
        if($user == "1"):
            $user = User::where('email',$request->input('email'))->first();
            $code = rand(100000,999999);
            $data = ['name' => $user->name ,'email' => $user->email ,'code' => $code];
            Mail::to($user->email)->send(new UserSendRecover($data));
           // return view('emails.user_password_recover' ,$data);
        else:
            return back()->with('messages', 'este correo electrónico no existe')->with('typealert','danger');
        endif;
    endif;
}
}
