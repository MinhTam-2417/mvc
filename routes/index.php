<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    // '/'         => (new CalculatorController)->index(),
    '/'         => (new ProductController)->index(),
    'Calculator'=>(new CalculatorController)->Calculator(),
};