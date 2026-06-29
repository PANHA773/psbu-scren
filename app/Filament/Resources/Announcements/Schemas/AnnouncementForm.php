<?php

namespace App\Filament\Resources\Announcements\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AnnouncementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('announcements')
                    ->visibility('public')
                    ->nullable(),
                Toggle::make('is_active')
                    ->required()
                    ->default(true),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
                DateTimePicker::make('published_at')
                    ->nullable(),
            ]);
    }
}
