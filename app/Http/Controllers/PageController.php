<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use App\Models\SeoSetting;
use App\Models\Testimonial;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $testimonials = Testimonial::active()->ordered()->limit(6)->get();
        $galleryImages = GalleryImage::active()->ordered()->limit(8)->get();
        $seo = SeoSetting::getForPage('home');

        $faqs = [
            ['q' => 'What types of events do you cater to?', 'a' => 'We cater to all types of events including weddings, corporate functions, birthday parties, festivals, public events, and private parties. Our services are scalable to accommodate events of any size.'],
            ['q' => 'How far in advance should I book?', 'a' => 'We recommend booking at least 2-3 weeks in advance for standard events. For large-scale events like weddings or festivals, booking 4-6 weeks ahead is advisable to ensure availability.'],
            ['q' => 'Do you provide setup and maintenance?', 'a' => 'Yes, our team handles complete setup, regular maintenance during the event, and removal after the event. We ensure everything runs smoothly so you can focus on your guests.'],
            ['q' => 'What areas do you serve?', 'a' => 'We primarily serve Mumbai, Maharashtra, and surrounding areas. For events in other locations, please contact us to discuss availability and logistics.'],
        ];
        return view('pages.home', compact('testimonials', 'faqs', 'galleryImages', 'seo'));
    }

    public function about(): View
    {
        $seo = SeoSetting::getForPage('about');
        return view('pages.about', compact('seo'));
    }

    public function services(): View
    {
        $seo = SeoSetting::getForPage('services');
        return view('pages.services', compact('seo'));
    }

    public function gallery(): View
    {
        $images = GalleryImage::active()->ordered()->paginate(12);
        $seo = SeoSetting::getForPage('gallery');

        $galleryImages = GalleryImage::where('is_active', true)
            ->orderBy('sort_order')
            ->orderByDesc('created_at')
            ->get();

        $galleryJson = $galleryImages->map(fn($img) => [
            'src'   => Storage::url($img->image_path),
            'title' => $img->title,
            'type'  => $img->event_type,
            'desc'  => $img->description ?? ''
        ])->toJson();

        return view('pages.gallery', compact('images', 'galleryImages', 'galleryJson', 'seo'));
    }

    public function testimonials(): View
    {
        $testimonials = Testimonial::active()->ordered()->paginate(9);
        $seo = SeoSetting::getForPage('testimonials');
        return view('pages.testimonials', compact('testimonials', 'seo'));
    }

    public function faqs(): View
    {
        $seo = SeoSetting::getForPage('faqs');
        return view('pages.faqs', compact('seo'));
    }

    public function privacyPolicy(): View
    {
        $seo = SeoSetting::getForPage('privacy-policy');
        return view('pages.privacy-policy', compact('seo'));
    }

    public function termsConditions(): View
    {
        $seo = SeoSetting::getForPage('terms-conditions');
        return view('pages.terms-conditions', compact('seo'));
    }

    public function sitemap(): View
    {
        $seo = SeoSetting::getForPage('sitemap');
        return view('pages.sitemap', compact('seo'));
    }
}
