<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Application;



class CustomAuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'User created successfully!');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('dashboard'))->with('success', 'You are logged in!');
        }

        return redirect()->route('login')->with('error', 'Invalid credentials!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You are logged out!');
    }

    public function povjob()
    {
        return view('pov.povjob');
    }

    public function userpov()
    {
        return view('pov.userpov');
    }

    public function home()
    {
        return view('pov.home');
    }

    public function categoriespov()
    {
        return view('pov.categoriespov');
    }
    public function blogspov()
    {
        return view('pov.blogspov');
    }



    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string',
            'email_address' => 'required|email',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:51200',
            'gov_ids' => 'required|file|mimes:jpg,png,pdf|max:51200',
            'job_applying_for' => 'required|string|max:255',
            'date_today' => 'required|date',
        ]);

        // Store the uploaded files
        $resumePath = $request->file('resume')->store('uploads/resumes', 'public');
        $govIdsPath = $request->file('gov_ids')->store('uploads/gov_ids', 'public');

        // Store the application data along with the file paths
        $application = new Application([
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'email_address' => $request->email_address,
            'home_address' => $request->home_address,
            'date_of_birth' => $request->date_of_birth,
            'citizenship' => $request->citizenship,
            'civil_status' => $request->civil_status,
            'degree' => $request->degree,
            'job_applying_for' => $request->job_applying_for,
            'date_today' => $request->date_today,
            'resume' => $resumePath,
            'gov_ids' => $govIdsPath,
        ]);

        $application->user_id = Auth::id();
        $application->save();
        return view('pov.confirmation');
    }




    public function status()
    {
        $applications = Application::where('user_id', Auth::id())->get();
        return view('pov.status', compact('applications'));
    }

    public function someOtherMethod()
    {
        return $this->status();
    }

}

