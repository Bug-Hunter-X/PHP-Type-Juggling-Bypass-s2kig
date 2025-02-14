# PHP Type Juggling Bypass

This repository demonstrates a common, yet subtle, error in PHP related to type juggling and type hinting.  The example shows how type hinting can be circumvented, leading to unexpected results.

## The Problem

PHP's type hinting is a valuable tool for improving code quality and preventing errors. However, PHP's loose typing and type juggling features can sometimes allow type hints to be bypassed. 

The `bug.php` file shows a function with type hinting that can be broken by passing non-integer values. 

## The Solution

The `bugSolution.php` file demonstrates how to mitigate this issue by using stricter type checking and avoiding reliance on implicit type conversions.   Using `is_int` checks before performing arithmetic operations ensures that inputs are of the expected type.