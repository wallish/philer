<?php
namespace Philer\Object;

class Message
{
    /**
     * The message.
     *
     * @var string
     */
    protected $message;

    /**
     * The author.
     *
     * @var string
     */
    protected $author;


    /**
     * The author.
     *
     * @var array
     */
    protected $data;


    function __construct()
    {
        $this->data = require dirname(__DIR__) . '/config/data.php';
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return array_rand($this->data, 1);
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getStringMessage()
    {
        return array_rand($this->data, 1);
    }
}