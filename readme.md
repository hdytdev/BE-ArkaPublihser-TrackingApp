
# 🚀 Setup Laravel 12 (Step-by-Step)

Panduan lengkap instalasi Laravel 12 dari awal hingga siap digunakan.

---

## 📌 Langkah-langkah Instalasi

### 🟢 Step 1: Clone Repository

```bash
git clone https://github.com/username/nama-project.git
cd nama-project
```

---

### 🟢 Step 2: Install Dependency Laravel

```bash
composer install
```

---

### 🟢 Step 3: Salin File Environment

```bash
cp .env.example .env
```

---

### 🟢 Step 4: Generate App Key

```bash
php artisan key:generate
```

---

### 🟢 Step 5: Konfigurasi Database

Edit file `.env` dan sesuaikan:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

---

### 🟢 Step 6: Jalankan Migrasi dan Seeder

```bash
php artisan migrate --seed
```

---

### 🟢 Step 7: Install Dependency Frontend

```bash
npm install
```

---

### 🟢 Step 8: Build Frontend

Untuk produksi:

```bash
npm run build
```

Untuk development:

```bash
npm run dev
```

---

### 🟢 Step 9: Jalankan Laravel Server

```bash
php artisan serve
```

Akses via browser:

```
http://localhost:8000
```

---

## ✅ Selesai!

Laravel 12 siap digunakan 🚀