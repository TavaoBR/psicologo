<?php 

namespace Src\Model\Agenda;
use Src\Database\Data\Agenda\Select;

class Read {

    private $select;

    public function __construct(){
        $this->select = new Select;
    }

    public function list(){
      $select = $this->select->agenda();
      return array($select[0], $select[1]);
    }
}