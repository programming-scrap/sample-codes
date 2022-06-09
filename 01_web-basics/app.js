setInterval(function(){
	var d = new Date();
	document.querySelector('#now').innerText = d.getHours() + '時' + d.getMinutes() + '分' + d.getSeconds() + '秒です';
}, 1000)