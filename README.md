# Task Manager (PHP + MySQL)

Simple web application for managing personal tasks with user authentication.

## Features

- User registration
- Login / logout
- Personal task list for each user
- Add and delete tasks
- Password hashing
- Session authentication

## Tech Stack

- PHP
- MySQL
- HTML / CSS
- XAMPP

## Database

Create a database called:

task_manager

Then run the SQL from:

database.sql

## Run locally

1. Install XAMPP
2. Start Apache and MySQL
3. Place the project in:

C:\xampp\htdocs\task-manager

4. Open in browser:

http://localhost/task-manager/login.php

## Project structure

task-manager
│
├── login.php
├── register.php
├── dashboard.php
├── add_task.php
├── delete_task.php
├── logout.php
├── config.php
├── style.css
└── database.sql

## Security

Passwords are stored using PHP password_hash().
