Route::get('/posts', function(){
    return response()->json([
        'posts'=>[
            [
                'title'=>'post one'
                ]
            
            ]
        ])
});
