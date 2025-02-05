# Basic Over-View of E-Commerce Web Application Using PHP
This project is a PHP-based e-commerce web application designed to serve both **consumers** (purchasers) and **vendors** (sellers). The platform allows consumers to browse, purchase, and track products, while vendors can list and manage their products. Below is a detailed overview of the project.

---

- [Introduction](#introduction)
1. [Application Architecture](#application-architecture)
     - [System Architecture Diagram](#system-architecture-diagram)
    - [Technology Stack](#technology-stack)
2. [Home Page Design](#home-page-design)
3. [User Authentication Flow](#user-authentication-flow)
    - [Login Page](#login-page)
    - [Registration Pages](#registration-pages)
4. [Vendor Dashboard](#vendor-dashboard)
5. [Consumer Profile & Features](#consumer-profile--features)
6. [Technical Implementation](#technical-implementation)
    - [Database Schema](#database-schema)
    - [Security Measures](#security-measures)
7. [Conclusion & Future Enhancements](#conclusion--future-enhancements)
8. [Appendices](#appendices)
9. [Project](#Project)

---

## Introduction
This e-commerce platform is built to provide a seamless shopping experience for consumers and a robust product management system for vendors. The application is developed using **PHP** for server-side logic, **MySQL** for the database, and **HTML/CSS/JavaScript** for the frontend.

**Key Features**:
- Guest mode for browsing products without logging in.
- Separate login and registration flows for consumers and vendors.
- Vendor dashboard for managing products, inventory, and sales.
- Consumer features like cart, favorites, and order tracking.

---

## Application Architecture

### System Architecture Diagram
The application follows a three-tier architecture:
1. **Client Browser**: Sends HTTP requests to the server.
2. **PHP Server**: Handles business logic and processes requests.
3. **MySQL Database**: Stores data related to users, products, orders, and vendors.
4. **Third-Party Integrations**: Payment gateways (e.g., Stripe) and email services (e.g., SendGrid).

### Technology Stack
- **Frontend**: HTML5, CSS3, JavaScript (Bootstrap for responsive design).
- **Backend**: PHP (optional frameworks: Laravel/CodeIgniter).
- **Database**: MySQL.
- **Tools**: PHPMyAdmin, Git for version control.

---

## Home Page Design
The home page is designed to provide an intuitive user experience:
- **Navbar**: Includes a search bar, product categories (e.g., Kitchen Appliances, Electronics), and a non-intrusive login link.
- **Product Grid**: Displays products with images, prices, and "Add to Cart" buttons.
- **Hero Section**: Highlights deals and new arrivals.
- **Guest Mode**: Users can browse products without logging in.

Sample Image:

![structure](/docs/images/E-Commerce/Home_page.png)



---

## User Authentication Flow

### Login Page
- **Two Options**: Consumer Login and Vendor Login.
- **Fields**: Username/Email, Password.
- **Links**: Forgot Password, Register.

### Registration Pages
- **Consumer Registration**: Collects name, email, address, age, gender, and password.
- **Vendor Registration**: Collects shop name, business email, product categories, tax ID, and password.
- Post-registration, consumers are redirected to the home page, and vendors are redirected to the product submission page.

vendor registration page:

![structure](/docs/images/E-Commerce/vendor_reg.png)

.

![structure](/docs/images/E-Commerce/vendor_reg2.png)



---

## Vendor Dashboard
The vendor dashboard provides tools for managing products and sales:
- **Product Submission Page**: Upload product images, titles, descriptions, prices, and stock quantities.
- **Inventory Management**: View/edit stock levels and track orders (dispatched, pending, canceled).
- **Sales Analytics**: Generate revenue reports and view customer demographics.
- **Price Management**: Update prices or run discounts.

![structure](/docs/images/E-Commerce/vendor_dash.png)


---

## Consumer Profile & Features
- **Cart & Favorites**: Save items for later purchase and apply coupons at checkout.
- **Consumer Profile Page**: Edit personal details and view order history.
- **Checkout Process**: Cart → Shipping Address → Payment → Order Confirmation.

---

## Technical Implementation

### Database Schema
- **Users Table**: `user_id`, `email`, `password`, `role` (consumer/vendor).
- **Products Table**: `product_id`, `vendor_id`, `name`, `price`, `stock`, `category`.
- **Orders Table**: `order_id`, `user_id`, `product_id`, `status` (dispatched/delivered).

### Security Measures
- **Password Hashing**: Use PHP’s `password_hash()`.
- **SQL Injection Prevention**: Prepared statements with PDO.
- **Session Management**: Secure cookies and CSRF tokens.

---

## Conclusion & Future Enhancements
This e-commerce platform is designed to be scalable and user-friendly. Future enhancements include:
- Integration of payment gateways (e.g., Stripe, PayPal).
- Implementation of a review/rating system.
- Addition of chatbots for customer support.

---

## Appendices
### Mockups
- Wireframes for home page, login, vendor dashboard, and cart.

### Entity-Relationship Diagram (ERD)
- Visual representation of relationships between `users`, `products`, `orders`, and `vendors`.

---

# Project

- This is the basic layout of the project for better understanding make by **Muthu Kumaran** https://vibevault.onrender.com/ this is made using React.

---
