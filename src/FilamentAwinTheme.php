<?php

namespace Resma\FilamentAwinTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;

class FilamentAwinTheme implements Plugin
{
    public function getId(): string
    {
        return 'filament-awin-theme';
    }

    public static function make(): static
    {
        return new static;
    }

    public function register(Panel $panel): void
    {
        $panel
            ->viteTheme('vendor/resma/filament-awin-theme/resources/css/theme.css');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
