function openLogin() {
  document.getElementById("loginModal").style.display = "block";
}

function closeLogin() {
  document.getElementById("loginModal").style.display = "none";
}

// Close modal when clicking outside
window.onclick = function(event) {
  const modal = document.getElementById("loginModal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

async function loginUser(event) {
  event.preventDefault();

  const formData = new FormData(event.target);
  const username = formData.get('username');
  const password = formData.get('password');

  try {
    const response = await fetch('login.php', {
      method: 'POST',
      body: formData
    });

    const result = await response.text();

    if (result === 'success') {
      alert('เข้าสู่ระบบสำเร็จ!');
      closeLogin();
      location.reload(); // Reload to update navbar
    } else {
      alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
    }
  } catch (error) {
    alert('เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง');
  }
}