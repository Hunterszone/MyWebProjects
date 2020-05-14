# Custom website for web technologies

## I. How to deploy

### 1. Using PHP CLI   
- Install PHP CLI   
- type php -S localhost:8080   
- access the localhost:8080/index.php in your browser   

NB: port number could vary, depends on your preferences

### 2. Using XAMPP   
- Turn on the 'Apache' and 'MySQL' on your Xampp.   
- put the web site resources into c:\xampp\htdocs ( C or whatever drive it exists in).   
- access the localhost:8080/index.php in your browser   

NB: port number could vary, depends on your preferences  

## II. Setup DBs
- create DB **users** and **password_reset_temp**, in order to store your users details and  
the temp keys, that are generated on password reset

NB: you can also create your own collection of avatars under the **uploads** folder

## III. Setup SMTP server
- you can use the **hMailServer** app, in order to prepare your own SMTP Sever and to dispatch emails on user events

NB: change the SMTP server settings accordingly

## IV. QR authentication
- you can also authenticate, using a mobile app for scanning QR codes and  
another one for the generation of a one-time pass code