# Phishing_Site_Detection
This module is based on Phishing Detection. 

The portal allows people to check whether the site they are providing their sensitive data to is secure or not.
The procedure will be using random forest algorithm. This will act as a supervised classification algorithm. 
Also the neural network approach will be used as it will increase the performance and even a small network will give better results. 
Features of detecting phishing websites such as Address bar based, long URL to hide the suspicious part, using shortening services tiny URL, etc. 
A python code runs in background to provide well defined result based on prior dataset. This is a portal that will provide details which are not provided usually by any websites.
This will allow the users to get a check on the websites whether it can harm their data or breach the security. Apparently, the portal stores the result in the database for future reference.

Run the local host server and import .sql file to phpmyadmin.
phishing.php has the frontend of the website for user, while the whole computation of the result is done on pyhton. 
