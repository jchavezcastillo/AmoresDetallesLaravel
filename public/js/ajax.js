    $(document).on('click','.send',function(){
		
		 $.ajaxSetup({
         headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});
	
     
        var _data = {
			'nombre': 'alguien',
			'telefono': '9334356',
			'mensaje':'hola'
			
			
			}
		
			

        $.ajax({
            url: save_url,
            type: "post",
            data: _data,
            dataType: 'json',
            success: function (response) {
            
			 
                    

            },
			
            error: function (response) {
				
			 
			 
				
             
            }
        });
		

    });