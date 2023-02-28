<?php 
include 'db_connect.php';
session_start();
$userid = $_SESSION['login_id'];
// echo $userid;

$types = $conn->query("SELECT type from users where id=$userid");
$rowType=$types->fetch_assoc();

?>

<style>
	.collapse a{
		text-indent:10px;
	}
</style>
<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">
		
		

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>

				<!-- <a href="index.php?page=records" class="nav-item nav-records"><span class='icon-field'><i class="fa fa-th-list"></i></span> Records</a> -->
		
				
				<?php  if(  $_SESSION['login_type'] == 2|| $_SESSION['login_type'] == 4 ){?>
				<a href="index.php?page=requirement" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span>Requirements</a>
				<?php } ?>

				<?php  if( $_SESSION['login_type'] == 3 || $_SESSION['login_type'] == 4){?>
				<a href="index.php?page=persons" class="nav-item nav-persons"><span class='icon-field'><i class="fa fa-user-friends"></i></span>IQAC</a>
				<?php }?>
				<?php  if($_SESSION['login_type'] == 4){?>
				<a href="index.php?page=m_team" class="nav-item nav-persons"><span class='icon-field'><i class="fa fa-user-friends"></i></span> M Team</a>
				<?php }?>
				<?php  if($_SESSION['login_type'] == 1){?>
				<a href="index.php?page=approve_iqac" class="nav-item nav-persons"><span class='icon-field'><i class="fa fa-user-friends"></i></span>IQAC</a>
				<?php }?>
				<!-- <?php  if($_SESSION['login_type'] == 1 || $_SESSION['login_type'] == 4){?>
				<a href="index.php?page=approval" class="nav-item nav-persons"><span class='icon-field'><i class="fa fa-user-friends"></i></span> M Team</a>
				 <?php }?> -->
				



				<?php  if($_SESSION['login_type'] == 1 || $_SESSION['login_type'] == 2 || $_SESSION['login_type'] == 4){?>
				<a href="index.php?page=bill" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span>Documentation</a>
				<?php } ?>
				<?php  if($_SESSION['login_type'] == 1 || $_SESSION['login_type'] == 5|| $_SESSION['login_type'] == 4){?>

                <a href="index.php?page=comment" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span>Technician</a>
                 <?php }?>
				
               
				<?php  if($_SESSION['login_type'] == 1|| $_SESSION['login_type'] == 4){?>
				<a href="index.php?page=establishment" class="nav-item nav-establishment"><span class='icon-field'><i class="fa fa-building"></i></span>Add Staff/Users</a>
				<?php }?>
				<?php  if($_SESSION['login_type'] == 1|| $_SESSION['login_type'] == 4){?>
               <a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
                <?php }?>
		</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
