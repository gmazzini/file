<pre>
-- upload
curl -4 -X POST https://file.chaos.cc/up.php -F "id=xxx" -F "label=@file"
-- download
curl -4 -X POST https://file.chaos.cc/dw.php -F "id=xxx" -F "name=label" -o out.xxx
curl -4 -X POST https://file.chaos.cc/dwold.php -F "id=xxx" -F "name=label" -F "date=AAAAMMDDHHMMSS" -o out.xxx
-- delete
curl -4 -X POST  https://file.chaos.cc/del.php -F "id=xxx" -F "name=label" 
-- list
curl -4 -X POST  https://file.chaos.cc/ls.php -F "id=xxx"
curl -4 -X POST  https://file.chaos.cc/lsold.php -F "id=xxx"

-- create
mkdir rep/xxxxx
mkdir rep/xxxxx/_old_
chown -R 33:33 /home/www

</pre>
