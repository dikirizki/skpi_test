## About Laravel<br>

Dibuat untuk latihan SKPI dengan menggunakan 

Laravel Framework 8.22.1 <br>
MongoDB shell version v4.2.11<br>

Tambahkan dibawah ini di file .env<br>

MONGO_DB_HOST=127.0.0.1<br>
MONGO_DB_PORT=27017<br>
MONGO_DB_DATABASE=skpi_test<br>
MONGO_DB_USERNAME=<br>
MONGO_DB_PASSWORD=<br>

Database :<br>
use tokobuku;<br>
<br>
db.books.insert({name:'diki rizki', detail:'test'})<br>
db.books.insert({name:'adventure', detail:'pegunungan'})<br>

kemudian jalankan dengan <br>
#php artisan serv
