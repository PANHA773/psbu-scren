<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Partner extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'order'     => 'integer',
    ];

    protected static function booted(): void
    {
        static::saved(function (self $partner) {
            $partner->syncImageToPublicPath();
        });
    }

    protected function syncImageToPublicPath(): void
    {
        if (! is_string($this->logo) || $this->logo === '') {
            return;
        }

        $publicPath = public_path($this->logo);

        if (File::exists($publicPath)) {
            return;
        }

        $sourcePath = Storage::disk('public')->path($this->logo);

        if (! File::exists($sourcePath)) {
            return;
        }

        File::ensureDirectoryExists(dirname($publicPath));
        File::copy($sourcePath, $publicPath);
    }
}
