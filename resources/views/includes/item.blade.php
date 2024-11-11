nano  /etc/apache2/sites-available/pcgadom.org.conf


<Directory /var/www/html/pcgadom.org/public_html>
        Require all granted
</Directory>
<VirtualHost *:80>
        ServerName pcgadom.org
        ServerAlias www.pcgadom.org
        ServerAdmin develoer@datapluzz.com
        DocumentRoot /var/www/html/pcgadom.org/public_html/public

        ErrorLog /var/www/html/pcgadom.org/logs/error.log
        CustomLog /var/www/html/pcgadom.org/logs/access.log combined

</VirtualHost>

sudo mkdir -p /var/www/html/pcgadom.org/{public_html,logs}
sudo chown -R www-data:www-data /var/www/html/pcgadom.org/public_html
 sudo chmod -R 755 /var/www/html/pcgadom.org/public_html
sudo a2ensite pcgadom.org



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    'hello welcome to PCGAdom'
</body>
</html>