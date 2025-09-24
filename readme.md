# Notes Mini Project

A simple notes project to learn PHP. Built using JavaScript, CSS/Tailwind, and HTML.

---

## Project Timeline
- **Date Started:** 09/23/2025  
- **Target Deadline:** 09/24/2025  

### Completed
- Login/Logout: 09/24/2025  
- Notes: *in progress*  

---

## Target Accomplishments
- Practice PHP in areas such as:
  - Authentication
  - Routers
  - Database

---
## Remarks
If using **XAMPP**, configure a virtual environment in `httpd-vhosts.conf`:

```apache
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/notes-mini-project/public"
    ServerName notes-mini-project.local
    <Directory "C:/xampp/htdocs/notes-mini-project/public">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

And update httpd.conf:

DocumentRoot "C:/xampp/htdocs/notes-mini-project/public"
<Directory "C:/xampp/htdocs/notes-mini-project/public">
    AllowOverride All
    Require all granted
</Directory>