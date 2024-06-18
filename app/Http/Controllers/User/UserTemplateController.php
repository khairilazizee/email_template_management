<?php

namespace App\Http\Controllers\User;

use App\Models\UserTemplate;
use Illuminate\Http\Request;
use App\Models\EmailTemplate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserTemplateController extends Controller
{
    public function index()
    {
        $userTemplates = UserTemplate::where('users_id', Auth::id())->get();
        return view('users.templates.index', compact('userTemplates'));
    }

    public function create()
    {
        $templates = EmailTemplate::all();
        return view('users.templates.create', compact('templates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email_templates_id' => 'required|exists:email_templates,id',
            'modified_header' => 'nullable|string',
            'modified_footer' => 'nullable|string',
            'modified_content' => 'nullable|string',
        ]);

        UserTemplate::create([
            'users_id' => Auth::id(),
            'email_templates_id' => $request->email_templates_id,
            'modified_header' => $request->modified_header,
            'modified_footer' => $request->modified_footer,
            'modified_content' => $request->modified_content,
        ]);

        return redirect()->route('user.templates.index')->with('success', 'Template customized successfully.');
    }

    public function edit(UserTemplate $userTemplate)
    {
        $templates = EmailTemplate::all();
        return view('user.templates.edit', compact('userTemplate', 'templates'));
    }

    public function update(Request $request, UserTemplate $userTemplate)
    {
        $request->validate([
            'email_templates_id' => 'required|exists:email_templates,id',
            'modified_header' => 'nullable|string',
            'modified_footer' => 'nullable|string',
            'modified_content' => 'nullable|string',
        ]);

        $userTemplate->update($request->all());

        return redirect()->route('user.templates.index')->with('success', 'Template updated successfully.');
    }

    public function destroy(UserTemplate $userTemplate)
    {
        $userTemplate->delete();

        return redirect()->route('user.templates.index')->with('success', 'Template deleted successfully.');
    }
}
