<?php

namespace App\Services\Admin;

use App\Models\Tag;

class TagService
{
    public function createTag($data)
    {
        return Tag::firstOrCreate($data);
    }

    public function updateTag($data, Tag $tag)
    {
        $tag->update($data);
        return $tag;
    }

    public function deleteTag(Tag $tag)
    {
        $tag->delete();
    }
}
