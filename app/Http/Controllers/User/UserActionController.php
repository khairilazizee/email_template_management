<?php

namespace App\Http\Controllers\User;

use App\Models\UserTemplate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserActionController extends Controller
{
    public function index()
    {
        $userTemplates = UserTemplate::where('users_id', Auth::id())->get();
        return view('users.actions.index', compact('userActions'));
    }
}
