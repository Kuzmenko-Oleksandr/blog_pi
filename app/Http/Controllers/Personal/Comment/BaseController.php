<?php
namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Services\Personal\CommentService;

class BaseController extends Controller{
    protected $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }
}
