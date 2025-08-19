# Awin Theme - A Sleek FilamentPHP Theme

[![Latest Version on Packagist](https://img.shields.io/packagist/v/resmatech/filament-awin-theme.svg?style=flat-square)](https://packagist.org/packages/resmatech/filament-awin-theme)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/resmatech/filament-awin-theme/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/resmatech/filament-awin-theme/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/resmatech/filament-awin-theme/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/resmatech/filament-awin-theme/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/resmatech/filament-awin-theme.svg?style=flat-square)](https://packagist.org/packages/resmatech/filament-awin-theme)

A **modern, responsive, and customizable** theme for FilamentPHP, designed to elevate your admin panel with a sleek interface and seamless user experience. Perfect for developers who want a professional look with minimal setup.

## ✨ Features

- **Dark/Light Mode** – Toggle between elegant color schemes
- **FilamentPHP v4 Ready** – Fully compatible with the latest version
- **Fully Responsive** – Works flawlessly on all devices
- **Tailwind CSS/Sass** – Easy to customize and extend
- **Plug & Play** – Install and activate in minutes

## Installation

### 1. Install via Composer
```bash
composer require resma/filament-awin-theme
```
### 2. Add CSS to Vite
In your `vite.config.js`, include the theme's CSS:
```js
input: [
    // ...existing files,
    'vendor/resma/filament-awin-theme/resources/css/theme.css'
],
```
Then rebuild assets:
```bash
npm run build
```

### 3. Register the Plugin
In your panel provider:
```php 
se Resma\FilamentAwinTheme\FilamentAwinTheme;

public function panel(Panel $panel): Panel
{
    return $panel
        // ...your existing config
        ->plugins([
            FilamentAwinTheme::make(),
        ]);
}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
