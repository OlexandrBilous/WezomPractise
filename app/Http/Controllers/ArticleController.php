<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserBlogPost;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;
use App\Http\Models\Article;
use App\Http\Models\Category;
use App\Http\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use App\User;
use App\Events\PostHasViewed;
class ArticleController extends Controller
{
    public function showArticle(Request $request)
    {
        $articles = Article::query()
//            ->when($request->input('category_id'), function (Builder $builder, $categoryId) {
//                $builder->where('category_id', $categoryId);
//            })
            //        route('index' ,['category_id' => $category->id]) Пример для вьюхи
            ->where('postdate', '<=', date('Y-m-d'))
            ->paginate(3);


        return view('welcome', [
            'articles' => $articles,
            'categories' => Category::all(),
        ]);
    }

    public function showMyArticle()
    {
        $articles = Article::query()->where('user_id', '=', Auth::id())->paginate(3);
        $categories = Category::all();
        return view('articleMenu', ['articles' => $articles, 'categories' => $categories]);


    }
    public function showMyUncheckedArticle()
    {
        $articles = Article::query()->where('user_id', '=', Auth::id())->paginate(3);
        $categories = Category::all();
        return view('moderation_list', ['articles' => $articles, 'categories' => $categories]);



    }
    public function about()
    {
        return view('about');
    }

    public function addtext()
    {
        return view('addtext');
    }

    public function articleOne(Article $article)
    {
        $user = User::where('id', '=', $article->user_id)->first();
        $username = $user->name;
        $categories = Category::where('id', '=', $article->category_id)->first();
        $category = $categories->name;
        $comments = Comment::where('articles_id', '=', $article->id)->get();
        event('postHasViewed', $article);
        return view('articleOne', ['article' => $article, 'username' => $username, 'category' => $category, 'comments' => $comments]);
    }

    public function single_post(Article $article)
    {
        $user = User::where('id', '=', $article->user_id)->first();
        $username = $user->name;
        $categories = Category::where('id', '=', $article->category_id)->first();
        $category = $categories->name;
        $comments = Comment::where('articles_id', '=', $article->id)->get();;
        return view('single_post', ['article' => $article, 'username' => $username, 'category' => $category, 'comments' => $comments]);
    }


    public function addArticle(StoreBlogPost $request)
    {
        /** @var User $user */
        $user = $request->user();
        $user->articles()->create($request->validated());

        return redirect()->back();

    }

    public function adminAccess(User $user)
    {
        return view('adminAccess', [
            'user' => $user,
            'users' => User::all(),
        ]);

    }

    public function adminAccessSave(User $user, UserBlogPost $request)
    {
        $user->fill($request->validated());
        $user->save();
        return redirect()->back();

    }

    public function articleChange(Article $article)
    {
        return view('textchange', [
            'article' => $article,
            'categories' => Category::all(),
        ]);
    }

    public function articleModerate(Article $article)
    {
        return view('moderation', [
            'article' => $article,
            'categories' => Category::all(),
        ]);
    }
    public function articleSave(Article $article, StoreBlogPost $request)
    {
        $article->fill($request->validated());
        $article->save();
        return redirect()->back();
    }

    public function articleCheck(Article $article, StoreBlogPost $request)
    {
        $article->fill($request->validated());
        $article->save();
        return redirect()->back();
    }

    public function articleDelete(Article $article, Request $request)
    {
        $article->delete($request->all());
        return redirect()->back();

    }

    // отображение статтей по категориям

    public function category(Category $category)
    {
        $articles = Article::query()->where('category_id', '=', $category->id)->get();
        return view('showCategories', ['articles' => $articles, 'category' => $category]);
    }
}
