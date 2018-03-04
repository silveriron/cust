$(document).ready(function(){
	var hash = $(location).attr('hash');

	if (hash == "#success") {
		$( "#saveInfo" ).fadeOut(7500);
		
	} else if (hash == "#failed") {
		$( "#saveError" ).fadeOut(7500);
	}
	
	$( ".showcomment" ).click(function() {
		var id = $(this).data("id");
		$("#editcom_" + id).css("display", "block");
	});
	
	$( ".closecomment" ).click(function() {
		var id = $(this).data("id");
		$("#editcom_" + id).css("display", "none");
	});
	
	$( "#mark_logs_with_cc" ).click(function() {
		if ($(".check_cc" ).is( ":checked" )) {
			$(".check_cc").each(function() { setChecked(this, false) }) 
		} else {
			$(".check_cc").each(function() { setChecked(this, true) })
		}
	});
	
	$( "#mark_logs_with_elv" ).click(function() {
		if ($(".check_elv" ).is( ":checked" )) {
			$(".check_elv").each(function() { setChecked(this, false) }) 
		} else {
			$(".check_elv").each(function() { setChecked(this, true) })
		}
	});
	
	$( "#mark_logs_with_fullinfo" ).click(function() {
		if ($(".check_fullinfo" ).is( ":checked" )) {
			$(".check_fullinfo").each(function() { setChecked(this, false) }) 
		} else {
			$(".check_fullinfo").each(function() { setChecked(this, true) })
		}
	});
	
	$( "#mark_logs_with_mp" ).click(function() {
		if ($(".check_mp" ).is( ":checked" )) {
			$(".check_mp").each(function() { setChecked(this, false) }) 
		} else {
			$(".check_mp").each(function() { setChecked(this, true) })
		}
	});
	
	$( ".showInfo" ).click(function() {
		var show_id = $(this).data("id");
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

    $('.data-table').DataTable({
		"paging": true,
		"lengthChange": true,
		"searching": true,
		"ordering": false,
		"info": true,
		"autoWidth": true,
		"lengthMenu": [5, 10, 25, 100],
		"pageLength": parseInt($("#tb_log_count").val()),
		"drawCallback": function() {
		    $('input[type="checkbox"].minimal').iCheck({
				checkboxClass: 'icheckbox_minimal-blue'
		    });		    
		}
    });	

    $("#s_collapse1").addClass("in");

    /* when click menu in mobile, it should hide navbar menus automatically */
    $(".navbar-collapse.pull-left a").click(function() {
    	if(!$(".navbar-toggle").hasClass("collapsed")) {
    		$(".navbar-toggle").trigger('click');
    	}
    })
});

function setChecked(obj, flag) {
	obj.checked = flag; 
	if(flag) {
		$(obj).parent().addClass("checked");
	}else {
		$(obj).parent().removeClass("checked");	
	}
}