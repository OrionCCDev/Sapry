# Deployment Guide for .io Domain

This guide will help you deploy your Laravel portfolio application to a `.io` domain.

## Prerequisites

- A `.io` domain name
- A hosting provider that supports PHP 8.2+ and Laravel
- SSH access to your server
- Git installed on your server

## Recommended Hosting Providers for .io Domains

### 1. **Vercel** (Recommended for Static + API)
- Supports Laravel via serverless functions
- Free tier available
- Easy deployment from GitHub
- Automatic SSL certificates

### 2. **Railway**
- Excellent Laravel support
- One-click deployment from GitHub
- Free tier available
- Automatic SSL

### 3. **Render**
- Free tier available
- Easy GitHub integration
- Automatic SSL
- Good Laravel support

### 4. **DigitalOcean App Platform**
- Built for Laravel
- Automatic deployments
- Free tier available

### 5. **Heroku**
- Classic Laravel hosting
- Easy deployment
- Free tier (limited)

### 6. **Traditional VPS** (DigitalOcean, Linode, AWS EC2)
- Full control
- Requires more setup
- Most flexible option

## Deployment Steps

### Step 1: Prepare Your Environment

1. **Update `.env` file** on your server:
```env
APP_NAME="Your Portfolio"
APP_ENV=production
APP_KEY=base64:YOUR_APP_KEY_HERE
APP_DEBUG=false
APP_URL=https://yourdomain.io

LOG_CHANNEL=stack
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

2. **Generate Application Key**:
```bash
php artisan key:generate
```

### Step 2: Deploy via Git

#### Option A: Direct Git Deployment

1. **On your server**, clone the repository:
```bash
cd /var/www
git clone https://github.com/OrionCCDev/Sapry.git yourdomain.io
cd yourdomain.io
```

2. **Install dependencies**:
```bash
composer install --optimize-autoloader --no-dev
npm install
npm run build
```

3. **Set up environment**:
```bash
cp .env.example .env
php artisan key:generate
# Edit .env with your production settings
```

4. **Run migrations**:
```bash
php artisan migrate --force
```

5. **Optimize for production**:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

6. **Set permissions**:
```bash
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

#### Option B: Automated Deployment (GitHub Actions)

Create `.github/workflows/deploy.yml`:

```yaml
name: Deploy to Production

on:
  push:
    branches: [ main ]

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v3
      
      - name: Setup PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: '8.2'
      
      - name: Install Dependencies
        run: |
          composer install --optimize-autoloader --no-dev
          npm install
          npm run build
      
      - name: Deploy to Server
        uses: appleboy/ssh-action@master
        with:
          host: ${{ secrets.HOST }}
          username: ${{ secrets.USERNAME }}
          key: ${{ secrets.SSH_KEY }}
          script: |
            cd /var/www/yourdomain.io
            git pull origin main
            composer install --optimize-autoloader --no-dev
            npm install
            npm run build
            php artisan migrate --force
            php artisan config:cache
            php artisan route:cache
            php artisan view:cache
```

### Step 3: Configure Web Server

#### For Apache (.htaccess is already configured)

Ensure your Apache virtual host points to the `public` directory:

```apache
<VirtualHost *:80>
    ServerName yourdomain.io
    ServerAlias www.yourdomain.io
    
    DocumentRoot /var/www/yourdomain.io/public
    
    <Directory /var/www/yourdomain.io/public>
        AllowOverride All
        Require all granted
    </Directory>
    
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

#### For Nginx

Create `/etc/nginx/sites-available/yourdomain.io`:

```nginx
server {
    listen 80;
    listen [::]:80;
    server_name yourdomain.io www.yourdomain.io;
    root /var/www/yourdomain.io/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

Enable the site:
```bash
ln -s /etc/nginx/sites-available/yourdomain.io /etc/nginx/sites-enabled/
nginx -t
systemctl reload nginx
```

### Step 4: Set Up SSL Certificate (HTTPS)

#### Using Let's Encrypt (Free):

```bash
sudo apt install certbot python3-certbot-nginx  # For Nginx
# OR
sudo apt install certbot python3-certbot-apache  # For Apache

sudo certbot --nginx -d yourdomain.io -d www.yourdomain.io
# OR
sudo certbot --apache -d yourdomain.io -d www.yourdomain.io
```

Certbot will automatically configure SSL and set up auto-renewal.

### Step 5: Configure Domain DNS

Point your `.io` domain to your server:

**A Record:**
```
Type: A
Name: @
Value: YOUR_SERVER_IP
TTL: 3600
```

**CNAME Record (for www):**
```
Type: CNAME
Name: www
Value: yourdomain.io
TTL: 3600
```

### Step 6: Post-Deployment Checklist

- [ ] Update `APP_URL` in `.env` to `https://yourdomain.io`
- [ ] Set `APP_DEBUG=false` in production
- [ ] Run `php artisan config:cache`
- [ ] Test all routes (`/` and `/portfolio2`)
- [ ] Verify assets are loading correctly
- [ ] Check SSL certificate is active
- [ ] Test social media links
- [ ] Verify database connection
- [ ] Check file permissions on `storage` and `bootstrap/cache`

## Quick Deploy Script

Save this as `deploy.sh`:

```bash
#!/bin/bash

echo "🚀 Starting deployment..."

# Pull latest changes
git pull origin main

# Install/update dependencies
composer install --optimize-autoloader --no-dev
npm install
npm run build

# Run migrations
php artisan migrate --force

# Clear and cache config
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set permissions
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

echo "✅ Deployment complete!"
```

Make it executable:
```bash
chmod +x deploy.sh
```

## Troubleshooting

### Assets Not Loading
- Run `npm run build` to compile assets
- Check `APP_URL` in `.env` matches your domain
- Clear browser cache

### 500 Internal Server Error
- Check file permissions: `chmod -R 755 storage bootstrap/cache`
- Check `.env` file exists and is configured
- Check Laravel logs: `storage/logs/laravel.log`

### Database Connection Error
- Verify database credentials in `.env`
- Ensure database exists
- Check database user has proper permissions

### Route Not Found
- Run `php artisan route:clear && php artisan route:cache`
- Check `routes/web.php` is correct

## Performance Optimization

1. **Enable OPcache** in `php.ini`
2. **Use Redis** for caching and sessions
3. **Enable Gzip compression** in web server
4. **Use CDN** for static assets
5. **Optimize images** before uploading

## Security Checklist

- [ ] `APP_DEBUG=false` in production
- [ ] Strong `APP_KEY` generated
- [ ] Database credentials are secure
- [ ] SSL certificate installed
- [ ] File permissions set correctly
- [ ] `.env` file is not publicly accessible
- [ ] Regular security updates applied

## Support

For issues or questions, please open an issue on GitHub: https://github.com/OrionCCDev/Sapry

