<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show_post($category_slug){
        $category = Category::where('slug', '=', $category_slug)->first();

        if ($category){
            $descedantCategoryIds = $category->allChildren();
            $descedantCategoryIds->push($category->id);
            $post = Post::query()->whereIn('category_id', $descedantCategoryIds);
            $hot_news = $post->orderBy('views', 'desc')->take(4)->get();
            $all_news = $post->orderBy('id', 'desc')->paginate(10);
        }
        return view('pages.user.news', [
            'hot_news' => $hot_news,
            'all_news' => $all_news,
        ]);
    }

    public function show_post_detail($post_slug){
        $content_post = Post::where('slug', '=', $post_slug)->first();
        $content_post['views'] += 1;
        $content_post->save();

        $category = Category::find($content_post->category_id);
        $parentCategory = $category->parentCategory;

        if ($parentCategory){
            $relatedCategoryIds = Category::where('parent_id', $parentCategory->id)->pluck('id');
            $relatedCategoryIds->push($parentCategory->id);
        } else{
            $relatedCategoryIds = [];
        }

        $related_posts = Post::whereIn('category_id', $relatedCategoryIds)->where('id', '!=', $content_post->id)->get();
        return view('pages.user.post_detail', ['content_post' => $content_post, 'related_posts' => $related_posts]);
    }
}
