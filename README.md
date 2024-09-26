# Form Submit using Ajax in Laravel with form validation
This is a small Laravel 11 application to show how you can submit a form using Ajax. It uses a custom table named "items" in MySQL. Laravel form validation is used to display validation error messages and once the form is submitted successfully, it displays a successful message. Also, index view displays all the inserted data in an html table. Website - https://codehow2.com

# How To Use

1) Download the repository from https://github.com/sundarsau/lara_form_submit_ajax
2) Extract it into a folder
3) Create a Database in MySQL
4) Update .env with update database name, username and password. Replace sqlite with mysql for DB_CONNECTION. For example, I used the database lara_form and updated database details as below:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=lara_form
    DB_USERNAME=root
    DB_PASSWORD=

5) Run composer install from project root
6) Run php artisan key:generate
7) Run php artisan migrate. This will create Laravel default tables and also will create a custom table called items. Initially, the table will be empty and after the form is submitted data should be inserted into this table.
8) Run php artisan serve
9) In Browser run localhost:8000
10) Click on New Item button and submit the form.

# License
This is an MIT license, you can modify the code according to your requirements

