<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
$qry = $conn->query("SELECT * FROM persons where id= ".$_GET['id']);
foreach($qry->fetch_array() as $k => $val){
	$$k=$val;
}
}
?>
<div class="container-fluid">
	<form action="" id="manage-person">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id :'' ?>">
		<div class="row form-group">
			<div class="col-md-4">
				<label for="" class="control-label">First Name</label>
				<input type="text" class="form-control" name="firstname"  value="<?php echo isset($firstname) ? $firstname :'' ?>" required>
			</div>
			<div class="col-md-4">
				<label for="" class="control-label">Last Name</label>
				<input type="text" class="form-control" name="lastname"  value="<?php echo isset($lastname) ? $lastname :'' ?>" required>
			</div>
			<div class="col-md-4">
				<label for="" class="control-label">HOD</label>
<select name="hod_name">
  <option value="">Select</option>
  <option value="SUNDAR S">SUNDAR S</option>
  <option value="PREMALATHA K">PREMALATHA K</option>
  <option value="PRIYA L">PRIYA L</option>
  <option value="KARTHIGHA R">KARTHIGHA R</option>
  <?php

if(isset($_POST['formSubmit']) )
{
  $hod_name = $_POST['hod_name'];
  $errorMessage = "";

  // - - - snip - - - 
}

?>

</select>
</p>

				<!-- <input type="text" class="form-control" name="hod_name"  value="<?php echo isset($hod_name) ? $hod_name :'' ?>" required> -->
			</div>
		</div>
		<hr>
			
			<div class="row form-group">
				<div class="col-md-4">
					<label for="" class="control-label">Required Component</label>
					<textarea name="RequiredComponents" id="RequiredComponents" class="form-control" cols="30" rows="2" required=""><?php echo isset($RequiredComponents) ? $RequiredComponents :'' ?></textarea>
				</div>
				<!-- <div class="col-md-4">
					<label for="" class="control-label">Special Lab</label>
					<textarea name="street" id="street" class="form-control" cols="30" rows="2" required="">
						
				</div> -->
				<div class="col-md-4">
					<label for="" class="control-label">Quantities Required</label>
					<textarea name="QuantitiesRequired" id="QuantitiesRequired" class="form-control" cols="30" rows="2" required=""><?php echo isset($QuantitiesRequired) ? $QuantitiesRequired :'' ?></textarea>
				</div>
				
				<div class="col-md-4">
					<label for="" class="control-label">Dept/Special </label>
					<textarea name="Dept" id="Dept" class="form-control" cols="30" rows="2" required=""><?php echo isset($Dept) ? $Dept :'' ?></textarea>
				</div>
			</div>
		<hr>

			<div class="row form-group">
				<div class="col-md-4">
					<label for="" class="control-label">Requested Special Lab</label>
					<textarea name="RequestedSpecialLab" id="RequestedSpecialLab" class="form-control" cols="30" rows="2" required=""><?php echo isset($RequestedSpecialLab) ? $RequestedSpecialLab :'' ?></textarea>
				</div>

				<!-- <form action="file.php" method="post" enctype="multipart/form-data">
</form> -->
			
				<!-- <div class="col-md-4">
					<label for="" class="control-label">Special Lab Code</label>
					<textarea name="zip_code" id="zip_code" class="form-control" cols="30" rows="2" required=""><?php echo isset($zip_code) ? $zip_code :'' ?></textarea>
				</div> -->
			<!-- </div> -->
			<!-- <form action="download.php" method="post" enctype= "multipart/form-data">
        <input type="file" name="myfile"><br><br>
        <input type="submit" name="upload" value="upload file">
    </form>
		</>
	</form> -->

</div>
<p>UPLOAD APEX<p>
<?php
include('upload.php');
?>
<script>
	$('#manage-person').submit(function(e){
		e.preventDefault()
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'ajax.php?action=save_person',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully saved",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				else if(resp==2){
					$('#msg').html("<div class='alert alert-danger'>Name already exist.</div>")
					end_load()

				}
			}
		})
	})
</script>