<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleMapMarker extends Model
{
    use HasFactory;

    protected $table = 'google_map_markers';

    protected $guarded = false;

    public function posts()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
    public function show($id)
    {
        $marker = GoogleMapMarker::find($id);


        $post = $marker->post;

        return view('admin.marker.show', compact('marker', 'post'));
    }
}

