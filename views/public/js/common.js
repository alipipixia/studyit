/*

	NProgress.start();

	NProgress.done();

	$('.navs ul').prev('a').on('click', function () {
		$(this).next().slideToggle();
	});*/


//��֤�Ƿ��е�¼(�е�¼�Ļ��������᷵��һ��secctionId���������),û�е�¼�Ļ�(���Ҳ���loginҳ��Ļ�)��ת����¼ҳ��
	if(!$.cookie('PHPSECCID')&&location.pathname.indexOf('/login')==-1){
		window.location.href = '/login';
	}