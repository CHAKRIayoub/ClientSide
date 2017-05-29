$(function(){

	$.get('dashboard/xhrGetlist', function(o){
        
        
		for (var i = 0 ; i < o.length; i++) {
            
			$('#listInsert').append('<div class="enregistrement" ><p>' + o[i].data + '</p><a class="del" rel="'+ o[i].id_data +'" href="#">x</a></div>');
		
		}
		$(document).on('click','.del', function(){

			var id = $(this).attr('rel');
			//$target.hide('slow', function(){ $target.remove(); });
			$(this).parent().hide('slow', function(){ $target.remove(); });
			$.post( 'dashboard/xhrDel', {'id_data' : id}, function(o){},'json');
			return false;

		});

	}, 'json');

	$('#insettxtform').submit(function(){

		var url = $(this).attr('action');
		var data = $(this).serialize();
		$.post( url, data, function(o){

			$('#listInsert').append('<div class=enregistrement style="display : none"><p>' + o.text +  '</p> <a class="del" rel="'+ o.id +'" href="#">x</a> </div>');
			$('.enregistrement').show(800);

		},'json');
		
		return false; 
	});
});