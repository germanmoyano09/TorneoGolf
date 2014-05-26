var TablaTorneo = function () {

    return {

        //main function to initiate the module
        init: function () {
            
            if (!jQuery().dataTable) {
                return;
            }

            // begin first table
            var oTable = $('#tabla_torneo').dataTable({
				//Que columnas son ordenables
                "aoColumns": [
                  null,
                  { "bSortable": false },
                  { "bSortable": false }
                ],
                "aLengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "Todos"] // change per page values here
                ],
                // set the initial value
                "iDisplayLength": 20,
				"sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ lugares por página",
                    "oPaginate": {
                        "sPrevious": "Anterior",
                        "sNext": "Siguiente"
                    }
                },
            });

            jQuery('#tabla_torneo .group-checkable').change(function () {
                var set = jQuery(this).attr("data-set");
                var checked = jQuery(this).is(":checked");
                jQuery(set).each(function () {
                    if (checked) {
                        $(this).attr("checked", true);
                    } else {
                        $(this).attr("checked", false);
                    }
                    $(this).parents('tr').toggleClass("active");
                });
                jQuery.uniform.update(set);

            });
			
			$('#borrartorneo').live('click', function (e) {
				e.preventDefault();

				if (confirm("Seguro que desea eliminar el Torneo y todos sus datos?") == false) {
					return;
				}
				
				var idtorneo = $(this).attr("torneo-id");
				$.ajax({
					type:"POST",
					url: "borrartorneo.php",
					data:{id:idtorneo}
				}).done(function(msg){
					if (msg == 0){
						//alert("Lugar borrado.");
					}else{
						alert(msg);
						location.reload();
					}
				});
				
				var nRow = $(this).parents('tr')[0];
				oTable.fnDeleteRow(nRow);
				
				
			});

            jQuery('#tabla_torneo tbody tr .checkboxes').change(function(){
                 $(this).parents('tr').toggleClass("active");
            });

            jQuery('#tabla_torneo_wrapper .dataTables_filter input').addClass("form-control input-medium"); // modify table search input
            jQuery('#tabla_torneo_wrapper .dataTables_length select').addClass("form-control input-small"); // modify table per page dropdown
            //jQuery('#tabla_albums_wrapper .dataTables_length select').select2(); // initialize select2 dropdown
            
        }

    };

}();