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
        $this->assertEquals("Hello $foo", "Hello ${foo}");

        // TODO "Hello " . $foo
        $this->assertEquals("Hello $foo", "Hello " . $foo);

        // TODO Heredoc
        $this->assertEquals("Hello $foo", <<< "HEREDOC"
Hello $foo
HEREDOC);

        // TODO Nowdoc
        $this->assertEquals("Hello $foo", <<< 'NOWDOC'
Hello world
NOWDOC);
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
        $this->assertEquals('Hello   ', ltrim('   Hello   '));

        // rtrim — Strip whitespace (or other characters) from the end of a string
        // TODO to be implemented
        $this->assertEquals('   Hello', rtrim('   Hello   '));

        // strtoupper — Make a string uppercase
        $this->assertEquals('HELLO', strtoupper('hello'));

        // strtolower — Make a string lowercase
        $this->assertEquals('hello', strtolower('HeLlO'));

        // ucfirst — Make a string's first character uppercase
        // TODO to be implemented
        $this->assertEquals('HELLO', ucfirst('hELLO'));

        // lcfirst — Make a string's first character lowercase
        // TODO to be implemented
        $this->assertEquals('hello', lcfirst('Hello'));

        // strip_tags — Strip HTML and PHP tags from a string
        // TODO to be implemented
        $text = '<body><p>stripTags</p></body><!-- Comment --><aside>Test</aside>';
        $this->assertEquals('stripTagsTest', strip_tags($text));

        // htmlspecialchars — Convert special characters to HTML entities
        // TODO to be implemented
        $this->assertEquals('&lt;p&gt;HELLO&lt;/p&gt;', htmlspecialchars('<p>HELLO</p>'));

        // html_entity_decode — Convert HTML entities to their corresponding characters
        $this->assertEquals('<p>HELLO</p>', html_entity_decode('&lt;p&gt;HELLO&lt;/p&gt;'));

        // addslashes — Quote string with slashes
        // TODO to be implemented
        $this->assertEquals("Don\'t do it!", addslashes("Don't do it!"));

        // strcmp — Binary safe string comparison
        // TODO to be implemented
        $this->assertEquals(0, strcmp('EPAM', 'EPAM'));
        $this->assertEquals(-1, strcmp('EPAM', 'EPaM'));
        $this->assertEquals(1, strcmp('EPaM', 'EPAM'));

        // strncasecmp — Binary safe case-insensitive string comparison of the first n characters
        // TODO to be implemented`
        $this->assertEquals('0', strncasecmp('epam', 'epamSystems', 4));
        $this->assertEquals('-1', strncasecmp('epam', 'epamSystems', 5));
        $this->assertEquals('1', strncasecmp('epamSystems', 'epam', 5));

        // str_replace — Replace all occurrences of the search string with the replacement string
        // TODO to be implemented
        $phrase = "I said hello";
        $greetings = "hello";
        $goodbyes = "bye";
        $this->assertEquals('I said bye', str_replace($greetings, $goodbyes, $phrase));

        // strpos — Find the position of the first occurrence of a substring in a string
        // TODO to be implemented
        $this->assertEquals('3', strpos("EPAM", "M"));

        // strstr — Find the position of the first occurrence of a substring in a string
        // TODO to be implemented
        $this->assertEquals("SolidSystems", strstr("EpamSolidSystems", "S"));

        // strrchr — Find the last occurrence of a character in a string
        // TODO to be implemented
        $this->assertEquals("Systems", strrchr("EpamSolidSystems", "S"));

        // substr — Return part of a string
        // TODO to be implemented
        $this->assertEquals("coding", substr("I love coding", "7"));

        // sprintf — Return a formatted string
        // TODO to be implemented
        $a = 'Philip';
        $b = '24';
        $this->assertEquals("My name is Philip and i am 24", sprintf("My name is %s and i am %d", $a, $b));
    }
}
