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
			setTimeout(function(){
				$(notif).removeClass("slide");
			}, 3000);
		});
	}
}

function unlockedArchivement(params) {
	Swal.fire({
		title: 'Nouveau succès débloqué!',
		imageUrl: 'imgs/trophy.png',
		imageWidth: 150,
		imageHeight: 150,
		html:
		'<h4>"Comme à la maison"</h4><p style="margin-top: 15px; margin-bottom: 0; color: #6c4adf;"><strong>5%</strong> de reduction sur votre prochain séjour</p>',
		footer: '<a href="rewards.php">Afficher tout mes succès</a>',
	});

}
