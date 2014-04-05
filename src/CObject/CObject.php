<?php
/**
 * Holding a instance of CLydia to enable use of $this in subclasses.
 *
 * @package LydiaCore
 */
class CObject {

    public $config;
    public $request;
    public $data;

    /**
     * Constructor
     */
    protected function __construct() {
        $itzy = CItzy::Instance();
        $this->config   = &$itzy->config;
        $this->request  = &$itzy->request;
        $this->data     = &$itzy->data;
    }

}