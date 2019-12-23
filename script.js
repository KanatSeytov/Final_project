var url = 'index.php';

fetch(url,{
	method: 'post',
	body: {"name": "Cookies", "price":10000, "img":"images/cookie.jpg"}
})
.then(function (response) {
  return response.text();
})
.then(function (body) {
  console.log(body);
});
