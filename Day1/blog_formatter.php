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
// Uses trim and returns the text after removing extra spaces
// ============================
function cleanText($text) {
    return trim($text);
}

// ============================
// Task 2: Format Author Name
// trim + strtolower + ucwords (capitalize the first letter of each word)
// ============================
function formatAuthorName($name) {
    $name = cleanText($name);
    $name = strtolower($name);
    $name = ucwords($name);
    return $name;
}

// ============================
// Task 3: Format Title
// trim + if the title is longer than 35 chars, cut it with substr and add "..."
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
// Searches for a specific word inside the content using strpos
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
// Replaces one word with another using str_replace
// ============================
function replaceWordInContent($content, $search, $replace) {
    return str_replace($search, $replace, $content);
}

// ============================
// Task 6: Make Slug
// strtolower + str_replace spaces with "-"
// ============================
function makeSlug($title) {
    $title = cleanText($title);
    $title = strtolower($title);
    $title = str_replace(" ", "-", $title);
    return $title;
}

// ============================
// Run the tasks and display the result (reusing the functions above, no repeated code)
// ============================
$cleanTitle   = formatTitle($postTitle, 35);
$cleanAuthor  = formatAuthorName($authorName);
$shortContent = formatTitle($postContent, 60); // reused the same title-truncating function for the content too
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