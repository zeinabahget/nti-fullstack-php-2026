<?php
// ============================
// Task 2: Saudi Phone Validator
// ============================

function validateSaudiPhone($phone) {

    // 1) Clean the number: remove spaces and dashes
    $clean = trim($phone);
    $clean = str_replace(" ", "", $clean);
    $clean = str_replace("-", "", $clean);

    // 2) Standardize the format: if it starts with the international format +9665 or 9665, convert it to local 05
    if (strpos($clean, "+9665") === 0) {
        $clean = "0" . substr($clean, 4);
    } elseif (strpos($clean, "9665") === 0) {
        $clean = "0" . substr($clean, 3);
    }

    // 3) Check the length (must be exactly 10 digits)
    if (strlen($clean) !== 10) {
        return [
            "valid"     => false,
            "message"   => "Phone number must be exactly 10 digits after cleaning.",
            "formatted" => null,
        ];
    }

    // 4) Check that the number starts with 05
    if (substr($clean, 0, 2) !== "05") {
        return [
            "valid"     => false,
            "message"   => "Phone number must start with 05.",
            "formatted" => null,
        ];
    }

    // If it passed all checks, the number is valid
    return [
        "valid"     => true,
        "message"   => "Valid Saudi phone number.",
        "formatted" => $clean,
    ];
}

// ============================
// Data
// ============================
$testNumbers = [
    "0512345678",
    "+966512345678",
    "05 1234 5678",
    "0555-123-456",
    "966512345678",
    "0412345678",
    "051234567",
    "   0598765432   ",
    " +20 10598765432   ",
    "  + 20 11 598765432   ",
];

echo "==================== Phone Validation Test ====================" . "<br><br>";

// Loop through each number and call the same function, no repeated code
foreach ($testNumbers as $number) {
    $result = validateSaudiPhone($number);

    echo "Input: \"" . $number . "\"" . "<br>";
    echo "Valid: " . ($result["valid"] ? "true" : "false") . "<br>";
    echo "Message: " . $result["message"] . "<br>";
    echo "Formatted: " . ($result["formatted"] ?? "N/A") . "<br>";
    echo "----------------------------------------" . "<br><br>";
}

?>