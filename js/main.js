$('#registro').bootstrapValidator({
	 message: 'Este valor no es valido',
	 feedbackIcons: {
		 valid: 'glyphicon glyphicon-ok',
		 invalid: 'glyphicon glyphicon-remove',
		 validating: 'glyphicon glyphicon-refresh'
	 },
	 fields: {
		 nombre: {
			 validators: {
				 notEmpty: {
					 message: 'El nombre de empresa es requerido'
				 }
			 }
		 },
		 telefono: {
			 validators: {
				 notEmpty: {
					 message: 'El telefono es requerido'
				 }
			 }
		 }
	 }
});