# 🌍 Geo-Location Web App

[![Laravel](https://img.shields.io/badge/Laravel-12.x-red?logo=laravel)](https://laravel.com/) 
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![Made with ❤️](https://img.shields.io/badge/Made%20with-Laravel%20%26%20Bootstrap-f56565.svg)](#)

A Laravel-based 🧭 geolocation management system that allows users to securely log in, add location entries, and visualize them on an interactive map. Ideal for mapping, tracking, or location-based data apps.

---

## ✨ Features

- 🔐 **User Authentication** – Register & log in securely
- 🗺️ **CRUD for Geolocations** – Add, edit, and delete location entries
- 📍 **Interactive Mapping** – View locations plotted on a map
- 📱 **Responsive UI** – Mobile-first design with Bootstrap
- 🌐 **RESTful API** – Easily access geolocation data externally

---

## 🛠️ Tech Stack

- **Framework**: [Laravel 10](https://laravel.com/)
- **Templating**: [Blade](https://laravel.com/docs/10.x/blade)
- **Frontend**: [Bootstrap](https://getbootstrap.com/)
- **Database**: [MySQL](https://www.mysql.com/)
- **Package Managers**: [Composer](https://getcomposer.org/), [npm](https://www.npmjs.com/)

---

## 🚀 Installation Guide

Clone the repository:

```bash
git clone https://github.com/Mollygit001/geo-location.git
cd geo-location
```

Install backend & frontend dependencies:

```bash
composer install
npm install
```

Set up environment:

```bash
cp .env.example .env
php artisan key:generate
```

Run migrations:

```bash
php artisan migrate
```

Start the dev server:

```bash
php artisan serve
```

🌐 Visit: `http://localhost:8000`

---

## 🧪 Usage

1. Register or log in to your account.
2. Add geolocation entries with relevant details.
3. Visualize entries on the map.
4. Edit or delete locations as needed.

---

## 🤝 Contributing

Have ideas to improve this app? PRs are welcome!

1. Fork the repo
2. Create a new branch: `git checkout -b feature/YourFeature`
3. Commit your changes
4. Push and open a pull request

---

## 📄 License

This project is licensed under the **MIT License** – see the [LICENSE](LICENSE) file for details.

---

## 👨‍💻 Author

Built by [@Mollygit001](https://github.com/Mollygit001) with Laravel ❤️
