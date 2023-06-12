<?php

namespace App\Services\Admin;

use App\Models\GoogleMapMarker;
use App\Models\Post;

class MapService
{
    public function getAllMarkers()
    {
        return GoogleMapMarker::all();
    }

    public function getMarkerById($id)
    {
        return GoogleMapMarker::findOrFail($id);
    }

    public function createMarker($data)
    {
        $marker = GoogleMapMarker::create($data);

        $postId = $data['post_id'];
        if (!empty($postId)) {
            $post = Post::find($postId);
            if ($post) {
                $marker->update(['post_id' => $post->id]);
            }
        }

        return $marker;
    }

    public function updateMarker($marker, $data)
    {
        $marker->update($data);

        $postId = $data['post_id'];
        if (!empty($postId)) {
            $marker->post_id = $postId;
            $marker->save();
        }

        return $marker;
    }

    public function deleteMarker($marker)
    {
        $marker->delete();
    }

    public function getAllPosts()
    {
        return Post::all();
    }
}
