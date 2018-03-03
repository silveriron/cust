$(document).ready(function(){
	console.log('functions.js');
	var hash = $(location).attr('hash');

	if (hash == "#success") {
		$( "#saveInfo" ).fadeOut(7500);
		
	} else if (hash == "#failed") {
		$( "#saveError" ).fadeOut(7500);
	}
	
	$( ".showcomment" ).click(function() {
		var id = $(this).attr("id");
		$("#editcom_" + id).css("display", "block");
	});
	
	$( ".closecomment" ).click(function() {
		var id = $(this).attr("id");
		$("#editcom_" + id).css("display", "none");
	});
	
	$( "#mark_logs_with_cc" ).click(function() {
		if ($(".check_cc" ).is( ":checked" )) {
			$(".check_cc").each(function() { this.checked = false; }) 
		} else {
			$(".check_cc").each(function() { this.checked = true; })
		}
	});
	
	$( "#mark_logs_with_elv" ).click(function() {
		if ($(".check_elv" ).is( ":checked" )) {
			$(".check_elv").each(function() { this.checked = false; }) 
		} else {
			$(".check_elv").each(function() { this.checked = true; })
		}
	});
	
	$( "#mark_logs_with_fullinfo" ).click(function() {
		if ($(".check_fullinfo" ).is( ":checked" )) {
			$(".check_fullinfo").each(function() { this.checked = false; }) 
		} else {
			$(".check_fullinfo").each(function() { this.checked = true; })
		}
	});
	
	$( "#mark_logs_with_mp" ).click(function() {
		if ($(".check_mp" ).is( ":checked" )) {
			$(".check_mp").each(function() { this.checked = false; }) 
		} else {
			$(".check_mp").each(function() { this.checked = true; })
		}
	});
	
	$( ".showInfo" ).click(function() {
		var show_id = $(this).attr("id");
		window.open("showLog.php?log_id=" + show_id, "", "width=550,height=450")
	});
	
	$( "#generateDomain" ).click(function() {
		var domain = $("#tb_p_domain").val();
		var spamlinks = $("#tb_spamlinks").val().split('\n');
		var d_link = "";
		
		for(var i = 0; i < spamlinks.length; i++) {
			d_link += domain + "/" + spamlinks[i] + "\n";
		}
		
		$('#tb_spamlinks').val(d_link);
	});

	$("#logoutLink").click(function() {
		$("#frmLogout").submit();
	});
});