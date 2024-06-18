<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\EmailTemplate;
use App\Http\Controllers\Controller;

class EmailTemplateController extends Controller
{
    public function index()
    {
        $templates = EmailTemplate::all();
        return view('admin.templates.index', compact('templates'));
    }

    public function create()
    {
        return view('admin.templates.create');
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'header' => 'required',
            'footer' => 'required',
            'content' => 'required',
            'code' => 'required',
        ]);

        // dd($request->all());

        EmailTemplate::create($request->all());

        return redirect()->route('admin.templates.index')->with('success', 'Template created successfully.');
    }

    public function edit(EmailTemplate $template)
    {
        return view('admin.templates.edit', compact('template'));
    }

    public function update(Request $request, EmailTemplate $template)
    {
        $request->validate([
            'name' => 'required',
            'header' => 'required',
            'footer' => 'required',
            'content' => 'required',
            'code' => 'required|unique:email_templates,code,' . $template->id,
        ]);

        $template->update($request->all());

        return redirect()->route('admin.templates.index')->with('success', 'Template updated successfully.');
    }

    public function destroy(EmailTemplate $template)
    {
        $template->delete();

        return redirect()->route('admin.templates.index')->with('success', 'Template deleted successfully.');
    }
}
