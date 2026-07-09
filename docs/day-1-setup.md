# 🧠 WordPress là gì?

WordPress là một **CMS (Content Management System)** cho phép:
- Quản lý nội dung (post, page)
- Tách biệt giữa **content** và **presentation (theme)**

---

# 🧩 Theme là gì?

Theme là phần chịu trách nhiệm:
- Giao diện (UI)
- Layout
- Hiển thị dữ liệu từ database

👉 Theme KHÔNG chứa:
- Core WordPress
- Database

---

# ⚙️ Cách WordPress load theme

Flow:

1. User truy cập website
2. WordPress xử lý request
3. Tìm template phù hợp
4. Load file trong theme (index.php nếu không có file khác)
