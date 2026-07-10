# Day 3 — WordPress Loop (Dynamic Content)

## 🎯 Mục tiêu
- Hiểu cách WordPress hiển thị dữ liệu
- Nắm WordPress Loop (cốt lõi của WP)
- Biết cách render post động
- Hiểu mindset làm dynamic website

---

## 🧠 WordPress Loop là gì?

WordPress Loop là cơ chế:

👉 Lặp qua danh sách bài viết (posts)  
👉 Và hiển thị chúng ra giao diện

---

## 🔄 Cách hoạt động của Loop

Flow:

1. WordPress query dữ liệu từ database  
2. Lưu vào biến global `$wp_query`  
3. Loop sẽ lặp qua từng post  
4. Mỗi lần lặp → bạn render UI

---

## 🧩 Cấu trúc cơ bản của Loop

```php
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>

    <?php endwhile; ?>

<?php else : ?>

    <p>Không có bài viết</p>

<?php endif; ?>
```

---

## 🔍 Giải thích từng phần

---

### have_posts()

**Vai trò:**
- Kiểm tra còn bài viết hay không

**Trả về:**
- true / false

---

### the_post()

**Vai trò:**
- Di chuyển con trỏ tới bài viết tiếp theo
- Setup dữ liệu global (title, content...)

👉 BẮT BUỘC gọi trong while

---

### the_title()

**Vai trò:**
- In ra tiêu đề bài viết

---

### the_content()

**Vai trò:**
- In ra nội dung bài viết

---

## 🧠 Mindset quan trọng

👉 WordPress không phải HTML tĩnh

👉 Bạn không viết nội dung trực tiếp

👉 Bạn viết **template để render dữ liệu**

---

## ⚙️ Các function thường dùng trong Loop

---

### the_excerpt()

Hiển thị đoạn mô tả ngắn

```php
the_excerpt();
```

---

### the_permalink()

Lấy link bài viết

```php
<a href="<?php the_permalink(); ?>">
```

---

### the_post_thumbnail()

Hiển thị ảnh đại diện

```php
the_post_thumbnail();
```

---

### the_date()

Hiển thị ngày đăng

```php
the_date();
```

---

### the_author()

Hiển thị tác giả

```php
the_author();
```

---

## 🧩 Ví dụ hoàn chỉnh

```php
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <article>
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>

            <?php the_post_thumbnail(); ?>

            <p><?php the_excerpt(); ?></p>

        </article>

    <?php endwhile; ?>

<?php else : ?>

    <p>No posts found</p>

<?php endif; ?>
```

---

## ⚠️ Sai lầm phổ biến

- Quên `the_post()` trong while
- Dùng `the_content()` cho list (nặng, không tối ưu)
- Không check `have_posts()`
- Hardcode data thay vì dùng loop

---

## 🧠 Advanced concept (quan trọng)

### Global Query

Loop mặc định dùng:

```php
$wp_query
```

👉 Đây là dữ liệu WordPress tự query

---

### Custom Query (preview)

Bạn có thể tự query:

```php
new WP_Query()
```

👉 Sẽ học ở Day 4

---

## 🎯 Kết luận

- Loop = trái tim của WordPress
- Mọi website WP đều dùng loop
- Hiểu loop → làm được dynamic website