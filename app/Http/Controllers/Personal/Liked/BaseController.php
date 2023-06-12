<?php
namespace App\Http\Controllers\Personal\Liked;
use App\Http\Controllers\Controller;
use App\Services\Personal\LikedService;

class BaseController extends Controller{
    protected $likedService;

    public function __construct(LikedService $likedService)
    {
        $this->likedService = $likedService;
    }
}
