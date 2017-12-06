# Powercard

## Installation

### Server requirements

- php >= 5.3.7

- MySQL database

### Local environment requirements

- php >= 5.3.7

- Composer [https://getcomposer.org](https://getcomposer.org)

### Instructions

- Clone the repository

	`git clone https://github.com/powercard/powercard.git`

- Change directory

	`cd powercard`

- Install composer dependencies

	`composer install`

- Upload all files and folders to your host's web server 

- Create database in CPanel

- Import `powercard.sql` into the created database

- Open `config.php` found in `application\config` folder and in line 26 change the base_url to reflect your domain name

- Open `database.php` found in `application\config` folder and change lines 78 to 81 to reflect to your database credentials

- You are done

## Bugs and Issues

If there is any bug or issue please report to [https://github.com/powercard/powercard/issues](https://github.com/powercard/powercard/issues)
