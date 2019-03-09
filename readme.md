/resources/views/ kansiossa welcome.blade.php tiedosto on etusivu

Blade view engine:
@include('head') etsii head nimisen tiedoston ja lisää sen siihen kohtaan tiedostoa, jossa @include lukee. 
head on blade.php tyyppinen


php artisan migrate //tietokanta ylös
php artisan migrate:migrate //tietokanta alas

php artisan make:model teos -m //Luo teos taulun tietokantaan
/database/migrations

php artisan make:controller TeoksetController --resource //Luo kontrollerin funktiolla
/app/http/controllers

var userObj = {!! $teos !!} //Ottaa vastaan ja muuttaa jsoniksi