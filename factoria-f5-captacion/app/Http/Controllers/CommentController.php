<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\JsonResponse;

class CommentController extends Controller
{
    
    public function index():JsonResponse
    {
        $comments = Comment::all();
        return response()->json(['data'=>$comments], 200);
     
    }

   
    public function store(CommentRequest $request):JsonResponse
    {
        $comment=Comment::create($request->all());

        return response()->json([
            'success'=>true,
            'data'=>$comment], 201);
        
    }

    
    public function show($id):JsonResponse
    {
        $comment = Comment::find($id);
        return response ()->json($comment, 200);
    }

    
    public function update(CommentRequest $request, $id):JsonResponse
    {
        $comment = Comment::find($id);
        $comment->comment=$request->comment;
        $comment->stage=$request->stage;
        $comment->id_user=$request->id_user;
        $comment->id_person=$request->id_person;
        $comment->save();

        return response()->json([
            'success'=>true
        ], 200);
    }

    
    public function destroy($id):JsonResponse
    {
        Comment::find($id)->delete();
        return response()->json([
            'success'=>true
        ], 200);
    }
}
