// $(function(){


    // $('.etiquetteClassement').draggable();
    $('.etiquetteClassement').draggable({
    	containment : ".modal",
    	stack : ".etiquetteClassement"
    });

    $(':regex(id,valise[0-9]) img').droppable({
    	accept: '.etiquetteClassement',
    	hoverClass: 'valiseHover',
    	drop : verifDropLabel,
    	out : resetCss
    });


    // agrandit l'etiquette au click
    $('.etiquetteClassement').click(function() {
    	$(this).css({
    		top: $(this).position().top,
            bottom: "auto",
		  '-webkit-transform' : 'scale(2)',
		  '-moz-transform'    : 'scale(2)',
		  '-ms-transform'     : 'scale(2)',
		  '-o-transform'      : 'scale(2)',
		  'transform'         : 'scale(2)',
		  '-webkit-transition' : 'transform 0.5s',
		  '-moz-transition'    : 'transform 0.5s',
		  '-ms-transition'     : 'transform 0.5s',
		  '-o-transition'      : 'transform 0.5s',
		  'transition'         : 'transform 0.5s'
		});
		$(this).draggable("disable");
    });

    // remise à zéro de la taille mouseleave
    $('.etiquetteClassement').mouseleave(function() {
		$(this).css({
		  '-webkit-transform' : 'scale(1)',
		  '-moz-transform'    : 'scale(1)',
		  '-ms-transform'     : 'scale(1)',
		  '-o-transform'      : 'scale(1)',
		  'transform'         : 'scale(1)',
		  '-webkit-transition' : 'transform 0.5s',
		  '-moz-transition'    : 'transform 0.5s',
		  '-ms-transition'     : 'transform 0.5s',
		  '-o-transition'      : 'transform 0.5s',
		  'transition'         : 'transform 0.5s'
		});
		$(this).draggable("enable");
    });

    // verification etiquette drop into boite
    var correctLabel = 0;
    var erreur = 0;
    function verifDropLabel(event, ui) {

    	var valiseCat = $(this).data('catValise');
    	var labelCat = ui.draggable.data('catLabel');
    	// Si on a juste
    	if (valiseCat == labelCat) {
            $(ui.draggable).toggle("scale");
    		correctLabel++;
            checkWin();
    	}else{
            erreur++;
            // on cache une image pour faire perdre une vie
            $('#vie'+erreur).css({
                'opacity': '0',
                '-webkit-transition' : 'opacity 1.5s ease-out',
                '-moz-transition'    : 'opacity 1.5s ease-out',
                '-ms-transition'     : 'opacity 1.5s ease-out',
                '-o-transition'      : 'opacity 1.5s ease-out',
                'transition'         : 'opacity 1.5s ease-out'
            });
    		// fond rouge pour montrer que l'on a faux
    		$(ui.draggable).css({
			  'background-color': 'red', /* For browsers that do not support gradients */
			  '-webkit-transition' : 'background-color 0.5s ease',
			  '-moz-transition'    : 'background-color 0.5s ease',
			  '-ms-transition'     : 'background-color 0.5s ease',
			  '-o-transition'      : 'background-color 0.5s ease',
			  'transition'         : 'background-color 0.5s ease'
			});
            checkLoose();
    	}
    }

    function checkWin() {
    	if ( ($(':regex(id,valise[0-9]) img').length*5) == correctLabel) {
            $('.etiquetteClassement').off();
            closeDefi();
    	}
    }
    function checkLoose() {
        if (erreur >= 3) {
            $('.etiquetteClassement').off();
            closeDefi();
        }
    }

    function closeDefi() {
        // stopDraggalbeAll();
        // A VOIR AU stopDraggalbeAll
        setTimeout(function() {
            checkRepClassement();
        },500);
        setTimeout(function() {
            // bruit de la fenetre qui se ferme
            readSong('PP_closeWindow.mp3');
            var d = document.getElementById('cacheDefi');
            $('.modal').css('transform','scale(0.7,0.7)');
            d.style.opacity = "0";
            setTimeout(function() {
                d.style.display = "none";
                // debloque le dé
                var de = document.getElementById('canvas').style;
                de.pointerEvents = "auto";
            }, 1500);
        }, 2500);
    }

    //affiche les popups win-loose
    function checkRepClassement() {
        if (erreur == 0) {
            setTimeout(function() {
                if (langueDefi == session.langue) {
                    addPoints(30);
                    $('#win').animate({ opacity: 1, top: "25%", left: '50%' });
                    // message selon la langue
                    if (session.langue == "FR") {
                        $('#win').html("<p>Bravo tu as gagné 30 points !</p>");
                    }else if (session.langue == "DE") {
                        $('#win').html("<p>Super, du hast 30 Punkte gewonnen !</p>");
                    }
                    // bonne réponse +1
                    addBonneReponse();
                }else{
                    // si on répond dans la langue qui n'est pas la notre
                    addPoints(60);
                    $('#win').animate({ opacity: 1, top: "25%", left: '50%' });
                    // message selon la langue
                    if (session.langue == "FR") {
                        $('#win').html("<p>Bravo tu as gagné 60 points !</p>");
                    }else if (session.langue == "DE") {
                        $('#win').html("<p>Super, du hast 60 Punkte gewonnen !</p>");
                    }
                    // bonne réponse +1
                    addBonneReponse();
                    // bonne réponse langue voisin
                    addBonneReponseVoisin();
                }

                setTimeout(function() {
                    setTimeout(function() {
                        $('#win').animate({ left: '75%', top: "3%" });
                    }, 2500);
                    $('#win').animate({ opacity: 0});
                }, 3000);

                // $('#win').html("<p>Bravo vous avez gagné 30 points!</p>");
                // $('#win').css('top','15%');
                // setTimeout(function() {
                //     $('#win').css('top','-25%');
                // }, 4000);
            }, 1800);
        }else if (erreur == 1) {
            setTimeout(function() {
                if (langueDefi == session.langue) {
                    addPoints(20);
                    $('#win').animate({ opacity: 1, top: "25%", left: '50%' });
                    // message selon la langue
                    if (session.langue == "FR") {
                        $('#win').html("<p>Bravo tu as gagné 25 points !</p>");
                    }else if (session.langue == "DE") {
                        $('#win').html("<p>Super, du hast 25 Punkte gewonnen !</p>");
                    }
                    // bonne réponse +1
                    addBonneReponse();
                }else {
                    // si on répond dans la langue qui n'est pas la notre
                    addPoints(40);
                    $('#win').animate({ opacity: 1, top: "25%", left: '50%' });
                    // message selon la langue
                    if (session.langue == "FR") {
                        $('#win').html("<p>Bravo tu as gagné 50 points !</p>");
                    }else if (session.langue == "DE") {
                        $('#win').html("<p>Super, du hast 50 Punkte gewonnen !</p>");
                    }
                    // bonne réponse +1
                    addBonneReponse();
                    // bonne réponse langue voisin
                    addBonneReponseVoisin();
                }

                setTimeout(function() {
                    setTimeout(function() {
                        $('#win').animate({ left: '75%', top: "3%" });
                    }, 2500);
                    $('#win').animate({ opacity: 0});
                }, 3000);
                // $('#win').html("<p>Bravo vous avez gagné 25 points!</p>");
                // $('#win').css('top','15%');
                // setTimeout(function() {
                //     $('#win').css('top','-25%');
                // }, 4000);
            }, 1800);
        }else if (erreur == 2) {
            setTimeout(function() {
                if (langueDefi == session.langue) {
                    addPoints(10);
                    $('#win').animate({ opacity: 1, top: "25%", left: '50%' });
                    // message selon la langue
                    if (session.langue == "FR") {
                        $('#win').html("<p>Bravo tu as gagné 20 points !</p>");
                    }else if (session.langue == "DE") {
                        $('#win').html("<p>Super, du hast 20 Punkte gewonnen !</p>");
                    }
                    // bonne réponse +1
                    addBonneReponse();
                }else {
                    // si on répond dans la langue qui n'est pas la notre
                    addPoints(20);
                    $('#win').animate({ opacity: 1, top: "25%", left: '50%' });
                    // message selon la langue
                    if (session.langue == "FR") {
                        $('#win').html("<p>Bravo tu as gagné 40 points !</p>");
                    }else if (session.langue == "DE") {
                        $('#win').html("<p>Super, du hast 40 Punkte gewonnen !</p>");
                    }
                    // bonne réponse +1
                    addBonneReponse();
                    // bonne réponse langue voisin
                    addBonneReponseVoisin();
                }

                setTimeout(function() {
                    setTimeout(function() {
                        $('#win').animate({ left: '75%', top: "3%" });
                    }, 2500);
                    $('#win').animate({ opacity: 0});
                }, 3000);
                // $('#win').html("<p>Bravo vous avez gagné 20 points!</p>");
                // $('#win').css('top','15%');
                // setTimeout(function() {
                //     $('#win').css('top','-25%');
                // }, 4000);
            }, 1800);
        }else{
            setTimeout(function() {
            $('#loose').animate({ opacity: 1, top: "25%", left: '50%' });
            // message selon la langue
            if (session.langue == "FR") {
                $('#loose').html("<p>Mince tu as perdu ...</p>");
            }else if (session.langue == "DE") {
                $('#loose').html("<p>Schade, du hast verloren ...</p>");
            }

            setTimeout(function() {
                setTimeout(function() {
                    $('#loose').animate({ left: '75%', top: "3%" });
                }, 2500);
                $('#loose').animate({ opacity: 0});
            }, 3000);
                // $('#loose').html("<p>Mince vous avez perdu!</p>");
                // $('#loose').css('top','15%');
                // setTimeout(function() {
                //     $('#loose').css('top','-25%');
                // }, 4000);
            }, 1800);
        }
    }

    // empeche draggalble apres fin du jeu
    function stopDraggalbeAll() {
        $('.etiquetteClassement').draggable('destroy');
    }

    // reset CSS lorsque l'on sort de la boite
    function resetCss(event, ui) {
    	//  on accepte toutes les étiquettes
    	// $(this).droppable('option', 'accept', '.etiquetteClassement');

		$(ui.draggable).css({
			'background-color': 'white', /* For browsers that do not support gradients */
			'-webkit-transition' : 'background-color 0.5s ease',
			'-moz-transition'    : 'background-color 0.5s ease',
			'-ms-transition'     : 'background-color 0.5s ease',
			'-o-transition'      : 'background-color 0.5s ease',
			'transition'         : 'background-color 0.5s ease'
		});
    }

// });

// $(ui.draggable) = ETIQUETTE
// $(this) = BOITE