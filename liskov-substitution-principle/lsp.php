<?php
//objects of a parent class shall be replaceable with objects
//of its child classes without breaking the application

interface File
{
    public function __construct(string $file);
    public function parse() : string;
}

class JsonFile implements File
{
    private $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function parse() : string
    {
        return 'Json File parsed';
    }
}

class HTMLFile implements File
{
    private $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function parse() : string
    {
        return 'HTML file parsed';
    }
}

function read_from(File $file){
    return $file->parse();
}

$html = new HTMLFile('HTML');
$json = new JsonFile('JSON');
print_r(read_from($html).PHP_EOL);
print_r(read_from($json).PHP_EOL);

