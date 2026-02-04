<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914135 จิราภา ไกรจันทร์ (อั่งเปา)</title>
<style>
/* ตั้งค่าพื้นฐานสำหรับ body */
body {
    font-family: Arial, sans-serif;
    background-color: #fce4ec; /* ชมพูอ่อนมาก */
    color: #333;
    padding: 20px;
    margin: 0;
}

/* สไตล์สำหรับส่วนหัว (Header) */
h1 {
    color: #ad1457; /* ชมพูเข้ม */
    border-bottom: 3px solid #f06292; /* เส้นคั่นสีชมพู */
    padding-bottom: 10px;
    margin-bottom: 20px;
}

/* สไตล์สำหรับฟอร์ม */
form {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 0 auto; /* จัดให้อยู่ตรงกลาง */
}

/* สไตล์สำหรับ input, textarea, select */
input[type="text"],
input[type="number"],
input[type="date"],
textarea,
select {
    width: calc(100% - 120px); /* ปรับความกว้างให้พอดี */
    padding: 10px;
    margin: 5px 0 15px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

/* สไตล์สำหรับปุ่ม */
button {
    background-color: #e91e63; /* ชมพูหลัก */
    color: white;
    padding: 10px 15px;
    margin-right: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #c2185b; /* ชมพูเข้มขึ้นเมื่อเมาส์ชี้ */
}

/* สไตล์สำหรับส่วนที่แสดงผลลัพธ์ PHP */
.php-output {
    background-color: #fff8e1; /* สีอ่อนสำหรับผลลัพธ์ */
    border: 1px dashed #ffb74d;
    padding: 15px;
    margin-top: 20px;
    border-radius: 8px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

/* สไตล์สำหรับข้อความ */
label {
    display: inline-block;
    width: 100px; /* กำหนดความกว้างของ label */
    text-align: right;
    margin-right: 10px;
    font-weight: bold;
}

/* สไตล์สำหรับ div สีที่ชอบ */
.color-display {
    display: inline-block;
    width: 30px;
    height: 30px;
    vertical-align: middle;
    margin-left: 10px;
    border: 1px solid #999;
}
</style>
</head>

<body>
<h1>ฟอร์มรับข้อมูล - จิราภา ไกรจันทร์ (อั่งเปา) by Gemini</h1>

<form method="post" action="">
<label for="fullname">ชื่อ-สกุล</label> <input type="text" name="fullname" id="fullname" autofocus required>* <br>
<label for="phone">เบอร์โทร</label> <input type="text" name="phone" id="phone" required>* <br>
<label for="height">ส่วนสูง</label> <input type="number" name="height" id="height" min="100" max="200" required> ซม.* <br>
<label for="address">ที่อยู่</label> <textarea name="address" id="address" cols="40" rows="4"></textarea><br>
<label for="birthday">วัน/เดือน/ปีเกิด</label> <input type="date" name="birthday" id="birthday"><br>
<label for="color">สีที่ชอบ</label> <input type="color" name="color" id="color"> <br>

<label for="major">สาขาวิชา</label>
<select name="major" id="major">
	<option value="การบัญชี">การบัญชี</option>
	<option value="การตลาด">การตลาด</option>
	<option value="การจัดการ">การจัดการ</option>
	<option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
</select>
<br><br>

<button type="submit" name="Submit"> สมัครสมาชิก </button>
<button type="reset"> ยกเลิก </button>
<button type="button" onClick="window.location='https://www.msu.ac.th'"> Go to MSU </button>
<button type="button" onMouseOver="alert ('ใครคะ??')">Hello </button>
<button type="button" onClick="window.print()" > พิมพ์ </button>

</form>
<hr>

<?php
if (isset($_POST['Submit'])) {
	$fullname = $_POST['fullname'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$birthday = $_POST['birthday'];
	$height = $_POST['height'];
	$major = $_POST['major'];
	$color = $_POST['color'];
?>
<div class="php-output">
    <h3>✅ ข้อมูลที่ได้รับ:</h3>
    <?php
    echo "ชื่อ-สกุล: <b>" .$fullname. "</b><br>";
    echo "เบอร์โทร: <b>" .$phone. "</b><br>";
    echo "ส่วนสูง: <b>" .$height. "</b> ซม. <br>";
    echo "ที่อยู่: <b>" .nl2br($address). "</b><br>";
    echo "วัน/เดือน/ปีเกิด: <b>" .$birthday."</b><br>";
    echo "สาขาวิชา: <b>" .$major. "</b><br>";
    echo "สีที่ชอบ: <b>" .$color. "</b> <span class='color-display' style='background-color:{$color};'></span>";
    ?>
</div>
<?php
}
?>
</body>
</html>