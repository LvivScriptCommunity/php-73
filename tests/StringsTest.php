<?php

use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase
{
    /**
     * @see https://www.php.net/manual/en/language.types.string.php
     */
    public function testVariableParsing()
    {
        $foo = 'world';

        // Double quotes.
        $this->assertEquals('Hello world', "Hello $foo");

        // Single quotes.
        $this->assertEquals('Hello $foo', 'Hello $foo');

        // TODO "Hello ${foo}"

        // TODO "Hello " . $foo

        // TODO Heredoc

        // TODO Nowdoc
    }

    /**
     * @see https://www.php.net/manual/en/ref.strings.php
     */
    public function testStringFunctions()
    {
        // trim — Strip whitespace (or other characters) from the beginning and end of a string
        $this->assertEquals('Hello', trim('Hello         '));
        $this->assertEquals('Hello', trim('Hello......', '.'));

        // ltrim — Strip whitespace (or other characters) from the beginning of a string
        // TODO to be implemented

        // rtrim — Strip whitespace (or other characters) from the end of a string
        // TODO to be implemented

        // strtoupper — Make a string uppercase
        $this->assertEquals('HELLO', strtoupper('hello'));

        // strtolower — Make a string lowercase
        $this->assertEquals('hello', strtolower('HeLlO'));

        // ucfirst — Make a string's first character uppercase
        // TODO to be implemented

        // lcfirst — Make a string's first character lowercase
        // TODO to be implemented

        // strip_tags — Strip HTML and PHP tags from a string
        // TODO to be implemented

        // htmlspecialchars — Convert special characters to HTML entities
        // TODO to be implemented

        // addslashes — Quote string with slashes
        // TODO to be implemented

        // strcmp — Binary safe string comparison
        // TODO to be implemented

        // strncasecmp — Binary safe case-insensitive string comparison of the first n characters
        // TODO to be implemented

        // str_replace — Replace all occurrences of the search string with the replacement string
        // TODO to be implemented

        // strpos — Find the position of the first occurrence of a substring in a string
        // TODO to be implemented

        // strstr — Find the first occurrence of a string
        // TODO to be implemented

        // strrchr — Find the last occurrence of a character in a string
        // TODO to be implemented

        // substr — Return part of a string
        // TODO to be implemented

        // sprintf — Return a formatted string
        // TODO to be implemented
    }
}