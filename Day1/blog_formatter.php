<?php
// ============================
// Data
// ============================
$postTitle   = "     Learn PHP String Functions For Real Blog Website     ";
$postContent = "PHP is a popular programming language. PHP is used in websites, blogs, stores and dashboards.";
$authorName  = "     mohamed eissa     ";
$category    = "PHP Basics";

echo "==================== Mini Blog Preview ====================" . "<br><br>";

// ============================
// Task 1: cleanText Function
// بتستخدم trim وبترجع النص بعد إزالة المسافات
// ============================
function cleanText($text) {
    return trim($text);
}

// ============================
// Task 2: Format Author Name
// trim + strtolower + ucwords (أول حرف كل كلمة capital)
// ============================
function formatAuthorName($name) {
    $name = cleanText($name);
    $name = strtolower($name);
    $name = ucwords($name);
    return $name;
}

// ============================
// Task 3: Format Title
// trim + لو أطول من 35 حرف اقطعه بـ substr وضيف "..."
// ============================
function formatTitle($title, $maxLength) {
    $title = cleanText($title);

    if (strlen($title) > $maxLength) {
        $title = substr($title, 0, $maxLength) . "...";
    }

    return $title;
}

// ============================
// Task 4: Search In Content
// بتدور على كلمة معينة جوه المحتوى باستخدام strpos
// ============================
function searchInContent($content, $word) {
    if (strpos($content, $word) !== false) {
        return "Found the word \"$word\" in the article!";
    } else {
        return "The word \"$word\" was not found.";
    }
}

// ============================
// Task 5: Replace Word In Content
// بتستبدل كلمة بكلمة تانية باستخدام str_replace
// ============================
function replaceWordInContent($content, $search, $replace) {
    return str_replace($search, $replace, $content);
}

// ============================
// Task 6: Make Slug
// strtolower + str_replace للمسافات بـ "-"
// ============================
function makeSlug($title) {
    $title = cleanText($title);
    $title = strtolower($title);
    $title = str_replace(" ", "-", $title);
    return $title;
}

// ============================
// تنفيذ التاسكات وعرض النتيجة (بنستخدم نفس الـ functions فوق، من غير ما نكرر أي كود)
// ============================
$cleanTitle   = formatTitle($postTitle, 35);
$cleanAuthor  = formatAuthorName($authorName);
$shortContent = formatTitle($postContent, 60); // نفس function القص بتاعت العنوان استخدمناها تاني للمحتوى
$slug         = makeSlug($postTitle);

echo $cleanTitle . "<br><br>";

echo $shortContent . "<br><br>";

echo "Author: " . $cleanAuthor . "<br>";
echo "Category: " . cleanText($category) . "<br><br>";

echo "Slug: /" . $slug . "<br><br>";

echo "-------------------------------------------------------------" . "<br>";

echo searchInContent($postContent, "PHP") . "<br><br>";

$newContent = replaceWordInContent($postContent, "PHP", "PHP Language");
echo $newContent . "<br><br>";

echo "Read More >> /" . $slug;

?>