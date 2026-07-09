# Day 2 — WordPress Theme Basics

## 🎯 Goal
- Hiểu cấu trúc theme WordPress
- Biết cách tách layout (header/footer)
- Nắm các hàm nền tảng quan trọng

---

# 📁 Theme Structure
tientheme/
├── style.css
├── index.php
├── header.php
├── footer.php
└── functions.php

---

# 🧩 index.php

### Purpose
File entry point — WordPress sẽ load file này đầu tiên nếu không có template khác

### Example
```php
<?php get_header(); ?>

<h1>Trang chủ</h1>

<?php get_footer(); ?>