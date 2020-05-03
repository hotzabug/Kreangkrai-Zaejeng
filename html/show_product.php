<?php 


$query_product = "SELECT * FROM tbl_product as p
inner join tbl_type as t
on p.type_id = t.type_id
ORDER BY p_id ASC";
$result_pro =mysqli_query($con, $query_product) or die ("Error in query: $query_product " . mysqli_error($con));
  //echo($query_product);
  //exit()

?>
<div class="container">
<div class="row">
  <?php foreach ($result_pro as $row_pro){?>

<div class="card" style="width: 17.33rem; margin-top: 10px ">
<img class="card-img-top" src="backend/p_img/<?php echo $row_pro["p_img"]; ?>" 
alt="Card image cap">
<div class="card-body">
  <h5 class="card-title"><?php echo $row_pro["p_name"]; ?></h5>
  <p class="card-text"> 
    สายพันธุ์: <?php echo $row_pro['type_name']; ?>
  </p>
  <p class="card-text"> 
    รายละเอียดสุนัข: <?php echo $row_pro['p_detail']; ?>
  </p>
  
</div>
</div>
  <?php } ?>
  
</div>
</div>