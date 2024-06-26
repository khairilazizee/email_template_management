<?php

namespace App\Http\Controllers\User;

use App\Models\UserAction;
use App\Models\UserTemplate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserActionController extends Controller
{
    public function index()
    {
        $userActions = UserAction::where('users_id', Auth::id())->get();
        return view('users.actions.index', compact('userActions'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'user_action_id' => 'required|integer|exists:user_actions,id',
            'user_template_id' => 'required|integer|exists:user_templates,id',
        ]);

        $userTemplate = UserTemplate::findOrFail($request->user_template_id);
        $userTemplate->update([
            'content' => $request->input('content')
        ]);

        // Update UserAction
        $userAction = UserAction::findOrFail($request->user_action_id);
        $userAction->update([
            'status' => $request->has('status')
        ]);

        return redirect()->route('users.actions.index');
    }
}
