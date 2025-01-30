# Installation 

---

[//]: # (- [First Section]&#40;#section-1&#41;)

<a name="section-1"></a>
# How to Install Laravel Project from GitHub

## Step 1: Fork the Repository
Go to the GitHub repository, for example: [Aaran LMS](https://github.com/AARAN-SOFTWARE/aaran-lms).
Click the `Fork` option, then click `Create Fork`.

---

## Step 2: Open the Project in Your Code Editor
Open your favorite code editor (`VSCode` or `PhpStorm`) and clone the repository:
```sh
git clone https://github.com/YOUR-USERNAME/aaran-lms.git
```
Navigate to the project folder:
```sh
cd aaran-lms
```

---

## Step 3: Create `.env` File
Copy `.env.example` and rename it to `.env`:
```sh
cp .env.example .env
```

---

## Step 4: Configure the `.env` File
Open `.env` and update the database settings:
```ini
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```
> {primary} **Note :** You can change these values if needed. However, ensure that the database exists and the credentials are correct. Otherwise, Laravel will not be able to connect to the database.

---

## Step 5: Install Dependencies
Install Laravel dependencies using Composer:
```sh
composer install
```

---
## Step 6: Generate Application Key
Run the following command to generate the application key:
```sh
php artisan key:generate
```

---

## Step 7: Create Storage Link
Run the following command to create a symbolic link for storage:
```sh
php artisan storage:link
```

---

## Step 8: Install Node Modules 
If the project uses frontend dependencies, run:
```sh
npm install
```
> {primary} **Note : ** If   `npm`   is not installed, download it from   [nodejs.org](https://nodejs.org/) .

---

## Step 9: Run Migrations
Run database migrations and seed data:
```sh
php artisan migrate --seed
```

---

## Step 10: Build and Run Development Server
After installing dependencies, you can build and start the development server:
```sh
npm run build && npm run dev
```

---

## Step 11: Start Laravel Development Server
Serve the project locally:
```sh
php artisan serve
```
Visit `http://127.0.0.1:8000` in your browser.

Now your Laravel project is fully set up! 🚀



