<?php
include "inc/header.php";
$pageid = mysqli_real_escape_string($db->link,$_GET['pageid']);
if(!isset($pageid) || $pageid == NULL){
	echo "<script>window.location = '404.php';</script>";
}else{
	$id = $pageid;
}
?>
<?php
$pagequery = "select * from tbl_pages where id = '$id'";
$pagedetails = $db->select($pagequery);
if($pagedetails){
	while($result = $pagedetails->fetch_assoc()){
		?>

		<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2> <?php echo $result['name'];?></h2>
							<p><?php echo $result['body'];?></p>
							<p><?php echo $result['body'];?></p>
							<p><?php echo $result['body'];?></p>
	</div>
		</div>
		<?php
	} }else{header("Location:404.php");}
?>
	<?php
include "inc/sidebar.php";
include "inc/footer.php";
?>