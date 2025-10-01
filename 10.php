<?php
function search_keyword($text, $keyword) {
    $pos = stripos($text, $keyword);
    if ($pos === false) {
        return "Keyword not found.";
    }
    // Show 20 chars before and after keyword for context
    $start = max(0, $pos - 20);
    $length = strlen($keyword) + 40;
    return substr($text, $start, $length);
}

$abstract = "This research paper explores advanced AI techniques...";
echo search_keyword($abstract, "AI");
?>
