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
   sudo systemctl start mysql ```
2. The local server will be accessible at http://localhost in your browser.
