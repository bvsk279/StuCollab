$(document).ready(function() {

	$("#v-pills-myprojects-tab").hide();
	$("#v-pills-otherprojects-tab").hide();

    $('#v-pills-projects-tab').click(function(){
    	$("#v-pills-myprojects-tab").toggle();
    	$("#v-pills-otherprojects-tab").toggle();
    	$('#v-pills-projects-tab').toggleClass("nav-bg");
    })
});


