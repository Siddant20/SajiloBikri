<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('category_id')
                    ->numeric(),
                TextEntry::make('vendor_profile_id')
                    ->numeric(),
                TextEntry::make('location'),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('quantity')
                    ->numeric(),
                TextEntry::make('price')
                    ->money(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
