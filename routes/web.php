<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
// All listings
Route::get('/', function () {
    return view('listings',[
        'heading'=>' Latest listings',
        'listings'=>Listing::all()
     
        
    ]);
});

//single listings
Route::get('/listings/{$id}', function($id){
    return view('lisings',[
        'listing'=>listing::find($id)
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
