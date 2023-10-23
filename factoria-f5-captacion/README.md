# Project Title: 

Coders Recruitment Management Platform

## Project Description

This repository corresponds to the backend part of the coder
recruitment platform for Factoría F5 bootcamps.  

The team of Promotion Managers at Factoría F5 is looking for
solutions to optimize their coder recruitment process. Currently, they
use Excel matrices to manage applicants, which is maintenance
intensive and makes it difficult to access relevant information
efficiently. However, they are focused on creating a tool that will
allow them to access this data in real time through a user-friendly
interface. This initiative will help them reduce time spent on manual
tasks, such as creating personalized emails and reviewing
individual processes. Ultimately, this tool will improve the creation of
complete and up-to-date applicant files, which is essential for
effective management of the recruitment process.

## Project Objectives:

The primary objective of this project is to develop a coder
recruitment management platform that addresses the current
challenges of the F5 Factory PR team. Key objectives of the project
include:

- Automation and Centralization: Automate the recruitment process
as much as possible and centralize all applicant-related information
on a single platform.

- Real-Time Access: Provide a system that allows real-time access
to data, which will enable faster and more effective decision making.

- User-Friendly Interface: Develop an intuitive and user-friendly
interface that facilitates navigation and applicant tracking.

- Statistics Generation: Incorporate functionalities to generate
statistics and reports that simplify the evaluation of the recruitment
process.

- Personalized Emails: Include the ability to efficiently send
personalized emails to applicants.

- Applicant Files: Facilitate the creation and updating of complete
applicant profiles for each applicant, which will improve visibility and
understanding of their progress in the recruitment process.


## Technologies Used


- Composer.
- PHP.
- Laravel.
- MySQL.



## Getting Started

To clone and set up the “Coders Recruitment Management Platform” backend, follow these steps:

Clone the repository:

To clone and set up the backend, follow these steps:

1. **Clone the Repository:**

   ```bash
   git clone <repository-url>
   cd factoria-f5-captacion
   ```
2. **Install Dependencies:**

Run the following command to install all the required dependencies for the project:

```bash

composer install
```
3.**Database Setup:**

Create a database in MySQL and configure the .env file with your database credentials:

env
```bash
DB_CONNECTION=mysql
DB_HOST=your_database_host
DB_PORT=your_database_port
DB_DATABASE=factoria_f5_captacion
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

```

4.**In terminal enter the following command and the API Key will be automatically added to your .env file.**

```bash

php artisan key:generate

```

5.**Then run the migrations to set up the database schema:**

```bash

php artisan migrate
```
5.**Start the Development Server:**

Use the following command to start the Laravel development server:

```bash

php artisan serve —- port=8001
```
The backend will be accessible at http://localhost:8001.