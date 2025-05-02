
# Geo-Location

A Laravel-based web application designed to manage and display geolocation data. This project leverages Laravel's robust features to provide a seamless experience in handling location-based information.

## Features

- **User Authentication**: Secure login and registration system.
- **Geolocation Management**: CRUD operations for geolocation entries.
- **Interactive Maps**: Visual representation of locations using integrated mapping services.
- **Responsive Design**: Mobile-friendly interface built with Bootstrap.
- **RESTful API**: Expose geolocation data through API endpoints.

## Technologies Used

- **Backend**: [Laravel](https://laravel.com/)
- **Frontend**: [Blade Templates](https://laravel.com/docs/10.x/blade), [Bootstrap](https://getbootstrap.com/)
- **Database**: [MySQL](https://www.mysql.com/) (configured via `.env` file)
- **Package Management**: [Composer](https://getcomposer.org/), [npm](https://www.npmjs.com/)

## Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Mollygit001/geo-location.git
   cd geo-location
   ```

2. **Install Dependencies**:
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup**:
   - Copy the example environment file and configure your settings:
     ```bash
     cp .env.example .env
     ```
   - Generate the application key:
     ```bash
     php artisan key:generate
     ```

4. **Database Migration**:
   - Run migrations to set up the database schema:
     ```bash
     php artisan migrate
     ```

5. **Serve the Application**:
   ```bash
   php artisan serve
   ```

   Access the application at `http://localhost:8000`.

## Usage

- Register a new account or log in with existing credentials.
- Add new geolocation entries with relevant details.
- View all locations on an interactive map.
- Edit or delete existing entries as needed.

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request for any enhancements or bug fixes.

## License

This project is open-source and available under the [MIT License](LICENSE).
