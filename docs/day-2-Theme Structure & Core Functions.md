# Day 2 — Theme Structure & Core Functions
## 🎯 Mục tiêu
- Hiểu cách tổ chức theme WordPress
- Hiểu vai trò của từng file trong theme
- Nắm các hàm cốt lõi (core functions)
- Hiểu cơ chế hook

---
## 🧱 Cấu trúc theme chuẩn

```
tientheme/
├── style.css
├── index.php
├── header.php
├── footer.php
└── functions.php
```

---

## 🧩 Tư duy tách layout

Thay vì viết toàn bộ HTML trong `index.php`:

👉 Tách thành các phần:

- `header.php` → phần đầu trang
- `footer.php` → phần cuối trang

---

## 🔄 Cách hoạt động

Trong `index.php`:

```php
<?php get_header(); ?>

<h1>Trang chủ</h1>

<?php get_footer(); ?>
```

👉 WordPress sẽ:

1. Load `header.php`  
2. Render nội dung  
3. Load `footer.php`

---

## 🧠 Core Functions (Cốt lõi)

---

### 1. language_attributes()

**Vai trò:**
- Thiết lập thuộc tính ngôn ngữ cho thẻ `<html>`

**Ý nghĩa:**
- SEO
- Accessibility

---

### 2. bloginfo()

**Vai trò:**
- Lấy thông tin từ hệ thống WordPress

**Ví dụ:**
```php
bloginfo('name');
bloginfo('charset');
bloginfo('description');
```

---

### 3. wp_head()

**Vai trò:**
- Cho phép WordPress và plugin chèn code vào `<head>`

**Bao gồm:**
- CSS
- JavaScript
- Meta SEO

❗ Nếu thiếu:
- Plugin không hoạt động
- CSS/JS có thể không load

👉 Đây là function quan trọng nhất trong `<head>`

---

### 4. body_class()

**Vai trò:**
- Thêm class động vào thẻ `<body>`

**Lợi ích:**
- Dễ viết CSS theo từng trang
- Hỗ trợ debug

---

### 5. wp_footer()

**Vai trò:**
- Chèn script trước `</body>`

❗ Nếu thiếu:
- JavaScript không chạy
- Plugin lỗi
- AJAX fail

---

### 6. add_theme_support()

**Vai trò:**
- Khai báo theme hỗ trợ các tính năng của WordPress

**Ví dụ:**
```php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
```

---

### 7. add_action()

**Vai trò:**
- Gắn function vào các hook của WordPress

**Ví dụ:**
```php
add_action('after_setup_theme', 'tientheme_setup');
```

---

## 🧠 Hook là gì?

WordPress hoạt động theo cơ chế event (hook):

Ví dụ:

- `after_setup_theme`
- `wp_enqueue_scripts`
- `init`

👉 Bạn không chạy code trực tiếp  
👉 Bạn “gắn” code vào đúng thời điểm

---

## ⚠️ Sai lầm phổ biến

- Quên `wp_head()`
- Quên `wp_footer()`
- Hardcode dữ liệu thay vì dùng function WordPress
- Không hiểu hook

---

## 🎯 Kết luận

- Theme phải tách layout rõ ràng
- WordPress phụ thuộc mạnh vào hook
- `wp_head()` và `wp_footer()` là bắt buộc

---