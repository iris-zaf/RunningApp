# RunningMotion

RunningMotion is a web application built with Laravel that provides runners with a comprehensive platform to manage their running routines, explore stretching exercises, find recommended meals, and more. It includes both user and admin portals with distinct functionalities.

![homepage](https://github.com/user-attachments/assets/a697bad1-fd89-4525-a882-811f35e4c980)



## Features

User Dashboard: Personalized dashboard for users to track their activities.
Stretching Exercises: A variety of stretching exercises tailored for runners.
Meal Recommendations: Nutritional meal suggestions to enhance performance and recovery.
Admin Panel: Manage users, exercises, meals, and more from the admin dashboard.
Authentication: Login system for users and administrators with different access rights.

## Installation

1.Clone the repository

2.Navigate to the project directory

3.Install dependencies:
composer install

4.Copy the .env file and update your database credentials:
cp .env.example .env

5.Update the .env file with your database connection details:
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

6.Generate an application key:
php artisan key:generate

7.Run migrations to create the necessary database tables:
php artisan migrate

8.Seed the database (optional):
php artisan db:seed

9.Serve the application locally:
php artisan serve
The application will be available at http://localhost:8000


## Usage
1.User Login
Email: user@gmail.com
Password: password
2.Admin Login
route: /admin/login
Email: admin@gmail.com
Password: password

## Admin Features

- View and manage registered users
- Change Password

## Contact
If you have any questions or need assistance, please reach out:

Email: iriskalogirou1@gmail.com
Enjoy the app and happy running! 🏃‍♂️💨 want to add a gif i made of my app


