<?php
//
// Classe Book
//

namespace mybooks\Domain;


class Book {

  /**
  * Book id
  *
  * @var integer
  */
  private $book_id;
  /**
  * Book title
  *
  * @var string
  */
  private $book_title;
  /**
  * Book title
  *
  * @var string
  */
  private $book_isbn;
  /**
  * Book isbn
  *
  * @var string
  */
  private $book_summary;
  /**
  * Auth id
  *
  * @var integer
  */
  private $auth_id;
  /**
  * Constructor
  * @param array The data to populate
  *
  */
  function __construct($array=array()) {
    $this->populate($array);
  }

  function getBook_id() {
    return $this->book_id;
  }
  function setBook_id($book_id) {
    $this->book_id=$book_id;
  }


  function getBook_title() {
    return $this->book_title;
  }
  function setBook_title($book_title) {
    $this->book_title=$book_title;
  }


  function getBook_isbn() {
    return $this->book_isbn;
  }
  function setBook_isbn($book_isbn) {
    $this->book_isbn=$book_isbn;
  }


  function getBook_summary() {
    return $this->book_summary;
  }
  function setBook_summary($book_summary) {
    $this->book_summary=$book_summary;
  }


  function getAuth_id() {
    return $this->auth_id;
  }
  function setAuth_id($auth_id) {
    $this->auth_id=$auth_id;
  }

/**
* Populate object properties with array
* @param array the array containing data
*/
function populate(array $array) {
  foreach ($array as $key => $value) {
    $method = 'set'.ucfirst($key);
    if (method_exists($this, $method))  {
      $this->$method($value);
    }
  }
}

} // End of Class