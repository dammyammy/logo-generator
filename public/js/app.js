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
		$('#logo-output > p').css('font-family', font.val());
		alertify.success('Font Successfully Changed!');
	});
})(jQuery);