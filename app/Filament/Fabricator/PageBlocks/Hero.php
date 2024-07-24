<?php

namespace App\Filament\Fabricator\PageBlocks;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Hero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('hero')
            ->schema([
                TextInput::make('title'),
                TiptapEditor::make('content')
                    ->profile('default')
                    ->output(TiptapOutput::Html)
                    ->maxContentWidth('5xl')
                    ->required(),
                Repeater::make('buttons')
                    ->schema([
                        TextInput::make('button_text')->required(),
                    ]),
                CuratorPicker::make('image'),

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
