<?php

class PhpCodeValidator {
    private $code;

    public function __construct($code) {
        $this->code = $code;
    }

    public function isValid() {
        $stack = [];

        for ($i = 0; $i < strlen($this->code); $i++) {
            $char = $this->code[$i];

            if ($char === '{') {
                array_push($stack, $char);

            } elseif ($char === '}') {
                if (empty($stack)) {
                    return false;
                }
                array_pop($stack);
            }
        }

        return empty($stack);
    }
}

$code1 = new PhpCodeValidator("{{lajkdhf{adfa}{}adfasdfadf{}}}");
echo $code1->isValid() ? 'Valid' : 'Invalid'; // Valid
echo "<br>";

$code2 = new PhpCodeValidator("{{lajkdhf{adfa");
echo $code2->isValid() ? 'Valid' : 'Invalid'; // Invalid
echo "<br>";

?>
