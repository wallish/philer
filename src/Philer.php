<?php
namespace Philer;

use Philer\Object;

class Philer
{
    /**
     * Display message
     *
     * @return void
     */
    public function display()
    {
        $msg = new Object\Message();
        echo $msg->getStringMessage();
    }
}
