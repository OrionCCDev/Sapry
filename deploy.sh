#!/bin/bash

# Deployment script for Sapry Portfolio Application
# Usage: ./deploy.sh

echo "🚀 Starting deployment for Sapry Portfolio..."

# Colors for output
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m' # No Color

# Check if we're in the right directory
if [ ! -f "artisan" ]; then
    echo -e "${RED}❌ Error: artisan file not found. Are you in the Laravel root directory?${NC}"
    exit 1
fi

# Pull latest changes
echo -e "${YELLOW}📥 Pulling latest changes from Git...${NC}"
git pull origin main || {
    echo -e "${RED}❌ Error: Failed to pull from Git${NC}"
    exit 1
}

# Install/update Composer dependencies
echo -e "${YELLOW}📦 Installing PHP dependencies...${NC}"
composer install --optimize-autoloader --no-dev || {
    echo -e "${RED}❌ Error: Composer install failed${NC}"
    exit 1
}

# Install/update NPM dependencies
echo -e "${YELLOW}📦 Installing Node dependencies...${NC}"
npm install || {
    echo -e "${RED}❌ Error: NPM install failed${NC}"
    exit 1
}

# Build assets
echo -e "${YELLOW}🔨 Building assets...${NC}"
npm run build || {
    echo -e "${RED}❌ Error: Asset build failed${NC}"
    exit 1
}

# Run migrations
echo -e "${YELLOW}🗄️  Running database migrations...${NC}"
php artisan migrate --force || {
    echo -e "${YELLOW}⚠️  Warning: Migration failed (this might be okay if database is already up to date)${NC}"
}

# Clear caches
echo -e "${YELLOW}🧹 Clearing caches...${NC}"
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

# Cache for production
echo -e "${YELLOW}⚡ Caching for production...${NC}"
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set permissions
echo -e "${YELLOW}🔐 Setting file permissions...${NC}"
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache 2>/dev/null || {
    echo -e "${YELLOW}⚠️  Warning: Could not change ownership (you may need to run with sudo)${NC}"
}

# Check if .env exists
if [ ! -f ".env" ]; then
    echo -e "${YELLOW}⚠️  Warning: .env file not found. Please create it from .env.example${NC}"
fi

echo -e "${GREEN}✅ Deployment complete!${NC}"
echo -e "${GREEN}📝 Don't forget to:${NC}"
echo -e "   - Check APP_URL in .env matches your domain"
echo -e "   - Verify APP_DEBUG=false in production"
echo -e "   - Test your routes"
echo -e "   - Check SSL certificate if using HTTPS"

