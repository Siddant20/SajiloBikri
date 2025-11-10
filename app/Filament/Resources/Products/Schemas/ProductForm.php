<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Enum\ProductStatusEnum;
use App\Models\Category;
use App\Models\Product;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Select::make('category_id')
                    ->label('Category')
                    ->options(function () {
                        return Category::whereDoesntHave('subCategories')->pluck('name', 'id')->toArray();
                    })
                    ->searchable()
                    ->nullable(),
                Select::make('vendor_profile_id')
                    ->relationship('vendor.user', 'name')
                    ->searchable()
                    ->required(),
                TextInput::make('location')
                    ->nullable(),
                Select::make('status')
                    ->options(ProductStatusEnum::class)
                    ->default(ProductStatusEnum::ACTIVE->value)
                    ->required(),
                TextInput::make('quantity')
                    ->default(1)
                    ->required()
                    ->numeric(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('NPRs'),
            ]);
    }
}
