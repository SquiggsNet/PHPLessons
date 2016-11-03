<?php
interface iBusinessObject
{
    public static function retrieveSome($start,$count, $search);
    public function save();
}
?>
