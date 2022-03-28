<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <?php include('cdn.php') ?>
</head>
<style>
  .form {
	background: #ffffff;
    padding-top: 5px;
    margin-top: 5px;
  
}
.form .py-3{
	max-width: 567px;
	width: 100%;
	margin: 15px auto 30px;
	border-radius: 5px;
	border: 1px solid #bbc5b129;
}
</style>
<body>
    <?php include('header.php')?>
<form action="">
  <div class="form-inline">
    <label for="">Tên</label>
    <input type="text" class="form-control">
  </div>
  <div class="form-inline">
    <label for="">Số Điện Thoại</label>
    <input type="text" class="form-control">
  </div>
  <div class="form-inline">
    <label for="">Email</label>
    <input type="text" class="form-control">
  </div>
  <div class="form-inline">
    <label for="">Chủ Đề</label>
    <input type="text" class="form-control">
  </div>
  <div class="form-inline">
    <label for="">Câu hỏi của Bạn</label>
    <input type="text" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include('footer.php') ?>
</body>
</html>