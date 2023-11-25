<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class DeleteCommentController extends Controller
{
    public function __invoke($id, Comment $comment)
    {
        $this->authorize('delete',$comment);
        $comment->delete();

        return back();
    }
}
