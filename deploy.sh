#!/usr/bin/env bash
# Deploy script for Astroyds site
# IMPORTANT: Review changes before running. Do NOT auto-deploy without approval.
# Usage: ./deploy.sh

set -e

DEPLOY_DIR="/var/www/astroyds.com"
REPO_URL="https://github.com/MN-Games-Official/Astroyds_site.git"
BRANCH="${1:-main}"

echo "=== Astroyds Deployment ==="
echo "Target: $DEPLOY_DIR"
echo "Branch: $BRANCH"
echo ""

read -rp "Continue? (y/N): " confirm
if [ "$confirm" != "y" ]; then
    echo "Aborted."
    exit 0
fi

if [ -d "$DEPLOY_DIR/.git" ]; then
    echo "Pulling latest..."
    cd "$DEPLOY_DIR"
    git fetch origin
    git checkout "$BRANCH"
    git pull origin "$BRANCH"
else
    echo "Cloning..."
    git clone -b "$BRANCH" "$REPO_URL" "$DEPLOY_DIR"
    cd "$DEPLOY_DIR"
fi

# Ensure storage directory exists
mkdir -p storage/submissions
chmod 700 storage/submissions

# Check .env exists
if [ ! -f .env ]; then
    echo "WARNING: .env not found. Copy .env.example and configure."
    cp .env.example .env
    echo "Please edit .env with production values."
fi

echo ""
echo "=== Deployment complete ==="
echo "Restart PHP-FPM: sudo systemctl restart php-fpm"
echo "Restart Nginx:   sudo systemctl restart nginx"
