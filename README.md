# CodeIgniter POS System

A basic Point-of-Sale (POS) web application built using CodeIgniter 4 for IT0049 – Web System Technologies.

## Student Information

* **Student Name:** Sean Nicolas C. Roque
* **Section:** TC37
* **Professor:** Mr. Joseph Calleja
* **Assessment:** Technical Formative Assessment 1 – From Zero to Four Pages: Your First CodeIgniter Application

## Project Description

This project is the first version of a basic Point-of-Sale system. It demonstrates the Model-View-Controller (MVC) architecture of CodeIgniter 4 by using routes, controllers, and views to create a four-page website.

The Customer Accounts and User Accounts pages use static PHP arrays as temporary data sources. No database is used in this version of the application.

## Features

* Landing page
* About page
* Customer Accounts page
* User Accounts page
* Navigation links between all pages
* Static customer records displayed using a `foreach` loop
* Static user/staff records displayed using a `foreach` loop

## Pages and Routes

| Page              | Route        | Description                    |
| ----------------- | ------------ | ------------------------------ |
| Home              | `/`          | Landing page of the POS system |
| About             | `/about`     | Information about the project  |
| Customer Accounts | `/customers` | Displays customer records      |
| User Accounts     | `/users`     | Displays staff/user records    |

## Technologies Used

* PHP
* CodeIgniter 4
* Composer
* HTML
* Git and GitHub

## Project Structure

```text
app/
├── Config/
│   └── Routes.php
├── Controllers/
│   ├── Pages.php
│   ├── Customers.php
│   └── Users.php
└── Views/
    ├── home.php
    ├── about.php
    ├── customers.php
    └── users.php
```

## Installation and Setup

1. Clone the repository:

   ```bash
   git clone https://github.com/YOUR-USERNAME/IT0049-TFA1-CodeIgniter-POS.git
   ```

2. Go to the project folder:

   ```bash
   cd IT0049-TFA1-CodeIgniter-POS
   ```

3. Install project dependencies:

   ```bash
   composer install
   ```

4. Copy the `env` file and rename the copy to `.env`.

5. Open `.env` and set the application base URL:

   ```ini
   app.baseURL = 'http://localhost:8080/'
   ```

6. Start the CodeIgniter development server:

   ```bash
   php spark serve
   ```

7. Open this URL in a browser:

   ```text
   http://localhost:8080
   ```

## Database Export

This project does not include a database export because the activity requires static PHP arrays as temporary data sources. Customer and user records are stored directly in the `Customers` and `Users` controller methods.

## Live Application

Hosted Application Link:
`https://roquetc37-tfa1.site.je/`

## GitHub Repository

Repository Link:
`https://github.com/helenabagels/IT0049-TFA1-CodeIgniter-POS`
