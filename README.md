
# Simple Blog with PHP, Boostrap and MySQL

## Project Discription

This is a PHP-based web application that allows users to create, read, update, and delete (CRUD) blog posts. The application features a responsive and user-friendly interface built with Bootstrap, and it stores blog post data in a MySQL database.


## Features

- Create : Add new blog posts with a title and content.
- Read : View the list of all blog posts and read individual posts.
- Update : Edit existing blog posts.

- Delete: Remove blog posts from the database.

- Responsive Design : Built using Bootstrap for mobile and desktop devices.


## Technologies Used

- Backend : PHP

- Frontend : HTML, CSS, Bootstrap

- Database : MySQL

- Other : XAMPP (or any other PHP environment)




## Installation and Setup

## 1 . Clone the Repository :

```bash
  git clone https://github.com/your-username/simple-blog.git
```
## 2 . Database Setup :
- Create a new database in MySQL (e.g., blog_db).

- Import the provided SQL file (blog_db.sql) into your MySQL database to set up the required tables.

## 3 . Configure the Database Connection :
- Open the config.php file.

- Set your database credentials :

```bash
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog_db";
```
## 4 . Run the Application :
- Start your PHP server (XAMPP or similar).

- Access the application by navigating to http://localhost/simple-blog/ in your browser.

## How to Use
- Navigate to the homepage to view all blog posts.

- Click on "Create Post" to add a new blog.

- Click on a post title to view the full post.

- Use the "Edit" and "Delete" options for post management.

