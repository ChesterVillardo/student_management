# 🎓 Student Management System

A simple web-based Student Management System built with **CodeIgniter 4**.
This project allows users to manage student records with Create, Read, Update, and Delete (CRUD) functionalities, secure login, role-based access, and basic search.

## 📌 Features

- ✅ User Registration & Login
- ✅ Role-based Access (Admin/User)
- ✅ CRUD for Student Records
- ✅ Search and Filter Students
- ✅ Secure Session Management
- ✅ CSRF Protection
- ✅ Input Validation & Error Handling
- ✅ Styled UI with Basic CSS or Bootstrap

## 🚀 Live Demo

🔗 [Live Link]([https:/](http://localhost/student-management/public/))  
📦 [GitHub Repository](https://github.com/ChesterVillardo/student-management)

## 🛠️ Built With

- [CodeIgniter 4](https://codeigniter.com/)
- PHP 8.x
- MySQL
- HTML & CSS (or Bootstrap)

## 📂 Folder Structure

student-management/
├── app/
│ ├── Controllers/
│ ├── Models/
│ └── Views/
├── public/
├── writable/
├── .env
├── composer.json
└── README.md

bash
Copy
Edit

## ⚙️ Installation & Setup

1. **Clone this repository**
   ```bash
   git clone https://github.com/ChesterVillardo/student-management.git
Set up the environment

Copy .env.example to .env

Set CI_ENVIRONMENT = development

Update database credentials:

pgsql
Copy
Edit
database.default.hostname = localhost
database.default.database = student_management.db
database.default.username = root
database.default.password = 
Run migrations (optional)

bash
Copy
Edit
php spark migrate
Start the server

bash
Copy
Edit
php spark serve
Access it at http://localhost:8080

📸 Screenshots
Login Page	Dashboard	Student List

📑 Deployment Notes
Uploaded files to live server using FTP or cPanel.

Updated app.baseURL in Config\App.php.

Imported database on hosting control panel.

Connected custom domain and enabled HTTPS.

🔐 Security Features
CSRF tokens enabled

Server-side input validation

Sanitized form inputs

Session-based access control


🙋‍♂️ Author
Chester B. Villardo
Bachelor of Science in Information Technology
National Teachers Colleges


📃 License
This project is licensed under the MIT License.
