var agentDutyCode = 'CDS_HACKATHON';
var token = '';
var nbResa = 3;
var needResa = 5;

// Shorthand for $( document ).ready()
$(function() {
    $(".order").click(increaseResa);
});

function increaseResa() {
    ++nbResa;

    if (nbResa >= needResa) {
        unlockedArchivement();
    } else {
        notif = $('.notif');
        $(notif).addClass("slide");

        progressBar = $('.notif .progressBar div');
        $(progressBar).css("width", (nbResa / needResa) * 100 + '%');

        $(progressBar).bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",
            function() {
                textStat = $('.notif .progressBar div em');
                $(textStat).text(nbResa + ' / ' + needResa);
                setTimeout(function() {
                    $(notif).removeClass("slide");
                }, 2000);
            });
    }
}

function unlockedArchivement(params) {
    Swal.fire({
        title: 'Nouveau succès débloqué !',
        imageUrl: 'imgs/trophy.png',
        imageWidth: 150,
        imageHeight: 150,
        html: '<h4>"Comme à la maison"</h4><p style="margin-top: 30px; margin-bottom: 0; color: #411C6E;"><strong>5%</strong> de réduction sur votre prochain séjour !</p>',
        footer: '<a href="rewards.php" class="show-all">Afficher tous mes succès</a>',
        customClass: {
            'title': 'animated slow pulse infinite',
        },
        confirmButtonText: 'Génial !',
    });

}