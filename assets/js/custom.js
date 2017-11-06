//var base_url = 'http://localhost/immidia.ae/';
var base_url = 'http://localhost/immidia_new/trunk';


 var base_url = 'http://localhost/immidia_new/';
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






function getYachtState(countryId) {
    $('#loader').removeAttr('style');
    $.ajax({
        url: base_url + '/get_yacht_state/' + countryId,
        type: "get",
        success: function (data) {

            $('#countryName').val($('#yachtCountry option:selected').text());
            $('#yachtState').html('');
            $('#loader').attr('style', 'display:none');
            $('#yachtState').html('<option value="0">State</option>')
            $.each(JSON.parse(data), function (index, value) {

                $('#yachtState').append('<option value="' + value['stateId'] + '">' + value['stateName'] + '</option>')
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

function uniques(arr) {
    var a = [];
    for (var i=0, l=arr.length; i<l; i++){
       
            if ($.inArray(arr[i].id, a) === -1 && arr[i] !== ''){
                 console.log(a);
                a.push(arr[i]);
            }
        }
        return a;
    }

 var  yachtFoodHTML = '';
function addToCart(id,itemName,amount,qty,price,itemsId){

    var total = 0;
    yachtAddToCart.push({"id":id, "itemName":itemName,"amount":amount,'qty':qty});
    var yachtUniqueFoodItem = uniques(yachtAddToCart);

    yachtFoodHTML += '<p class="fitem">'+
            '<span class="iname">'+itemName+'</span>'+
            '<span class="iqut">'+qty+'</span>'+
            '<span class="iprice">€ '+amount+'</span>'+
            '<span class="idelete"><i class="fa fa-trash-o" aria-hidden="true"></i></span>'+
        '</p>';



             $('#'+itemsId).append(yachtFoodHTML);


            $.each(yachtUniqueFoodItem, function (index, value) {
                total += value.qty * value.amount;

            });
            

             setTimeout(function(){
                $('#yachtSubTotal').text(parseInt(total)+parseInt(price));
                $('#yachtFoodPrice').val(total);
                $('#yachtFoodPriceWithPrice').val(parseInt(total)+parseInt(price));

               // if(window.localStorage.getItem('yachtFood') != null){
                    window.localStorage.setItem("yachtFood",JSON.stringify(yachtUniqueFoodItem));
                //}


             },100);           


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
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var email_id = $('#email_id').val();
    var password = $('#password').val();
    var confirm_password = $('#confirm_password').val();
    var mobile_no = $('#mobile_no').val();

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
        $('#password').focus();
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
        type: "post",
        data: {'firstName': first_name, 'lastName': last_name, 'mailId': email_id, 'password': password, 'confirm_password': confirm_password, 'contactNumber': mobile_no},
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
    var countryId = $(this).val();
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
                $('#villaState').append('<option value="' + value['stateId'] + '">' + value['stateName'] + '</option>')
            });

        }
    });
});
$("body").on("change","#villaState",function(){
     $('#villaStateName').val($('#villaState option:selected').text());
//    var stateId = $(this).val();
//    //alert(stateId);exit;
//    $('#loadervilla').removeAttr('style');
//    $.ajax({
//        url: base_url + '/get_villa_city/' + stateId,
//        type: "get",
//        success: function (data) {
//            $('#loadervilla').attr('style', 'display:none');
//            $.each(JSON.parse(data), function (index, value) {
//                $('#villaState').append('<option value="' + value['stateId'] + '">' + value['stateName'] + '</option>')
//            });
//
//        }
//    });
})

// when change country
$("body").on("change", "#carCountry", function () {
    var countryId = $(this).val();
    $('#loaderCar').removeAttr('style');
    $.ajax({
        url: base_url + '/get_yacht_state/' + countryId,
        type: "get",
        success: function (data) {
            $('#carCountryName').val($('#carCountry option:selected').text());
            $('#loaderCar').attr('style', 'display:none');
            $('#carState').html('<option value="0">State</option>')
            $.each(JSON.parse(data), function (index, value) {
                $('#carState').append('<option value="' + value['stateId'] + '">' + value['stateName'] + '</option>')
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


$("body").on("click",".limousine_villa",function(){
    var checkinData = '';
    var checkoutData = '';
    var villaId = $(this).attr('data-href');
    var checkIn = $('#dparrivalv').val();
    //alert(checkIn);
    var checkOut = $('#dpdv').val();
    if(checkIn == ''){
        checkinData = $(this).attr('data-checkin');
    }else{
       checkinData = checkIn;
    }
    if(checkOut == ''){
        checkoutData = $(this).attr('data-checkout');
    }else{
        checkoutData = checkOut;
    }
    var url = villaId +'/'+ checkinData + '/'+checkoutData;
    if(url !=''){
        window.location.replace(url);
    }
})
