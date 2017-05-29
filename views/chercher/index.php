
<h1>Chercher</h1>
<hr>


<div class="col-lg-10 col-lg-offset-1" >
    <form id="insettxtform" method="POST" action="<?php echo URL; ?>chercher/xhrGetlist" class="form-inline">
         
        <div class="col-lg-8  col-lg-offset-2">
            <div class="form-group"  >
                
                <input 
                       style="font-size: 30px; padding: 30px; " 
                       class="form-control" 
                       style="width : 450px; " 
                       type="text" name="cle" 
                       placeholder="mot clé"
                       class='flexdatalist'
                       data-min-length='1'
                       
                       list='posts'> 
                
                <datalist id="posts">
                    <option value="PHP">Nissan</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="Cobol">Cobol</option>
                    <option value="C#">C#</option>
                    <option value="C++">C++</option>
                    <option value="Java">Java</option>
                    <option value="Pascal">Pascal</option>
                    <option value="FORTRAN">FORTRAN</option>
                    <option value="Lisp">Lisp</option>
                    <option value="Swift">Swift</option>
                </datalist>
                
                
                <button style="font-size: 20px; padding: 15px; width : 150px; "  type="submit" class="btn btn-success"> <span style="margin-right : 5px;" class="glyphicon glyphicon-search" aria-hidden="true"></span> </button>
                
                <br><br><br><br>

            </div>    
        </div>
        
        
       
    </form>
    
    <br><br><br>
    <div class="col-lg-12" id="listInsert"  > </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
       
        /*
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
    */

	$('.form-inline').submit(function(){
       
            
            $(document).on('click','.close', function(){
                $(this).parent().hide(800);
            });
            
     
        
        

        $('#listInsert').text('');
        $('#listInsert').hide();
        
		var url = $(this).attr('action');
		var data = $(this).serialize();
		$.post( url, data, function(o){
            
            if(o.length == 0){
                
                   $('#listInsert').append('<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><h4> <span style="margin-right : 20px" class="glyphicon glyphicon-warning-sign" aria-hidden="true"> </span> acune Voiture trouvé  </h4></div>');
            }

			for (var i = 0 ; i < o.length; i++) {
                
                var a = "";
                if(o[i].Joignable == "non"){
                    a = "<div class=\"bg-danger\" style=\" padding : 30px; padding-left : 60px; color : white; \"  > <h5>la voiture n'est pas disponible</h5> </div>";
                }else if (o[i].Joignable == "oui")
                    a = " ";
                
                $('#listInsert').append('<div class="panel panel-default"><div class="panel-body"> <div class="img_voi col-md-6 " style="background-image: url(\'http://localhost/LocVoi//public/img/'+o[i].Image+'\'); "></div><div class="desc_voi col-md-6 "><h3>'+ o[i].Marque +'</h3><hr><h4>' + o[i].Modele + '</h4><hr><h5>'+ o[i].Description +'</h5></div></div><div class="panel-footer" style="height : 80px;"> <div class="col-md-6"><span class="nvgf glyphicon glyphicon-map-marker" aria-hidden="true"></span>' + o[i].Ville + '<br><span class="nvgf glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>' + o[i].Prix + ' DHs/jour<br><span class="nvgf glyphicon glyphicon-tint" aria-hidden="true"></span> ' + o[i].Carburant + '</div><div class="col-md-6"><span class="nvgf glyphicon glyphicon-user" aria-hidden="true"></span>  ' + o[i].Passagers + ' Passagers<br><span class="nvgf glyphicon glyphicon-list" aria-hidden="true"></span> ' + o[i].Options + '</div></div>'+ a +'</div>');
            
              
                

		    }

		},'json');
      
        $('#listInsert').fadeIn(2000);
  
		return false; 
	});
        
         $('.btn-post').each(function(){
            $(this).click(function(){
                var idpost = $(this).attr('rel');
                idpost = "http://localhost/BlogJs/post/p/"+idpost;
                window.location = idpost;
            });
        });
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    });
    
</script>

