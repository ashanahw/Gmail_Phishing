# Gmail_Phishing
This is a sample phishing page designed to demostrate a phishing attempt on google accounts login page.

Inorder to run this project on your local machine you need to install a webserver service like apache to your system.


# How to setup

# Setup/Enable LocalHost in your Computer

In order to activate localhost server on Windows 7 navigate to:

-> Control Panel -> Programs and Features -> Turn Windows features on or off
Then search for Internet Information Services and check its checkbox.

Wait for Windows to make the changes, no need for immediate restart, the server will be enabled.

You can now navigate to

127.0.0.1 
or
http://localhost

## windows enviroment
1.Intall WAMP server/UWamp server/Easy PHP to your system.

2.Download this repository and extract the content or clone it to your local machine.

3.Place the extracted content in the www folder in wamp installation folder,
    (if you install WAMP to C: drive, Your path should be C:/wamp/www)
    
4.Run the wamp server.

5.Open up the browser and navigate to localhost/Gmail_phishing.

## Linux enviroment
1.Install Apache server if it is not already available on the system.

2.Download this repository and extract the content or clone it to your local machine.

3.Place the extracted content in /var/www/html directory.

4.start the apache service using service command.

5.Open up the browser and navigate to localhost/Gmail_phishing.


Blog post about creating the phishing site sample
https://knowyoursec.blogspot.com/2017/03/phishing-phishing-is-type-of-social.html
