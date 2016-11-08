<?php
class Target {
    public $R = 0;
    public $G = 0;
    public $B = 0;

    public function setColor( $name ) {

    }
    public function toLight( $n )
    {
        return $this;
    }
    public function redOnly()
    {
        return $this;
    }
}
?>
