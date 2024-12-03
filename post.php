<?php
// تحقق من أن الطلب تم باستخدام POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استقبال البيانات من النموذج
    $name = ($_POST['name']); // حماية من XSS
    $email = ($_POST['email']); // حماية من XSS

    // عرض البيانات المستقبلة
    echo "<h1>Data Received:</h1>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";

    // حفظ البيانات في ملف نصي (اختياري)
    $file = fopen("data.txt", "a");
    fwrite($file, "Name: $name, Email: $email\n");
    fclose($file);

    echo "<p>Data has been saved successfully!</p>";
} else {
    echo "Invalid request method!";
}
?>
