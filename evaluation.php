<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-secondary">
		<div class="card-header">
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Type</th>
						<th>Name</th>
						<?php if($_SESSION['login_type'] != 1): ?>
						<th>Evaluator</th>
						<?php endif; ?>
						<th width="15%">Performance Aggregate</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$where = "";
					if($_SESSION['login_type'] == 1)
						$where = " where r.evaluator_id = {$_SESSION['login_id']} ";
					$qry = $conn->query("SELECT r.*,concat(e.lastname,', ',e.firstname,' ',e.middlename) as name,t.task,concat(ev.lastname,', ',ev.firstname,' ',ev.middlename) as ename,((((r.primary_duty + r.lead + r.follow + r.growth)/4))) as pa FROM ratings r inner join employee_list e on e.id = r.employee_id inner join task_list t on t.id = r.task_id inner join evaluator_list ev on ev.id = r.evaluator_id $where order by concat(e.lastname,', ',e.firstname,' ',e.middlename) asc");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo ($row['task']) ?></b></td>
						<td><b><?php echo ucwords($row['name']) ?></b></td>
						<?php if($_SESSION['login_type'] != 1): ?>
						<td><b><?php echo ucwords($row['ename']) ?></b></td>
						<?php endif; ?>
						<td><b><?php echo number_format($row['pa'],1) ?></b></td>
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu" style="">
		                      	<a class="dropdown-item view_evaluation" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">View</a>
							<?php if($_SESSION['login_type'] == 1): ?>
							<div class="dropdown-divider"></div>
		                      	<a class="dropdown-item" href="./index.php?page=edit_evaluation&id=<?php echo $row['id'] ?>">Edit</a><?php endif; ?>
		                    <div class="dropdown-divider"></div>
		                      	<a class="dropdown-item delete_evaluation" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Delete</a>
		                    </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
	$('.view_evaluation').click(function(){
		uni_modal("Evaluation Details","view_evaluation.php?id="+$(this).attr('data-id'),'mid-large')
	})
	$('.delete_evaluation').click(function(){
	_conf("Are you sure to delete this evaluation?","delete_evaluation",[$(this).attr('data-id')])
	})
	})
	function delete_evaluation($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_evaluation',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>