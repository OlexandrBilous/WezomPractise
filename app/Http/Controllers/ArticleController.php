<?php

namespace App\Http\Controllers;

use App\Http\Models\Role;
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

 // Вывод статей на главную страницу

    public function showArticle(Request $request)
    {
        $articles = Article::query()

            ->where('postdate', '<=', date('Y-m-d'))
            ->paginate(3);


        return view('welcome', [
            'articles' => $articles,
            'categories' => Category::all(),
        ]);
    }
// Вывод конкретной статьи
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

//Вывод статей пользователя в меню
    public function showMyArticle()
    {
        $articles = Article::query()->where('user_id', '=', Auth::id())->paginate(3);
        $categories = Category::all();
        return view('articleMenu', ['articles' => $articles, 'categories' => $categories]);


    }
//Вывод не проверенных админом или модератором статей
    public function showMyUncheckedArticle()
    {
        $articles = Article::query()->where('user_id', '=', Auth::id())->paginate(3);
        $categories = Category::all();
        return view('moderation_list', ['articles' => $articles, 'categories' => $categories]);



    }
     // Добавление новой статьи
    public function addArticle(StoreBlogPost $request)
    {
        /** @var User $user */
        $user = $request->user();
        $user->articles()->create($request->validated());

        return redirect()->back();

    }
    // Выдача прав пользователям
    public function adminAccess(User $user)
    {
        return view('adminAccess', [
            'user' => $user,
            'roles' => Role::all(),
        ]);

    }
     // Вывод списка пользователей
    public function adminUserList()
    {
        $users = User::all();
        return view('userlist', [
            'users' => $users,
        ]);
// Сохранение прав пользователей
    }
    public function adminAccessSave(User $user, UserBlogPost $request)
    {
        $user->fill($request->validated());
        $user->save();
        return redirect()->back();

    }

    // Сохранение проверенных статей
    public function articleCheck(Article $article, StoreBlogPost $request)
    {
        $article->fill($request->validated());
        $article->save();
        return redirect()->back();
    }
    // Редактирование статей
    public function articleModerate(Article $article)
    {
        return view('moderation', [
            'article' => $article,
            'categories' => Category::all(),
        ]);
    }
    // Удаление статей
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
