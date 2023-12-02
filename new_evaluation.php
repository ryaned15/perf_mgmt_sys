<?php
?>
<div class="col-sm-12">
	<div class="card">
		<div class="card-body">
			<div class="col-sm-3 float-right border-bottom">
				<div id="post-field">
				<div><center><i>Select Task First</i></center></div>
				</div>
			</div>
			<form action="" id="manage_evaluation">
				<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
					<div class="col-sm-9 border-right">
						<div class="form-group">
							<label for="" class="control-label">Employee</label>
							<select name="employee_id" id="employee_id" class="form-control form-control-sm select2">
								<option value=""></option>
								<?php 
								$employees = $conn->query("SELECT *,concat(lastname,', ',firstname,' ',middlename) as name FROM employee_list where evaluator_id = {$_SESSION['login_id']} order by concat(lastname,', ',firstname,' ',middlename) asc");
								while($row=$employees->fetch_assoc()):
								?>
								<option value="<?php echo $row['id'] ?>" <?php echo isset($employee_id) && $employee_id == $row['id'] ? 'selected' : '' ?>><?php echo $row['name'] ?></option>
								<?php endwhile; ?>
							</select>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Task</label>
								<select name="task_id" id="task_id" class="form-control form-control-sm" required>
								<option value="" disabled="" selected="">Please Select Employee First.</option>
							</select>
						</div>
						<div class="row " id="ratings-field" style="display: none">
							<label for="" class="control-label">Ratings</label>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Performance in Primary Duties</label>
							<select name="primary_duty" id="primary_duty" class="form-control form-control-sm" required>
								<?php 
								for($i = 5; $i >= 0;$i--):
								?>
								<option <?php echo isset($primary_duty) && $primary_duty == $i ? "selected" : '' ?>><?php echo $i ?></option>
								<?php endfor; ?>
								</select>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Remarks - Performance in Primary Duties</label>
							<textarea name="remarks_pd" id="remarks_pd" cols="30" rows="3" class="form-control"><?php echo isset($remarks_pd) ? $remarks_pd : '' ?></textarea>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Leadership</label>
								<select name="lead" id="lead" class="form-control form-control-sm" required>
									<?php 
									for($i = 5; $i >= 0;$i--):
									?>
									<option <?php echo isset($lead) && $lead == $i ? "selected" : '' ?>><?php echo $i ?></option>
									<?php endfor; ?>
								</select>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Remarks - Leadership</label>
								<textarea name="remarks_lead" id="remarks_lead" cols="30" rows="3" class="form-control"><?php echo isset($remarks_lead) ? $remarks_lead : '' ?></textarea>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Followership</label>
								<select name="follow" id="follow" class="form-control form-control-sm" required>
									<?php 
									for($i = 5; $i >= 0;$i--):
									?>
									<option <?php echo isset($follow) && $follow == $i ? "selected" : '' ?>><?php echo $i ?></option>
									<?php endfor; ?>
								</select>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Remarks - Followership</label>
								<textarea name="remarks_follow" id="remarks_follow" cols="30" rows="3" class="form-control"><?php echo isset($remarks_follow) ? $remarks_follow : '' ?></textarea>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Personal Growth</label>
								<select name="growth" id="growth" class="form-control form-control-sm" required>
									<?php 
									for($i = 5; $i >= 0;$i--):
									?>
									<option <?php echo isset($growth) && $growth == $i ? "selected" : '' ?>><?php echo $i ?></option>
									<?php endfor; ?>
								</select>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Remarks - Personal Growth</label>
								<textarea name="remarks_growth" id="remarks_growth" cols="30" rows="3" class="form-control"><?php echo isset($remarks_growth) ? $remarks_growth : '' ?></textarea>
						</div>
					</div>
				<div class="col-md-9 text-right justify-content-center d-flex">
					<button class="btn btn-secondary mr-2">Save</button>
					<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=pending_evaluations'">Cancel</button>
				</div>
			</form>
        </div>
	</div>
</div>
<div id="clone_progress" class="d-none">
	<div class="post">
            <div class="user-block">
                <img class="img-circle img-bordered-sm avatar" src="" alt="user image">
                <span class="username">
                  <a href="#" class="nf"></a>
                </span>
                <span class="description">
                	<span class="fa fa-calendar-day"></span>
                	<span><b class="date"></b></span>
            	</span>
            </div>
            <div class="pdesc">
            </div>
            <p><b>Once an employee has been selected, please hit save or cancel at the bottom of the screen<b>
            </p>
    </div>
</div>
<style>
	img#cimg{
		height: 15vh;
		width: 15vh;
		object-fit: cover;
		border-radius: 100% 100%;
	}
	#post-field{
		max-height: 70vh;
		overflow: auto;
	}
</style>
<style>
	img#cimg{
		height: 15vh;
		width: 15vh;
		object-fit: cover;
		border-radius: 100% 100%;
	}
	#post-field{
		max-height: 70vh;
		overflow: auto;
	}
</style>
<script>
	$(document).ready(function(){
		if('<?php echo isset($id) ?>' == 1){
			update_emp()
		}
	})
	
	$('[name="password"],[name="cpass"]').keyup(function(){
		var pass = $('[name="password"]').val()
		var cpass = $('[name="cpass"]').val()
		if(cpass == '' ||pass == ''){
			$('#pass_match').attr('data-status','')
		}else{
			if(cpass == pass){
				$('#pass_match').attr('data-status','1').html('<i class="text-success">Password Matched.</i>')
			}else{
				$('#pass_match').attr('data-status','2').html('<i class="text-danger">Password does not match.</i>')
			}
		}
	})
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$('#employee_id').change(function(){
		update_emp()
	})
	function update_emp(){
		start_load();
 		$('#task_id').html('')
		$.ajax({
			url:'ajax.php?action=get_emp_tasks',
			method:'POST',
			data:{employee_id:$('#employee_id').val(),task_id:'<?php echo isset($task_id) ? $task_id : ''; ?>'},
			error:(err)=>{
				alert_toast("An error occured",'error')
				console.log(err)
				end_load()
			},
			success:function(resp){
				if(resp && typeof JSON.parse(resp) === 'object'){
					resp = JSON.parse(resp)
					 var opt = $('<option value=""></option>')
					 if(Object.keys(resp).length > 0){
					 		var oc = opt.clone()
					 		$('#task_id').append(oc)
					 	Object.keys(resp).map(k=>{
					 		var oc = opt.clone()
					 		oc.text(resp[k].task)
					 		oc.attr('value',resp[k].id)
							var task_id ='<?php echo isset($task_id) ? $task_id : ''; ?>' ;
							if(task_id == resp[k].id)
								oc.attr('selected',true)
					 		$('#task_id').append(oc)
					 	})
					 }else{
					 		$('#task_id').html('')
					 	var oc = opt.clone()
					 		oc.text("Employee is not assign to any task yet.")
					 		oc.attr({'disabled':'disabled','selected':'selected'})
					 		$('#task_id').append(oc)
					 }
				}
			},
			complete:function(){
				$('#task_id').select2({
					placeholder:'Please select task here',
					width:'100%'
				})
				task_update()
				end_load();
				if('<?php echo isset($id) ?>' == 1)
					$('#task_id').trigger('change')
			}
		})
	}
	function task_update(){
		$('#task_id').change(function(){
			start_load()
			$.ajax({
			url:'ajax.php?action=get_progress',
			method:'POST',
			data:{task_id:$(this).val(),id:'<?php echo isset($id) ? $id : ''; ?>'},
			error:(err)=>{
				alert_toast("An error occured",'error')
				console.log(err)
				end_load()
			},
			success:function(resp){
				if(resp && typeof JSON.parse(resp) === 'object'){
					resp = JSON.parse(resp)
					if(Object.keys(resp).length > 0){
						$('#post-field').html('')
						var id ='<?php echo isset($id) ? $id : ''; ?>' ;
						Object.keys(resp).map(k=>{
							var _progress = $('#clone_progress .post').clone()
							_progress.find('.pdesc').append(resp[k].progress)
							_progress.find('.avatar').attr('src','assets/uploads/'+resp[k].avatar)
							_progress.find('.nf').text(resp[k].uname)
							_progress.find('.date').text(resp[k].date_created)
							if(id == resp[k].id)
								_progress.attr('selected','selected')
							$('#post-field').append(_progress)
						})
					 	$('#ratings-field').show()
					}else{
					 	$('#ratings-field').hide()
					}
				}
			},
			complete:function(){
				end_load();
			}
		})
		})
	}
	$('#manage_evaluation').submit(function(e){
		e.preventDefault()
		$('input').removeClass("border-danger")
		start_load()
		$.ajax({
			url:'ajax.php?action=save_evaluation',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved.',"success");
					setTimeout(function(){
						location.replace('index.php?page=evaluation')
					},750)
				}
			}
		})
	})
</script>