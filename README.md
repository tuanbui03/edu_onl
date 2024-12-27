# Online Learning Platform

## Introduction
Welcome to the Online Learning Platform! This project is designed to provide users with an engaging and interactive online learning experience. Built using PHP 8.2.12, Composer 2.8.4, and Laravel 11.36.1, our platform allows users to browse through various courses and playlists uploaded by teachers, watch videos, and leave feedback.

## Features
- **User Registration & Authentication**: Users can register and log in to access the platform.
- **Course & Playlist Browsing**: Users can browse and view courses and playlists uploaded by teachers.
- **Video Watching**: Users can watch educational videos.
- **Commenting & Feedback**: Users can leave comments and feedback on courses and playlists.
- **Role-based Access**: The platform supports different user roles (admin, teacher, student) with specific permissions.

## Technology Stack
- **PHP**: Version 8.2.12
- **Composer**: Version 2.8.4
- **Laravel**: Version 11.36.1

## System Overview

### Admin Panel
Administrators have full control over the platform. They can manage users, courses, playlists, and videos. They can also moderate comments and feedback to ensure a positive learning environment.

### Teacher Dashboard
Teachers can create and manage their courses and playlists. They can upload videos, add descriptions, and interact with students through comments and feedback.

### Student Interface
Students can browse and enroll in courses and playlists. They can watch videos and leave comments to interact with teachers and other students.

## Database Structure
The platform uses MySQL as the database system. The key tables are:

- **users**: Stores user information (admin, teacher, student).
- **teachers**: Stores additional information for teacher profiles.
- **playlists**: Stores information about playlists created by teachers.
- **courses**: Stores information about courses offered by teachers.
- **videos**: Stores information about videos in playlists.
- **comments**: Stores user comments on videos.

### Database Connection
The database connection is configured in the `.env` file with the following settings:

```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password


### Installation
To set up the project locally, follow these steps:
1 Clone the repository:
bash
git clone https://github.com/your-username/your-repository.git

2 Navigate to the project directory:
bash
cd your-repository

3 Install dependencies:
bash
composer install

4 Set up environment variables: Copy the .env.example file to .env and update the database settings.

5 Generate application key:
bash
php artisan key:generate

6 Run migrations and seeders:
bash
php artisan migrate --seed

7 Serve the application:
bash
php artisan serve
Visit http://localhost:8000 to access the application.

Contributing
We welcome contributions from the community. Please feel free to submit pull requests and raise issues.

License
This project is licensed under the MIT License. See the LICENSE file for details.
