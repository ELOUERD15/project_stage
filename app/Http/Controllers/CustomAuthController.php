<?php

namespace App\Http\Controllers;

// use Illuminate\Foundation\Bootstrap\HandleExceptions;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use App\Models\courrier;

class CustomAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('homepage');
    } 

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('courrier')
                        ->with('message', 'Signed in!');
        }
   
        return redirect('/login')->with('message', 'Login details are not valid!');
    }
    public function signup()
    {
        return view('registration');
    }

    public function signupsave(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
            
        $data = $request->all();
        $check = $this->create($data);
          
        return redirect("login");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( array $data)
    {
        return User::create([
            'name' => $data['name'] ,
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
          ]);
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect('/login');
        // return view("dashboard");
    }

    public function signOut() {
        Session()->flush();
        Auth::logout();
   
        return redirect('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        // $inpu = $request->all();
        // Courriers::create($inpu);
        // return redirect('dashboard')->with('flash_message' , 'Mail Addedd');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
