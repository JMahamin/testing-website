<?php include '../database/db.php'; 
if(isset($_POST['sub'])){
    $title=$_POST['title'];
    $caption=$_POST['editor1'];
    $writer=$_POST['writer'];
    $image=$_POST['img'];
    $insert=$conn->prepare("INSERT INTO blogs SET title=? , caption=? , writer=? , image=?");
    $insert->bindValue(1,$title);
    $insert->bindValue(2,$caption);
    $insert->bindValue(3,$writer);
    $insert->bindValue(4,$image);
    $insert->execute();
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel | Make Blog</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        input{
            margin: 10px 0px;
        }
    </style>
</head>

<body dir="rtl">
    <?php include 'header.php' ?>
    <div class="container">
        <h3 style="text-align: center;margin-top: 30px;">پنل افزودن مقاله</h3>


    <form method="POST">
        <input name="title" type="text" placeholder="تایتل مقاله" class="form-control">
        <select name="writer" class="form-control">
            <option value="1">محمدجواد مهامین</option>
        </select>
        <input name="img" type="text" placeholder="لینک تصویر" class="form-control">
        <script src="//cdn.ckeditor.com/4.17.2/full/ckeditor.js"></script>
        <textarea name="editor1" id="editor1"></textarea>
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
        <input name="sub" type="submit" class="btn btn-success" value="ثبت مقاله">
    </form>
</div>
    <footer style="text-align: center;">طراحی شده توسط محمدجواد مهامین</footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</html>