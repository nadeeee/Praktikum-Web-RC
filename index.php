<html>  
    <head>  
        <title>PHP Ajax Crud</title>  
		<link rel="stylesheet" href="/style/simple.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js" integrity="sha256-xH4q8N0pEzrZMaRmd7gQVcTZiFei+HfRTBPJ1OGXC0k=" crossorigin="anonymous"></script>
		<script src="jquery.min.js"></script>  
		<script src="jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
			<br />
			
			<h3 align="center">Daftar Mahasiswa</a></h3><br />
			<br />
			<div align="right" style="margin-bottom:5px;">
			<button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
			</div>
			<div class="table-responsive" id="user_data">
				
			</div>
			<br />
		</div>
		
		<div id="user_dialog" title="Add Data" class="add_data">
			<form method="post" id="user_form">
				<div class="form-group">
					<label>NIM:</label>
					<input type="text" name="nim" id="nim" class="form-control" />
					<span id="error_nim" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>name:</label>
					<input type="text" name="name" id="name" class="form-control" />
					<span id="error_name" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Prodi:</label>
					<input type="text" name="prodi" id="prodi" class="form-control" />
					<span id="error_prodi" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Angkatan:</label>
					<input type="text" name="angkatan" id="angkatan" class="form-control" />
					<span id="error_angkatan" class="text-danger"></span>
				</div>
				<div class="form-group">
					<input type="hidden" name="action" id="action" value="insert" />
					<input type="hidden" name="hidden_id" id="hidden_id" />
					<input type="submit" name="form_action" id="form_action" class="btn btn-info" value="Insert" />
				</div>
			</form>
		</div>
		
		<div id="action_alert" title="Action">
			
		</div>
		
		<div id="delete_confirmation" title="Confirmation">
		<p>Are you sure you want to Delete this data?</p>
		</div>
		
    </body>  
</html>  




<script>  
$(document).ready(function(){  

	load_data();
    
	function load_data()
	{
		$.ajax({
			url:"fetch.php",
			method:"POST",
			success:function(data)
			{
				$('#user_data').html(data);
			}
		});
	}
	
	$("#user_dialog").dialog({
		autoOpen:false,
		width:400
	});
	
	$('#add').click(function(){
		$('#user_dialog').attr('title', 'Add Data');
		$('#action').val('insert');
		$('#form_action').val('Insert');
		$('#user_form')[0].reset();
		$('#form_action').attr('disabled', false);
		$("#user_dialog").dialog('open');
	});
	
	$('#user_form').on('submit', function(event){
		event.preventDefault();
		var error_nim = '';
		var error_name = '';
		var error_prodi = '';
		var error_angkatan ='';

		if($('#nim').val() == '')
		{
			error_nim = 'NIM is required';
			$('#error_nim').text(error_nim);
			$('#nim').css('border-color', '#cc0000');
		}
		else
		{
			error_nim = '';
			$('#error_nim').text(error_nim);
			$('#nim').css('border-color', '');
		}
		if($('#name').val() == '')
		{
			error_name = 'Name is required';
			$('#error_name').text(error_name);
			$('#name').css('border-color', '#cc0000');
		}
		else
		{
			error_name = '';
			$('#error_name').text(error_name);
			$('#name').css('border-color', '');
		}
		if($('#prodi').val() == '')
		{
			error_prodi = 'Prodi is required';
			$('#error_prodi').text(error_prodi);
			$('#prodi').css('border-color', '#cc0000');
		}
		else
		{
			error_prodi = '';
			$('#error_prodi').text(error_prodi);
			$('#prodi').css('border-color', '');
		}
		if($('#angkatan').val() == '')
		{
			error_angkatan = 'Angkatan is required';
			$('#error_angkatan').text(error_angkatan);
			$('#angkatan').css('border-color', '#cc0000');
		}
		else
		{
			error_angkatan = '';
			$('#error_angkatan').text(error_angkatan);
			$('#angkatan').css('border-color', '');
		}
		
		if(error_nim != '' || error_name != '' || error_prodi != '' || error_angkatan != '')
		{
			return false;
		}
		else
		{
			$('#form_action').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"action.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					$('#user_dialog').dialog('close');
					$('#action_alert').html(data);
					$('#action_alert').dialog('open');
					load_data();
					$('#form_action').attr('disabled', false);
				}
			});
		}
		
	});
	
	$('#action_alert').dialog({
		autoOpen:false
	});
	
	$(document).on('click', '.edit', function(){
		var id = $(this).attr('id');
		var action = 'fetch_single';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{id:id, action:action},
			dataType:"json",
			success:function(data)
			{
				$('#nim').val(data.nim);
				$('#name').val(data.name);
				$('#prodi').val(data.prodi);
				$('#angkatan').val(data.angkatan);

				$('#user_dialog').attr('title', 'Edit Data');
				$('#action').val('update');
				$('#hidden_id').val(id);
				$('#form_action').val('Update');
				$('#user_dialog').dialog('open');
			}
		});
	});
	
	$('#delete_confirmation').dialog({
		autoOpen:false,
		modal: true,
		buttons:{
			Ok : function(){
				var id = $(this).data('id');
				var action = 'delete';
				$.ajax({
					url:"action.php",
					method:"POST",
					data:{id:id, action:action},
					success:function(data)
					{
						$('#delete_confirmation').dialog('close');
						$('#action_alert').html(data);
						$('#action_alert').dialog('open');
						load_data();
					}
				});
			},
			Cancel : function(){
				$(this).dialog('close');
			}
		}	
	});
	
	$(document).on('click', '.delete', function(){
		var id = $(this).attr("id");
		$('#delete_confirmation').data('id', id).dialog('open');
	});
	
});  
</script>