<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new ProductController)->index(),
    'DeleteProduct'          => (new ProductController)->deleteProduct(),
    'addProduct'             => (new ProductController)->addProduct(),
    'addProcess'             => (new ProductController)->addProcess(),
};