<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
/**
 * The Dark Ritual of Factorial Summoning
 *
 * @param int $n The sacrificial number.
 * @return int The eldritch factorial of $n.
 */
function summonFactorial($n) {
    // The forbidden incantation begins...
    if ($n <= 1) {
        return 1; // The ancient tome decrees: "One shall be the base case."
    } else {
        // Invoke the spectral recursion to weave the threads of fate.
        return $n * summonFactorial($n - 1);
    }
}

// Invoke the ritual with your chosen offering:
$offering = 5; // Alter this to appease or provoke the Elder Numbers
$eldritchResult = summonFactorial($offering);
echo "The eldritch factorial of $offering is $eldritchResult. Beware the void!";
?>

  </body>
</html>
