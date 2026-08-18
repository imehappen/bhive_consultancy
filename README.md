# B-Hive Brand Consultancy

Professional PHP MVC framework powering the B-Hive Brand Consultancy website.

**Tagline:** Building Brands. Creating Visibility. Positioning Talent.

**Location:** Nairobi, Kenya | **Founder:** Betty Kithinji

---

## Project Structure

```
bhive_consultancy/
├── app/
│   ├── Config/
│   │   ├── App.php
│   │   ├── Database.php
│   │   └── Routes.php
│   │
│   ├── Controllers/
│   │   ├── Controller.php
│   │   └── HomeController.php
│   │
│   ├── Core/
│   │   ├── Application.php
│   │   ├── Container.php
│   │   ├── Database.php
│   │   ├── ExceptionHandler.php
│   │   ├── Model.php
│   │   ├── Request.php
│   │   ├── Response.php
│   │   ├── Router.php
│   │   ├── Session.php
│   │   ├── Validator.php
│   │   └── View.php
│   │
│   ├── Exceptions/
│   │   ├── NotFoundException.php
│   │   └── ValidationException.php
│   │
│   ├── Helpers/
│   │   ├── Functions.php
│   │   ├── Str.php
│   │   └── Url.php
│   │
│   ├── Middleware/
│   │   ├── Middleware.php
│   │   ├── AuthMiddleware.php
│   │   └── GuestMiddleware.php
│   │
│   ├── Models/
│   │   └── User.php
│   │
│   ├── Services/
│   │
│   └── Views/
│       ├── layouts/
│       │   └── base.php
│       ├── partials/
│       │   ├── header.php
│       │   ├── navbar.php
│       │   └── footer.php
│       └── pages/
│           └── home.php
│
├── bootstrap/
│   └── app.php
│
├── public/
│   ├── index.php
│   ├── .htaccess
│   ├── css/
│   ├── js/
│   ├── img/
│   └── lib/
│
├── routes/
│   ├── web.php
│   └── api.php
│
├── storage/
│   ├── cache/
│   ├── logs/
│   └── uploads/
│
├── .env
├── .gitignore
└── composer.json
```

---

## Architecture

### Directory Responsibilities

| Directory | Purpose |
|-----------|---------|
| `app/Config` | Application configuration |
| `app/Controllers` | HTTP request handling and action coordination |
| `app/Core` | Framework core classes (Router, Request, Response, View, Database, Model, Session, Validator, Container, ExceptionHandler) |
| `app/Models` | Data/domain models with database interaction |
| `app/Services` | Business logic layer — keeps complex operations out of controllers |
| `app/Middleware` | HTTP middleware pipeline (auth, guest, etc.) |
| `app/Helpers` | Global utility functions (URL helpers, string helpers) |
| `app/Views` | Blade-like PHP templates (layouts, partials, pages) |
| `app/Exceptions` | Custom application exceptions |
| `bootstrap/` | Application bootstrapping and environment loading |
| `public/` | Web-server document root — only publicly exposed directory |
| `routes/` | Route definitions (web + API) |
| `storage/` | Runtime-generated files (logs, cache, uploads) |

### Core Framework Classes

| Class | Responsibility |
|-------|----------------|
| `Application` | Application/bootstrap lifecycle |
| `Router` | Route registration, dispatching, named routes, middleware support |
| `Request` | HTTP request abstraction (method, URI, query, form data, JSON, headers, cookies, uploads) |
| `Response` | HTTP response abstraction (HTML, JSON, redirects, status codes, headers) |
| `View` | View rendering with reusable layouts and partials |
| `Database` | Database connection and query access |
| `Model` | Base model with ORM-like functionality |
| `Session` | Encapsulated session management |
| `Validator` | Input validation with reusable rules, throws `ValidationException` |
| `Container` | Dependency injection / service container |
| `ExceptionHandler` | Centralized error handling (production/development) |

---

## Request Flow

```
Browser
  ↓
public/index.php          ← Front controller
  ↓
bootstrap/app.php         ← Autoloader, env, helpers, Application init
  ↓
App\Core\Application
  ↓
Router                    ← Matches URL to route
  ↓
Route dispatch
  ↓
Controller @Action        ← Handles request, returns response
  ↓
Response
  ├── View (HTML)         ← Web routes: render PHP templates
  └── JSON (API)          ← API routes: return JSON
```

---

## Setup

### Requirements

- PHP >= 8.1
- MySQL (optional — for database-backed models)
- Apache with `mod_rewrite` (for `.htaccess` support)

### Installation

```bash
git clone <repo-url>
cd bhive_consultancy
composer install
```

### Configuration

1. Copy `.env` and configure your database credentials and app URL:

```env
APP_URL=http://localhost:8000
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bhive_consultancy
DB_USERNAME=root
DB_PASSWORD=
```

2. (Optional) Import the database schema:

```bash
mysql -u root bhive_consultancy < storage/database.sql
```

### Running

```bash
# Using PHP built-in server (point to public/)
php -S localhost:8000 -t public/
```

Or configure Apache to point the document root to the `public/` directory.

---

## Routing

Routes are defined in `routes/web.php` (browser) and `routes/api.php` (API).

```php
// Web route — renders a view
$router->get('/', 'HomeController@index');

// API route — returns JSON
$router->get('/api/users', 'UserController@list');

// Route with parameters
$router->get('/users/{id}', 'UserController@show');

// Route with middleware
$router->get('/dashboard', 'DashboardController@index', ['auth']);
```

---

## Security

- CSRF protection for state-changing web requests
- Secure session configuration
- Input validation via `Validator`
- Output escaping in views
- `.htaccess` blocks direct access to sensitive files (`.env`, `.sql`, `.log`)
- Security headers (X-Content-Type-Options, X-Frame-Options, X-XSS-Protection)

---

## Design Principles

1. **PSR-4 autoloading** via Composer
2. **Dependency injection** through `App\Core\Container`
3. **Separation of concerns** — controllers handle HTTP, services handle business logic, models handle data
4. **Middleware pipeline** for cross-cutting concerns (auth, logging)
5. **Configuration via environment variables** — never commit secrets
6. **Centralized error handling** via `ExceptionHandler`
7. **Extensible** — add controllers, models, services, middleware, and routes without modifying the core framework

---

## Tech Stack

- **Backend:** PHP 8+ (custom MVC framework)
- **Frontend:** Bootstrap 5, Font Awesome, Swiper.js, WOW.js
- **Fonts:** Inter (Google Fonts)
- **Database:** MySQL (optional)
- **Server:** Apache / PHP built-in server

---

## License

Proprietary — B-Hive Brand Consultancy
