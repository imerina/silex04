<?php
/**
* Book DAO
*/

namespace mybooks\DAO;

use Doctrine\DBAL\Connection;
use mybooks\Domain\Book;

class BookDAO extends DAO
{
    /**
     * Get book from ID
     *
     * @param integer Book id
     *
     * @return \MicroCMS\Domain\Book
     * @throws Exception if no matching Book is found
     */

    public function find($book_id) {
        $sql = "select * from book where book_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($book_id));
        if ($row) {
            $book = new Book($row);
            return $book;
        } else {
            throw new \Exception("No book for ID " . $book_id);
        }


    }
    /**
     * get the book list
     *
     * @return array objet book list
     */
    public function findAll() {
        $sql = "select * from book order by book_id desc";
        $rows = $this->getDb()->fetchAll($sql);
        // Convert array list to object list
        $books = array();
        foreach ($rows as $row) {
            $book = new Book($row);
            $books[] = $book;
        }
        return $books;
    }

}