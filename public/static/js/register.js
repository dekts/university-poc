
function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
}

function scrollAndShow(){
  $("#next-btn").hide();
  $("#shipping-info").show();
  $('html, body').animate({
    scrollTop: $("#shipping-info").offset().top - 100
  }, 'slow');
}

function validateFirstForm(){
  var isValid = true;
  $('.errors').remove();
  $('.first-group').each(function(){
    if( ($(this).find("input").val()==='' && $(this).find("input").attr("id")!="comments") || ($(this).find(".radio-input").length > 0 && $(this).find(".radio-input").is(':checked') == false)){
      if($(this).is("span")==true && $(this).next().hasClass("errors")==false){
        $('<p class="font-light errors radio-error">Please select one.</p>').insertAfter(this);
      } else if ($(this).next().hasClass("errors")==false){
        $('<p class="font-light errors">This field is required.</p>').insertAfter(this);
      }
      isValid = false;
    }
  });
  if($('#pubkey').val().length < 25 || $('#pubkey').val().length > 35 || $('#pubkey').val()[0] != '1' || $('#pubkey').val().includes('0') || $('#pubkey').val().includes('O') || $('#pubkey').val().includes('I')|| $('#pubkey').val().includes('l')){
    $('<p class="font-light errors">This not a valid Bitcoin address.</p>').insertAfter($('#pubkey'));
    isValid = false;
  }
  return isValid;
}

function validateSecondForm(){
  var isValid = true;
  $('.errors').remove();
  $('#shipping-info input').each(function(){
    if($(this).val()===''){
      if ($(this).next().hasClass("errors")==false){
        $('<p class="font-light errors">This field is required.</p>').insertAfter(this);
      }
      isValid = false;
    }
  });
  return isValid;
}

$(document).ready(function() {
  var flag = false;

  var pubkey = getUrlParameter('address');
  if(pubkey){
    $("#pubkey").attr('value', pubkey);
  }

  if($(".errors").length > 0){
    $("#shipping-info").show();
    $("#next-btn").hide();
    flag=true;
  }

  if(flag == false){
    var identity = getUrlParameter('identity');
    if(identity == "true"){
      $("#bitcoin-form").hide();
      $("#reg-info").show();
      $("#next-btn-1").hide();
      $("#identity").attr('checked', 'checked');
    }
    $("#next-btn-1").click(function(){
      identity = $("#identity:radio:checked").val();

      if( identity == "yes" ){
        $("#bitcoin-form").hide();
        $("#generate-keys-btn").show();
        $("#reg-info").show();
        $('html, body').animate({
            scrollTop: $("#reg-info").offset().top - 50
          }, 'slow');
        $("#next-btn-1").hide();
      }
      else{
        $("#bitcoin-form").hide('slow', function(){});
        $("#generate-keys-btn").show();
        $("#reg-info").show();
        $("#next-btn-1").hide();
      }
    })

    $("#next-btn").click(function(){
      if(validateFirstForm() == true){
        scrollAndShow();
        flag = true;
      }
    })
    
    $("#reg-form").submit(function( event ) {
      if(validateSecondForm() == true){
        flag = true;
        return;
      }
      event.preventDefault();
    });
    
    
  }

});