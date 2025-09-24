A notes mini project to learn php. Built using JS, CSS/Tailwind, AND HTML.

Date Started: 09/23/2025
Target Deadline: 09/24/2025

Date Completed: 
login/logout 24/09/2025 
notes 

Target Accomplishments
Practice PHP in areas such as Authentication, Routers, and Database.


~~~ Remarks ~~~
if using XAMPP;

create a virtual environment on httpd-vhosts.conf 

i.e.
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/notes-mini-project/public"
    ServerName notes-mini-project.local
    <Directory "C:/xampp/htdocs/notes-mini-project/public">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

and in httpd.conf
DocumentRoot "C:/xampp/htdocs/notes-mini-project/public"
<Directory "C:/xampp/htdocs/notes-mini-project/public">
    AllowOverride All
    Require all granted
</Directory>

dont code in php guys.