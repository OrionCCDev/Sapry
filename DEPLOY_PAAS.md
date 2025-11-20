# Platform-as-a-Service (PaaS) Deployment Guide

This guide provides step-by-step instructions for deploying your Laravel portfolio to popular PaaS platforms that support `.io` domains.

## Table of Contents
1. [Railway](#railway-recommended)
2. [Render](#render)
3. [Vercel](#vercel)
4. [DigitalOcean App Platform](#digitalocean-app-platform)
5. [Heroku](#heroku)

---

## Railway (Recommended) 🚂

Railway is one of the easiest platforms for Laravel deployment with excellent support.

### Step 1: Create Railway Account
1. Go to [railway.app](https://railway.app)
2. Sign up with GitHub (recommended)
3. Authorize Railway to access your repositories

### Step 2: Create New Project
1. Click **"New Project"**
2. Select **"Deploy from GitHub repo"**
3. Choose your repository: `OrionCCDev/Sapry`
4. Railway will automatically detect it's a Laravel app

### Step 3: Configure Environment Variables
1. Go to your project dashboard
2. Click on **"Variables"** tab
3. Add these environment variables:

```env
APP_NAME=Sapry Portfolio
APP_ENV=production
APP_KEY=base64:YOUR_APP_KEY_HERE
APP_DEBUG=false
APP_URL=https://yourdomain.io

LOG_CHANNEL=stack
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=your-db-host
DB_PORT=3306
DB_DATABASE=railway
DB_USERNAME=root
DB_PASSWORD=your-password
```

**To generate APP_KEY:**
```bash
php artisan key:generate --show
# Copy the output and paste it in APP_KEY
```

### Step 4: Add Database (MySQL)
1. Click **"New"** → **"Database"** → **"Add MySQL"**
2. Railway will automatically create a MySQL database
3. Railway will automatically add these variables:
   - `MYSQL_HOST`
   - `MYSQL_PORT`
   - `MYSQL_DATABASE`
   - `MYSQL_USER`
   - `MYSQL_PASSWORD`
4. Update your `DB_*` variables to use the MySQL variables:
   ```env
   DB_HOST=${{MySQL.MYSQL_HOST}}
   DB_PORT=${{MySQL.MYSQL_PORT}}
   DB_DATABASE=${{MySQL.MYSQL_DATABASE}}
   DB_USERNAME=${{MySQL.MYSQL_USER}}
   DB_PASSWORD=${{MySQL.MYSQL_PASSWORD}}
   ```

### Step 5: Configure Build Settings
1. Go to **"Settings"** → **"Build"**
2. Set **Build Command:**
   ```bash
   composer install --optimize-autoloader --no-dev && npm install && npm run build
   ```
3. Set **Start Command:**
   ```bash
   php artisan migrate --force && php artisan config:cache && php artisan route:cache && php artisan view:cache && php -S 0.0.0.0:$PORT -t public
   ```

### Step 6: Add Custom Domain (.io)
1. Go to **"Settings"** → **"Networking"**
2. Click **"Custom Domain"**
3. Enter your domain: `yourdomain.io`
4. Railway will provide DNS records to add:
   - **CNAME**: `yourdomain.io` → `your-app.up.railway.app`
   - **CNAME**: `www.yourdomain.io` → `your-app.up.railway.app`
5. Add these records in your domain registrar's DNS settings
6. Railway will automatically provision SSL certificate

### Step 7: Deploy
1. Railway will automatically deploy on every push to `main` branch
2. Or click **"Deploy"** button to deploy manually
3. Check **"Deployments"** tab for build logs

### Step 8: Run Migrations
After first deployment, run migrations:
1. Go to **"Deployments"** tab
2. Click on the latest deployment
3. Open **"Logs"** tab
4. Or use Railway CLI:
   ```bash
   railway run php artisan migrate
   ```

---

## Render 🎨

Render offers free tier with easy Laravel deployment.

### Step 1: Create Render Account
1. Go to [render.com](https://render.com)
2. Sign up with GitHub
3. Authorize Render access

### Step 2: Create New Web Service
1. Click **"New +"** → **"Web Service"**
2. Connect your GitHub repository: `OrionCCDev/Sapry`
3. Configure:
   - **Name**: `sapry-portfolio`
   - **Environment**: `Docker`
   - **Region**: Choose closest to you
   - **Branch**: `main`
   - **Root Directory**: (leave empty)

### Step 3: Create Database
1. Click **"New +"** → **"PostgreSQL"** (or MySQL)
2. Name: `sapry-db`
3. Note the connection details

### Step 4: Configure Environment Variables
In your Web Service settings, add:

```env
APP_NAME=Sapry Portfolio
APP_ENV=production
APP_KEY=base64:YOUR_APP_KEY_HERE
APP_DEBUG=false
APP_URL=https://yourdomain.io

LOG_CHANNEL=stack
LOG_LEVEL=error

DB_CONNECTION=pgsql
DB_HOST=your-db-host.onrender.com
DB_PORT=5432
DB_DATABASE=your-db-name
DB_USERNAME=your-db-user
DB_PASSWORD=your-db-password
```

### Step 5: Configure Build & Start Commands
1. **Build Command:**
   ```bash
   composer install --optimize-autoloader --no-dev && npm install && npm run build
   ```
2. **Start Command:**
   ```bash
   php artisan migrate --force && php artisan config:cache && php artisan route:cache && php artisan view:cache && php artisan serve --host=0.0.0.0 --port=$PORT
   ```

### Step 6: Add Custom Domain
1. Go to **"Settings"** → **"Custom Domains"**
2. Add your domain: `yourdomain.io`
3. Render will provide DNS records:
   - **CNAME**: `yourdomain.io` → `your-app.onrender.com`
4. Add DNS records in your domain registrar
5. Render will automatically provision SSL

### Step 7: Deploy
- Render auto-deploys on every push to `main`
- Or manually trigger from dashboard

---

## Vercel ⚡

Vercel is great but requires some Laravel-specific configuration.

### Step 1: Create Vercel Account
1. Go to [vercel.com](https://vercel.com)
2. Sign up with GitHub

### Step 2: Import Project
1. Click **"Add New"** → **"Project"**
2. Import `OrionCCDev/Sapry`
3. Configure:
   - **Framework Preset**: Other
   - **Root Directory**: (leave empty)

### Step 3: Configure Build Settings
Create `vercel.json` in your project root:

```json
{
  "version": 2,
  "builds": [
    {
      "src": "public/index.php",
      "use": "@vercel/php"
    }
  ],
  "routes": [
    {
      "src": "/(.*)",
      "dest": "public/index.php"
    }
  ],
  "env": {
    "APP_ENV": "production"
  }
}
```

### Step 4: Environment Variables
In Vercel dashboard → **Settings** → **Environment Variables**, add:
```env
APP_KEY=base64:YOUR_APP_KEY_HERE
APP_DEBUG=false
APP_URL=https://yourdomain.io
DB_CONNECTION=sqlite
# Or use external database
```

**Note:** Vercel uses serverless functions, so database setup is different. Consider using:
- PlanetScale (MySQL)
- Supabase (PostgreSQL)
- Railway Database (external)

### Step 5: Custom Domain
1. Go to **Settings** → **Domains**
2. Add `yourdomain.io`
3. Add DNS records as provided by Vercel
4. SSL is automatic

---

## DigitalOcean App Platform 🐳

### Step 1: Create Account
1. Go to [digitalocean.com](https://digitalocean.com)
2. Sign up and verify account

### Step 2: Create App
1. Go to **App Platform**
2. Click **"Create App"**
3. Connect GitHub repository: `OrionCCDev/Sapry`

### Step 3: Configure App
1. **Source**: Select `main` branch
2. **Build Command:**
   ```bash
   composer install --optimize-autoloader --no-dev && npm install && npm run build
   ```
3. **Run Command:**
   ```bash
   php artisan migrate --force && php artisan config:cache && php artisan serve --host=0.0.0.0 --port=$PORT
   ```

### Step 4: Add Database
1. Click **"Add Resource"** → **"Database"**
2. Choose **MySQL** or **PostgreSQL**
3. DigitalOcean will auto-configure connection

### Step 5: Environment Variables
Add all required variables in **Settings** → **App-Level Environment Variables**

### Step 6: Custom Domain
1. Go to **Settings** → **Domains**
2. Add your `.io` domain
3. Configure DNS as instructed
4. SSL is automatic

---

## Heroku 🟣

### Step 1: Create Account
1. Go to [heroku.com](https://heroku.com)
2. Sign up (free tier available)

### Step 2: Install Heroku CLI
```bash
# Windows (using Git Bash or PowerShell)
# Download from: https://devcenter.heroku.com/articles/heroku-cli
```

### Step 3: Create App
```bash
heroku login
heroku create your-app-name
```

### Step 4: Add Buildpacks
```bash
heroku buildpacks:add heroku/php
heroku buildpacks:add heroku/nodejs
```

### Step 5: Add Database
```bash
heroku addons:create cleardb:ignite  # MySQL (free tier)
# OR
heroku addons:create heroku-postgresql:mini  # PostgreSQL (free tier)
```

### Step 6: Set Environment Variables
```bash
heroku config:set APP_KEY=$(php artisan key:generate --show)
heroku config:set APP_ENV=production
heroku config:set APP_DEBUG=false
heroku config:set APP_URL=https://your-app-name.herokuapp.com
```

### Step 7: Deploy
```bash
git push heroku main
heroku run php artisan migrate
```

### Step 8: Custom Domain
```bash
heroku domains:add yourdomain.io
heroku domains:add www.yourdomain.io
```
Then add DNS records as shown by Heroku.

---

## Quick Comparison

| Platform | Free Tier | Ease of Use | Laravel Support | Best For |
|----------|-----------|-------------|-----------------|----------|
| **Railway** | ✅ Yes | ⭐⭐⭐⭐⭐ | Excellent | **Recommended** |
| **Render** | ✅ Yes | ⭐⭐⭐⭐ | Good | Budget-friendly |
| **Vercel** | ✅ Yes | ⭐⭐⭐ | Limited | Static + API |
| **DigitalOcean** | ❌ No | ⭐⭐⭐⭐ | Excellent | Production apps |
| **Heroku** | ⚠️ Limited | ⭐⭐⭐ | Good | Legacy support |

## Recommended: Railway

**Why Railway?**
- ✅ Easiest setup
- ✅ Free tier available
- ✅ Excellent Laravel support
- ✅ Automatic SSL
- ✅ Built-in database
- ✅ Auto-deploy from GitHub
- ✅ Great documentation

## Post-Deployment Checklist

After deploying to any platform:

- [ ] Update `APP_URL` in environment variables to your `.io` domain
- [ ] Set `APP_DEBUG=false` for production
- [ ] Run database migrations
- [ ] Test all routes (`/` and `/portfolio2`)
- [ ] Verify assets are loading
- [ ] Check SSL certificate is active
- [ ] Test social media links
- [ ] Verify responsive design on mobile

## Troubleshooting

### Assets Not Loading
- Ensure `npm run build` is in build command
- Check `APP_URL` matches your domain
- Clear browser cache

### Database Connection Error
- Verify database credentials in environment variables
- Check database is running
- Ensure database user has proper permissions

### 500 Internal Server Error
- Check application logs in platform dashboard
- Verify `APP_KEY` is set
- Check file permissions

## Need Help?

- Railway: [docs.railway.app](https://docs.railway.app)
- Render: [render.com/docs](https://render.com/docs)
- Vercel: [vercel.com/docs](https://vercel.com/docs)
- DigitalOcean: [docs.digitalocean.com](https://docs.digitalocean.com)

