<?php
interface iBusinessObject
{
    public static function retrieveSome($start,$count, $search);
    public static function retrieveOne($id);
    public function save();
    public function update($id);
}
?>
