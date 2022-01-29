var result = document.getElementById("date");
var today = new Date();
var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
result.innerHTML = "(" + date + ")";