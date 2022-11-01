<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        *{
            box-sizing: border-box;
            font-family: sarabun;
        }
        body,.modal{
            background-color:rgb(158, 6, 6) ;
        }
        @media screen and (max-width:576px) {
            img{
        height: 60px;
        width: 60px;
       }
       label[for=""]{
        font-weight: bolder;
        color:black;
        font-size: 15px;
       }
       p,i{
        font-size: 20px;
        color:white;
       }
       input{
        font-weight: bolder;
       }
       a{
        color:white;
       }
    }
    @media screen and (min-width:992px) {
       img{
        height: 200px;
        width: 200px;
       }
       label[for=""]{
        font-weight: bolder;
        color:black;
       }
       p,i{
        color:white;
        font-size: 40px;
       }
       input{
        font-weight: bolder;
       }
       a{
        color:white;
       }
    }
    </style>
    <title>Document</title>
</head>
<body>
<div align="center" class="mt-5">
    <div align="center">
        <img src="img/logo01.png" alt="">
    </div>
    <div align="center">
        <p>
        <i data-feather="shopping-bag"></i>&nbsp;<span>ลงชื่อเข้าใช้งาน หนองกุงศรีshop </span>
    </p>
</div>
<form action="checklogin.php"  style="width:fit-content" method="POST" >
        <div class="input-group mb-3">
            <label for="" class="input-group-text">ชื่อผู้ใช้งาน</label>
            <input type="text" name="user" id="" class="form-control">
        </div>
        <div class="input-group mb-3">
            <label for="" class="input-group-text">รหัสผ่าน</label>
            <input type="password" name="passwords" id="password" class="form-control">
        </div>  
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" name="" id="">
        </div>
        <span class="text-light">ซ่อนหรือแสดงรหัสผ่าน</span>
    </div>
        <input type="submit" value="บันทึกข้อมูล" class=" btn btn-success" name="login">
    </form>
   <div class="mt-3">
   <a href="registmember.php"><i data-feather="log-in"></i>&nbsp;<span>สมัครสมาชิก </span></a>


        </div>
    </div>
   </div>
   </div>
</div>
<script>
            feather.replace()
          </script>
</body>
</html>