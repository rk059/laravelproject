<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\ContactInquiry;
use App\Models\SeoSetting;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function show(): View
    {
        $seo = SeoSetting::getForPage('contact');
        return view('pages.contact', compact('seo'));
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        ContactInquiry::create($request->validated());

        return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
