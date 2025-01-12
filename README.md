# SQL Injection Proof of Concept (PoC)

This repository demonstrates a **Proof of Concept (PoC)** for an SQL Injection vulnerability in a PHP web application and how to mitigate it using prepared statements. SQL Injection is a widespread vulnerability that allows attackers to execute arbitrary SQL code on a web application's database by manipulating user input. This PoC shows both the vulnerable and secure implementation of PHP code.

## Contents

- `vulnerable.php`: A PHP script containing an SQL Injection vulnerability.
- `secure.php`: A PHP script demonstrating how to mitigate the SQL Injection vulnerability using prepared statements.
- `README.md`: This file explaining how to set up the environment, run the PoC, and understand the vulnerability.

## Prerequisites

Before running the PoC, you will need the following:

- **A local server environment**: You can use XAMPP, WAMP, or LAMP to set up a local server that supports PHP and MySQL.
- **PHP and MySQL installed**: The server must have PHP (for executing the PHP scripts) and MySQL (for managing the database) installed.
- **A text editor**: You'll need a text editor to modify and view the PHP code files.

## Setup Instructions

### Step 1: Install a Local Server Environment

#### Windows (Using XAMPP)

1. Download **XAMPP** from [here](https://www.apachefriends.org/index.html).
2. Install XAMPP by running the installer and following the on-screen instructions.
3. Once installed, open the **XAMPP Control Panel** and start **Apache** and **MySQL**.
4. The local server is now running, and you can access it via `http://localhost`.

#### Linux (Using LAMP)

1. Install Apache, MySQL, and PHP by running the following commands:
   ```bash
   sudo apt update
   sudo apt install apache2 mysql-server php php-mysqli
   sudo systemctl start apache2
   sudo systemctl start mysql 
2. The local server will be accessible at http://localhost in your browser.

#### Mac (Using MAMP)

1. Download MAMP from [here].
2. Install MAMP by following the instructions provided.
3. Start the MAMP application, and click on Start Servers to begin Apache and MySQL.

### Step 2: Create the Database

1. Open phpMyAdmin from your browser by visiting http://localhost/phpmyadmin.
2. Create a new database called test_db.
3. Click on Databases and enter test_db in the database name field.
4. Create a table called users in the test_db database with the values: `primary key`, `username` and `PASSWORD`.

### Step 3: Place the PHP Files

1. Navigate to the folder where your server’s web files are stored:
  - XAMPP: `C:\xampp\htdocs\`
  - LAMP/MAMP: `/var/www/html/`
2. Create a new directory called `vulnerable_app`.
3. Copy the following files into this directory:
  - `vulnerable.php`: The vulnerable PHP file.
  - `secure.php`: The secure PHP file.

### Step 4: Run the code

1. Open your browser and navigate to: http://localhost/vulnerable_app/vulnerable.phpusername=admin
- This should show the details of the admin user from the database.
2. To exploit the vulnerability, change the URL to: http://localhost/vulnerable_app/vulnerable.php?username=' OR '1'='1
- This will bypass authentication and retrieve all users from the database.
