jQuery(document).ready(function($) {
	$('#infoSistema').fadeOut(0);
	$("#loginForm").validate({
		rules:{
			nick:{
				required:true,
				minlength:2,
				maxlength:10
			},
			clave:{
				required:true,
				minlength:2,
				maxlength:10
			},
		},
		messages:{
			clave:{
				required:function () {
					$('.inputUsuario').addClass("form-group has-error has-feedback");
				},
				maxlength:function () {
					$('.inputUsuario').addClass("form-group has-error has-feedback");
				},
				minlength:function () {
					$('.inputUsuario').addClass("form-group has-error has-feedback");
				}
			},
			nick:{
				required:function () {
					$('.inputUsuario').addClass("form-group has-error has-feedback");
				},
				maxlength:function () {
					$('.inputUsuario').addClass("form-group has-error has-feedback");
				},
				minlength:function () {
					$('.inputUsuario').addClass("form-group has-error has-feedback");
				}
			}
		},
		submitHandler:function () {
			var datos={
				nick:$("#nick").val(),
				clave:$("#clave").val(),
			}
			alert('Paso la validacion');
			//var argument="";
			/*$.ajax({
				url: './php/inicio.php',
				data: datos,
				type:"POST",
				success:function (argument) {
					//alert(argument);
					if(argument){
						$(location).attr("href","./admin/");
					}else{
						$('#infoSistema').fadeIn(0);
					}
				}
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});*/
			
		}
	})
});