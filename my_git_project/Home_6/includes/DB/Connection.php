<?php
class Connection
{
    protected $_db = null;

    protected $_config = array();

    public function __construct() {
        try {
            $this->_config = require_once 'defaults.php';
            $this->_db = new PDO(
                "mysql:host={$this->_config['host']};dbname={$this->_config['db_name']};charset=utf8",
                $this->_config['name'],
                $this->_config['password']
            );
            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function execute($string, $params = array()) {
        $string = trim($string);
        $this->_db->beginTransaction();
        try {
            $stmt = $this->_db->prepare($string);
            $stmt->execute($params);
            $result = array(0 => array());
            if ($stmt->rowCount()) {
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            $this->_db->commit();
            return $result;
        } catch (PDOException $e) {
            $this->_db->rollBack();
            throw new PDOException($e->getMessage(), $e->getCode());
        } catch (Exception $e) {
            $this->_db->rollBack();
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }
}