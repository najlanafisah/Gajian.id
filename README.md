# Gajian.id

Gajian.id is a web-based payroll management application designed to simplify employee salary processing through a practical and user-friendly interface.

## Features

- **Payroll Automation:** Simplifies employee payroll processing.
- **Salary Calculation:** Supports salary, allowance, and deduction calculations.
- **Payroll History:** Keeps track of employee salary records.
- **Interactive Dashboard:** Provides a clear overview through a responsive interface.
- **User Authentication:** Provides login access for administrators and HR personnel.
- **Responsive UI:** Offers a clean and user-friendly interface.

## Tech Stack

- **PHP:** Backend development
- **Laravel:** Web application framework
- **Blade:** Server-side templating
- **HTML, CSS, JavaScript, and SCSS:** Frontend development
- **Composer:** PHP dependency management
- **npm:** Frontend package management
- **Vite:** Frontend asset development and bundling

## Getting Started

### Prerequisites

Make sure you have the following installed:

- PHP
- Composer
- Node.js and npm
- A database supported by the project configuration

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/najlanafisah/Gajian.id.git
   cd Gajian.id
   ```

2. Install the dependencies:

   ```bash
   composer install
   npm install
   ```

3. Configure the environment:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure your database connection in the `.env` file.

5. Run the database migrations:

   ```bash
   php artisan migrate
   ```

6. Start the frontend development server:

   ```bash
   npm run dev
   ```

7. Start the Laravel development server in a separate terminal:

   ```bash
   php artisan serve
   ```

8. Open the local URL displayed by Laravel in your browser.

## Project Structure

```text
Gajian.id/
├── app/          # Application logic
├── bootstrap/    # Application bootstrapping
├── config/       # Configuration files
├── database/     # Database migrations and seeders
├── public/       # Public assets and entry point
├── resources/    # Views and frontend resources
├── routes/       # Application routes
├── storage/      # Logs, cache, and generated files
├── tests/        # Automated tests
├── .env.example  # Environment configuration template
├── artisan       # Laravel command-line interface
├── composer.json # PHP dependencies
├── package.json  # Frontend dependencies
└── README.md     # Project documentation
```

## Project Status

A web-based payroll management project focused on simplifying salary administration and improving payroll workflow efficiency.

## License

No license information has been confirmed for this repository.
