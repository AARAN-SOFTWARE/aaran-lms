# Laravel

---


<a name="section-1"></a>
# Creating a Laravel Application

## Installing PHP and the Laravel Installer

Before creating your first Laravel application, make sure that your local machine has `PHP`, `Composer`, `XAMP`, and the Laravel installer installed.
In addition, you should install `Node and NPM` so that you can compile your application's frontend assets.

---

> **Important**:  
> Ensure your machine meets the system requirements before proceeding with the installation of Laravel.

### Step-by-Step Installation

1. **Install Composer**:  
   First, make sure Composer is installed on your machine. You can download and install it from [here](https://getcomposer.org/).

2. **Install the Laravel Installer**:  
   Once Composer is installed, run the following command to install the Laravel installer globally:

   ```bash
   composer global require laravel/installer

3. **Create a New Laravel Project**:  
   After installing the Laravel installer, you can create a new Laravel project by running the following command:

   ```bash
   laravel new project-name

4. **Navigate to Your Project Directory**:  
   Move into your project folder with:

   ```bash
   cd project-name

5. **Start the Development Server**:  
   Use Laravel's built-in development server to run your application locally:

   ```bash
   php artisan serve

Once the server is running, open your browser and visit: [http://127.0.0.1:8000](http://127.0.0.1:8000).

<larecipe-progress type="success" :value="100"></larecipe-progress>

---

# Databases and Migrations

---

Now that you have created your Laravel application, you probably want to store some data in a database.  
By default, your application's `.env` configuration file specifies that Laravel will be interacting with an SQLite database.

During the creation of the application, Laravel created a `database/database.sqlite` file for you and ran the necessary migrations to create the application's database tables.

## Using Another Database Driver

 If you prefer to use another database driver such as **MySQL** or **PostgreSQL**, you can update your `.env` configuration file to use the appropriate database.

For example, if you wish to use **MySQL**, update your `.env` configuration file's `DB_*` variables like so:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
 Then Run this Command
```bash
php artisan serve
```



