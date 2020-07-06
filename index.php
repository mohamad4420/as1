<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/main.css">
<title>Row Incription</title>

</head>
<body>
    <?php if(isset($_SESSION["done"])=='1'): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>تنويه!</strong> لقد تمت العمليه بنجاح وتم انشاء ملفين بملف  تكست يوجد به الملفات بعد التشفير
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif;
unset($_SESSION['done']);
?>
<h1 id="i1">مرحبا بك في صفحه التشفير </h1>

<form action="./php/process.php" method="POST">

  <label id="lapel">لتشفره key الرجاء ادخال ال</label>
  <br>
  <input id="inp" type="number" name="key" required><br><br>
  <button id="ptnn" type="submit" class="btn btn-success">اضغط للتشفير</button>
</form>
<?php  if( isset($_SESSION['time'])):?>
<div style="color: green;font-size:30px; position:relative; left:60%;top:400px;" >    <strong style="color: red;"><?php echo $_SESSION['time']; ?> s</strong>
   =  الوقت المستغرق للتنفيد </div>
<?php endif;
unset($_SESSION['time']);
?>



</body>
</html>