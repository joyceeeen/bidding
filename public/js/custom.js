Dropzone.options.myDropzone = {
    init: function() {
        this.on("success", function(file, responseText) {
          $("#uploadImageButton").removeAttr("disabled");

      });
    }
};

$(document).ready(function() {

  $.fn.options = function( options ) {
    // return this.each(function(t, r) {
    // Default options
    var settings = $.extend({
      url: '/province',
      condition: null,
      value: null

    }, options );

    var select = this;

    if(settings.condition){
      $.getJSON(settings.url, function (data) {

        var key = $(settings.condition).find(":selected").data('key');
        $.each(data, function (key, entry) {
          if(key === entry.province){
            var value = settings.value == null ? entry.name : entry.key;
            select.append($('<option></option>').attr('value', value).data('key',entry.key).text(entry.name));
          }
        })
      });
    }else{
      $.getJSON(settings.url, function (data) {

        $.each(data, function (key, entry) {
          var value = settings.value == null ? entry.name : entry.key;
          select.append($('<option></option>').attr({'value': value, 'data-key':entry.key}).text(entry.name));
        })
      });
    }

    // Apply options
    return this;
    // }
  };

  if($('#province').length){
    $("#province").options();
  }
  if($("#category").length){

    $("#category").options({url:"/shop/category/create",value: 'key'});
  }
  // $("#province").on('change',function(){
  //   $("#city").options({url:'/city', condition: '#province'});
  // });

  window.setTimeout(function(){
    $(".mdb-select").formSelect();
  }, 3000);

  //  ('#province').select2();
  $('#imageModal').modal();


  $('.idModal').on('click',function(){
    $('.imagepreview').attr('src', $(this).data('path'));
    $('#imageModal').modal('open');
  });

  $('#canReview').modal();

  $('.can-review').on('click',function(){
    $('#canReview').modal('open');
  });


  if($('.predictedPrice')){
    var locations = ['Batangas City Public Market Batangas','Carbon Public Market Cebu City','Commonwealth Market Quezon City','Mandaluyong Public Market','Mega Q-Mart EDSA Cubao Quezon City','Munoz Public Market','Muntinlupa Market Muntinlupa City','Pasay Market Pasay City MM','Pasig City Mega Market' ,'Pasil Public Market Pasil Cebu City','Tandang Sora Public Market','Viajero Market   Pasig City MM','Zamboanga City Public Market Zambo Sur','New Dagonoy Public Market','Marikina Market Zone MM','Kalibo Public Market Aklan','Lucena City Public Market Quezon','San Jose Trade Town Antique','Sariaya Public Market Quezon','Siniloan Public Market Laguna','Baler Public Market Aurora'];
    var randomMarket = Math.floor(Math.random()*locations.length);

    $.ajax({
      type:'post',
      url:'/prediction',
      data: { market:randomMarket},
      headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      },
      success:function(response){
        var price = Number(response.class).toFixed(2);         // 1.00
        $('.predictedPrice').html(" &#8369;"+ price + " ("+locations[randomMarket]+")");
      },
    });
  }

  $("#predictBtn").on('click',function(){

    var month = $(".month-predict").val();
    var market = $(".province-predict").val();
    var result = $(".result-predict");
    $.ajax({
      type:'post',
      url:'/prediction',
      data: { market: market, month: month },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      },
      success:function(response){
        var price = Number(response.class).toFixed(2);         // 1.00
        result.html(" &#8369;"+ price);
      },
    });

  });



  $("#peakBtn").on('click',function(){

    var month = $(".month-select").val();
    var item = $(".item-select").val();
    var result = $(".peak-result");
    $.ajax({
      type:'get',
      url:'/prediction-peak',
      data: { item: item, month: month },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      },
      success:function(response){
        var is_peak = response.is_peak_season;        // 1.00
        result.html(is_peak);
      },
    });

  });

  $("#searchSubmit").on("submit", function(event){
    event.stopPropagation();
    event.preventDefault(); //prevent submission
    let formData = $(this).serialize(); //outputs firstname=blah&lastname=moreblah
    //
    let fullUrl = $(location).attr("href");
    let queryPart = fullUrl.split("?")[1]; //here you have country=usa&state=ny
    //
    var finalForm = null;
    if(queryPart){
      finalForm = fullUrl + "&"+ formData;
    }else{
      finalForm = fullUrl + "?"+ formData;
    }
    window.location.href = finalForm;

    // submit here using 'finalForm' after your request endpoint
  });

  if($('#notifications').length){

    $.ajax({
      type:'get',
      url:'/notifications',
      success:function(data){

        if(data.unread > 0){
          $("#badge-notification").show();
        }

        $("#badge-notification").html(data.unread);

        $.each(data[0], function( index, value ) {
          if(value.read_at){
            var item ='<a class=" waves-effect waves-light notification-link" target="_blank" data-id="'+value.id+'" href="'+value.data.action+'"><li class="icon"><span class="icon"><i class="fa fa-user"></i>'+value.data.greeting+'</span><p class="text" style="font-size:smaller">'+value.data.body+'</p></li></a>'
          }else{
            var item ='<a class=" waves-effect waves-light notification-link" style="background:#388e3c91" target="_blank" data-id="'+value.id+'" href="'+value.data.action+'"><li class="icon"><span class="icon"><i class="fa fa-user"></i>'+value.data.greeting+'</span><p class="text" style="font-size:smaller">'+value.data.body+'</p></li></a>'
          }
          $("#notifications").append(item);
        });
      },
      error: function(data){
      }
    });
  }
  $("#upload-avatar").on('change',function(event){
    $("#uploadForm").submit();

  });

  $("#uploadForm").on("submit",function(event){
    event.preventDefault();
    event.stopPropagation();
    var form = new FormData(this);
    $.ajax({
      url:'/avatar',
      type:'post',
      data: form,
      cache: false,
      contentType: false,
      processData:false,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      },
      success: function(data){
        location.reload();
      }
    });
  });
  $(document).on('click','.notification-link',function(event){

    var id = $(this).data('id');

    $.ajax({
      type:'get',
      url:'/notification-read/'+id,
      success:function(data){

      },
      error:function(data){

      }
    })
  });
});
