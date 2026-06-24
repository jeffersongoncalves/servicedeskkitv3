<?php

namespace App\Filament\Admin\Resources\Users\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use JeffersonGoncalves\Filament\AdditionalInformation\AdditionalInformation;

class UserInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->columns(1)
            ->schema([
                Section::make()
                    ->columns()
                    ->schema([
                        TextEntry::make('id'),
                        IconEntry::make('status')
                            ->boolean(),
                        TextEntry::make('name'),
                        TextEntry::make('email')
                            ->copyable()
                            ->copyMessage('Email copied successfully!')
                            ->copyMessageDuration(1500),
                    ]),
                AdditionalInformation::make([
                    'created_at',
                    'updated_at',
                ]),
            ]);
    }
}
