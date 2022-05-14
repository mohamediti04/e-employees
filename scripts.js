		
		
		$(document).ready(function(){
			$("#btnClick").click(function () {
				var employeesIds = new Array();
				$("#color input[type=checkbox]:checked").each(function () {
					employeesIds.push(this.value);
				});
				 if (employeesIds.length > 0) {
							employeesIds.join(",");
					location.href="Controllers/chargerEmployeesByIdController.php?employeesIds="+employeesIds;

				}
			});
					
		

		
			$(".table").on('click', '.btn-success', function() {
				
					
				var currentRow = $(this).closest('tr');
				var	serviceId=currentRow.find("td:eq(5)").text();
				serviceId=parseInt(serviceId);
				serviceId=$.trim(serviceId);
				location.href="Controllers/chargerServiceByServiceIdController.php?serviceID="+serviceId;
				
			});
			
		});
	