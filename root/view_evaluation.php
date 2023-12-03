<?php 
include 'db_connect.php';
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT r.*,concat(e.lastname,', ',e.firstname,' ',e.middlename) as name,t.task,concat(ev.lastname,', ',ev.firstname,' ',ev.middlename) as ename,((((r.primary_duty + r.lead + r.follow + r.growth)/4))) as pa FROM ratings r inner join employee_list e on e.id = r.employee_id inner join task_list t on t.id = r.task_id inner join evaluator_list ev on ev.id = r.evaluator_id  where r.id = ".$_GET['id'])->fetch_array();
	foreach($qry as $k => $v){
		$$k = $v;
	}
}
?>
<div class="container-fluid">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-sm-3">
				<dl>
					<dt><b class="border-bottom border-secondary">Task</b></dt>
					<dd><?php echo ucwords($task) ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-secondary">Ratee</b></dt>
					<dd><?php echo ucwords($name) ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-secondary">Rater</b></dt>
					<dd><?php echo ucwords($ename) ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-secondary">Date Evaluated</b></dt>
					<dd><?php echo date("m d,Y",strtotime($date_created)) ?></dd>
				</dl>
			</div>
			<div class="col-md-9">
				<b>Ratings:</b>
				<dl>
					<dt><b class="border-bottom border-secondary">Performance in Primary Duties</b></dt>
					<dd><?php echo $primary_duty ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-secondary">Performance in Primary Duties - Remarks</b></dt>
					<dd><?php echo $remarks_pd ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-secondary">Leadership Assessment</b></dt>
					<dd><?php echo $lead ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-secondary">Leadership Assessment - Remarks</b></dt>
					<dd><?php echo $remarks_lead ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-secondary">Followership Assessment</b></dt>
					<dd><?php echo $follow ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-secondary">Followership Assessment - Remarks</b></dt>
					<dd><?php echo $remarks_follow ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-secondary">Personal Growth</b></dt>
					<dd><?php echo $growth ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-secondary">Personal Growth - Remarks</b></dt>
					<dd><?php echo $remarks_growth ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-secondary">Performance Aggregate</b></dt>
					<dd><?php echo number_format($pa,1) ?></dd>
				</dl>
			</div>
		</div>
	</div>
</div>
<style>
	#uni_modal .modal-footer{
		display: none
	}
	#uni_modal .modal-footer.display{
		display: flex
	}
	#post-field{
		max-height: 70vh;
		overflow: auto;
	}
</style>
<div class="modal-footer display p-0 m-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>