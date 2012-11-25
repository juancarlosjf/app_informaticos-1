
$(function(){


    //Datatable
	$('.bootstrap-datatable').dataTable( {
		"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
		"sPaginationType": "full_numbers",
		"bJQueryUI": true,
		"oLanguage": {
			"sLengthMenu": "Mostrar _MENU_ Registros",
			"sInfo": "Mostrando _START_ de _END_ de _TOTAL_ registros",
			"oPaginate": {
					"sFirst":    "«",
					"sPrevious": "?",
					"sNext":     "?",
					"sLast":     "»"
				}
		}
	} );
	




});
