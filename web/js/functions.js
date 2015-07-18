function abrirfancy(nombre, carpeta){
	var ref = '../web/'+carpeta+'/demo/iframe.php?id=' + nombre;
	//alert(ref);
	$.fancybox.open({
		href : ref,
		type : 'iframe',
		padding : 5
	});
}