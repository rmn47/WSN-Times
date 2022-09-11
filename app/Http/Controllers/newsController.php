<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Testing\Fluent\AssertableJson;
use Inertia\Inertia;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topn = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=news&lang=en');
        $news = json_decode($topn->body(), true);
        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=trending,news&lang=en');
        $newsa = json_decode($topn2->body(), true);

        $an = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=automobile,news&lang=en');
        $newsf = json_decode($an->body(), true);
        $en = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=entertainment,news&lang=en');
        $newsg = json_decode($en->body(), true);
        $pn = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=politics,news&lang=en');
        $newsh = json_decode($pn->body(), true);
        $fn = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=fashion,news&lang=en');
        $newsi = json_decode($fn->body(), true);
        $tns = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=tech,news&lang=en');
        $newsj = json_decode($tns->body(), true);
        $sns = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=health,news&lang=en');
        $newsk = json_decode($sns->body(), true);
        $snp = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular,news&lang=en');
        $newsl = json_decode($snp->body(), true);

        // dd($news);
        $home = "home";
        return Inertia::render('Welcome', [
            'news' => $news, 'newsa' => $newsa,  'newsl' => $newsl, 'newsf' => $newsf, 'newsg' => $newsg, 'newsh' => $newsh, 'newsi' => $newsi,
            'newsj' => $newsj, 'newsk' => $newsk,
            'home' => $home
        ]);
    }
    public function catf()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=fashion,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=fashion,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=fashion,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=fashion,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=fashion,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=fashion,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "fashion";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catb()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=business,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=business,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=business,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=business,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=business,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=business,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "business";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catp()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=politics,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=politics,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=politics,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=politics,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=politics,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=politics,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "politics";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function cate()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=entertainment,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=entertainment,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=entertainment,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=entertainment,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=entertainment,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=entertainment,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "entertainment";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catt()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=tech,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=tech,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=tech,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=tech,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=tech,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=tech,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "tech";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function cats()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=sports,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=sports,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=sports,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=sports,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=sports,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=sports,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "sports";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function cated()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=education,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=education,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=education,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=education,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=education,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=education,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "education";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catl()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=lifestyle,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=lifestyle,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=lifestyle,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=lifestyle,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=lifestyle,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=lifestyle,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "lifestyle";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function cath()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=health,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=health,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=health,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=health,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=health,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=health,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "health";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function cataut()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=automobile,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=automobile,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=automobile,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=automobile,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=automobile,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=automobile,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "automobile";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catapp()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=app,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=app,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=app,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=app,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=app,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=app,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "app";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catfood()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=food,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=food,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=food,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=food,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=food,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=food,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "food";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catg()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=game,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=game,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=game,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=game,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=game,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=game,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "game";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catin()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=internet,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=internet,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=internet,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=internet,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=internet,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=internet,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "internet";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catph()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=phones,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=phones,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=phones,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=phones,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=phones,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=phones,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "phones";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catdev()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=development,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=development,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=development,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=development,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=development,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=development,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "development";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catgd()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=gadgets,top&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=gadgets,top&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=gadgets,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=gadgets,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=gadgets,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=gadgets,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "gadgets";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catusa()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "USA";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catusap()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,politics,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,politics,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,politics,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,politics,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,politics,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,politics,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "USA";
        $ssubcattype = "Politics";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catusas()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,sports,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,sports,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,sports,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,sports,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,sports,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,sports,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "USA";
        $ssubcattype = "Sports";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catusat()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,tech,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,tech,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,tech,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,tech,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,tech,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,tech,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "USA";
        $ssubcattype = "Tech";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catusae()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,latest,entertainment&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,latest,entertainment&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,category,entertainment&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,recent,entertainment&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,popular,entertainment&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=usa,comment,entertainment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "USA";
        $ssubcattype = "Entertainment";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function cataus()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Australia";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function cataustraliap()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,politics,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,politics,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,politics,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,politics,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,politics,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,politics,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Australia";
        $ssubcattype = "Politics";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function cataustralias()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,sports,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,sports,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,sports,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,sports,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,sports,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,sports,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Australia";
        $ssubcattype = "Sports";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function cataustraliat()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,tech,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,tech,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,tech,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,tech,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,tech,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,tech,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Australia";
        $ssubcattype = "Tech";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function cataustraliae()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,latest,entertainment&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,latest,entertainment&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,category,entertainment&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,recent,entertainment&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,popular,entertainment&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=australia,comment,entertainment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Australia";
        $ssubcattype = "Entertainment";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catcad()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Canada";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catcanadap()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,politics,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,politics,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,politics,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,politics,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,politics,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,politics,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Canada";
        $ssubcattype = "Politics";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catcanadas()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,sports,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,sports,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,sports,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,sports,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,sports,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,sports,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Canada";
        $ssubcattype = "Sports";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catcanadat()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,tech,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,tech,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,tech,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,tech,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,tech,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,tech,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Canada";
        $ssubcattype = "Tech";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catcanadae()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,latest,entertainment&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,latest,entertainment&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,category,entertainment&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,recent,entertainment&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,popular,entertainment&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=canada,comment,entertainment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Canada";
        $ssubcattype = "Entertainment";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function cateur()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Europe";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function cateuropep()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,politics,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,politics,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,politics,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,politics,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,politics,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,politics,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Europe";
        $ssubcattype = "Politics";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function cateuropes()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,sports,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,sports,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,sports,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,sports,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,sports,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,sports,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Europe";
        $ssubcattype = "Sports";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function cateuropet()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,tech,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,tech,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,tech,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,tech,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,tech,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,tech,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Europe";
        $ssubcattype = "Tech";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function cateuropee()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,latest,entertainment&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,latest,entertainment&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,category,entertainment&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,recent,entertainment&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,popular,entertainment&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=europe,comment,entertainment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Europe";
        $ssubcattype = "Entertainment";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catafr()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Africa";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catafricap()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,politics,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,politics,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,politics,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,politics,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,politics,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,politics,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Africa";
        $ssubcattype = "Politics";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catafricas()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,sports,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,sports,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,sports,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,sports,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,sports,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,sports,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Africa";
        $ssubcattype = "Sports";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catafricat()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,tech,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,tech,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,tech,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,tech,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,tech,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,tech,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Africa";
        $ssubcattype = "Tech";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catafricae()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,latest,entertainment&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,latest,entertainment&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,category,entertainment&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,recent,entertainment&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,popular,entertainment&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=africa,comment,entertainment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "World";
        $subcattype = "Africa";
        $ssubcattype = "Entertainment";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catind()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=news,india,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=news,india,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=news,india,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=news,india,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=news,india,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=news,india,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=news,popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "Asia";
        $subcattype = "India";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catindiap()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,politics,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,politics,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,politics,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,politics,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,politics,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,politics,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "Asia";
        $subcattype = "India";
        $ssubcattype = "Politics";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catindias()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,sports,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,sports,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,sports,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,sports,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,sports,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,sports,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "Asia";
        $subcattype = "India";
        $ssubcattype = "Sports";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catindiat()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,tech,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,tech,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,tech,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,tech,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,tech,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,tech,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "Asia";
        $subcattype = "India";
        $ssubcattype = "Tech";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catindiae()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,latest,entertainment&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,latest,entertainment&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,category,entertainment&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,recent,entertainment&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,popular,entertainment&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=india,comment,entertainment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "Asia";
        $subcattype = "India";
        $ssubcattype = "Entertainment";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catch()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "Asia";
        $subcattype = "China";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catchinap()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,politics,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,politics,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,politics,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,politics,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,politics,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,politics,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "Asia";
        $subcattype = "China";
        $ssubcattype = "Politics";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catchinas()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,sports,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,sports,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,sports,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,sports,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,sports,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,sports,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "Asia";
        $subcattype = "China";
        $ssubcattype = "Sports";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catchinat()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,tech,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,tech,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,tech,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,tech,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,tech,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,tech,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "Asia";
        $subcattype = "China";
        $ssubcattype = "Tech";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catchinae()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,latest,entertainment&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,latest,entertainment&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,category,entertainment&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,recent,entertainment&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,popular,entertainment&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=china,comment,entertainment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "Asia";
        $subcattype = "China";
        $ssubcattype = "Entertainment";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catuk()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "UK";
        $subcattype = "UK";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catukp()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,politics,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,politics,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,politics,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,politics,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,politics,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,politics,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "UK";
        $subcattype = "UK";
        $ssubcattype = "Politics";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catuks()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,sports,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,sports,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,sports,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,sports,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,sports,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,sports,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "UK";
        $subcattype = "UK";
        $ssubcattype = "Sports";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catukt()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,tech,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,tech,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,tech,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,tech,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,tech,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,tech,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "UK";
        $subcattype = "UK";
        $ssubcattype = "Tech";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catuke()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,latest,entertainment&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,latest,entertainment&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,category,entertainment&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,recent,entertainment&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,popular,entertainment&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=uk,comment,entertainment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "UK";
        $subcattype = "UK";
        $ssubcattype = "Entertainment";
        return Inertia::render('category', [
            'cattype' => $cattype, 'subcattype' => $subcattype, 'ssubcattype' => $ssubcattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function catcrypto()
    {
        $topn1 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=crypto,latest&lang=en');
        $news = json_decode($topn1->body(), true);
        $topnp2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=crypto,latest&page=2&lang=en');
        $newsp2 = json_decode($topnp2->body(), true);

        $topn2 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=crypto,category&lang=en');
        $news1 = json_decode($topn2->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=crypto,recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=crypto,popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=crypto,comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $pnews = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&lang=en');
        $news6 = json_decode($pnews->body(), true);
        // dd($news);
        // dd($newsp2);
        $cattype = "Crypto";
        return Inertia::render('category', [
            'cattype' => $cattype, 'news' => $news, 'newsp2' => $newsp2, 'news1' => $news1, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4, 'news6' => $news6,
        ]);
    }
    public function about()
    {
        $topn = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=latest&lang=en');
        $news = json_decode($topn->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $cattype = "About";
        return Inertia::render('Details', [
            'cattype' => $cattype, 'news' => $news, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4
        ]);
    }
    public function contact()
    {
        $topn = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=latest&lang=en');
        $news = json_decode($topn->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $cattype = "Contact";
        return Inertia::render('Details', [
            'cattype' => $cattype, 'news' => $news, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4
        ]);
    }
    public function policy()
    {
        $topn = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=latest&lang=en');
        $news = json_decode($topn->body(), true);
        $topn3 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=recent&page_size=3&lang=en');
        $news2 = json_decode($topn3->body(), true);
        $topn4 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=popular&page_size=3&lang=en');
        $news3 = json_decode($topn4->body(), true);
        $topn5 = Http::withHeaders([
            'X-RapidAPI-Key' => 'a8654066fdmsh3f9cfa094e44578p14d6c7jsn68cb7f77c3e9',
            'X-RapidAPI-Host' => 'free-news.p.rapidapi.com',

        ])->get('https://free-news.p.rapidapi.com/v1/search?q=comment&page_size=3&lang=en');
        $news4 = json_decode($topn5->body(), true);
        $cattype = "Privacy-Policy";
        return Inertia::render('Details', [
            'cattype' => $cattype, 'news' => $news, 'news2' => $news2, 'news3' => $news3, 'news4' => $news4
        ]);
    }
    public function privacy()
    {
        return Inertia::render('Policy');
    }
}
