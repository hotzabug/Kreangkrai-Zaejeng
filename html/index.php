              
<html>

<?php session_start();?>
<?php include('h.php');?>

<?php

$name = "ยินดีต้อนรับสู่ร้านค้าสุนัขสุดเท่";
class  MyPets {
    
 
    function HasLegs($AmountOfLegs) {       
        echo  "My Pet is {$this->name} , has {$AmountOfLegs} legs";
        echo $this->HasTail();
    }   
    protected function MakeSound($voice) {
        echo  ", makes sound {$voice}.";
    }
 
    private  function HasTail() {
        echo ', has a tail';
    }   
}
 
class MyDog extends MyPets {   
   
    public function CanRun($Contxt){ // สร้างชื่อฟังก์ชั่น SendFunction()
      
        echo $Contxt."<br>\n";
    }
    

    }
    function ShowMyPet() {
        echo $this->HasLegs('4');
        echo $this->MakeSound('box box');
        echo $this->CanRun();
    }
    
    echo "<script>";
    
    echo "alert(\"$name\");"; 
    
echo "</script>";
?>
<?php

                    ?>   
<body>
        
  <div class="container">
  <?php include('navber2.php');?>
    <img src="banner2.jpg" class="img-fluid" alt="Responsive image">
  
     <?php include('navbar.php') ?>
    <div class="row">
      
    
    <div class="col-md-12"><?php include('show_product.php');?>

  </div>  
  </div>
  </div>
       
  
</body>
</html>
