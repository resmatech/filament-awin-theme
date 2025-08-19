# Awin Theme - A Sleek FilamentPHP Theme
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

## Screenshots
<table>
    <tbody>
        <tr>
            <td>
                <a href="https://raw.githubusercontent.com/resmatech/filament-awin-theme/refs/heads/main/images/Dashboard-dark.png" target="_blank">
                    <img style="border-radius: 10px" src="https://raw.githubusercontent.com/resmatech/filament-awin-theme/refs/heads/main/images/Dashboard-dark.png" alt="Dashboard Dark"/>
                </a>
            </td>
            <td>
                <img style="border-radius: 10px" src="https://raw.githubusercontent.com/resmatech/filament-awin-theme/refs/heads/main/images/Dashboard-light.png" alt="Dashboard Light"/>
            </td>
        </tr>
        <tr>
            <td>
                <a href="https://raw.githubusercontent.com/resmatech/filament-awin-theme/refs/heads/main/images/Form-dark.png" target="_blank">
                    <img style="border-radius: 10px" src="https://raw.githubusercontent.com/resmatech/filament-awin-theme/refs/heads/main/images/Form-dark.png" alt="Form Dark"/>
                </a>
            </td>
            <td>
                <img style="border-radius: 10px" src="https://raw.githubusercontent.com/resmatech/filament-awin-theme/refs/heads/main/images/Form-light.png" alt="Form Light"/>
            </td>
        </tr>
        <tr>
            <td>
                <a href="https://raw.githubusercontent.com/resmatech/filament-awin-theme/refs/heads/main/images/Table-dark.png" target="_blank">
                    <img style="border-radius: 10px" src="https://raw.githubusercontent.com/resmatech/filament-awin-theme/refs/heads/main/images/Table-dark.png" alt="Table Dark"/>
                </a>
            </td>
            <td>
                <img style="border-radius: 10px" src="https://raw.githubusercontent.com/resmatech/filament-awin-theme/refs/heads/main/images/Table-light.png" alt="Table Light"/>
            </td>
        </tr>
        <tr>
            <td>
                <a href="https://raw.githubusercontent.com/resmatech/filament-awin-theme/refs/heads/main/images/Notifications-dark.png" target="_blank">
                    <img style="border-radius: 10px" src="https://raw.githubusercontent.com/resmatech/filament-awin-theme/refs/heads/main/images/Notifications-dark.png" alt="Notifications Dark"/>
                </a>
            </td>
            <td>
                <img style="border-radius: 10px" src="https://raw.githubusercontent.com/resmatech/filament-awin-theme/refs/heads/main/images/Notifications-light.png" alt="Notifications Light"/>
            </td>
        </tr>
    </tbody>
</table>
## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
