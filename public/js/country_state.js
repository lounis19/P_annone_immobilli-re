$(document).ready(function () {
    $('#country').on('change', function () {
        var idCountry = this.value;
        $("#state").html('');
        $.ajax({
            url: "{{url('getState')}}",
            type: "Get",
            data: {
                country_id: idCountry,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function (result) {
            
             $("#state").html(result);
               
            }
        });
    });
   
});
