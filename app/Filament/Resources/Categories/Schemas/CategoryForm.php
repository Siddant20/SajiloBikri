<?php

namespace App\Filament\Resources\Categories\Schemas;

use App\Models\Category;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;


class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->required(),
                TextInput::make('slug')
                    ->required(),

                Select::make('parent_id')
                    ->label('Parent Category')
                    ->options(function () {
                        return Category::whereNull('parent_id')->pluck('name', 'id')->toArray();
                    })
                    ->placeholder('Select parent category')
                    ->searchable()
                    ->nullable(),
                Select::make('icon')
                    ->label('Icon')
                    ->options([
                        'x-heroicon-o-computer-desktop' => 'x-heroicon-computer-desktop'
                    ])
                    ->nullable(),
            ]);
    }
}
