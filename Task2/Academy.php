<?php

class Academy
{
    private $data = [];

    public function __call(string $func, array $args)
    {
        // getFirstName
        $splitFunction = $this->parseFunctionName($func);

        // get
        $prefix = $splitFunction[0];

        // Remove prefix
        array_shift($splitFunction);

        // Array to string and lowercase
        // e.g. FirstName becomes firstName
        $key = lcfirst(implode($splitFunction));

        switch ($prefix)
        {
            case 'get':
                return isset($this->data[$key]) ? $this->data[$key] : null;
                break;
            case 'set':
                $this->data[$key] = $args[0];
                break;
            case 'has':
                return isset($this->data[$key]);
                // echo isset($this->data[$key]) ? 'true' : 'false';
                break;
            case 'uns' || 'unset':
                unset($this->data[$key]);
                break;
            default:
                throw new Exception("Wrong method name.");
        }
    }

    private function parseFunctionName(string $function)
    {
        return preg_split("/(?=[A-Z])/", $function);
    }
}

$academy = new Academy();
$academy->setAcademyName("PHP Academy");
$academy->setLecture('OOP');
$academy->setNumberOfStudents(20);

$academy->hasLecture(); // true
$academy->hasFirstName(); // false

echo $academy->getAcademyName(), "<br>";
echo $academy->getNumberOfStudents(), "<br>";
echo $academy->getLecture(), "<br>";

$academy->unsLecture();

var_dump($academy);
