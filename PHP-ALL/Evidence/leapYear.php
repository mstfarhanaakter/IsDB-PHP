<h2>Leap Year Checker in PHP</h2>

<pre>
📌 লজিক ব্যাখ্যা:

একটি বছর Leap Year (অধিবর্ষ) হবে যদি:
1️⃣ ৪ দিয়ে বিভাজ্য হয়
এবং
2️⃣ ১০০ দিয়ে বিভাজ্য না হয়
🔸 উদাহরণ: 2024 → 4 দিয়ে ভাগ যায়, কিন্তু 100 দিয়ে না → ✅ Leap Year

অথবা
3️⃣ ৪০০ দিয়ে বিভাজ্য হয়
🔸 উদাহরণ: 2000 → 4 ও 100 দিয়ে ভাগ যায়, এবং 400 দিয়েও যায় → ✅ Leap Year
</pre>

    <form method="post" action="">
        Enter a year: <input type="number" name="year" required>
        <input type="submit" name="submit" value="Submit ">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $year = $_POST['year'];

        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            echo "<h3>$year is a leap year.</h3>";
        } else {
            echo "<h3>$year is not a leap year.</h3>";
        }
    }
    ?>