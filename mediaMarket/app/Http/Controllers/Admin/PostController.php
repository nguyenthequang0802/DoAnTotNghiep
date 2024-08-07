<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    private function getPostCategories(){
        return Category::where('model_type','=', 'post')->where('parent_id', '=', null)->with('subCategory')->get();;
    }
    private function fillDataToPost($item, $input, $is_create){
        $item['title'] = $input['title']?? '';
        $item['slug'] = $input['slug']?? str::slug($input['title']);
        $item['description'] = $input['description'];
        $item['preview_image'] = $input['icon'];
        $item['content'] = $input['content'];
        $item['seo_title'] = $input['seo_title'] ?? '';
        $item['seo_keywords'] = $input['seo_keywords'] ?? '';
        $item['seo_description'] = $input['seo_description'] ?? '';
        $item['category_id'] = isset($input['category_id']) && is_numeric($input['category_id']) ? (int) $input['category_id'] : null;
        $item['product_id'] = isset($input['product']) && is_numeric($input['product']) ? (int) $input['product'] : null;
        if($is_create){
            $item['views'] = 0;
            $item['rating_num'] = 0;
            $item['rating_value'] = 0;
        }
        $item->save();
    }
    public function index(){
        $group = 'post';
        $posts = Post::orderBy('id', 'desc')->whereHas('category', function ($query) use ($group) {
            $query->where('model_type', $group);
        })->paginate(6);
        return view('admin.post.index',[
            "posts" => $posts
        ]);
    }
    public function create(){
        $categories = $this->getPostCategories();
        $products = Product::all();
        return view('admin.post.create', ['categories'=>$categories, 'products' => $products]);
    }
    public function store(PostRequest $request){
        $input = $request->all();
        $item = new Post();
        $this->fillDataToPost($item, $input, true);
        return redirect()->route('admin.post.index')->with('ok', 'Thêm mới thành công');
    }
    public function edit($id){
        $item = Post::find($id);
        $categories = $this->getPostCategories();
        $products = Product::all();
        return view('admin.post.edit', ['item'=>$item, 'categories'=> $categories, 'products' => $products]);
    }
    public function update(PostRequest $request, $id){
        $input = $request->all();
        $item = Post::find($id);
        $this->fillDataToPost($item, $input, false);
        return redirect()->route('admin.post.index')->with('ok', 'Cập nhật thành công');
    }
    public function destroy($id){
        $item = Post::find($id);
        try {
            $item->delete();
            return  redirect()->route('admin.post.index')->with('ok', 'Xóa thành công!');
        } catch (\Exception $e){
            return  redirect()->route('admin.post.index')->with('error', 'Xóa thất bại!');
        }
    }
    public function search(Request $request){
        $input = $request->input('simple-search');
        if ($input != ""){
            $query = "";
//            for ($i=0; $i<strlen($input); $i++){
//                $query = $query.'%'.$input[$i];
//            }
            $query = '%' . str_replace(' ', '%', $input) . '%';

            $post = Post::where('title', 'like', $query . '%')
                ->with(['product', 'category'])
                ->get();
            $results = $post->map(function($post) {
                return [
                    'id' => $post->id,
                    'title' => $post->title,
                    'preview_image' => $post->preview_image,
                    'product_name' => $post->product,
                    'category_name' => $post->category,
                    'views' => $post->views,
                    'rating_value' => $post->rating_value,
                ];
            });
        } else {
            $posts = Post::orderBy('id', 'DESC')
                ->with(['product', 'category'])
                ->get();
            $results = $posts->map(function($post) {
                return [
                    'id' => $post->id,
                    'title' => $post->title,
                    'preview_image' => $post->preview_image,
                    'product_name' => $post->product,
                    'category_name' => $post->category,
                    'views' => $post->views,
                    'rating_value' => $post->rating_value,
                ];
            });
        }
        return response()->json($results, 200);
    }
}
