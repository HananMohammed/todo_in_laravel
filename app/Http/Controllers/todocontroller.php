<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todomodel;
class todocontroller extends Controller
{
    public function remind(Request $req){
        $this->validate($req ,[
            'date'=>'required',
            'time'=>'required',
            'text'=>'required',
        ]);
        $db= new todomodel;
        $db->task = $req->input('text');
        $db->taskDate = $req->input('date');
        $db->taskTime = $req->input('time');
        $db->save();
        
        return redirect('whattodo');
    }
    public function getData(Request $req){
        $db= new todomodel;
        // instead of getting data using this way $all_data=$db::all(); which cause that every time i want to get task column from the table DB make query to all the table 
        //and execute a database query every time we want to access the todomodel name for a task.
       //to solve this problem i use  we will create we can go and eager load theTo fix this issue, we can go and eager
       // load the author relation, when retrieving our posts. This would only result in two queries.
       //One to get all the posts and a second one to get all authors of these posts.
       //Eager-Loading in Laravel is really easy. All you need to do is, tell your model to load a specific relation:
        //if there is a relation 
        /*
      This is in your controller
       $posts = Post::with('author')->get();

     return view('posts')->with('posts', $posts);
        */
       $all_data=$db->get();
        
        return view('whattodo')->with('all_data',$all_data);

    }
    public function delete(Request $req){
         $id_value=$req->input('t_id');
         $db= new todomodel;
        $db::where('id',$id_value)->delete();
        //after updating data go to setting page with new values
        $all_data=$db::all();
        return redirect('whattodo')->with('all_data',$all_data);      }
   
}
