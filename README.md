# Laratrust Custom Panel

Laratrust Custom Panel is a Laravel composer package that provides a customizable admin panel for managing roles and permissions using Laratrust. This package is designed to help you easily integrate and tailor the Laratrust management interface to fit your application's needs, with support for custom views and seamless integration into your Laravel project.

## Features

- Customizable panel for managing roles and permissions
- Built on top of Laratrust
- Easy integration with Laravel applications
- Supports custom views using the `laratrust-panel` namespace

## Installation

1. Require the package via Composer:

    ```
    composer require abumaryam/laratrust-custpanel
    ```

2. The service provider will be auto-discovered by Laravel. If you need to register it manually, add the following to your `config/app.php`:

    ```php
    Abumaryam\LaratrustCustpanel\LaratrustCustpanelServiceProvider::class,
    ```

    
> **Note:** This project is currently under development and is not yet complete. Some features may be missing or unfinished. Use at your own risk and stay tuned for updates.

