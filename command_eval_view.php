<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-secondary">
		<div class="card-header">
				<p>Junior Enlisted</p>
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
					if($_SESSION['login_type'] == 2)
					$qry = $conn->query("SELECT r.*,concat(e.lastname,', ',e.firstname,' ',e.middlename) as name,t.task,concat(ev.lastname,', ',ev.firstname,' ',ev.middlename) as ename,((((r.primary_duty + r.lead + r.follow + r.growth)/4))) as pa FROM ratings r inner join employee_list e on e.id = r.employee_id inner join task_list t on t.id = r.task_id inner join evaluator_list ev on ev.id = r.evaluator_id WHERE e.designation_id = 1 order by concat(e.lastname,', ',e.firstname,' ',e.middlename) asc");
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
		                      View
		                    </button>
		                    <div class="dropdown-menu" style="">
		                      <a class="dropdown-item view_evaluation" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">View</a>
		                      <div class="dropdown-divider"></div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>

		</div>
	</div>
</div>
<div class="col-lg-12">
	<div class="card card-outline card-secondary">
		<div class="card-header">
            <p>Senior Enlisted</p>
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
					if($_SESSION['login_type'] == 2)
					$qry = $conn->query("SELECT r.*,concat(e.lastname,', ',e.firstname,' ',e.middlename) as name,t.task,concat(ev.lastname,', ',ev.firstname,' ',ev.middlename) as ename,((((r.primary_duty + r.lead + r.follow + r.growth)/4))) as pa FROM ratings r inner join employee_list e on e.id = r.employee_id inner join task_list t on t.id = r.task_id inner join evaluator_list ev on ev.id = r.evaluator_id WHERE e.designation_id = 2 order by concat(e.lastname,', ',e.firstname,' ',e.middlename) asc");
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
		                      View
		                    </button>
		                    <div class="dropdown-menu" style="">
		                      <a class="dropdown-item view_evaluation" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">View</a>
		                      <div class="dropdown-divider"></div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>

		</div>
	</div>
</div>
<div class="col-lg-12">
	<div class="card card-outline card-secondary">
		<div class="card-header">
            <p>Junior Officer</p>
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
					if($_SESSION['login_type'] == 2)
					$qry = $conn->query("SELECT r.*,concat(e.lastname,', ',e.firstname,' ',e.middlename) as name,t.task,concat(ev.lastname,', ',ev.firstname,' ',ev.middlename) as ename,((((r.primary_duty + r.lead + r.follow + r.growth)/4))) as pa FROM ratings r inner join employee_list e on e.id = r.employee_id inner join task_list t on t.id = r.task_id inner join evaluator_list ev on ev.id = r.evaluator_id WHERE e.designation_id = 3 order by concat(e.lastname,', ',e.firstname,' ',e.middlename) asc");
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
		                      View
		                    </button>
		                    <div class="dropdown-menu" style="">
		                      <a class="dropdown-item view_evaluation" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">View</a>
		                      <div class="dropdown-divider"></div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>

		</div>
	</div>
</div>
<div class="col-lg-12">
	<div class="card card-outline card-secondary">
		<div class="card-header">
            <p>Senior Officer</p>
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
					if($_SESSION['login_type'] == 2)
					$qry = $conn->query("SELECT r.*,concat(e.lastname,', ',e.firstname,' ',e.middlename) as name,t.task,concat(ev.lastname,', ',ev.firstname,' ',ev.middlename) as ename,((((r.primary_duty + r.lead + r.follow + r.growth)/4))) as pa FROM ratings r inner join employee_list e on e.id = r.employee_id inner join task_list t on t.id = r.task_id inner join evaluator_list ev on ev.id = r.evaluator_id WHERE e.designation_id = 4 order by concat(e.lastname,', ',e.firstname,' ',e.middlename) asc");
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
		                      View
		                    </button>
		                    <div class="dropdown-menu" style="">
		                      <a class="dropdown-item view_evaluation" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">View</a>
		                      <div class="dropdown-divider"></div>
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
	})
</script>