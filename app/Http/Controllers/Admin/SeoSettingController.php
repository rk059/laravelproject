<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class SeoSettingController extends Controller
{
    public function index(): View
    {
        $settings = SeoSetting::all();
        return view('admin.seo.index', compact('settings'));
    }

    public function edit(SeoSetting $seo): View
    {
        return view('admin.seo.edit', ['setting' => $seo]);
    }

    public function update(Request $request, SeoSetting $seo): RedirectResponse
    {
        $request->validate([
            'meta_title' => 'required|string|max:70',
            'meta_description' => 'required|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
            'og_title' => 'nullable|string|max:70',
            'og_description' => 'nullable|string|max:200',
            'og_image' => 'nullable|string|max:255',
            'canonical_url' => 'nullable|url|max:255',
        ]);

        $seo->update($request->only([
            'meta_title',
            'meta_description',
            'meta_keywords',
            'og_title',
            'og_description',
            'og_image',
            'canonical_url',
        ]));

        return redirect()->route('admin.seo.index')
            ->with('success', 'SEO settings updated successfully.');
    }
}
