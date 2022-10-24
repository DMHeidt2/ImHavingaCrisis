RewriteCond $1.html !-f
RewriteCond $1.php -f
RewriteRule ^(.*)\.html$ $1.php