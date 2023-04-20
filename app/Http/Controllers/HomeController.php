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
        $articles = BlogArticle::query()->orderBy('created_at', 'DESC')->paginate(32);

        if(request('query')) {
            $articles = BlogArticle::search(request('query'))->paginate(32);
        }

        return view('index', compact('articles'));
    }

    /**
     * Show blog article
     *
     * @param string $articleSlug
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function showBlogArticle($articleSlug): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $article = BlogArticle::where('slug', $articleSlug)->firstOrFail();
        return view('article', compact('article'));
    }
}
