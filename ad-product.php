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
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap" rel="stylesheet">
    <title>Document</title>
    <style> 
    *{
        font-family: sarabun;
    }
    .nav-item,.navbar,label[for=""],label[for="pic"]{
        background-color: rgb(158, 6, 6);
    }
    label[for=""],label[for="pic"]{
        color:white;
        font-size: medium;
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
<nav class="navbar navbar-expand-sm navbar-dark">
                <a  class="navbar-brand  ">
                    <img src="img/logo01.png" alt="" class="d-inline-block align-text-end ">
         หนองกุงศรี(admin)
                    </a>
                    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#sidebar" >
                        <span class="navbar-toggler-icon" style="height: 15px;width:15px;"></span>
                    </button>
    </nav>
   <div class="d-flex justify-content-center mt-5 ">
   <form action="#"  style="width:fit-content" >
        <div class="input-group mb-3">
            <label for="" class="input-group-text">ชื่อสินค้า</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="input-group mb-3">
            <label for="pic" class="input-group-text">รูปสินค้า</label>
            <input type="file" name="" id="pic">
        </div>
        <div class="input-group mb-3">
            <label for="" class="input-group-text">ราคาสินค้า</label>
            <input type="text" name="" id="" class="form-control">
            <label for="" class="input-group-text">บาท</label>
        </div>
        <div class="input-group mb-3">
            <label for="" class="input-group-text">คำอธิบาย</label>
            <input type="textarea" class="form-control">
        
        </div>
    </form>
   </div>
</body>
</html>

