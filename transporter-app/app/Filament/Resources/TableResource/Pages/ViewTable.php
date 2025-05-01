<?php

namespace App\Filament\Resources\TableResource\Pages;

use App\Filament\Resources\TableResource;
use Filament\Actions;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\HtmlString;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ViewTable extends ViewRecord
{

    protected static string $resource = TableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }

    public  function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('number')
                            ->required()
                            ->columnSpan(2),
                        TextInput::make('row')
                            ->required(),
                        TextInput::make('column')
                            ->required(),
                    ])
                    ->columns(2)
                    ->columnSpan(2),

                Section::make('QR Table')
                    ->schema([
                        Placeholder::make('qr_code')
                            ->label('')
                            ->content(function ($record) {
                                $qr = QrCode::size(200)->generate(url($this->record->qr));
                                return new HtmlString($qr);
                            })
                            ->extraAttributes([
                                'class' => 'flex justify-center '
                            ])
                    ])

                    ->columnSpan(1)
            ])
            ->columns(3);
    }
}
