<?php
interface DBConnection{
    public function connect();
}
class MySQLConnection implements DBConnection{
    public function connect() {}
}
class OracleConnection implements DBConnection{
    public function connect() {}
}
class MongoConnection implements DBConnection{
    public function connect() {}
}

class UsuarioDAO{
    private $db;

    public function __construct(DBConnection $dbCon){
        $this->db = $dbCon;    
    }
}






$dbCon = new MongoConnection();

$usuarioDao = new UsuarioDAO( $dbCon );
$usuario2Dao = new UsuarioDAO( $dbCon );