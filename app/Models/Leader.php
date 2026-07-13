<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Leader extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_active'        => 'boolean',
        'years_experience' => 'integer',
        'publications'     => 'integer',
        'awards'           => 'integer',
    ];

    protected static function booted(): void
    {
        static::saved(function (self $leader) {
            $leader->syncImageToPublicPath();
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
