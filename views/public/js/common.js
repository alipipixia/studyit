/*

	NProgress.start();

	NProgress.done();

	$('.navs ul').prev('a').on('click', function () {
		$(this).next().slideToggle();
	});*/


//验证是否有登录(有登录的话服务器会返回一个secctionId到浏览器的),没有登录的话(并且不是login页面的话)跳转到登录页面
	if(!$.cookie('PHPSECCID')&&location.pathname.indexOf('/login')==-1){
		window.location.href = '/login';
	}