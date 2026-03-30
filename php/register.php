<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple registration (in real app, save to database)
    $_SESSION['username'] = $username;
    echo "<script>alert('สมัครสมาชิกสำเร็จ!'); window.location.href='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก - DarussTukSuk</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <section class="first" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="daruss">
            <div class="about-text">
                <h1>สมัครสมาชิก</h1>
                <form action="register.php" method="post" style="max-width: 400px; margin: 0 auto; background: rgba(255,255,255,0.9); padding: 30px; border-radius: 15px; box-shadow: 0 8px 16px rgba(0,0,0,0.2);">
                    <input type="text" name="username" placeholder="ชื่อผู้ใช้" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 8px;">
                    <input type="password" name="password" placeholder="รหัสผ่าน" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 8px;">
                    <button type="submit" style="width: 100%; padding: 12px; background: #28a745; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px;">สมัครสมาชิก</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>