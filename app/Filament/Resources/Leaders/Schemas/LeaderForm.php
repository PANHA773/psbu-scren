<?php

namespace App\Filament\Resources\Leaders\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class LeaderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Profile')
                    ->description('Basic identity information shown in the drawer.')
                    ->columns(2)
                    ->schema([
                        TextInput::make('name_kh')
                            ->label('Name (Khmer)')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('name_en')
                            ->label('Name (English)')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('role_kh')
                            ->label('Role (Khmer)')
                            ->required()
                            ->default('នាយក')
                            ->maxLength(255),

                        TextInput::make('role_en')
                            ->label('Role (English)')
                            ->required()
                            ->default('Rector')
                            ->maxLength(255),

                        FileUpload::make('image')
                            ->label('Profile Photo')
                            ->image()
                            ->disk('public')
                            ->directory('leaders')
                            ->visibility('public')
                            ->nullable()
                            ->columnSpanFull(),
                    ]),

                Section::make('Message')
                    ->description('Quote or message displayed under the profile card.')
                    ->schema([
                        Textarea::make('message_kh')
                            ->label('Message (Khmer)')
                            ->rows(4)
                            ->nullable(),

                        Textarea::make('message_en')
                            ->label('Message (English)')
                            ->rows(4)
                            ->nullable(),
                    ]),

                Section::make('Contact & Stats')
                    ->columns(2)
                    ->schema([
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->nullable(),

                        TextInput::make('phone')
                            ->label('Phone')
                            ->tel()
                            ->nullable(),

                        TextInput::make('facebook')
                            ->label('Facebook Link')
                            ->url()
                            ->nullable(),

                        TextInput::make('tiktok')
                            ->label('TikTok Link')
                            ->url()
                            ->nullable(),

                        TextInput::make('years_experience')
                            ->label('Years of Experience')
                            ->numeric()
                            ->default(0),

                        TextInput::make('publications')
                            ->label('Publications')
                            ->numeric()
                            ->default(0),

                        TextInput::make('awards')
                            ->label('Awards')
                            ->numeric()
                            ->default(0),
                    ]),

                Section::make('Visibility')
                    ->columns(2)
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Active')
                            ->required()
                            ->default(true),

                        TextInput::make('order')
                            ->label('Display Order')
                            ->numeric()
                            ->default(0),
                    ]),
            ]);
    }
}
