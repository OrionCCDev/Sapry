# Sapry - Portfolio Application

A modern Laravel-based portfolio application featuring multiple portfolio designs with responsive UI/UX.

## Features

- 🎨 **Multiple Portfolio Designs**
  - Welcome page with photography portfolio
  - Portfolio2 page with civil engineer CV integration
  
- 🚀 **Modern Tech Stack**
  - Laravel 11
  - Tailwind CSS + DaisyUI
  - Bootstrap 5.3.3
  - Vite for asset compilation
  
- 📱 **Responsive Design**
  - Mobile-first approach
  - Modern UI/UX
  - Smooth animations and transitions
  
- 🔧 **Dynamic Content**
  - JSON-based CV data integration
  - Easy content management
  - Flexible portfolio sections

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js 18+ and npm
- MySQL/MariaDB or PostgreSQL

## Installation

1. **Clone the repository:**
```bash
git clone https://github.com/OrionCCDev/Sapry.git
cd Sapry
```

2. **Install PHP dependencies:**
```bash
composer install
```

3. **Install Node dependencies:**
```bash
npm install
```

4. **Set up environment:**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configure database in `.env`:**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

6. **Run migrations:**
```bash
php artisan migrate
```

7. **Build assets:**
```bash
npm run build
```

8. **Start development server:**
```bash
php artisan serve
```

Visit `http://localhost:8000` to see the application.

## Routes

- `/` - Welcome page (Photography Portfolio)
- `/portfolio2` - Civil Engineer Portfolio with CV integration

## Deployment

For detailed deployment instructions to a `.io` domain or any hosting provider, see [DEPLOYMENT.md](DEPLOYMENT.md).

### Quick Deploy Checklist

- [ ] Update `APP_URL` in `.env` to your domain
- [ ] Set `APP_ENV=production` and `APP_DEBUG=false`
- [ ] Run `npm run build` to compile assets
- [ ] Run `php artisan config:cache`
- [ ] Set proper file permissions on `storage` and `bootstrap/cache`

## Project Structure

```
├── app/
│   ├── Http/Controllers/
│   │   └── Portfolio2Controller.php
│   └── Models/
├── public/
│   ├── assets/portfolio2/    # Portfolio2 assets
│   └── proto2/                # Original React portfolio
├── resources/
│   ├── css/
│   │   ├── app.css           # Welcome page styles
│   │   └── portfolio2.css    # Portfolio2 styles
│   ├── js/
│   │   ├── app.js
│   │   └── portfolio.js
│   └── views/
│       ├── welcome.blade.php
│       └── portfolio2/
│           └── index.blade.php
└── routes/
    └── web.php
```

## Configuration

### Portfolio2 CV Data

The Portfolio2 page loads data from `public/assets/portfolio2/cvData.json`. Update this file to customize the portfolio content.

### Styling

- **Welcome page**: Uses Bootstrap 5.3.3 (`resources/css/app.css`)
- **Portfolio2**: Uses Tailwind CSS + DaisyUI (`resources/css/portfolio2.css`)

## Development

### Watch for changes:
```bash
npm run dev
```

### Build for production:
```bash
npm run build
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For issues or questions, please open an issue on [GitHub](https://github.com/OrionCCDev/Sapry/issues).
