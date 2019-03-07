var testiSarja = {
    alkupe_nimi: "Tarzan",
    vuosi: 1993,
    kansi: "https://image.flaticon.com/icons/svg/182/182321.svg"
};

//Luodaan karusellin uloimmat elementit
var rivi =
    '<div class="container">' +
    '<div class="row">' +
    '<div class="MultiCarousel" data-items="1,3,5,6" data-slide="3" id="MultiCarousel"  data-interval="1000">' +
    '<div class="MultiCarousel-inner">';

async function kirjaSarja() {
        var alkupe_nimi = testiSarja.alkupe_nimi;
        var vuosi = testiSarja.vuosi;
        var kansi = testiSarja.kansi;

        rivi +=
            //Luodaan karusellin sisällön uloin elementti
            '<div class="item">' +
            '<div class="pad15">' +

            //Tuodaan datasta tiedot karuselliin näytille
            '<p>' + alkupe_nimi +
            '</p><p>' + vuosi +
            '</p>' +

            '<img width="85%" src="' + kansi +
            '">' +

            //Viimeistellään rivi
            '</div> </div>';

        $('body').append(rivi);
}

//Käytetään asynciä jotta varmistutaan, että sivu täytetään oikeassa järjestyksessä
kirjaSarja().then($('body').append('</div></div></div>'));


