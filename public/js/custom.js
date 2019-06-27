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
});
