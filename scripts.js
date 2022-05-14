		
		
		$(document).ready(function(){
		
					
		

			//remove produit
			$(".table").on('click', '.btn-success', function() {
				
					
				var currentRow = $(this).closest('tr');
				var	serviceId=currentRow.find("td:eq(5)").text();
				serviceId=parseInt(serviceId);
				serviceId=$.trim(serviceId);
				location.href="Controllers/chargerServiceByServiceIdController.php?serviceID="+serviceId;
				
			});
		});
	