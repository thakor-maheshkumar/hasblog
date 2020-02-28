<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;
class ArticleController extends Controller
{
    //

	public function list()
	{
        if(request('tag'))
        {
            $data['article']=Tag::where('name',request('tag'))->firstOrFail()->articles;
            return $data;
        }
        else
        {
            $data['article']=Article::latest()->get();
        }
		return view('article.list',$data);
	}
    public function add()
    {
        $data['tags']=Tag::all();
        return view('article.add',$data);
    }
    public function store(Request $request)
    {
        $article=new Article();
        $article->title=$request->title;
        $article->excerption=$request->excerption;
        $article->body=$request->body;
        $article->user_id=1;
        $article->save();
        $article->tags()->attach(request('tag'));
        notify()->success('Article successfully inserted');
        return redirect('article/list');
    }
    public function show($id)
    {

    	$data['article']=Article::find($id);
        //dd($data);
    	return view('article.show',$data);
    }
}
