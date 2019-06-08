$(document).ready(function() {




  Dropzone.options.myAwesomeDropzone = {
    paramName: "file", // The name that will be used to transfer the file
    acceptedFiles: ['image/*']
  };





  $.fn.options = function( options ) {
    // return this.each(function(t, r) {
    // Default options
    var settings = $.extend({
      url: '/province',
      condition: null

    }, options );

    var select = this;

    if(settings.condition){
      $.getJSON(settings.url, function (data) {
        var key = $(settings.condition).find(":selected").data('key');
        $.each(data, function (key, entry) {
          if(key === entry.province){
                select.append($('<option></option>').attr('value', entry.name).data('key',entry.key).text(entry.name));
          }
        })
      });
    }else{
      $.getJSON(settings.url, function (data) {
        $.each(data, function (key, entry) {

          select.append($('<option></option>').attr({'value': entry.name, 'data-key':entry.key}).text(entry.name));
        })
      });
    }



    // Apply options
    return this;
    // }
  };


  $("#province").options();
    $("#category").options({url:"/seller/category/create"});
  // $("#province").on('change',function(){
  //   $("#city").options({url:'/city', condition: '#province'});
  // });

  window.setTimeout(function(){
    $(".mdb-select").formSelect();
  }, 3000);

  //  ('#province').select2();
});
