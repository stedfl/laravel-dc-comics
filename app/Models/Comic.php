<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comic extends Model
{
    use HasFactory;

    public static function generateSlug($string) {
        $slug = Str::slug($string, '-');
        $original_slug = $slug;
        $comic_exists = Comic::where('slug', $slug)->first();
        $c = 1;
        while($comic_exists) {
            $slug = $original_slug . '-' . $c;
            $comic_exists = Comic::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }
}
