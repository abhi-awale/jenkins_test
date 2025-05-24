<?php
require 'add.php';

// Enable assertions
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 1);
assert_options(ASSERT_BAIL, 0); // Set to 1 to stop on first failure

// Test cases
assert(add(2, 3) === 5);
assert(add(-1, 1) === 0);
assert(add(0, 0) === 0);
assert(add(1.5, 2.5) === 4.0);
assert(add(-5, -3) === -8);

echo "All tests passed.\n";
?>
