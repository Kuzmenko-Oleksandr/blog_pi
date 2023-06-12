<?php
namespace App\Services;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
class TagService
{
    public function getAllTags()
    {
        return Tag::all();
    }

    public function getPostsByTags(Request $request)
    {
        $selectedTagIds = $request->input('tags', []);

        $posts = Post::whereHas('tags', function ($query) use ($selectedTagIds) {
            $query->whereIn('tags.id', $selectedTagIds);
        })->with('tags')->paginate(6);

        $selectedTags = Tag::whereIn('id', $selectedTagIds)->get();

        return [
            'posts' => $posts,
            'selectedTags' => $selectedTags
        ];
    }
}
