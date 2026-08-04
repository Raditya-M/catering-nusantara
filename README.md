# 🍽️ Catering Nusantara

Website pemesanan catering modern yang dibangun menggunakan **Laravel 12**, **Tailwind CSS v4**, dan **Vite**. Aplikasi ini menyediakan tampilan yang responsif dan modern untuk memudahkan pelanggan melihat menu serta melakukan pemesanan.

## ✨ Fitur

- 🏠 Landing Page
- 🍛 Daftar Menu berdasarkan kategori
- 🔍 Filter menu
- 🛒 Pemesanan makanan
- ❤️ Wishlist
- 👤 Halaman Profil
- 📱 Responsive Design
- ⚡ Fast Loading dengan Vite

## 🛠️ Tech Stack

- Laravel 12
- PHP 8.3+
- Tailwind CSS v4
- Vite
- MySQL
- Font Awesome

## 📂 Struktur Project

```
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
```

## 🚀 Cara Menjalankan Project

### 1. Clone Repository

```bash
git clone https://github.com/username/catering-nusantara.git
```

### 2. Masuk ke Folder

```bash
cd catering-nusantara
```

### 3. Install Dependency

```bash
composer install

npm install
```

### 4. Copy File Environment

```bash
cp .env.example .env
```

Windows

```bash
copy .env.example .env
```

### 5. Generate App Key

```bash
php artisan key:generate
```

### 6. Atur Database

Edit file `.env`

```env
DB_DATABASE=catering_nusantara
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Jalankan Migration

```bash
php artisan migrate
```

### 8. Jalankan Server

Terminal 1

```bash
php artisan serve
```

Terminal 2

```bash
npm run dev
```

Buka browser

```
http://127.0.0.1:8000
```

---

## 📸 Preview

Tambahkan screenshot website di sini.

```
public/images/preview.png
```

atau

```md
![Preview](public/images/preview.png)
```

---

## 📁 Assets

Semua gambar statis disimpan pada folder

```
public/images
```

---

## 👨‍💻 Developer

**Adit**

GitHub: https://github.com/username

---

## 📄 License

Project ini dibuat untuk keperluan pembelajaran dan pengembangan aplikasi web menggunakan Laravel.
