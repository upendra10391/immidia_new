
var base_url = 'http://localhost/immidia_new/trunk';

//var base_url = 'http://localhost/immidia_new/trunk';
//var base_url = 'http://localhost/immidia_new/trunk';


 var yachtAddToCart = [];

var daysArrayInit = [
    {'id': 1, 'name': 'Half Day (9am - 1pm)'},
    {'id': 2, 'name': 'Half Day (2pm - 6pm)'},
    {'id': 3, 'name': '24 Hour (Noon - Noon)'},
    {'id': 4, 'name': '1 Day (09:00 - 19:00 Hrs)'},
    {'id': 5, 'name': 'More (----)'},
    {'id': 6, 'name': '1 Week (----)'},
    {'id': 7, 'name': '2 Week (----)'},
    {'id': 8, 'name': '3 Week (----)'},
    {'id': 9, 'name': '4 Week (----)'},
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

getCartDataFromStroage('yacht_menus');

function getCartDataFromStroage(yachtMenus){
    var json = (window.localStorage.getItem('yachtFood'));
    $('#'+yachtMenus).val(json);

}



function getYachtState(countryId) {
    $('#loader').removeAttr('style');
    console.log(base_url + '/get_yacht_state/' + countryId);
    $.ajax({
        url: base_url + '/get_yacht_state/' + countryId,
        type: "get",
        success: function (data) {

            $('#countryName').val($('#yachtCountry option:selected').text());
            $('#yachtState').html('');
            $('#loader').attr('style', 'display:none');
            $('#yachtState').html('<option value="0">State</option>')
            $.each(JSON.parse(data), function (index, value) {

                $('#yachtState').append('<option value="' + value['id'] + '">' + value['stateName'] + '</option>')
            });

        }
    });
}


function getYachtDepartureCity(country, state, days, daysId, yachtType, routeType) {


    var days = 1;
    $('#stateName').val($('#' + state + ' option:selected').text());
    $('#loader').removeAttr('style');
    console.log(base_url + '/get_yacht_departure_city/' + $('#' + country).val() + '/' + $('#' + state).val() + '/' + days + '/' + $('#' + daysId).val() + '/' + $('#' + yachtType).val() + '/' + $('#' + routeType).val());
    $.ajax({
        url: base_url + '/get_yacht_departure_city/' + $('#' + country).val() + '/' + $('#' + state).val() + '/' + days + '/' + $('#' + daysId).val() + '/' + $('#' + yachtType).val() + '/' + $('#' + routeType).val(),
        type: "get",
        success: function (data) {
            $('#loader').attr('style', 'display:none');
            $('#departureCity').html('');
            $('#departureCity').html('<option value="0">Departure Port</option>');
            $.each(JSON.parse(data), function (index, value) {

                $('#departureCity').append('<option value="' + value['cityId'] + '">' + value['cityName'] + '</option>')
            });


        }
    });
}

function getYachtArrivalCity(country, state, days, daysId, departureCity, yachtType, routeType) {

    $('#departureCityName').val($('#' + departureCity + ' option:selected').text());
    $('#loader').removeAttr('style');
    $.ajax({
        url: base_url + '/get_yacht_arrival_city/' + $('#' + country).val() + '/' + $('#' + state).val() + '/' + days + '/' + $('#' + daysId).val() + '/' + $('#' + departureCity).val() + '/' + $('#' + yachtType).val() + '/' + $('#' + routeType).val(),
        type: "get",
        success: function (data) {
            $('#loader').attr('style', 'display:none');
            $('#arrivalCity').html('');
            $('#arrivalCity').html('<option value="0">Arrival Port</option>');
            $.each(JSON.parse(data), function (index, value) {
                console.log(value);
                $('#arrivalCity').append('<option value="' + value['id'] + '">' + value['cityName'] + '</option>')
            });


        }
    });
}


validateSuperYacht(0, 'yachtDays'); // calling for default type
function validateSuperYacht(yachtType, yachtDays) {
    var yachtTypeVar = $('#' + yachtType).val();
    $('#' + yachtDays).html('');
    if (yachtTypeVar == 2) {
        $.each(daysArrayInit, function (index, value) {
            if (parseInt(value.id) > 5) {
                $('#' + yachtDays).append('<option value="' + value.id + '" >' + value.name + '</option>');
            }
        });
    } else {
        $.each(daysArrayInit, function (index, value) {
            if (parseInt(value.id) <= 5) {
                $('#' + yachtDays).append('<option value="' + value.id + '">' + value.name + '</option>');
            }
        });
    }
}


function onSelectYachtDaysChange(yachtDays, arrival) {
    var days = $('#' + yachtDays).val();
    if (days == 5) {
        $('#' + arrival).removeAttr('disabled');
    } else {
        $('#' + arrival).prop('disabled', true);
    }
}


function getDepartureDate(departureDate, arrivalDate, yachtDays) {

    if ($('#' + yachtDays).val() == 5) {
        var departureDateVal = $('#' + departureDate).datepicker({dateFormat: 'yy-mm-dd'}).val();
        var arrival = $('#' + departureDate).datepicker('getDate', '+7d');
        arrival.setDate(arrival.getDate() + 7);
        $('#' + arrivalDate).datepicker('setDate', arrival);
    }
}

function getArrivalCityName(arrivalCity) {
    $('#arrivalCityName').val($('#' + arrivalCity + ' option:selected').text());
}

function goBack() {
    window.history.back();
}



function uniques(arr,itemsId) {
    var a = [];
     var total = 0;
    var  yachtFoodHTML = '';
    var checkId =  [];
    var flag = false;
    for (var i=0, l=arr.length; i<l; i++){
        console.log(checkId.indexOf(arr[i].id));
            if (checkId.indexOf(arr[i].id) === -1 && arr[i] !== ''){
                checkId.push(arr[i].id);
                a.push(arr[i]);
                flag = true;
               }else{

                a[checkId.indexOf(arr[i].id)].qty = arr[i].qty;
               }
            }
     
      $.each(a, function (index, value) {
         yachtFoodHTML += '<p class="fitem">'+
            '<span class="iname">'+value.itemName+'</span>'+
            '<span class="iqut">'+value.qty+'</span>'+
            '<span class="iprice">€ '+value.amount+'</span>'+
            '<span class="idelete"><i class="fa fa-trash-o" aria-hidden="true"></i></span>'+
            
        '</p>';

          total += value.qty * value.amount;
      
     });


       setTimeout(function(){
                window.localStorage.removeItem('yachtFood');
                $('#yachtSubTotal').text(parseInt(total)+parseInt(price));
                $('#yachtFoodPrice').val(total);
                $('#yachtFoodPriceWithPrice').val(parseInt(total)+parseInt(price));

               // if(window.localStorage.getItem('yachtFood') != null){
                    window.localStorage.setItem("yachtFood",JSON.stringify(a));
                //}


             },100); 

        $('#'+itemsId).html(yachtFoodHTML);

        return {'object':a,'status':flag};
    }


 function removeCart(index){
   var json =  JSON.parse(window.localStorage.getItem('yachtFood'));
          json.splice(index,1);
   }  

function addToCart(id,itemName,amount,qty,price,itemsId){

   
    yachtAddToCart.push({"id":id, "itemName":itemName,"amount":amount,'qty':qty});
    var yachtUniqueFoodItem = uniques(yachtAddToCart,itemsId);



    console.log(yachtUniqueFoodItem);
}

$("body").on("click", "#user_login", function () {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var user_emailid = $('#user_emailid').val();
    var user_password = $('#user_password').val();
    if (user_emailid == '') {
        $('#error_user_emailid').show();
        $('#error_user_emailid').html('Please Enter Your Email Id');
        $('#user_emailid').focus();
        return false;
    }
    if (reg.test(user_emailid) == false) {
        $('#error_user_emailid').show();
        $('#error_user_emailid').html('Please enter your valid emailid');
        $('#user_emailid').focus();
        return false;

    }
    if (user_password == '') {
        $('#error_user_emailid').hide();
        $('#error_user_password').show();
        $('#error_user_password').html('Please enter your password');
        $('#user_password').focus();
        return false;
    }
    //alert(user_emailid);exit;
    $('#loader').removeAttr('style');
    $.ajax({
        url: base_url + '/login',
        type: "post",
        data: {'mailId': user_emailid, 'password': user_password},
        success: function (total) {
            $('#loader').attr('style', 'display:none');
            var callback = $.parseJSON(total);
            if (callback.code == '201') {
                $('#error_user_emailid').hide();
                $('#error_user_password').hide();
                $('.errormessage').html(callback.message);
                $('#user_emailid').val('');
                $('#user_password').val('');
                $('#user_emailid').focus();
                return false;
            } else {
                //$('#error_user_emailid').hide();
                //$('#error_user_password').hide();
                //$('.successmessage').html(callback.message);
                window.location.replace(callback.url);
                return false;
            }
            //alert(callback.message)
        }
    });
})
$("body").on("click", "#signup", function () {
    //alert('hello');
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var email_id = $('#email_id').val();
    var password = $('#password_user').val();
    var confirm_password = $('#confirm_password').val();
    var mobile_no = $('#mobile_no').val();
    var country=$('#country').val();
    //var image=$('.icon-flag').val();
    //alert(image);
    

    if (first_name == '') {
        $('#signup_error').show();
        $('#signup_error').addClass('error');
        $('#signup_error').html('Please enter first name');
        $('#first_name').focus();
        return false;
    }
    if (last_name == '') {
        $('#signup_error').show();
        $('#signup_error').addClass('error');
        $('#signup_error').html('Please enter last name');
        $('#last_name').focus();
        return false;
    }
    if (email_id == '') {
        $('#signup_error').show();
        $('#signup_error').addClass('error');
        $('#signup_error').html('Please enter email id');
        $('#email_id').focus();
        return false;
    }
    if (reg.test(email_id) == false) {
        $('#signup_error').show();
        $('#signup_error').addClass('error');
        $('#signup_error').html('Please enter your valid emailid');
        $('#email_id').focus();
        return false;

    }
    if (password == '') {
        $('#signup_error').show();
        $('#signup_error').addClass('error');
        $('#signup_error').html('Please enter your password');
        $('#password_user').focus();
        return false;
    }
    if (confirm_password == '') {
        $('#signup_error').show();
        $('#signup_error').addClass('error');
        $('#signup_error').html('Please enter confirm password');
        $('#confirm_password').focus();
        return false;
    }
    if (password != confirm_password) {
        $('#signup_error').show();
        $('#signup_error').addClass('error');
        $('#signup_error').html('confirm password not match');
        $('#confirm_password').focus();
        return false;
    }
    if (mobile_no == '') {
        $('#signup_error').show();
        $('#signup_error').addClass('error');
        $('#signup_error').html('Please enter mobile no');
        $('#mobile_no').focus();
        return false;
    }
    if (mobile_no.length != 10) {
        $('#signup_error').show();
        $('#signup_error').html('Please enter your mobile no in 10 characters');
        $('#signup_error').addClass('error');
        $('#mobile_no').focus();
        return false;
    }
    $.ajax({
        url: base_url + '/signup',
        type: "POST",
        data: {'firstName': first_name, 'lastName': last_name, 'mailId': email_id, 'password': password, 'confirm_password': confirm_password, 'contactNumber': mobile_no,'country':country},
        success: function (total) {
           
            var callback = $.parseJSON(total);
            if (callback.code == '201') {
                $('#signup_error').hide();
                $('.errormessagesignup').html(callback.message);
                $('#first_name').val('');
                $('#last_name').val('');
                $('#email_id').val('');
                $('#password').val('');
                $('#confirm_password').val('');
                $('#mobile_no').val('');
                $('#first_name').focus();
                return false;
            } else {
                $('#signup_error').hide();
                $('.successmessagesignup').html(callback.message);
                $('#first_name').val('');
                $('#last_name').val('');
                $('#email_id').val('');
                $('#password').val('');
                $('#confirm_password').val('');
                $('#mobile_no').val('');
                return false;
            }
            //alert(callback.message)
        }
    });

})
$("body").on("change", "#vila_country", function () {
     $('#villaState').html('');
     var countryId = $(this).val();
    //alert(countryId);
  $('#loadervilla').removeAttr('style');
    $.ajax({
        url: base_url + '/get_villa_state/' + countryId,
        type: "get",
        success: function (data) {
             //alert(data);
            //hidVillaCountry
            //$('#countryName').val($('#yachtCountry option:selected').text());
            $('#villaCountry').val($('#vila_country option:selected').text());
          $('#loadervilla').attr('style', 'display:none');
            $('#villaState').html('<option value="0">State</option>')
            $.each(JSON.parse(data), function (index, value) {
                $('#villaState').append('<option value="' + value['id'] + '">' + value['stateName'] + '</option>')
                
            });

        }
    });
});
$("body").on("change","#villaState",function(){
     $('#villDestination').html('');
     var stateId = $(this).val();
    //alert(stateId);
    $('#loadervilla').removeAttr('style');
    $.ajax({
        url: base_url + '/get_villa_city/' + stateId,
        type: "get",
        success: function (data) {
            $('#villaStateName').val($('#villaState option:selected').text());
            $('#loadervilla').attr('style', 'display:none');
            $('#villDestination').html('<option value="0">Destination</option>')
            $.each(JSON.parse(data), function (index, value) {
               
                $('#villDestination').append('<option  value="' + value['id'] + '">' + value['name'] + '</option>')
              
              
            });

        }
    });
})

// when change country
$("body").on("change", "#carCountry", function () {
    var countryId = $(this).val();
    $('#loaderCar').removeAttr('style');
    $.ajax({
        url: base_url + '/get_car_state/' + countryId,
        type: "get",
        success: function (data) {
            $('#carCountryName').val($('#carCountry option:selected').text());
            $('#loaderCar').attr('style', 'display:none');
            $('#carState').html('<option value="0">State</option>')
            $.each(JSON.parse(data), function (index, value) {
                $('#carState').append('<option value="' + value['id'] + '">' + value['stateName'] + '</option>')
            });
        }
    });
});
// when select state of car
$("body").on("change", "#carState", function () {
   $('#carStateName').val($('#carState option:selected').text());
});
// when click on next on the single car detail page 
// for submitting the form
$('body').on('click','#nextCarPage',function(e){
    e.preventDefault();
    $('#carNext').submit();
});


/*
 * for the jet 
 */
$("body").on("change", "#jetRoundType", function () {
    var typeRound = $.trim($(this).val());
    if(typeRound == "One Way"){
        $('#divArrvDate').hide();
    }else{
       $('#divArrvDate').show(); 
    }
});

$("body").on("click","#changepassword",function(){
   var oldpassword=$("#oldpass").val();
  var newpassword=$("#newpass").val();
  var cnfpassword=$("#cnfpass").val();
  if(oldpassword=='')
  {
      $('#error_user_oldpassword').show();
      $('#error_user_oldpassword').html('Please enter your oldpassword');
      $('#oldpass').focus();
      return false;
  }
  if(newpassword=='')
  {
      $('#error_user_oldpassword').hide();
   $('#error_user_newpassword').show();
      $('#error_user_newpassword').html('Please enter your newpassword');
      $('#newpass').focus();
      return false;   
  }
 if(cnfpassword=='')
  {
      $('#error_user_newpassword').hide();
   $('#error_user_cnfpassword').show();
      $('#error_user_cnfpassword').html('Please enter your cnfpassword');
      $('#cnfpass').focus();
      return false;   
  }
  if(newpassword!=cnfpassword)
  {
  $('#error_user_cnfpassword').hide();
    $('#error_user_bothpasswordnotmatch').show();
    $('#error_user_bothpasswordnotmatch').html('Bothpassword are not match');
  }
  $.ajax({
     url:base_url +'/change_password',
     type:"POST",
     data:{oldpass:oldpassword,newpassword:newpassword,cnfpassword:cnfpassword},
     success:function(res)
     {
        var callback = $.parseJSON(res);
            if (callback.code == '201') {
                $('#error_user_oldpassword').hide();
                $('#error_user_newpassword').hide();
                 $('#error_user_cnfpassword').hide();
                 $('.successmessagechange').html(callback.message);
 $('#oldpass').val('');
                $('#newpass').val('');
                $('#cnfpass').val('');
               /* $(function() {
    $("button").click(function() {
        $("button").attr("disabled", "disabled");
        setTimeout(function() {
            $("button").removeAttr("disabled");      
        }, 30000);
    });
});*/
                
               return false;
            } else {
                //$('#error_user_emailid').hide();
                //$('#error_user_password').hide();
                 $('#error_user_oldpassword').hide();
                $('#error_user_newpassword').hide();
                 $('#error_user_cnfpassword').hide();
               $('#oldpass').val('');
                $('#newpass').val('');
                $('#cnfpass').val('');
                 $('.successmessagechange').html(callback.message);
                return false;
            }  
     }
  })
 })
$('body').on('click','#editprofile',function(){
  var gender=$(".gender").val();
  var first_name=$("#firstnameedit").val();
  var lastname=$("#lasttnameedit").val();
  var email=$("#emailedit").val();
  //alert(lastname);
  var phonenumber=$("#phonenumber").val();
  var country=$(".country").val();
  $.ajax({
     url:base_url +'/edit_profile',
     type:"POST",
     data:{gender:gender,first_name:first_name,email:email,lastname:lastname,phonenumber:phonenumber,country:country},
     success:function(res)
     {
         //alert(res);
        var callback = $.parseJSON(res);
            if (callback.code == '201') {
                $('.successmessageedit').html(callback.message);
 $('.gender').val('');
                $('#firstnameedit').val('');
                $('#lasttnameedit').val('');
                $('#phonenumber').val('');
                $(".country").val('');
      return false;
            } else {
                 $('.successmessageedit').html(callback.message);
 $('.gender').val('');
                $('#firstnameedit').val('');
                $('#lasttnameedit').val('');
                $('#phonenumber').val('');
                $(".country").val('');
                return false;
            }  
     }
     
  })
 })
$('body').on('click','#user_forget',function(){
     var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; 
    var mailid=$('#user_emailid').val();
      if(mailid =='')
      {
          $('#error_user_emailid').show();
          $('#error_user_emailid').html("Please enter email id");
          $('#user_emailid').focus();
          return false;
      }
       if (reg.test(mailid) == false) {
        $('#error_user_emailid').show();
       // $('#signup_error').addClass('error');
        $('#error_user_emailid').html('Please enter your valid emailid');
        $('#user_emailid').focus();
        return false;

    }
      $.ajax({
          url:base_url +'/forget_password',
          type:"POST",
          data:{mailid:mailid},
          success:function(res)
          {
           var callback = $.parseJSON(res);
            if (callback.code == '201') {
                $('#error_user_emailid').hide();
               var message= $('.successmessageforget').html(callback.message);
                setTimeout(function() {
        message.hide();
    }, 10000);
 $('#user_emailid').val('');
               return false;
            } else {
                $('#error_user_emailid').hide();
                  var message= $('.successmessageforget').html(callback.message);
                setTimeout(function() {
        message.hide();
    }, 10000);
$('#user_emailid').val('');
                return false;
            }     
          }
      })
      
      
  })
  
$("body").on("click","#limousine_villa",function(e){
     e.preventDefault();
    $('#villaNext').submit();

})
  $("body").on("click","#villLimoAfterNext",function(e){
     
      var limodeprt_name=$('#limodeprt_name').val();
         var limodeprt_address=$('#limodeprt_address').val();
         var limodeprt_special_request=$('#limodeprt_special_request').val();
         var limodip_transferhr=$('#limodip_transferhr').val();
         if($('#inlineCheckbox1').is(":checked"))
                                                {
         if(limodeprt_name=='')
         {
           $('#limodeprt_nameerror').show();
         $('#limodeprt_nameerror').html("Pleas enter Limousine Departurename");
         $('#limodeprt_name').focus();
         return false;   
         }
         if(limodeprt_address=='')
         {
           $('#limodeprt_nameerror').hide();
           $('#limodeprt_addresserror').show();
         $('#limodeprt_addresserror').html("Pleas enter Limousine Departureaddress");
         $('#limodeprt_address').focus();
         return false;  
         }
         if(limodeprt_special_request=='')
         {
           $('#limodeprt_addresserror').hide();
           $('#limodeprt_special_requesterror').show();
         $('#limodeprt_special_requesterror').html("Pleas enter Limousine Departurerequest");
         $('#limodeprt_special_request').focus();
         return false;  
         }
         if(limodip_transferhr=='')
         {
             $('#limodeprt_special_requesterror').hide();
           $('#limodip_transferhrerror').show();
         $('#limodip_transferhrerror').html("Pleas select Limousine Departure Transfer Hour");
         $('#limodip_transferhr').focus();
         return false;  
         }
     }
         if($('#inlineCheckbox2').is(":checked"))
         {
            var limoarrivl_name=$('#limoarrivl_name').val(); 
            var limoarrivl_address=$('#limoarrivl_address').val();
            var limoarrivl_special_request=$('#limoarrivl_special_request').val();
            var limoarr_transferhr1=$('#limoarr_transferhr1').val();
            if(limoarrivl_name=='')
            {
                $('#limodip_transferhrerror').hide();
              $('#limoarrivl_nameerror').show();
         $('#limoarrivl_nameerror').html("Pleas enter Limousine Arrivalname ");
         $('#limoarrivl_name').focus();
         return false;   
            }
            if(limoarrivl_address==''){
              $('#limoarrivl_nameerror').hide(); 
              $('#limoarrivl_addresserror').show();
         $('#limoarrivl_addresserror').html("Pleas enter limo Limousine Arrivaladdress");
         $('#limoarrivl_address').focus();
         return false; 
            }
            if(limoarrivl_special_request==''){
              $('#limoarrivl_addresserror').hide(); 
              $('#limoarrivl_special_requesterror').show();
         $('#limoarrivl_special_requesterror').html("Pleas enter Limousine Arrivalrequest");
         $('#limoarrivl_special_request').focus();
         return false; 
            }
            if(limoarr_transferhr1=='')
            {
              $('#limoarrivl_special_requesterror').hide(); 
              $('#limoarr_transferhr1error').show();
         $('#limoarr_transferhr1error').html("Pleas select  Limousine Arrival Transfer Hour");
         $('#limoarr_transferhr1').focus();
         return false;   
            }
         }
         e.preventDefault();
    $('#villLimoNext').submit();
 })
 $("body").on("click","#backVillaFoods",function(e){
    e.preventDefault();
    var villaId = $(this).attr('data-id');
    var villahref = $(this).attr('data-href');
    var backurl = villahref + '/' + villaId;
    if(backurl != ''){
        window.location.replace(backurl);
        return false;
    }
    
 })
 $("body").on("click","#backVillaLimousine",function(e){
    e.preventDefault();
    var villaId = $(this).attr('data-id');
    var villahref = $(this).attr('data-href');
    var backurl = villahref + '/' + villaId;
    if(backurl != ''){
        window.location.replace(backurl);
        return false;
    }
    
 })
 
 $("body").on("change",".select_qty",function(){
     var qty = $(this).val();
     var name = $(this).attr('data-name');
     var price = $(this).attr('data-price');
   
     var id = $.trim($(this).attr('id').replace('select_qty_',""));
     var data_counter = $(this).attr('data-id-counter');
     //alert('amount_span_'+data_counter+"_"+id);
     $('#amount_span_'+data_counter+"_"+id).html(price*qty);
     var fbID = data_counter+"_"+id;
     var varTemplate = "<p id='f_b_"+fbID+"' class='fitem'><span class='iname'>"+name+"</span>"+
             "<span class='iqut'>"+qty+"</span><span class='iprice'>"+price+"</span>"+
             "<span class='idelete'><i class='fa fa-trash-o' aria-hidden='true'></i></span>"+
             "<input type='hidden' name='f_b_name[]' value='"+name+"'/><input type='hidden' name='f_b_qty[]' value='"+qty+"'/>"+
             "<input type='hidden' name='f_b_price[]' value='"+price+"'/>"+
             "<input type='hidden' id='total' name='f_b_total[]' value='"+price*qty+"'/></p>";
            // alert($('#f_b_'+fbID).length);
            
     if($('#f_b_'+fbID).length > 0){
          $('#f_b_'+fbID).remove();
     }
     $('#fooAndBeverage').append(varTemplate);
     
 });
 $('body').on('click','.idelete',function(){
     $(this).parent().remove();
   
});
 $('body').on('change','#villDestination',function(){
     $('#villaDestinationName').val($('#villDestination option:selected').text());
 })
 $('body').on('click','#nextdriverpage',function(){
     var name=$('#driver1Name').val();
     var driver1Dob=$('#driver1Dob').val();
     var driver1LicenceDate=$('#driver1LicenceDate').val();
     
     if(name=='')
     {
       $('#driver_name').show();
         $('#driver_name').html("Pleas enter driver name");
         $('#driver1Name').focus();
         return false;
     }
     if(driver1Dob=='')
     {
         $('#driver_name').hide();
      $('#driver1Doberror').show();
         $('#driver1Doberror').html("Please enter data of birth");
         $('#driver1Dob').focus();
         return false;
     }
     if(driver1LicenceDate=='')
     {
        $('#driver1Doberror').hide();
        $('#driver1LicenceDateerror').show();
         $('#driver1LicenceDateerror').html("Please enter driving license issue date");
         $('#driver1LicenceDate').focus();
         return false;
     }
     if ($('#inlineCheckbox2').is(":checked"))
     {
      var driver2Name=$('#driver2Name').val();
     var driver2Dob=$('#driver2Dob').val();
     var driver2LicenceDate=$('#driver2LicenceDate').val();
     if(driver2Name=='')
     {
         $('#driver1LicenceDateerror').hide();
         $('#driver2Nameerror').show();
         $('#driver2Nameerror').html("Pleas enter second driver name");
         $('#driver2Name').focus();
         return false;
     }
     if(driver2Dob=='')
     {
         $('#driver2Nameerror').hide();
         $('#driver2Doberror').show();
         $('#driver2Doberror').html("Pleas enter second driving license issue date");
         $('#driver2Dob').focus();
         return false;
     }
      if(driver2LicenceDate=='')
     {
         $('#driver2Doberror').hide();
         $('#driver2LicenceDateerror').show();
         $('#driver2LicenceDateerror').html("Pleas enter second driving license issue date");
         $('#driver2LicenceDate').focus();
         return false;
     }
     }
     })
     /*$('body').on('click','#villLimoAfterNext',function(){
        
     })*/

    function ValidationEvent(){
        // alert('hello');
         var yachtarrivl_name=$('#yachtarrivl_name').val();
         var yachtdepAddress=$('#yachtdepAddress').val();
         var yachtdepReq=$('#yachtdepReq').val();
         var yachtdepHour=$('#yachtdepHour').val();
         if($('#inlineCheckbox1').is(":checked"))  {
         if(yachtarrivl_name=='')
         {
           $('#yachtarrivl_nameerror').show();
         $('#yachtarrivl_nameerror').html("Pleas enter limo deprtname");
         $('#yachtarrivl_name').focus();
         return false;   
         }
         if(yachtdepAddress=='')
         {
           $('#yachtarrivl_nameerror').hide();
           $('#yachtdepAddresserror').show();
         $('#yachtdepAddresserror').html("Pleas enter limo deprtaddress");
         $('#yachtdepAddress').focus();
         return false;  
         }
         if(yachtdepReq=='')
         {
           $('#yachtdepAddresserror').hide();
           $('#yachtdepReqerror').show();
         $('#yachtdepReqerror').html("Pleas enter limo deprtrequest");
         $('#yachtdepReq').focus();
         return false;  
         }
         if(yachtdepHour=='')
         {
             $('#yachtdepReqerror').hide();
           $('#yachtdepHourerror').show();
         $('#yachtdepHourerror').html("Pleas select Transfer Hour");
         $('#yachtdepHour').focus();
         return false;  
         }
     }
       if($('#inlineCheckbox2').is(":checked"))
         {
            var yachtarrName=$('#yachtarrName').val(); 
            var yachtarrAddress=$('#yachtarrAddress').val();
            var yachtarrReq=$('#yachtarrReq').val();
            var yachtarrHour=$('#yachtarrHour').val();
            if(yachtarrName=='')
            {
                $('#yachtdepHourerror').hide();
              $('#yachtarrNameerror').show();
         $('#yachtarrNameerror').html("Pleas enter yachtarrNameerror");
         $('#yachtarrName').focus();
         return false;   
            }
            if(yachtarrAddress==''){
              $('#yachtarrNameerror').hide(); 
              $('#yachtarrAddresserror').show();
         $('#yachtarrAddresserror').html("Pleas enter yachtdepHourerror");
         $('#yachtarrAddress').focus();
         return false; 
            }
            if(yachtarrReq==''){
              $('#yachtarrAddresserror').hide(); 
              $('#yachtarrReqerror').show();
         $('#yachtarrReqerror').html("Pleas enter yacht arrivl request");
         $('#yachtarrReq').focus();
         return false; 
            }
            if(yachtarrHour=='')
            {
              $('#yachtarrReqerror').hide(); 
              $('#yachtarrHourerror').show();
         $('#yachtarrHourerror').html("Pleas select yachtarr hour");
         $('#yachtarrHour').focus();
         return false;   
            }
         }
     }
     $('body').on('change','#cartypeselect',function(){
        $('#cartype').val($('#cartypeselect option:selected').text());
         
     })
      $('body').on('change','#yachtType',function(){
        $('#yachtTypename').val($('#yachtType option:selected').text());
         
     })
      $('body').on('change','#routeType',function(){
        $('#routeTypename').val($('#routeType option:selected').text());
         
     })
     function ValidationEventcarsearch(){
        // alert('hello');
         var depTime=$('#depTime').val();
         var arrvTime=$('#arrvTime').val();
         var delAddr=$('#delAddr').val();
         var dropAddr=$('#dropAddr').val();
        
         if(depTime=='')
         {
           $('#depTimeerror').show();
         $('#depTimeerror').html("Pleas Select Departure Time");
         $('#depTime').focus();
         return false;   
         }
         if(arrvTime=='')
         {
           $('#depTimeerror').hide();
           $('#arrvTimeerror').show();
         $('#arrvTimeerror').html("Pleas Select Drop Off Time");
         $('#arrvTime').focus();
         return false;  
         }
         if(delAddr=='')
         {
           $('#depTimeerror').hide();
           $('#delAddrerror').show();
         $('#delAddrerror').html("Pleas Select Delivery Areas");
         $('#delAddr').focus();
         return false;  
         }
         if(dropAddr=='')
         {
             $('#delAddrerror').hide();
           $('#dropAddrerror').show();
         $('#dropAddrerror').html("Pleas Select Drop Off Areas");
         $('#dropAddr').focus();
         return false;  
         }
     }
   
   

 