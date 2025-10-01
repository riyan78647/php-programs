<?php
function plugin_feature() {
    echo "Plugin feature executed!";
}

if (function_exists('plugin_feature')) {
    plugin_feature();
} else {
    echo "Plugin not available.";
}
?>
