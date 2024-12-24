<?php

namespace App\Http\Controllers;



use App\Models\Country;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{


    public function index()
    {
        $title='Home page';
        $description='Demo description';
        $footerData='Footer on home';




        return view('home.index',compact('title','description','footerData'));
//        return \view('home.index',['title' => $title,'description'=>$desc,'footerData'=>$footerData,'users'=>$users]);
    }



    public function store(Request $request)
    {
//        var_dump($request->all(['title','content']));
//        var_dump($request->title);
        //даннные долждны быть валидированы!
        Post::query()->create($request->all());
        return $request->all();
    }

    public function update(Request $request): string
    {
        $post=Post::query()->find($request->id);
        $post->title=$request->title;
        $post->content=$request->content;
        $post->slug=$request->slug;
        $post->status=$request->status;
        $post->save();
        return $post->title.' update';
    }
    public function updateSecond(Request $request): string
    {
        $post=Post::query()->findOrFail($request->id);
        $post->update($request->all());

        return $post->title.' update';
    }

    public function destroy($id)
    {
        dump(Post::destroy($id));
    }

    public function test()
    {
        $name='Kat';
        $age=22;
        $title='Test page';
        return view('home.test',compact('name','age','title'));
    }
    public function contact()
    {
        $title='Contact page';
        $description='Demo description from contact';
        $footerData='Footer on contact';
        $data=[
            'name'=>'Demo Contact',
            'surname'=>20,
        ];
        return view('home.contact',compact('title','data','description','footerData'));
    }


    //    public function index_old_02()
//    {
//        $title='Home page';
//        $description='Demo description';
//        $footerData='Footer on home';
//
////        $posts=Post::query()->get();
////        dump($posts);
////        $posts2=DB::table('posts')->get();
////        dump($posts2);
////
////        $posts3=DB::select('select * from posts');
////        dump($posts3);
//
////        $data=[1,2,3,4,5];
////        $data=collect($data);
////        dump($data);
//
////        $products=collect([
////          ['title'=>'Product1','price'=>100],
////          ['title'=>'Product2','price'=>110],
////          ['title'=>'Product3','price'=>100],
////          ['title'=>'Product4','price'=>130],
////          ['title'=>'Product5','price'=>140],
////        ]);
////
////        dump($products);
//////        dump($products->avg('price'));
//////        dump($products->avg('price'));
//////        dump($products->avg('price'));
////        $filtered=$products->filter(function ($value,$key){
////           return $value['price']>100;
////        });
//
//        $posts=Post::query()->limit(10)->get(['title','content','status']);
//        dump($posts->toArray());
//        dump($posts->countBy(function (Post $post){
//            return $post->status;
//        }));
//
//        return view('home.index',compact('title','description','footerData','posts'));
////        return \view('home.index',['title' => $title,'description'=>$desc,'footerData'=>$footerData,'users'=>$users]);
//    }

//    public function index_old()
//    {
//        $title='Home page';
//        $desc='Demo description';
//        $footerData='Footer on home';
//
////        $users=json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users'));
//        $users=Http::get('https://jsonplaceholder.typicode.com/users')->json();
////        $users=[];
////        $users=DB::select('select * from nbn_users');
////        $users=DB::select('select * from nbn_users');
////        $users=DB::select('select * from users where id=? and name != ?',[1,'demo-name']);
//        $data=[
//            'id'=>1,
//            'name'=>'demo name'
//        ];
////        $users=DB::select('select * from users where id> :id and name != :name',$data);
////        dump($users);
//        return \view('home.index',['title' => $title,'description'=>$desc,'footerData'=>$footerData,'users'=>$users]);
//    }



//    public function index_old_1()
//    {
//        $title='Home page';
//        $desc='Demo description';
//        $footerData='Footer on home';
////        $users=Http::get('https://jsonplaceholder.typicode.com/users')->json();
//        $users=[];
////        $posts=Post::all()->toArray();
////        $posts=Post::all()->toJson();
////        dump($posts);
//
////        $post=Post::first()->toArray();
////        $post=Post::query()->first()->toArray();
//        $post=Post::query()->find(2,['id','title','slug'])->toArray();
//
//
//        return \view('home.index',['title' => $title,'description'=>$desc,'footerData'=>$footerData,'users'=>$users]);
//    }


}
