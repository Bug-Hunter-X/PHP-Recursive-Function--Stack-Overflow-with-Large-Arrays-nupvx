# PHP Recursive Function: Stack Overflow with Large Arrays

This repository demonstrates a potential stack overflow error that can occur when using recursive functions in PHP to process large or deeply nested arrays.  The `processData` function recursively traverses the array, truncating strings longer than 10 characters.  While functional with small datasets, it can easily crash the application with large input.  The solution demonstrates a safer iterative approach.

## Bug Description:

The `bug.php` file contains a recursive function that can lead to a stack overflow error if the input array is very large or deeply nested. The recursive calls consume a significant amount of memory on the call stack, eventually exceeding the available resources.

## Solution:

The `bugSolution.php` file provides an iterative approach that avoids recursion and prevents stack overflow issues, regardless of array size or nesting level.