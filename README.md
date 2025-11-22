<!-- portfolio -->
<!-- slug: fanthom-store -->
<!-- title: Fanthom Store -->
<!-- description: Simple CRUD e-commerce web application using Laravel 10, Docker, Tailwind CSS, and Alpine JS -->
<!-- image: https://github.com/daffa09/fanthom-store/assets/68214221/868041dd-1c5e-4e9e-8861-1dfc8d8d5f26 -->
<!-- tags: laravel, docker, tailwindcss, alpinejs, mysql, sail, vite -->

<p align="center"><a href="" target="_blank"><img src="https://github.com/daffa09/fanthom-store/assets/68214221/868041dd-1c5e-4e9e-8861-1dfc8d8d5f26" width="900"></a></p>

# Fanthom Store

A modern CRUD-based e-commerce web application built with Laravel 10, running in a Dockerized environment. This project demonstrates full-stack development with Laravel Sail, featuring a sleek UI powered by Tailwind CSS and interactive components with Alpine.js.

## 📋 Overview

Fanthom Store is a learning project that showcases modern web development practices with Laravel 10 and Docker. Inspired by [tokokita-laravel](https://github.com/afifbasya/tokokita-laravel), this application provides a complete e-commerce solution with product management, shopping cart functionality, and a responsive user interface.

##✨ Features

- **Product Management (CRUD)**
  - Create new products with images
  - Read and display products in catalog
  - Update product information and inventory
  - Delete products with confirmation

- **User Experience**
  - Responsive design for all devices
  - Fast page loads with Vite
  - Interactive UI with Alpine.js
  - Beautiful styling with Tailwind CSS

- **Docker Integration**
  - Containerized development environment
  - Laravel Sail for easy Docker management
  - MySQL database container
  - PhpMyAdmin for database administration

- **Modern Stack**
  - Laravel 10 backend framework
  - Vite for asset bundling
  - Livewire for reactive components
  - Authentication system

## 🛠️ Tech Stack

| Technology | Purpose |
|------------|---------|
| **Laravel 10** | PHP backend framework |
| **Docker** | Containerization platform |
| **Laravel Sail** | Docker development environment |
| **MySQL** | Relational database |
| **PhpMyAdmin** | Database management interface |
| **Tailwind CSS** | Utility-first CSS framework |
| **Alpine.js** | Lightweight JavaScript framework |
| **Vite** | Modern frontend build tool |

## 📁 Project Structure

```
fanthom-store/
├── app/
│   ├── Http/Controllers/          # Application controllers
│   ├── Models/                    # Eloquent models
│   └── Livewire/                 # Livewire components
├── database/
│   ├── migrations/               # Database migrations
│   └── seeders/                  # Database seeders
├── resources/
│   ├── views/                    # Blade templates
│   ├── css/                      # Tailwind CSS files
│   └── js/                       # JavaScript files
├── routes/
│   └── web.php                   # Web routes
├── public/                       # Public assets
├── docker-compose.yml            # Docker services config
├── Makefile                      # Command shortcuts
└── README.md
```

## 🚀 Getting Started

### Prerequisites

- **Docker Desktop** - Must be running
- **Unix-based Terminal** - Linux/macOS terminal or WSL for Windows
- **Git** - For cloning the repository
- **Make** (optional) - For using Makefile commands

### Installation Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/daffa09/fanthom-store.git
   cd fanthom-store
   ```

2. **Open in Your Code Editor**
   - Open the project in VS Code or your preferred editor

3. **Rename Environment File**
   ```bash  
   cp .env.example .env
   ```

4. **Start Docker Services**
   
   Using Makefile (recommended):
   ```bash
   make db-start
   ```
   
   Or manually:
   ```bash
   ./vendor/bin/sail up -d
   ```

5. **Install Dependencies**
   
   Run the following commands in sequence:
   
   ```bash
   # Install Composer dependencies
   make composer-install
   # Or: ./vendor/bin/sail composer install
   
   # Install NPM dependencies
   make npm-install
   # Or: ./vendor/bin/sail npm install
   ```

6. **Setup Database**
   
   ```bash
   # Run migrations
   make migrate
   # Or: ./vendor/bin/sail artisan migrate
   
   # Optional: Seed database with sample data
   make db-migrate
   # Or: ./vendor/bin/sail artisan db:seed
   ```

7. **Create Storage Link**
   ```bash
   make storage-link
   # Or: ./vendor/bin/sail artisan storage:link
   ```

8. **Build Frontend Assets**
   ```bash
   make npm-dev
   # Or: ./vendor/bin/sail npm run dev
   ```

9. **Start the Application**
   ```bash
   make run
   # Or: ./vendor/bin/sail up
   ```

10. **Access the Application**
    - Frontend: `http://localhost`
    - PhpMyAdmin: `http://localhost:8080`

## 💻 Usage

### Accessing PhpMyAdmin

- URL: `http://localhost:8080`
- Server: `mysql`
- Username: As configured in `.env` (default: `sail`)
- Password: As configured in `.env` (default: `password`)

### Managing Products

1. **Create Product**
   - Navigate to product creation page
   - Fill in product details (name, description, price)
   - Upload product image
   - Submit form to save

2. **View Products**
   - Browse the product catalog
   - Filter and search products
   - View product details

3. **Update Product**
   - Click edit on desired product
   - Modify product information
   - Save changes

4. **Delete Product**
   - Click delete button
   - Confirm deletion
   - Product is removed from database

### Using Makefile Commands

The project includes a Makefile for common operations:

```bash
# Database operations
make db-start          # Start Docker services
make db-migrate        # Run migrations and seeders
make migrate           # Run migrations only

# Dependency management  
make composer-install  # Install PHP dependencies
make npm-install       # Install Node dependencies

# Development
make run               # Start application
make npm-dev           # Build assets for development  
make npm-build         # Build assets for production

# Utilities
make storage-link      # Create storage symbolic link
make fresh             # Fresh install (migrations + seed)
```

## 🔧 Configuration

### Environment Variables

Key variables in `.env`:

```env
APP_NAME="Fanthom Store"
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=fanthom_store
DB_USERNAME=sail
DB_PASSWORD=password

VITE_APP_NAME="${APP_NAME}"
```

### Docker Services

Configured in `docker-compose.yml`:
- **Laravel Application**: Port 80
- **MySQL Database**: Port 3306
- **PhpMyAdmin**: Port 8080
- **Mailhog** (if configured): Port 8025

## 🎨 Frontend Development

### Tailwind CSS

Tailwind is configured and ready to use:

```html
<div class="bg-blue-500 text-white p-4 rounded-lg">
  Styled with Tailwind
</div>
```

### Alpine.js

Interactive components with Alpine:

```html
<div x-data="{ open: false }">
  <button @click="open = !open">Toggle</button>
  <div x-show="open">Content</div>
</div>
```

### Vite Build

```bash
# Development (with hot reload)
npm run dev

# Production build
npm run build
```

## 🐛 Troubleshooting

### Common Issues

1. **Docker not running**
   - Error: Cannot connect to Docker daemon
   - Solution: Start Docker Desktop

2. **Port already in use**
   - Error: Port 80/3306/8080 already allocated
   - Solution: Change ports in `docker-compose.yml` or stop conflicting services

3. **Permission denied (WSL)**
   - Error: Permission denied when running commands
   - Solution: Ensure Docker Desktop WSL integration is enabled

4. **Composer install fails**
   - Error: Dependencies cannot be resolved
   - Solution: Update `composer.json` or run `composer update`

5. **Migration errors**
   - Error: Table already exists
   - Solution: Run `make fresh` to reset database

### Logs and Debugging

```bash
# View application logs
./vendor/bin/sail logs

# View specific service logs
./vendor/bin/sail logs mysql

# Enter container shell
./vendor/bin/sail shell

# Run artisan commands
./vendor/bin/sail artisan {command}
```

## 🚀 Deployment

### Production Build

1. **Build assets**
   ```bash
   npm run build
   ```

2. **Optimize autoloader**
   ```bash
   composer install --optimize-autoloader --no-dev
   ```

3. **Cache configuration**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

4. **Set environment**
   ```env
   APP_ENV=production
   APP_DEBUG=false
   ```

### Deployment Platforms

Compatible with:
- AWS EC2 / ECS
- DigitalOcean
- Heroku
- Laravel Forge
- Laravel Vapor

## 🤝 Contributing

This project is inspired by [tokokita-laravel](https://github.com/afifbasya/tokokita-laravel). Contributions, improvements, and suggestions are welcome!

## 📄 License

This project is open source and available for educational purposes.

## 🙏 Acknowledgments

- Inspired by [tokokita-laravel](https://github.com/afifbasya/tokokita-laravel) by [afifbasya](https://github.com/afifbasya)
- Built with Laravel ecosystem tools
- Powered by Tailwind CSS and Alpine.js

---

**Happy Shopping!** 🛒✨
