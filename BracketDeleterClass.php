<?php
class BracketDeleter {

    private string $destination = '';
    private array $brackets = [
        '(' => ')',
        '<' => '>',
        '{' => '}',
        '[' => ']',
    ];

    public function __construct(private string $source) {}

    public function process() {
        $stack = [];
        $this->destination = '';
        for ($i = 0; $i < strlen($this->source); $i++) {
            $char = $this->source[$i];
            if (in_array($char, array_keys($this->brackets))) {
                array_push($stack, $char);
            } elseif (!empty($stack) && $this->brackets[end($stack)] == $char) {
                array_pop($stack);
            } elseif (empty($stack)) {
                $this->destination .= $char;
            }
        }
    }
    
    public function getResult(): string {
        return $this->destination;
    }
}
?>
