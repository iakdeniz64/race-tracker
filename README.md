# Race Tracker
![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=Laravel&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=Vite&logoColor=white)
![Vue.js](https://img.shields.io/badge/Vue.js-4FC08D?style=for-the-badge&logo=Vue.js&logoColor=white)
![TypeScript](https://img.shields.io/badge/TypeScript-007ACC?style=for-the-badge&logo=TypeScript&logoColor=white)

This project is a demo for managing track records, displaying race car lap times in a table & interactive grid (pun intended).


## 🚗 About the Project

This project is a demo for managing track records, displaying race car lap times in a table & interactive grid (pun intended).

Users can:

- View and add lap times of different race cars.
- Switch to track mode to see an interactive visualization of the cars moving along a race circuit layout for comparison.

This project is built with Laravel (backend) and Vue.js + TypeScript (frontend), using Vite for fast development.

Unit and Feature tests are included.

The API is built following the [JSON API](https://jsonapi.org/) specification.


## ⚡ Installation & Setup
Ensure you have PHP 8.3+ and Composer installed.

`composer install` \
`cp .env.example .env` \
`php artisan key:generate`

The default database is SQLite, but you can change it in the `.env` file.

`php artisan migrate`

Run tests (Feature & Unit)

`php artisan test`


Seed the database with dummy data to get started:

`php artisan migrate:fresh --seed`

Frontend (Vue.js & Vite)

Make sure you have Node.js (v18+) and npm installed.

`npm install`

Start both the Laravel server and the Vite server:

`composer run dev`

Access the app Locally at `http://localhost:8000/`

## Use of Application
Assuming you have the Installation and Setup complete.

The application consists of a list of all the cars in the database.

It shows the number, driver, model, team, and average lap time of each car.

The border has the team color. The details button shows a better page of the laps.

In this page, you can see all current laps recorded, and add your own. The submit button only shows when a valid input is received.

Submitting a new lap emits this to the car detail page so the laps will 'refresh' automatically.

Users can always go back to the homepage with the Home navigation button on the top.

## Credits
- [Justin](https://github.com/justinnater) ([repo](https://github.com/justinnater/race-tracker))
