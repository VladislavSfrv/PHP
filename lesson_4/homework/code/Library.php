<?php

class Library 
{
    protected string $employees;
    protected int $visitors;

    public function __construct(string $employees, int $visitors)
    {
        $this->employees = $employees;
        $this->visitors = $visitors;
    }

    public function getEmployees(): string
    {
        return $this->employees;
    }

    public function getVisitors(): int
    {
        return $this->visitors;
    }
}

class Bookshelf extends Library
{
    protected int $books;

    public function __construct(string $employees, int $visitors, int $books)
    {
        parent::__construct($employees, $visitors);
        $this->books = $books;
    }

    public function getBooks(): int
    {
        return $this->books;
    }

    public function availabilityBooks(): string
    {
        if ($this->books < $this->visitors)
        {
            return "Книг для чтения недостаточно";
        }else
        {
            return "Посетителям хватит книг для чтения";
        }
    }
}

abstract class Book extends Bookshelf
{
    protected int $paperBook;
    protected int $audioBook; 

    public function __construct(string $employees, int $visitors, int $books)
    {
        parent::__construct($employees, $visitors, $books);
    }

    public function reserveBook(int $bookType, int $value)
    {
        if($bookType < $value)
        {
            return "Книг нет в наличии! Приходите завтра";
        }else
        {
            $this->books -= $value;
            $bookType -= $value;
            return "Книги зарезервированы. Осталось: " . $this->books . " книг";
        }
    }
}

class PaperBook extends Book 
{
    public function __construct(string $employees, int $visitors, int $books)
    {
        parent::__construct($employees, $visitors, $books);
    }
}

class AudioBook extends Book
{
    public function __construct(string $employees, int $visitors, int $books)
    {
        parent::__construct($employees, $visitors, $books);
    }
}

$library1 = new Library("Сергей Анатольевич", 53);
$books1 = new Bookshelf("Сергей Анатольевич", 12, 41);
$paperBook1 = new PaperBook("Сергей Анатольевич", 12, 10);
$audioBook1 = new AudioBook("Сергей Анатольевич", 4, 5);


echo $paperBook1->reserveBook($audioBook1->getBooks(), 6) . PHP_EOL;
echo $paperBook1->reserveBook($paperBook1->getBooks(), 3) . PHP_EOL;
echo $paperBook1->reserveBook($paperBook1->getBooks(), 8) . PHP_EOL;
echo "Сегодня дежурит - " . $library1->getEmployees() . PHP_EOL;
echo "Количество посетителей: " . $library1->getVisitors() . PHP_EOL;
echo $books1->availabilityBooks() . PHP_EOL;