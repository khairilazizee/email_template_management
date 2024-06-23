<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserAction;
use Illuminate\Support\Facades\Auth;

class UserActionController extends Controller
{
    public function index()
    {
        $userActions = UserAction::where('users_id', Auth::id())->get();
        return view('users.actions.index', compact('userActions'));
    }
}
