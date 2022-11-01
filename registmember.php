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
        body{
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
       
    }
    </style>
    <title>Document</title>
</head>
<body>
  <div class="container">
  <div class="d-flex justify-content-end mt-3">
  <a href="index.php" align="end" class="btn-close bg-light"></a>
  </div>
<div align="center" class="mt-1">
    <div align="center">
        <img src="img/logo01.png" alt="">
    </div>
    <div align="center">
        <p>
        <i data-feather="shopping-bag"></i>&nbsp;<span>สมัครสมาชิก หนองกุงศรีshop </span>
    </p>
</div>
<form action="admember_db.php"  style="width:fit-content" method="POST" >
        <div class="input-group mb-3">
            <label for="" class="input-group-text">ชื่อผู้ใช้งาน</label>
            <input type="text" name="a" id="" class="form-control">
        </div>
        <div class="input-group mb-3">
            <label for="" class="input-group-text">รหัสผ่าน</label>
            <input type="password" name="b" id="password" class="form-control">
        </div>  
        <div class="input-group mb-3">
    <div class="input-group-text">
    <input type="checkbox" name="" id="" onclick=" check()" class="input-group-text">
    </div>
    <label for="" class="input-group-text">ซ่อนหรือแสดง</label>
</div>
<script>
function check(){
    var p = document.getElementById('password');
                                   if(p.type=='password'){
                                    p.type ='text';
                                   }else if(p.type=='text'){
                                    p.type ='password';
                                   }

}
</script>
        <div class="input-group mb-3">
            <label for="" class="input-group-text">ชื่อ-นามสกุล</label>
            <input type="tel" name="c" id="" class="form-control">
        </div>
        <div class="input-group mb-3">
            <label for="" class="input-group-text">เบอร์โทรศัพท์</label>
            <input type="text" name="d" id="password" class="form-control">
        </div> 
        <input type="submit" value="บันทึกข้อมูล" class=" btn btn-success ">
    </form>
</div>
  </div>

<script>
            feather.replace()
          </script>
</body>
</html>