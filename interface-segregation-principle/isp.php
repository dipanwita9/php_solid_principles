<?php
//no class should be forced to use methods it does not need.
//One way to solve this is to keep your interfaces, abstract classes,
//and traits small by creating multiple instead of a single large one.

interface ElectronicReader
{
    public function bookmarkPage();
}

interface Book
{
    public function nextPage();

    public function previousPage();
}

class PaperBook implements Book
{
    public function nextPage()
    {
        return 'Go to next paper';
    }

    public function previousPage()
    {
        return 'Go to previous paper';
    }
}

class Kindle implements Book, ElectronicReader
{
    public function nextPage()
    {
        return 'Go to next kindle page';
    }

    public function previousPage()
    {
        return 'Go to previous kindle page';
    }

    public function bookmarkPage()
    {
        return 'Bookmark this kindle page';
    }
}

$kindleobj = new Kindle();
$paperobj = new PaperBook();
print_r($kindleobj->bookmarkPage().PHP_EOL);
print_r($paperobj->nextPage().PHP_EOL);