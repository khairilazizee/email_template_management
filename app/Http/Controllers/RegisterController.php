<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserTemplate;
use Illuminate\Http\Request;
use App\Models\EmailTemplate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6'
        ]);

        // dd($request->all());
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'roles_id' => 4,
            'created_at' => now()
        ]);

        Auth::login($user);

        $emailTemplates = EmailTemplate::all();

        $userTemplates = [];
        foreach ($emailTemplates as $template) {
            $userTemplates[] = [
                'email_templates_id' => $template->id,
                'title' => $template->name,
                'subject' => $template->subject,
                'modified_header' => $template->header,
                'modified_content' => $template->content,
                'modified_footer' => $template->footer,
                'users_id' => $user->id,
                'created_at' => now()
            ];
        }

        UserTemplate::insert($userTemplates);

        return redirect()->route('users.templates.index')->with('success', 'User registered successfully.');
    }
}
