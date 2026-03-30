<?php
session_start();
$current = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar">
    <div class="nav-left">
        <a href="index.php" class="logo">DarussTukSuk</a>
    </div>
    <ul class="nav-center">
        <li><a href="index.php" class="<?php echo $current=='index.php'?'active' : '' ?>">Home</a></li>
        <li><a href="found.php" class="<?php echo $current=='found.php'?'active' : '' ?>">Found You</a></li>
        <li><a href="market.php" class="<?php echo $current=='market.php'?'active' : '' ?>">Market place</a></li>
        <li><a href="about.php" class="<?php echo $current=='about.php'?'active' : '' ?>">About</a></li>
        <li><a href="contact.php" class="<?php echo $current=='contact.php'?'active' : '' ?>">Contact</a></li>
    </ul>
    

    <div class="nav-right">
        <?php if (isset($_SESSION['username'])): ?>
            <span class="username">ยินดีต้อนรับ <?= $_SESSION['username'] ?></span>
            <a href="logout.php" class="logout-btn">ออกจากระบบ</a>
        <?php else: ?>
              <a class="btn" onclick="openLogin()">Login</a>
        <?php endif; ?>
    </div>

    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeLogin()">&times;</span>
            <img src="../image/image.png" alt="Logo" class="modal-logo">
            <h2>เข้าสู่ระบบ</h2>
            <form onsubmit="loginUser(event)">
                <input type="text" name="username" placeholder="ชื่อผู้ใช้" required>
                <input type="password" name="password" placeholder="รหัสผ่าน" required>
                <button type="submit">เข้าสู่ระบบ</button>
            </form>
            <p class="register-link">ยังไม่มีบัญชี? <a href="register.php">สมัครสมาชิก</a></p>
        </div>
    </div>
</nav>