<?php
namespace app\Models;

use app\Core\Model;
class User extends Model{

    protected $table = 'users';

    public function __construct()
    {
        parent::__construct();
    }
}

?>