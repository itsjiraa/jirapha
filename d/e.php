<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ฟอร์มสมัครงาน - บริษัท ความสวยมี จำกัด</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #dff3ff !important;  /* ฟ้าพาสเทล */
    }

    .card-header {
        background-color: #7cc6f0 !important; 
        color: white;
    }

    .btn-primary, .btn-success {
        background-color: #6bb8ff !important;
        border: none !important;
    }

    .btn-primary:hover, .btn-success:hover {
        background-color: #55a4ea !important;
    }

    .btn-secondary {
        background-color: #aac9dd !important;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #92bcd6 !important;
    }
</style>

</head>
<body>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header text-center">
            <h3>ใบสมัครงาน</h3>
            <h5>บริษัท ความสวยมี จำกัด</h5>
        </div>

        <div class="card-body">
            <form method="post" action="f.php">

                <div class="mb-3">
                    <label class="form-label">ตำแหน่งที่ต้องการสมัคร *</label>
                    <select name="position" class="form-select" required>
                        <option value="">-- เลือกตำแหน่งงาน --</option>
                        <option value="เจ้าหน้าที่ฝ่ายขาย">เจ้าหน้าที่ฝ่ายขาย</option>
                        <option value="แอดมินเพจ">แอดมินเพจ</option>
                        <option value="กราฟิกดีไซน์">กราฟิกดีไซน์</option>
                        <option value="เจ้าหน้าที่การตลาดออนไลน์">เจ้าหน้าที่การตลาดออนไลน์</option>
                        <option value="ช่างภาพ / ตัดต่อวิดีโอ">ช่างภาพ / ตัดต่อวิดีโอ</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">คำนำหน้าชื่อ *</label>
                        <select name="title" class="form-select" required>
                            <option value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="นาง">นาง</option>
                        </select>
                    </div>

                    <div class="col-md-8 mb-3">
                        <label class="form-label">ชื่อ-สกุล *</label>
                        <input type="text" name="fullname" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">วัน/เดือน/ปีเกิด *</label>
                    <input type="date" name="birthday" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">ระดับการศึกษา *</label>
                    <select name="education" class="form-select" required>
                        <option value="มัธยมศึกษาตอนปลาย">มัธยมศึกษาตอนปลาย</option>
                        <option value="ปวช.">ปวช.</option>
                        <option value="ปวส.">ปวส.</option>
                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                        <option value="ปริญญาโท">ปริญญาโท</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">ความสามารถพิเศษ</label>
                    <textarea name="skill" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">ประสบการณ์ทำงาน</label>
                    <textarea name="experience" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">เบอร์โทรศัพท์ *</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">อีเมล *</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">ที่อยู่ปัจจุบัน *</label>
                    <textarea name="address" class="form-control" rows="3" required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4">ส่งใบสมัคร</button>
                    <button type="reset" class="btn btn-secondary px-4">ล้างข้อมูล</button>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>
