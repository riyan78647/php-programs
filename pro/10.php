<?php
function keywordSearch($text, $keyword) {
    $pos = stripos($text, $keyword);
    if ($pos !== false) {
        // Return 20 chars before and after keyword for context
        $start = max(0, $pos - 20);
        $length = strlen($keyword) + 40;
        $snippet = substr($text, $start, $length);
        return "... " . $snippet . " ...";
    } else {
        return "Keyword not found.";
    }
}

$abstract = "This research explores the effects of climate change on marine biodiversity and ecosystems in the Pacific Ocean.";

echo keywordSearch($abstract, "climate");
?>
