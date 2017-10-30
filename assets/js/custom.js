
	
	//var base_url = 'http://immidia.ae/';
	var base_url = 'http://localhost/immidia.ae';



	 var daysArrayInit = [

               {'id' : 1 , 'name' : 'Half Day (9am - 1pm)'}, 
               {'id' : 2 , 'name' : 'Half Day (2pm - 6pm)'}, 
               {'id' : 3 , 'name' : '24 Hour (Noon - Noon)'}, 
               {'id' : 4 , 'name' : '1 Day (09:00 - 19:00 Hrs)'}, 
               {'id' : 5 , 'name' : 'More (----)'}, 
               {'id' : 6 , 'name' : '1 Week (----)'}, 
               {'id' : 7 , 'name' : '2 Week (----)'}, 
               {'id' : 8 , 'name' : '3 Week (----)'}, 
               {'id' : 9 , 'name' : '4 Week (----)'}, 
                ];

   function diffDays(d1, d2)
    {
      var ndays;
      var tv1 = d1.valueOf();  // msec since 1970
      var tv2 = d2.valueOf();

      ndays = (tv2 - tv1) / 1000 / 86400;
      ndays = Math.round(ndays - 0.5);
      return ndays;
    }

                
	function getYachtState(countryId){
		$('#loader').removeAttr('style');
		 $.ajax({
	        url: base_url+'/get_yacht_state/'+countryId,
	        type: "get",
	        success: function(data){

	        			$('#countryName').val($('#yachtCountry option:selected').text());
	        			$('#yachtState').html('');
	       				$('#loader').attr('style','display:none');
	      				 $('#yachtState').html('<option value="0">State</option>')
	           			$.each(JSON.parse(data), function( index, value ) {
						 	
						 $('#yachtState').append('<option value="'+value['stateId']+'">'+value['stateName']+'</option>')
						});
	           			
	        }
	      });
	}


	function getYachtDepartureCity(country,state,days,daysId,yachtType,routeType){
					

		var days = 1;
		$('#stateName').val($('#'+state+' option:selected').text());
		$('#loader').removeAttr('style');
		console.log(base_url+'/get_yacht_departure_city/'+$('#'+country).val()+'/'+$('#'+state).val()+'/'+days+'/'+$('#'+daysId).val()+'/'+$('#'+yachtType).val()+'/'+$('#'+routeType).val());
		 $.ajax({
	        url: base_url+'/get_yacht_departure_city/'+$('#'+country).val()+'/'+$('#'+state).val()+'/'+days+'/'+$('#'+daysId).val()+'/'+$('#'+yachtType).val()+'/'+$('#'+routeType).val(),
	        type: "get",
	        success: function(data){
	        	$('#loader').attr('style','display:none');
	        	$('#departureCity').html('');
				$('#departureCity').html('<option value="0">Departure Port</option>');
				$.each(JSON.parse(data), function( index, value ) {
						 	
				$('#departureCity').append('<option value="'+value['cityId']+'">'+value['cityName']+'</option>')
				});
	      			
	           			
	        }
	      });
	}

	function getYachtArrivalCity(country,state,days,daysId,departureCity,yachtType,routeType) {
		
		$('#departureCityName').val($('#'+departureCity+' option:selected').text());
		$('#loader').removeAttr('style');
		 $.ajax({
	        url: base_url+'/get_yacht_arrival_city/'+$('#'+country).val()+'/'+$('#'+state).val()+'/'+days+'/'+$('#'+daysId).val()+'/'+$('#'+departureCity).val()+'/'+$('#'+yachtType).val()+'/'+$('#'+routeType).val(),
	        type: "get",
	        success: function(data){
	        	$('#loader').attr('style','display:none');
	        	$('#arrivalCity').html('');
				$('#arrivalCity').html('<option value="0">Arrival Port</option>');
				$.each(JSON.parse(data), function( index, value ) {
					console.log(value);		 	
				$('#arrivalCity').append('<option value="'+value['id']+'">'+value['cityName']+'</option>')
				});
	      			
	           			
	        }
	      });
	}


 validateSuperYacht(0,'yachtDays'); // calling for default type
 function validateSuperYacht(yachtType,yachtDays){
    var yachtTypeVar = $('#'+yachtType).val();  
     $('#'+yachtDays).html('');
    if(yachtTypeVar == 2){
         $.each(daysArrayInit, function( index, value ) {
        	   if(parseInt(value.id) > 5){
                    $('#'+yachtDays).append('<option value="'+value.id+'" >'+value.name+'</option>'); 	
                }             
         });
      }else{
             $.each(daysArrayInit, function( index, value ) {
                if(parseInt(value.id) <= 5){
                    $('#'+yachtDays).append('<option value="'+value.id+'">'+value.name+'</option>');
                } 
            });      
    }
  }


  function onSelectYachtDaysChange(yachtDays,arrival){
  	var days = 	$('#'+yachtDays).val();
  	if(days == 5){
  		$('#'+arrival).removeAttr('disabled');
  	}else{
  		$('#'+arrival).prop('disabled',true);
  	}
  }


 	function getDepartureDate(departureDate,arrivalDate,yachtDays){

 		if($('#'+yachtDays).val() == 5){
	 		var departureDateVal = $('#'+departureDate).datepicker({ dateFormat: 'yy-mm-dd' }).val();
	 		  var arrival = $('#'+departureDate).datepicker('getDate', '+7d'); 
			  arrival.setDate(arrival.getDate()+7); 
			  $('#'+arrivalDate).datepicker('setDate', arrival);
		}
  	}

  	function getArrivalCityName(arrivalCity){
  		$('#arrivalCityName').val($('#'+arrivalCity+' option:selected').text());
  	}

	function goBack() {
	    window.history.back();
	}