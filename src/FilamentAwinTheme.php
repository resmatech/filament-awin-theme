<?php

namespace Resma\FilamentAwinTheme;

use Filament\Panel;
use Filament\Contracts\Plugin;
use Filament\Support\Assets\Theme;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentAsset;

class FilamentAwinTheme implements Plugin
{
    /**
     * @var array<string, string>|string
     */
    public array|string $primaryColor = Color::Blue;
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
            ->colors([
                'primary' => $this->primaryColor,
            ])
            ->viteTheme('vendor/resma/filament-awin-theme/resources/css/theme.css');
    }

    public function boot(Panel $panel): void
    {
        //
    }

    /**
     * Set the primary color.
     *
     * @param array<string, string>|string $color
     */
    public function primaryColor(array|string $color): static
    {
        $this->primaryColor = $color;

        return $this;
    }
}
