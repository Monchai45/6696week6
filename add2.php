<!DOCTYPE html>
<html lang="en">
<?php
    include("conn.php");

?>

<head>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--แทรก font  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

<style>
    body{
        font-family: "Itim", serif;
        font-weight: 400;
        font-style: normal;
        margin-left: 30px
       
        
    }
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <h1>เก็บข้อมูลบุลคล</h1>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อ</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputEmail3"
      name="name">
    </div>

</div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">ประเทศ</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputPassword3"name="country">
    </div>

</div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">อายุ</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputEmail3"
      name="age">
    </div>

</div>

<div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">ศาสนา</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputPassword3"name="religion">
    </div>

</div>
  
  <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button> <br><br>
  <button type="reset" class="btn btn-danger">ยกเลิก</button> <br>

</form>
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST['name'];
    $country=$_POST['country'];
    $age=$_POST['age'];
    $religion=$_POST['religion'];
    

// ทำการเพิ่มขอมูล
try {
    
    $sql = "INSERT INTO person (name, country, age, religion)
    VALUES ('$name', '$country', '$age', '$religion')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<div class='alert alert-success'>
    <strong>Success!</strong> ยินดีด้วยครับ คุณได้บันทึกข้อมูลเข้าไปใหม่ 1 รายการ
    </div>";
  } catch(PDOException $e) {
    echo $sql . " บันทึกข้อมูลผิดพลาด <br>" . $e->getMessage();
  }
  
  $conn = null;





   
}
?>

</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>