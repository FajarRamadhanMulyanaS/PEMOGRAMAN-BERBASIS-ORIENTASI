<?php
class Test
{
    public function __construct()
    {
        // Your logic for constructor
    }

    public function __call($method_name, $parameters)
    {
        if ($method_name == "Function") {
            $count = count($parameters);
            switch ($count) {
                case 1:
                    echo "You are passing 1 argument<br/>";
                    break;
                case 2:
                    echo "You are passing 2 arguments<br/>";
                    break;
                default:
                    throw new Exception("Bad argument");
            }
        } else {
            throw new Exception("Function $method_name does not exist");
        }
    }
}

$a = new Test();
$a->Function("ankur");
$a->Function("techflirt", "ankur");
?>
