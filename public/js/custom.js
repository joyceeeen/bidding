$(document).ready(function() {

  $(".mdb-select").formSelect();


  Dropzone.options.myAwesomeDropzone = {
    paramName: "file", // The name that will be used to transfer the file
    acceptedFiles: ['image/*']
  };

});
