# CRM

A customer-relationship-management web application built with **Laravel**, **Livewire**, and **Laravel Breeze**. It pairs a marketing landing page and a full authentication flow with a Bootstrap 5 admin dashboard (the **W3CRM / DexignZone** theme) for managing projects, tasks, clients, and reports.

## Tech Stack

| Layer | Technology |
|-------|------------|
| Framework | Laravel `^13.8` (PHP `^8.3`) |
| Auth scaffolding | Laravel Breeze (Livewire stack) |
| Frontend interactivity | Livewire 3 + Volt |
| Build tooling | Vite 8 + Tailwind CSS 3 |
| Dashboard UI | W3CRM admin theme (Bootstrap 5, ApexCharts, jQuery) |

## Structure

The app is organized around three distinct UI areas, each backed by its own asset bundle under `public/assets/`:

| Area | View / Layout | Asset bundle |
|------|---------------|--------------|
| Landing page | `welcome.blade.php` | `assets/homeAssets/` |
| Auth pages (login, register, …) | `layouts/guest.blade.php` | `assets/singinAssets/` |
| Authenticated dashboard | `layouts/app.blade.php` | `assets/dashboardAssets/` |

Key Blade components:

- `components/auth-navbar.blade.php` — dashboard top bar (search, language switcher, notifications, profile dropdown)
- `components/auth-sidebar.blade.php` — dashboard left navigation (`.deznav` / metisMenu)
- `dashboard.blade.php` — dashboard content (stat cards, charts, project tables)

The dashboard layout (`layouts/app.blade.php`) wires these together inside a `#main-wrapper`, then loads the theme's scripts in order: **jQuery → Bootstrap bundle → plugins (bootstrap-select, metisMenu, ApexCharts, …) → theme JS** (`custom.js`, `deznav-init.js`, `dashboard.js`).

## Routes

| Path | Name | Middleware |
|------|------|------------|
| `/` | `welcome` | — |
| `/dashboard` | `dashboard` | `auth`, `verified` |
| `/profile` | `profile` | `auth` |

Authentication routes (login, register, password reset, email verification) are defined in `routes/auth.php`.

## Requirements

- PHP 8.3+
- Composer
- Node.js & npm
- A database (MySQL, PostgreSQL, or SQLite)

## Getting Started

```bash
# 1. Install dependencies
composer install
npm install

# 2. Environment
cp .env.example .env
php artisan key:generate

# 3. Configure your database in .env, then migrate
php artisan migrate

# 4. Build front-end assets
npm run build      # or: npm run dev  (for hot-reloading during development)

# 5. Serve the app
php artisan serve
```

The app will be available at <http://localhost:8000>. Register a new account, then visit `/dashboard`.

## Development

- `npm run dev` — Vite dev server with hot module replacement (Tailwind/landing/auth assets)
- `php artisan serve` — local PHP dev server
- `php artisan test` — run the test suite

> **Note:** The dashboard theme assets in `public/assets/dashboardAssets/` are static (vendor CSS/JS shipped with the W3CRM theme) and are **not** processed by Vite. They are referenced directly via `asset()` in the Blade layouts.

## License

Open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
