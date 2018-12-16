

var btn_generate = document.querySelectorAll(".btn-generate")[0];
var generate = document.querySelectorAll(".generate")[0];
// var submit = document.getElementById('submit');
// var password = document.getElementById('password');

btn_generate.addEventListener("click", function() {
	generate.innerHTML = generatePassword();
});

function generatePassword() {
    var length = 8,
        charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
        retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    return retVal;
}



/*submit.addEventListener("click", function(e) {

	e.preventDefault();

	function HttpRequest(file) {

	    var request = new XMLHttpRequest();
	    // переопределяем MIME тип
	    request.overrideMimeType("application/json");
	    // get запрос к файлу
	    request.open("POST", file, true);
	    request.onreadystatechange = function() {
	        // Если код ответа сервера  200 и запрос завершен 4 то выполняется ответ сервера
	        if (request.readyState === 4 && request.status == "200") {
	            console.log(request.responseText);
	        }
	    }
	    // отсылаем запрос
	    request.send();
	}	

	HttpRequest("link.php");
})
*/
