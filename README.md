# Delickate Templating

Templating package for Laravel that provides reusable layout views and frontend assets.

---

## 📦 Installation

Install the package via Composer:

```bash
composer require delickate/templating
```

To publish all resources:

```bash
php artisan vendor:publish --tag=templating --force
```

🧩 Usage

After publishing, you can extend the layout in your Blade views:

For login page:

```blade
@extends('layouts.loginTemplatePage')
```

For other pages:
```blade
@extends('layouts.masterTemplatePage')
```

To remove package

```bash
> composer require delickate/templating
> composer clear-cache
```

