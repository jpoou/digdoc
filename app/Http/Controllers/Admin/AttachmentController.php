<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttachmentRequest;
use App\Models\Attachment;

class AttachmentController extends Controller
{
    public function index()
    {
        return view('modules.attachments.index', [
            'attachments' => Attachment::all()
        ]);
    }

    public function create()
    {
        return view('modules.attachments.create');
    }

    public function store(AttachmentRequest $request)
    {
        Attachment::create($request->validated());
        return redirect()->route('attachments.index')->with('message', 'Creado exitosamente');
    }

    public function edit(Attachment $attachment)
    {
        return view('modules.attachments.edit', [
            'attachment' => $attachment
        ]);
    }

    public function update(AttachmentRequest $request, Attachment $attachment)
    {
        $attachment->update($request->validated());
        return redirect()->route('attachments.index')->with('message', 'Creado exitosamente');
    }

    public function destroy(Attachment $attachment)
    {
        $attachment->delete();
        return redirect()->route('attachments.index')->with('message', 'Eliminado exitosamente');
    }
}