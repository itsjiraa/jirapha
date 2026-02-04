<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ผลการสมัครงาน - บริษัท ความสวยมี จำกัด</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #dff3ff !important;
    }

    .card-header {
        background-color: #7cc6f0 !important;
        color: white;
    }

    .btn-primary {
        background-color: #6bb8ff !important;
        border: none;
    }

    .btn-primary:hover {
        background-color: #55a4ea !important;
    }
</style>

</head>
<body>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header text-center">
            <h3>ผลการส่งใบสมัครงาน</h3>
        </div>

        <div class="card-body">

<?php
if ($_POST) {
    echo "<h4 class='text-primary'>ข้อมูลผู้สมัคร</h4><hr>";

    echo "<strong>ตำแหน่งที่สมัคร:</strong> ".$_POST['position']."<br>";
    echo "<strong>คำนำหน้า:</strong> ".$_POST['title']."<br>";
    echo "<strong>ชื่อ-สกุล:</strong> ".$_POST['fullname']."<br>";
    echo "<strong>วันเกิด:</strong> ".$_POST['birthday']."<br>";
    echo "<strong>ระดับการศึกษา:</strong> ".$_POST['education']."<br>";
    echo "<strong>ความสามารถพิเศษ:</strong> ".$_POST['skill']."<br>";
    echo "<strong>ประสบการณ์ทำงาน:</strong> ".$_POST['experience']."<br>";
    echo "<strong>โทรศัพท์:</strong> ".$_POST['phone']."<br>";
    echo "<strong>อีเมล:</strong> ".$_POST['email']."<br>";
    echo "<strong>ที่อยู่:</strong> ".$_POST['address']."<br>";
}
?>

        </div>

        <div class="card-footer text-center">
            <a href="e.php" class="btn btn-primary">กลับไปหน้าแบบฟอร์ม</a>
        </div>

    </div>
</div>

</body>
</html>
