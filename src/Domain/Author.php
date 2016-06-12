<?php
/**
* Classe Author
*/

namespace mybooks\Domain;

class Author {

/**
* Author id
*
* @var integer
*/
private $auth_id;
/**
* Author first name
*
* @var string
*/
private $auth_first_name;
/**
* Author last name
*
* @var string
*/
private $auth_last_name;

/**
* Constructor
* @param array The data to populate
*/
function __construct($array=array()) {
  $this->populate($array);
}

function getAuth_id() {
  return $this->auth_id;
}
function setAuth_id($auth_id) {
  $this->auth_id=$auth_id;
}

function getAuth_first_name() {
  return $this->auth_first_name;
}
function setAuth_first_name($auth_first_name) {
  $this->auth_first_name=$auth_first_name;
}

function getAuth_last_name() {
  return $this->auth_last_name;
}
function setAuth_last_name($auth_last_name) {
  $this->auth_last_name=$auth_last_name;
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