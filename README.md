# stable

diganti di app/config/config.ini.php
sama app/config/database.php

192.168.100.14/stable2 -> diganti ke url web tanpa https / https dan tanpa www
ssl diganti off apabila http, dan ganti ke sll on apabila https
w3 diganti off apabile web tanpa ssl

ganti .htaccess di root ke setingan dibawah apabila untuk https:

RewriteOptions inherit
RewriteEngine On
<IfModule mod_rewrite.c>
RewriteEngine on
RewriteCond %{HTTPS} off
RewriteCond %{HTTP_HOST} ^santosastable\.id$
RewriteCond %{REQUEST_URI} !^/[0-9]+\..+\.cpaneldcv$
RewriteCond %{REQUEST_URI} !^/[A-F0-9]{32}\.txt(?:\ Comodo\ DCV)?$
RewriteCond %{REQUEST_URI} !^/\.well-known/acme-challenge/.+$
RewriteCond %{REQUEST_URI} !^/\.well-known/pki-validation/[A-F0-9]{32}\.txt(?:\ Comodo\ DCV)?$
RewriteRule (.*) https://www.santosastable.id/$1 [R=301,L]
</IfModule>

RewriteEngine On
RewriteCond %{HTTP_HOST} ^santosastable.id [NC]
RewriteRule ^(.*)$ https://www.santosastable.id/$1 [L,R=301]

<IfModule mod_headers.c>
# Unset Server Signature header
ServerSignature Off
# Unset Server Technology header
Header unset X-Powered-By
</IfModule>
<IfModule mod_headers.c>
# Unset Server Signature header
ServerSignature Off
# Unset Server Technology header
Header unset X-Powered-By
</IfModule>

<IfModule mod_expires.c>
# Enable expirations
ExpiresActive On
# HTML
ExpiresByType text/html "access plus 1 year"
ExpiresDefault "access plus 1 year"
</IfModule>

<IfModule mod_headers.c>
# Set XSS Protection header
Header set X-XSS-Protection "1; mode=block"
</IfModule>

<FilesMatch "\.(ico|pdf|flv)$">
Header set Cache-Control "max-age=31536000, public"
</FilesMatch>
 
# 1 WEEK
<FilesMatch "\.(ttf|ttc|otf|eot|woff|woff2|js|json|jpg|jpeg|png|gif|webp|svg|swf)$">
Header set Cache-Control "max-age=31536000, public"
</FilesMatch>

<IfModule mod_headers.c>
  <FilesMatch "\.(ttf|ttc|otf|eot|woff|woff2|font.css|css|js|json)$">
    Header set Access-Control-Allow-Origin "*"
  </FilesMatch>
</IfModule>

# 2 DAYS
<FilesMatch "\.(xml|txt|css|js)$">
Header set Cache-Control "max-age=31536000, proxy-revalidate"
</FilesMatch>
 
# 1 MIN
<FilesMatch "\.(html|htm|php)$">
Header set Cache-Control "max-age=31536000, public, proxy-revalidate"
</FilesMatch>

<ifModule mod_expires.c>
ExpiresActive On
ExpiresDefault A300
ExpiresByType image/x-icon A2592000
ExpiresByType application/x-javascript A3600
ExpiresByType text/css A3600
ExpiresByType image/gif A604800
ExpiresByType image/png A604800
ExpiresByType image/jpeg A604800
ExpiresByType image/webp A604800
ExpiresByType image/svg+xml A604800
ExpiresByType image/jpg A604800
ExpiresByType text/plain A300
ExpiresByType application/x-shockwave-flash A604800
ExpiresByType video/x-flv A604800
ExpiresByType application/pdf A604800
ExpiresByType text/html A300
</ifModule>

## EXPIRES CACHING ##
<IfModule mod_expires.c>
ExpiresActive On
ExpiresByType image/jpg "access 1 week"
ExpiresByType image/jpeg "access 1 week"
ExpiresByType image/gif "access 1 week"
ExpiresByType image/png "access 1 week"
ExpiresByType image/webp "access 1 week"
ExpiresByType image/svg+xml "access 1 week"
ExpiresByType text/css "access 1 week"
ExpiresByType text/js "access 1 week"
ExpiresByType text/html "access 1 week"
ExpiresByType application/pdf "access 1 week"
ExpiresByType text/x-javascript "access 1 week"
ExpiresByType application/x-shockwave-flash "access 1 week"
ExpiresByType image/x-icon "access 1 week"
ExpiresByType application/javascript "access plus 1 week"
ExpiresDefault "access 1 year"
</IfModule>
## EXPIRES CACHING ##

# BEGIN W3TC Browser Cache
<IfModule mod_deflate.c>
        AddOutputFilterByType DEFLATE text/css image/webp image/svg+xml image/svg text/x-component application/x-javascript application/javascript text/javascript text/x-js text/html text/richtext image/svg+xml text/plain text/xsd text/xsl text/xml image/bmp application/java application/msword application/vnd.ms-fontobject application/x-msdownload image/x-icon image/webp application/json application/vnd.ms-access application/vnd.ms-project application/x-font-otf application/vnd.ms-opentype application/vnd.oasis.opendocument.database application/vnd.oasis.opendocument.chart application/vnd.oasis.opendocument.formula application/vnd.oasis.opendocument.graphics application/vnd.oasis.opendocument.presentation application/vnd.oasis.opendocument.spreadsheet application/vnd.oasis.opendocument.text audio/ogg application/pdf application/vnd.ms-powerpoint image/svg+xml application/x-shockwave-flash image/tiff application/x-font-ttf application/vnd.ms-opentype audio/wav application/vnd.ms-write application/font-woff application/font-woff2 application/vnd.ms-excel
    <IfModule mod_mime.c>
        # DEFLATE by extension
        AddOutputFilter DEFLATE js css htm html xml
    </IfModule>
</IfModule>
<FilesMatch "\.(htm|rtf|rtx|svg|txt|xsd|xsl|xml|HTM|RTF|RTX|SVG|TXT|XSD|XSL|XML)$">
    <IfModule mod_headers.c>
        Header append Vary User-Agent env=!dont-vary
    </IfModule>
</FilesMatch>
<FilesMatch "\.(bmp|class|doc|docx|eot|exe|ico|webp|mdb|mpp|otf|_otf|odb|odc|odf|odg|odp|ods|odt|ogg|pdf|pot|pps|ppt|pptx|svg|svgz|swf|tif|tiff|ttf|ttc|_ttf|wav|wri|woff|woff2|xla|xls|xlsx|xlt|xlw|BMP|CLASS|DOC|DOCX|EOT|EXE|ICO|MDB|MPP|OTF|_OTF|ODB|ODC|ODF|ODG|ODP|ODS|ODT|OGG|PDF|POT|PPS|PPT|PPTX|WAV|WRI|XLA|XLS|XLSX|XLT|XLW)$">
    <IfModule mod_headers.c>
         Header unset Last-Modified
    </IfModule>
</FilesMatch>
# END W3TC Browser Cache

# DO NOT REMOVE THIS LINE AND THE LINES BELOW ERRORPAGEerror:anutun
ErrorDocument 403$  /media.php?p=404 
ErrorDocument 404$  /media.php?p=404 
ErrorDocument 405$  /media.php?p=404 
<IfModule mod_headers.c>
# Unset Server Signature header
# Disable server signature
ServerSignature Off
# Unset Server Technology header
Header unset X-Powered-By
</IfModule>

<FilesMatch "\.(ico|pdf|flv)$">
Header set Cache-Control "max-age=31536000, public"
</FilesMatch>
 
# 1 WEEK
<FilesMatch "\.(jpg|jpeg|png|gif|webp|svg|swf)$">u
Header set Cache-Control "max-age=31536000, public"
</FilesMatch>
 
# 2 DAYS
<FilesMatch "\.(xml|txt|css|js)$">
Header set Cache-Control "max-age=31536000, proxy-revalidate"
</FilesMatch>
 
# 1 MIN
<FilesMatch "\.(html|htm|php)$">
Header set Cache-Control "max-age=31536000, public, proxy-revalidate"
</FilesMatch>

<ifModule mod_expires.c>
ExpiresActive On
ExpiresDefault A300
ExpiresByType image/x-icon A2592000
ExpiresByType application/x-javascript A3600
ExpiresByType text/css A3600
ExpiresByType image/gif A604800
ExpiresByType image/png A604800
ExpiresByType image/webp A604800
ExpiresByType image/svg+xml A604800
ExpiresByType image/jpeg A604800
ExpiresByType text/plain A300
ExpiresByType application/x-shockwave-flash A604800
ExpiresByType video/x-flv A604800
ExpiresByType application/pdf A604800
ExpiresByType text/html A300
</ifModule>

## EXPIRES CACHING ##
<IfModule mod_expires.c>
ExpiresActive On
ExpiresByType image/webp "access 1 week"
ExpiresByType image/jpg "access 1 week"
ExpiresByType image/jpeg "access 1 week"
ExpiresByType image/gif "access 1 week"
ExpiresByType image/png "access 1 week"
ExpiresByType image/webp "access 1 week"
ExpiresByType image/svg+xml "access 1 week"
ExpiresByType text/css "access 1 week"
ExpiresByType text/js "access 1 week"
ExpiresByType text/html "access 1 week"
ExpiresByType application/pdf "access 1 week"
ExpiresByType text/x-javascript "access 1 week"
ExpiresByType application/x-shockwave-flash "access 1 week"
ExpiresByType image/x-icon "access 1 week"
ExpiresByType application/javascript "access plus 1 week"
ExpiresDefault "access 1 month"
</IfModule>
## EXPIRES CACHING ##

ErrorDocument 500$  /media.php?p=404 
ErrorDocument 503$  /media.php?p=404 
# DO NOT REMOVE THIS LINE AND THE LINES ABOVE anutun:ERRORPAGEerror
# Do not remove this line or mod_rewrite rules and search engine friendly URLs will stop working
Options +FollowSymLinks
RewriteEngine on
Rewritebase /
RewriteRule ^layanan/([^/.]+)$  media.php?p=layanan&p2=$1 [QSA,L]
RewriteRule ^wisata/([^/.]+)$  media.php?p=wisata&p2=$1 [QSA,L]
RewriteRule ^ajaxp-([^/.]+)$  media.php?p=ajax&p2=$1 [QSA,L]
