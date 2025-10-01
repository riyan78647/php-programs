<?php

function pluginHello() {
    echo "Hello from plugin!";
}

function runPlugin($funcName) {
    if (function_exists($funcName)) {
        $funcName();  
    } else {
        echo "Plugin function '$funcName' does not exist.";
    }
}


runPlugin('pluginHello');  
runPlugin('pluginBye');   
?>
