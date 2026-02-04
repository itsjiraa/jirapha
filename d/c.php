<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914135 จิราภา ไกรจันทร์ (อั่งเปา)</title>

<style>
    body {
        font-family: "Prompt", sans-serif;
        background-color: #d7ecff; /* ฟ้าพาสเทล */
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        padding: 20px;
        color: #005c99;
    }

    .container {
        width: 500px;
        margin: auto;
        background: #ffffff;
        padding: 20px 30px;
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    input, textarea, select {
        width: 100%;
        padding: 8px;
        margin: 8px 0 15px 0;
        border-radius: 8px;
        border: 1px solid #a3c8e6;
        font-size: 16px;
    }

    button {
        background-color: #6bb8ff;
        border: none;
        padding: 10px 15px;
        border-radius: 8px;
        color: white;
        cursor: pointer;
        margin-right: 5px;
        transition: 0.2s;
    }

    button:hover {
        background-color: #4aa3f0;
    }

    hr {
        margin-top: 40px;
    }

    .output-box {
        width: 500px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
</style>
</head>

<body>

<h1>ฟอร์มรับข้อมูล - จิราภา ไกรจันทร์ (อั่งเปา) by GPT</h1>

<div class="container">
<form method="post" action="">
ชื่อ-สกุล * <input type="text" name="fullname" autofocus required>

เบอร์โทร * <input type="text" name="phone" required>

ส่วนสูง (ซม.) *  
<input type="number" name="height" min="100" max="200" required>

ที่อยู่  
<textarea name="address" cols="40" rows="4"></textarea>

วัน/เดือน/ปีเกิด  
<input type="date" name="birthday">

สีที่ชอบ  
<input type="color" name="color">

สาขาวิชา  
<select name="major">
	<option value="การบัญชี">การบัญชี</option>
	<option value="การตลาด">การตลาด</option>
	<option value="การจัดการ">การจัดการ</option>
	<option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
</select>

<br>

<button type="submit" name="Submit">สมัครสมาชิก</button>
<button type="reset">ยกเลิก</button>
<button type="button" onClick="window.location='https://www.msu.ac.th'">Go to MSU</button>
<button type="button" onMouseOver="alert('ใครคะ??')">Hello</button>
<button type="button" onClick="window.print()">พิมพ์</button>

</form>
</div>

<hr>

<?php
if (isset($_POST['Submit'])) {
	echo "<div class='output-box'>";
	$fullname = $_POST['fullname'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$birthday = $_POST['birthday'];
	$height = $_POST['height'];
	$major = $_POST['major'];
	$color = $_POST['color'];

	echo "<h3>ข้อมูลที่ส่งมา</h3>";
	echo "ชื่อ-สกุล: " .$fullname. "<br>";
	echo "เบอร์โทร: " .$phone. "<br>";
	echo "ส่วนสูง: " .$height. " ซม. <br>";
	echo "ที่อยู่: " .$address. "<br>";
	echo "วัน/เดือน/ปีเกิด: " .$birthday."<br>";
	echo "สาขาวิชา: " .$major. "<br>";
	echo "สีที่ชอบ: <div style='background-color:{$color}; width:300px; height:30px; border-radius:5px; margin-top:5px;'></div>";
	echo "</div>";
}
?>

</body>
</html>
