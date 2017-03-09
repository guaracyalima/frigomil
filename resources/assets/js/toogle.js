$(document).ready(function(){

	$(".filter-button").on('click',function(){
		var value = $(this).attr('data-filter');

		if(value == "all")
		{
			$('.filter').removeClass('hidden');
			$('.filter').show('1000');
			$('.filter-button').removeClass('ativado');
		}
		else
		{

//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
$(".filter").not('.'+value).hide('3000');
$('.filter').filter('.'+value).show('3000');
$('.filter-button').addClass('ativado');

	}
});
	
});

$(document).ready(function(){
	$('.filter-button').click(function(){
		$(this).addClass('ativado');
	});
});
