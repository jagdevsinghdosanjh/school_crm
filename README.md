School CRM (v1)
A lightweight, modular, multi‑role School Management CRM built using PHP, MySQL, and WAMP.
This version includes a complete authentication system for 7 user roles, a Super‑Admin Panel, and Student CRUD.

🚀 Features
✅ Multi‑Role Login System
Supports the following user roles:

Admin

Super Admin

DBA

Teacher

Student

Parent

Principal

Project Manager

Each role has its own login page and dashboard.

✅ Super‑Admin Panel
The super‑admin can:

Manage all user roles

Add / Edit / Delete users

Access all system modules

View system‑wide data

✅ Student Management (CRUD)
Add new students

Edit student details

Delete students

View all students in a table

🏗️ Project Structure
Code
school_crm_v1/
│── admin_login.php
│── dba_login.php
│── teacher_login.php
│── student_login.php
│── parent_login.php
│── principal_login.php
│── pm_login.php
│── login_process.php
│── logout.php
│── super_admin_dashboard.php
│── students_list.php
│── student_add.php
│── student_edit.php
│── student_delete.php
│── db_connect.php
│── includes/
│     ├── header.php
│     └── footer.php
│── assets/
      └── css/style.css
🗄️ Database Setup
Create the database:

sql
CREATE DATABASE IF NOT EXISTS school_crm;
USE school_crm;
Required Tables
admin

dba

teachers

students

parents

principals

project_managers

classes

(See /sql/schema.sql if included)

Create Super Admin
sql
INSERT INTO admin (username, password)
VALUES ('superadmin', MD5('superadmin123'));
🔐 Local Development Credentials
For WAMP:

Code
DB_HOST: localhost
DB_USER: root
DB_PASS: (empty)
DB_NAME: school_crm
🔒 Security Notes
Do NOT commit real credentials to GitHub.

Add this to .gitignore:

Code
db_connect.php
.env
*.sql
Replace sensitive values with placeholders before publishing.

▶️ How to Run
Install WAMP or XAMPP

Clone this repository into:

Code
C:/wamp64/www/school_crm/
Import the SQL schema into phpMyAdmin

Update db_connect.php with your local credentials

Open in browser:

Code
http://localhost/school_crm/school_crm_v1/admin_login.php
Log in as superadmin:

Code
Username: superadmin
Password: superadmin123
🧭 Next Modules (Planned)
Teacher CRUD

Parent CRUD

Principal CRUD

Project Manager CRUD

Attendance Module

Marks / Results Module

Timetable Module

Notice Board

Messaging System

👨‍💻 Author
Jagdev Singh Dosanjh  
Visionary developer, educator, and architect of modular learning systems.

📄 License
MIT License — free to use, modify, and distribute.