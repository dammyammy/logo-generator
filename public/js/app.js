(function() {
	var icon = $('#icon');
 	var name = $('input[name=logo-name]');
 	var iconColor = $('input[name=icon-color]');
 	var secondaryColor = $('input[name=secondary-color]');
 	var baseColor = $('input[name=base-color]');
 	var font = $('select[name=font]');

 	icon.bind('change keyup', function (e) {
		$('#icon-output').html('<i class="icon fa ' + icon.val() + '"></i>' );
		$('#icon-output > i.icon').css('color', iconColor.val());
	});
9
	iconColor.on('change', function (event) {
		$('#icon-output > i.icon').css('color', iconColor.val());
		alertify.success('Icon Color Successfully Changed to ' + iconColor.val());
	});

	baseColor.on('change', function () {
		$('#logo-output > p').css('color', baseColor.val());

		alertify.success('Base Color Successfully Changed to ' + baseColor.val());
	});

	secondaryColor.bind('change', function () {
		var color = secondaryColor.val();
		var oldname = $('#logo-output > p');
		var oldlogo = $('#icon-output').html();
		
		alertify.prompt('Type the letter(s) you wish to apply the secondary color to e.g. Rite in HireRite!')
							.set('labels', {ok:'Change Color!', cancel:'Naa!'})
							.set('title', 'Apply Secondary Color to Logo!')
							.set('onok', function(closeEvent) { 
								var input = $('.ajs-input').val(); 
 								oldlogo = '<span id="icon-output">' + oldlogo + '</span>';

								oldname.html(function () {
										var withSpan = '<span style="color: ' + color + '">' + input + '</span>';
									    return $(this).html().replace(input, withSpan); 
								});
								alertify.success('Secondary Color changed to ' + color + ' for text ' + input);
							} ); 
	});

 	name.on('keyup', function () {
 		var newname = name.val() + '<span id="icon-output">' + '<i class="icon fa ' + icon.val() + '"></i></span>';
		$('#logo-output > p').html( newname );
	});

	$('button#preview').on('click', function () {
		html2canvas(document.getElementById('logo-output'), {
			letterRendering: true,
			background: undefined,
		    onrendered: function(canvas) {
		        document.getElementById('img_val').value = canvas.toDataURL("image/png");
	            document.getElementById("downloader").submit();
		    }
		});

		alertify.success('<i class="fa fa-spinner fa-spin"></i> Please Wait... ');
		
	});

	font.bind('change keyup', function () {

		switch(font.val()) {
		    case 'cabin':
		        $('#logo-output > p').css('font-family', "'Cabin', sans-serif");
		        break;
		    case 'archivo':
		        $('#logo-output > p').css('font-family', "'Archivo Narrow', sans-serif");
		        break;
		     case 'play':
		     	$('#logo-output > p').css('font-family', "'Play', sans-serif");
		        break;
		     case 'pacifico':
		     	$('#logo-output > p').css('font-family', "'Pacifico', cursive");
		        break;
		     case 'roboto':
		     	$('#logo-output > p').css('font-family', "'Roboto Condensed', sans-serif");
		        break;
		     case 'montserrat':
		     	$('#logo-output > p').css('font-family', "'Montserrat', sans-serif");
		        break;
		     case 'noto':
		     	$('#logo-output > p').css('font-family', "'Noto Sans', sans-serif");
		        break;
		     case 'lobster':
		     	$('#logo-output > p').css('font-family', "'Lobster', cursive");
		        break;
		     case 'fjalla':
		     	$('#logo-output > p').css('font-family', "'Fjalla One', sans-serif");
		        break;
		     case 'josefin':
		     	$('#logo-output > p').css('font-family', "'Josefin Sans', sans-serif");
		        break;
		     case 'signika':
		     	$('#logo-output > p').css('font-family', "'Signika', sans-serif");
		        break;
		     case 'ubuntu':
		     	$('#logo-output > p').css('font-family', "'Ubuntu Condensed', sans-serif");
		        break;
		     case 'maven':
		     	$('#logo-output > p').css('font-family', "'Maven Pro', sans-serif");
		        break;
		     case 'exo2':
		     	$('#logo-output > p').css('font-family', "'Exo 2', sans-serif");
		        break;
		     case 'karla':
		     	$('#logo-output > p').css('font-family', "'Karla', sans-serif");
		        break;
		     case 'exo':
		     	$('#logo-output > p').css('font-family', "'Exo', sans-serif");
		        break;
		     case 'dancing':
		     	$('#logo-output > p').css('font-family', "'Dancing Script', cursive");
		        break;
		     case 'righteous':
		     	$('#logo-output > p').css('font-family', "'Righteous', cursive");
		        break;
		     case 'chewy':
		     	$('#logo-output > p').css('font-family', "'Chewy', cursive");
		        break;
		     case 'courgette':
		     	$('#logo-output > p').css('font-family', "'Courgette', cursive");
		        break;
		    default:
		        $('#logo-output > p').css('font-family', "'Archivo Narrow', sans-serif");
		        break;
		}
		alertify.success('Font Successfully Changed!');
	});
})(jQuery);