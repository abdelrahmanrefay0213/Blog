<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $allPosts=[
            ['id'=>1 , 'title'=>'PHP' ,  'posted_by'=>'Ahmed',      'created_at'=>'2020-10-10 09:00:00'],
            ['id'=>2 , 'title'=>'HTML' , 'posted_by'=>'Mohamed',    'created_at'=>'2021-08-20 07:00:00'],
            ['id'=>3 , 'title'=>'CSS' ,  'posted_by'=>'Abdelrahman','created_at'=>'2022-07-06 06:00:00'],
            ['id'=>4 , 'title'=>'JS' ,   'posted_by'=>'Refay',      'created_at'=>'2023-12-15 05:00:00'],
        ];
        return view('posts.index' , ['posts'=>$allPosts]);
    }
    // $postId  gives me /{post}
    // public function show($postId){
    //     $singlePost = [
    //         'id'=>1 , 'title'=>'PHP' , 'description'=>'PHP description', 'posted_by'=>'Ahmed','created_at'=>'2020-10-10 09:00:00'
    //     ];
    //     return view('posts.show',['post'=>$singlePost]) ;
    // }
    public function show($postId) {
    $allPosts = [
        ['id'=>1 , 'title'=>'PHP' , 'description'=>'PHP description', 'posted_by'=>'Ahmed', 'email'=>'ahmed@gmail.com', 'created_at'=>'2020-10-10 09:00:00'],
        ['id'=>2 , 'title'=>'HTML' , 'description'=>'HTML description', 'posted_by'=>'Mohamed', 'email'=>'mohamed@gmail.com', 'created_at'=>'2021-08-20 07:00:00'],
        ['id'=>3 , 'title'=>'CSS' , 'description'=>'CSS description', 'posted_by'=>'Abdelrahman', 'email'=>'abdelrahman@gmail.com', 'created_at'=>'2022-07-06 06:00:00'],
        ['id'=>4 , 'title'=>'JS' , 'description'=>'JS description', 'posted_by'=>'Refay', 'email'=>'refay@gmail.com', 'created_at'=>'2023-12-15 05:00:00'],
    ];
    
    // Find the post with matching ID
    $singlePost = collect($allPosts)->firstWhere('id', $postId);
    
    return view('posts.show', ['post' => $singlePost]);
}
    
}
