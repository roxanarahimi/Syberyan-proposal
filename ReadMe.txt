Syberyan Proposal

A simple full-stack application for searching and filtering LinkedIn user profiles by job title and skills.

The project is divided into two main parts:

Back — Laravel 13
Front — Vue Js 3


Getting Started
1. Clone the repository
git clone https://github.com/roxanarahimi/Syberyan-proposal.git
cd Syberyan-proposal
2. Setup the Backend
cd Back
composer install

Create the environment file:

cp .env.example .env

Generate the application key:
php artisan key:generate

Configure your database connection in .env, then run the migrations:
php artisan migrate

Start the Laravel development server:
php artisan serve
The API will be available at:
http://127.0.0.1:8000

frontEnd:
cd Front
run npm install
run npm run serve
The From will be available at:
http://127.0.0.1:8080

Description:
This Project contains a database of about 300 users, by pushin search button you cat see all users, 
We also have two fields to filter the search result: Job Title and Skill.
There is also another button to reset the form and results. 

