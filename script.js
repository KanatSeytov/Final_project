
function request() {
	// body...
	var url = 'index.php';


	var card;

	fetch(url,
	{
	    headers: {

	      'Accept': 'application/json',
	      'Content-Type': 'application/json'
	    },
	    method: "POST",
	    body: JSON.stringify({"action":"select","name": "Bread", "price":4000, "img":"images/bread.jpg"})
	})
	.then(function(response) {
            if (response.status >= 200 && response.status < 300) {
                console.log(response.text())
            }
            throw new Error(response.statusText)
        })
        .then(function(response) {
            console.log(response);
        })
}


