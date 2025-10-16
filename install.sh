#!/bin/bash
# ============================================
#  Pterodactyl Balance System + Futuristic Theme Installer
#  Compatible with Pterodactyl v1.11.11
# ============================================

PTERO_DIR="/var/www/pterodactyl"

echo "🧩 Memulai instalasi sistem saldo & tema futuristik..."
sleep 1

# Pastikan direktori panel ada
if [ ! -d "$PTERO_DIR" ]; then
  echo "❌ Direktori Pterodactyl tidak ditemukan di $PTERO_DIR"
  exit 1
fi

echo "📁 Menyalin file tema dan sistem saldo..."
cp -r app "$PTERO_DIR/"
cp -r config "$PTERO_DIR/"
cp -r routes "$PTERO_DIR/"
cp -r resources "$PTERO_DIR/"
cp -r database "$PTERO_DIR/"

cd "$PTERO_DIR" || exit

echo "⚙️  Menjalankan migrasi database (menambah kolom saldo)..."
php artisan migrate --force

echo "🧱  Membangun ulang panel (npm run build:production)..."
npm install --silent
npm run build:production

echo "🚀  Mengoptimalkan cache Laravel..."
php artisan optimize:clear
php artisan config:cache
php artisan route:cache

echo "✅ Instalasi selesai!"
echo ""
echo "-----------------------------------------------"
echo "✨ Tema Futuristik & Sistem Saldo sudah aktif!"
echo "🔑 Login sebagai admin untuk melihat menu Saldo"
echo "💰 Pengguna sekarang dapat membeli server otomatis"
echo "-----------------------------------------------"
