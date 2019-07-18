function message(m){
    alert(m);
}

function showForms(path) {
    $.ajax({
    type: "GET",
    url: path,
    success: function(datos) {
        $("#container").html(datos);
    }
       
})
}
function sendPost(){
    function check(event) {
        document.getElementById('message').innerHTML = "checking";

        const url = "http://localhost/rest/api";
        const data = {
            '1' : '1',
            '1' : '1',
            '1' : '1',
            '1' : '1',
            '1' : '1',
            '1' : '1',
            '1' : '1',
            '1' : '1'};
        const other_params = {
            headers : { "content-type" : "application/json; charset=UTF-8" },
            body : data,
            method : "POST",
            mode : "cors"
        };

        fetch(url, other_params)
            .then(function(response) {
                if (response.ok) {
                    alert(response.json());
                } else {
                    throw new Error("Could not reach the API: " + response.statusText);
                }
            }).then(function(data) {
                document.getElementById("message").innerHTML = data.encoded;
            }).catch(function(error) {
                document.getElementById("message").innerHTML = error.message;
            });
        return false;
    }
}




//function cargarleccion(nombre){
//alert("se ejecuto la funcion");
//$.ajax({
//    type: "GET",
//    url: "contenido/"+nombre+".html", 
//    data: "",
//    datatype: "html",
//    success: function(datahtml){
//    $("#contentlesson").html(datahtml);
//    },
//
//error:  function(){
//    $("#contentlesson").html("<p>error al cargar desde Ajax</p>")
//}
//
//});
//}