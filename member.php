<!DOCTYPE html>
<?php 
session_start();
require('checkmember.php');
$id_member=$_SESSION['member_name_login'];

?>
<?php 
$connect=mysqli_connect("localhost","root","","data");
$sql="SELECT*FROM product_phone";
$query=mysqli_query($connect,$sql);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
<style>
    *{
        font-family: sarabun;
        font-weight: bolder;
    }
    .nav-item,.navbar,#type{
        background-color: rgb(158, 6, 6);
    }
    @media screen and (max-width:576px) {
        .navbar-brand{
        color:white;
        font-size:large;
    }
    .navbar-brand:hover{
        color:black;
    }
    .nav-link{
        color:white;
        font-size:small;
    }
    img{
        width: 40px;
        height: 40px;
    }
    .nav-link:hover{
        background-color: aliceblue;
        color:black
    }
    }
    @media screen and (min-width:992px) {
        .navbar-brand{
        color:white;
        font-size: x-large;
    }
    .navbar-brand:hover{
        color:black;
    }
    .nav-link{
        color:white;
        font-size: large;
        
    }
    img{
        width: 100px;
        height: 100px;
    }
    a[href="#"]:hover{
        background-color: aliceblue;
        color:black
    }
    #type:hover{
        color:white;
    }
    }
</style>
</head>
<body>
<?php 
$connect=mysqli_connect("localhost","root","","data");
$pull="SELECT * FROM adcart WHERE id_member='$id_member'";
$qr=mysqli_query($connect,$pull);
$data=mysqli_num_rows($qr);
?>
    <nav class="navbar navbar-expand-sm navbar-dark">
                <a  class="navbar-brand  ">
                    <img src="img/logo01.png" alt="" class="d-inline-block align-text-end ">
         หนองกุงศรี shop
                    </a>
                    <a href="." data-bs-toggle="modal" data-bs-target="#modal"><i data-feather="shopping-bag" class="text-light"></i><span class="badge bg-success"><?php echo $data ?></span></a>
                    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#sidebar" >
                        <span class="navbar-toggler-icon" style="height: 15px;width:15px;"></span>
                    </button>
    </nav>
  <div class="modal" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <i data-feather="shopping-bag" class="text-danger"></i>&nbsp;<span>สินค้าที่อยู่ในตะกร้า</span>
<button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
<table class="table table-responsive">
    <thead>
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>ราคา</th>
            <th>ยกเลิก</th>
        </tr>
    </thead>
    <tbody>
        <?php while($line=mysqli_fetch_array($qr,MYSQLI_BOTH)){?>
        <tr>
            <td><?php echo $line['code']?></td>
            <td><?php echo $line['product_name']?></td>
            <td><?php echo $line['price']?></td>
            <td><a href="delete_pd_incart.php?delete_pd=<?php echo $line['code'] ?>" class="btn btn-secondary"> <i data-feather="trash-2" class="text-light"></i></a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success">สั่งซื้อ</button>
                <button class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
            </div>
        </div>
    </div>
  </div>
        <div class="row ">
            <nav class="col-md-3 col-lg-2 collapse  d-md-block" id="sidebar">
                
                <ul class="nav flex-column">
                  
                <li class="nav-item"><a class="nav-link" id="type">ประเภทสินค้า</a></li>
                    <li class="nav-item"><a href="#" class="nav-link "> <i data-feather="smartphone"></i><span class="ms-3">โทรศัพท์มือถือ</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link "> <i data-feather="gift"></i><span class="ms-3">ผักผลไม้อบกราบ</span></a></li></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> <i data-feather="coffee"></i><span class="ms-3">เครื่องดื่ม</span></a></li></a></li>
                    <li class="nav-item"><a href="#" class="nav-link "> <i data-feather="figma"></i><span class="ms-3">ของตกแต่งบ้าน</span></a></li></a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link "> <i data-feather="log-out"></i><span class="ms-3">ออกจากระบบ</span></a></li>
                    
                </ul>
            </nav>
          <main class="col-md-9 col-lg-10">
                <div class="row my-5 mx-4 flex-wrap " >
                    <?php foreach($query as $row){ ?>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3 mb-3">
                      <form action="adcart.php" method="post">
                      <div class="card ">
                            <h1 class="card-header" align="center"><?php echo $row['pname']?></h1>
               <img src="<?php echo "img/".$row['img'];?>" alt="" class="card-img-top" style="height: 200px;">
                            <div class="card-body">
                                <input type="number" name="amount" id="" class="form-control">
                                <input type="text" name="adcart" id="" value="<?php echo $row['product_code'];?>" class="d-none">
                            <p class="card-title"><?php echo $row['pname'];?></p>
                            <P class="card-text"><?php echo "ราคา &nbsp;". $row['price']."&nbsp;บาท";?></P>
                           </div>
                          <div class="card-footer">
                          <a href="# "  target="" class="btn btn-success text-light" >สั่งซื้อ</a>
<button class="btn btn-danger"><i data-feather="shopping-cart" class="text-light"></i></button>
                          </div>
                        </div>
                      </form>
                        <br>
                    </div>
                    
                    <?php } ?>
                    </div>                    
            </main>
        </div>
        <script>
            feather.replace()
          </script>
</body>
</html>