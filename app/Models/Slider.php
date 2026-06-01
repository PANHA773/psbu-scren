<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    protected $guarded = [];

    protected static function booted(): void
    {
        static::saved(function (self $slider) {
            $slider->syncImageToPublicPath();
        });
    }

    protected function syncImageToPublicPath(): void
    {
        if (! is_string($this->image) || $this->image === '') {
            return;
        }

        $publicPath = public_path($this->image);

        if (File::exists($publicPath)) {
            return;
        }

        $sourcePath = Storage::disk('public')->path($this->image);

        if (! File::exists($sourcePath)) {
            return;
        }

        File::ensureDirectoryExists(dirname($publicPath));
        File::copy($sourcePath, $publicPath);
    }
}
