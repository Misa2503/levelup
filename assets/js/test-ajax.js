
var button = document.querySelector('.submit-btn')
button.addEventListener('click', function() {
    var inputfieldValue = document.querySelector('.input').value

    console.log(ajax.url)

    jQuery.ajax({
        url: ajax.url,
        method: 'post',
        data: {
        action: "receive_ajax_values",
        inputValue: inputfieldValue,
    },
    success: function(response) {
        document.querySelector('.ajax_result').innerHTML = response;
    },
    error: function(response) {
        console.log(response);
    }
       

    })
})
   
