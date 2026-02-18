<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>งาน k 66010914135 จิราภา ไกรจันทร์ (อั่งเปา)</title>
    <style>
        .container { text-align: center; margin-top: 50px; font-family: sans-serif; }
        
        /* สไตล์ปุ่มกด */
        .btn {
            padding: 15px 30px;
            font-size: 18px;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin: 10px;
            transition: 0.3s;
        }
        
        .btn-green { background-color: #28a745; } /* สีเขียว */
        .btn-green:hover { background-color: #218838; }
        
        .btn-orange { background-color: #fd7e14; } /* สีส้ม */
        .btn-orange:hover { background-color: #e36209; }

        /* ส่วนแสดงรูปภาพ */
        #display-area { margin-top: 30px; }
        #target-image {
            max-width: 400px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            display: none; /* ซ่อนไว้ก่อนจนกว่าจะกดปุ่ม */
        }
    </style>
</head>
<body>
<h1>งาน k 66010914135 จิราภา ไกรจันทร์ (อั่งเปา)</h1>

<div class="container">
    <h2>คลิกเพื่อดูรูปภาพ</h2>

    <button class="btn btn-green" onclick="showImage('img/1.jpg')">รูปของฉัน</button>

    <button class="btn btn-orange" onclick="showImage('img/3.jpg')">รูปอาจารย์</button>

    <div id="display-area">
        <img id="target-image" src="" alt="รูปภาพจะปรากฏที่นี่">
    </div>
</div>

<script>
    function showImage(imageSrc) {
        const imgTag = document.getElementById('target-image');
        imgTag.src = imageSrc;
        imgTag.style.display = 'inline-block'; // แสดงรูปภาพเมื่อมีการกดปุ่ม
    }
</script>

</body>
</html>