<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

/**
* Calculates the factorial of a given non-negative integer using recursion.
*
* @param int $n The integer for which the factorial is to be calculated.
* @return int The factorial of the given integer.
* @throws InvalidArgumentException If the input is not a non-negative integer.
*/
function factorial(int $n): int {
   if ($n < 0) {
       throw new InvalidArgumentException('Factorial is not defined for negative numbers.');
   }

   // Base case: factorial of 0 or 1 is 1
   if ($n === 0 || $n === 1) {
       return 1;
   }

   // Recursive case: n * factorial(n - 1)
   return $n * factorial($n - 1);
}

/**
* Main function to test the factorial function with various inputs.
*/
function main() {
   $testCases = [5, 0, 1, -5]; // Test cases including edge cases and an invalid input

   foreach ($testCases as $testCase) {
       try {
           $result = factorial($testCase);
           echo "Factorial of $testCase is: $result\n";
       } catch (InvalidArgumentException $e) {
           echo "Error: " . $e->getMessage() . " for input $testCase\n";
       }
   }
}

// Execute the main function
main();

?>

  </body>
</html>
