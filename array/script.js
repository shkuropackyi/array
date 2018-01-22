$(document).ready(function(){

    $('#load-array').click(function(event){
        $.ajax({
            method: 'GET',
            url: '/get_array.php',
            success: function(data) {
                $('#json-container').html(data);
            },
            error: function() {
                alert('Шось не Зрослось(((')
            },

        });
        event.preventDefault(); // return false;
    });

});
    function valid (form) {

    }
    function buttonClick (button) {
        alert ("Вы нажали на кнопку");
    }
   //var arr = new Array();
        //for (var i = 0; i < 10; i++) {
            //arr[i] = Math.floor(Math.random() * 10);
            //document.write(arr[i] + "<br />");
        //}