<?php

namespace App\Http\Controllers;

use App\Models\BlogArticle;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class HomeController extends Controller
{
    /**
     * Index page
     *
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $articles = BlogArticle::search(request('query'))->paginate(10);

        return view('index', compact('articles'));
    }

    public function searchBlogArticles(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        // Search articles through elasticsearch
        $articles = BlogArticle::search(request('query'))->paginate(10);

        return view('index', compact('articles'));
    }

    public function showBlogArticle($articleSlug): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $article = BlogArticle::where('slug', $articleSlug)->firstOrFail();
        return view('article', compact('article'));
    }
}
