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
        $this->assertEquals('hello world', strtolower("Hello ${foo}"));

        // TODO "Hello " . $foo
        $this->assertEquals('Hello world', "Hello " . $foo);

        // TODO Heredoc
        $this->assertEquals('Hello world', <<<TEXT
        Hello $foo
        TEXT);

        // TODO Nowdoc
        $this->assertEquals('Hello $foo', <<<'TEXT'
        Hello $foo
        TEXT);
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
        $this->assertEquals('Hello', ltrim('........Hello', '.'));

        // rtrim — Strip whitespace (or other characters) from the end of a string
        $this->assertEquals('Hello', rtrim('Hello.....', '.'));

        // strtoupper — Make a string uppercase
        $this->assertEquals('HELLO', strtoupper('hello'));

        // strtolower — Make a string lowercase
        $this->assertEquals('hello', strtolower('HeLlO'));

        // ucfirst — Make a string's first character uppercase
        $this->assertEquals('Hello', ucfirst('hello'));

        // lcfirst — Make a string's first character lowercase
        $this->assertEquals('hello', lcfirst('Hello'));

        // strip_tags — Strip HTML and PHP tags from a string
        $this->assertEquals('Hello', strip_tags('<p>Hello</p>'));

        // htmlspecialchars — Convert special characters to HTML entities
        $this->assertEquals('&lt;b&gt;Hello world&lt;/b&gt;.', htmlspecialchars('<b>Hello world</b>.'));

        // addslashes — Quote string with slashes
        $this->assertEquals("David\'s wife", addslashes("David's wife"));

        // strcmp — Binary safe string comparison
        $this->assertLessThan(0, strcmp('Hello', 'Hello world'));

        // strncasecmp — Binary safe case-insensitive string comparison of the first n characters
        $this->assertLessThan(0, strncasecmp('Hello', 'Hello world', 6));

        // str_replace — Replace all occurrences of the search string with the replacement string
        $this->assertEquals('Heo', str_replace('l', '', 'Hello'));

        // strpos — Find the position of the first occurrence of a substring in a string
        $this->assertEquals(4, strpos('Hello', 'o'));

        // strstr — Find the position of the first occurrence of a substring in a string
        $this->assertEquals('llo', strstr('Hello', 'l'));

        // strrchr — Find the last occurrence of a character in a string
        $this->assertEquals('world', strrchr("Hello world","world"));

        // substr — Return part of a string
        $this->assertEquals('ello world', substr("Hello world", 1));

        // sprintf — Return a formatted string
        $this->assertEquals('5 bananas', sprintf("%d bananas", 5));
    }
}