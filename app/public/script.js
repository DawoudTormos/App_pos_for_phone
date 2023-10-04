$('#submit').on('click', function(e) {


    e.preventDefault();
   // alert("js is working");
    get_product($('#bar').val() )

  });




  function get_product(bar ) {
    $.ajax({
        url: "./ajax_product.php",
        type: "get",
        data: {bar : bar},
        success: function(response) {
            // The request was successful
            //alert(response);

            if(response ==""){
                alert("not found!");
                return 0 ;
            }
            const arr = JSON.parse(response);

            let text = "<tr>";
            arr.forEach(element => {
           
               text+= "<td>";
               text+= element;
            });
            
            $("#table").append(text);
            $('#bar').val("")
        },
        error: function(jqXHR, textStatus, errorThrown) {
            // Handle errors
            alert("Request failed with status: " + textStatus);
        }
    });
}



