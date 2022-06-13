<?php
// Файл для объявления функций


function getFeedbackData() {
    $filepath = $_SERVER["DOCUMENT_ROOT"] . "/main/data/feedback.txt";
    return file_get_contents($filepath);
}
function printFeedbackData() {
    print_r(getFeedbackData());
}
