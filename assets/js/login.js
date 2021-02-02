$("input").prop('required',true);
$("input").prop('autocomplete','off');
$('form').submit(function (evt) {
    evt.preventDefault();
    // window.history.back();
    var formdata = $('form').serialize();
    $.ajax({
        type: 'post',
        url: location.origin+'/loginaction',
        data: $('form').serialize(),
        success: function (data) {
            if(data){
                window.location = '/dashboard'; 
            }
          console.log(data);
        }
      });
});