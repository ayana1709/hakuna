<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('listings',[
        'heading'=>' Latest listings',
        'listings'=>[
     [
     'id'=>1,
     'title'=>'listing one',
      'description'=>'lorem'  
     ],
      [
        'id'=>2,
        'title'=>'listing two',
         'description'=>'lorem'  
      ],
         [
            'id'=>3,
            'title'=>'listing three ',
             'description'=>'lorem'  
             ]  
        ]
    ]);
});



/*
Route::get('/hello', function(){
return response('<h1>hello world</h1>', 200)
->header('content-type','text/plain')
->header('foo','bar');
});
Route::get('/posts/{id}', function($id){
   // ddd($id);
    return response("post ".$id);
})->where('id','[0-9]+');
Route::get('/search', function(request $request){
return($request->name. ' '. $request->city);
});*/
