$(document).ready(function() {
	$(".categoria").click(function(){
		showModal();
	});

	
});

function showModal() {
	$("#openModal").fadeIn(500);
}



function CloseModal() {
	document.getElementById('openModal').style.display = 'none';
}
