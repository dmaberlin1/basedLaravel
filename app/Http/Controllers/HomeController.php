<?php

namespace App\Http\Controllers;



use App\Models\Country;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        $title='Home page';
        $desc='Demo description';
        $footerData='Footer on home';
//        $users=Http::get('https://jsonplaceholder.typicode.com/users')->json();
        $users=[];
//        $posts=Post::all()->toArray();
//        $posts=Post::all()->toJson();
//        dump($posts);

//        $post=Post::first()->toArray();
//        $post=Post::query()->first()->toArray();
        $post=Post::query()->find(2,['id','title','slug'])->toArray();
        $countries=Country::query()
            ->where('Population','>',100_000_000)
            ->orderBy('Population','desc')
            ->limit(5)
            ->get();
        return
        dump($post);

        return \view('home.index',['title' => $title,'description'=>$desc,'footerData'=>$footerData,'users'=>$users]);
    }
    public function index_old()
    {
        $title='Home page';
        $desc='Demo description';
        $footerData='Footer on home';

//        $users=json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users'));
        $users=Http::get('https://jsonplaceholder.typicode.com/users')->json();
//        $users=[];
//        $users=DB::select('select * from nbn_users');
//        $users=DB::select('select * from nbn_users');
//        $users=DB::select('select * from users where id=? and name != ?',[1,'demo-name']);
        $data=[
            'id'=>1,
            'name'=>'demo name'
        ];
//        $users=DB::select('select * from users where id> :id and name != :name',$data);
//        dump($users);
        return \view('home.index',['title' => $title,'description'=>$desc,'footerData'=>$footerData,'users'=>$users]);
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


}
