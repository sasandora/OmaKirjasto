/resources/views/ kansiossa welcome.blade.php tiedosto on etusivu

Blade view engine:
@include('head') etsii head nimisen tiedoston ja lisää sen siihen kohtaan tiedostoa, jossa @include lukee. 
head on blade.php tyyppinen


php artisan migrate //tietokanta ylös
php artisan migrate:rollback //tietokanta alas
php artisan migrate:reset //koko tietokanta alas
php artisan migrate:fresh //tyhjentää tietokannan tauluista ja lisää ne uudelleen

php artisan make:model teos -m //Luo teos taulun tietokantaan
/database/migrations

php artisan make:controller TeoksetController --resource //Luo kontrollerin funktiolla
/app/http/controllers

var userObj = {!! $teos !!} //Ottaa vastaan ja muuttaa jsoniksi. Ei toimi muussa muodossa.
