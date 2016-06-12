<?php
/**
* Author DAO
*/
namespace mybooks\DAO;

use Doctrine\DBAL\Connection;
use mybooks\Domain\Author;

class AuthorDAO extends DAO
{
    /**
     * Get author from ID
     *
     * @param integer Author ID
     *
     * @return \MicroCMS\Domain\Author
     * @throws Exception if no matching Author is found
     */

    public function find($auth_id) {
        $sql = "select * from author where auth_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($auth_id));
        if ($row) {
            $author = new Author($row);
            return $author;
        }
        else {
            throw new \Exception("No Author for ID " . $auth_id);
        }
    }

}