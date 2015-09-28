<?php
/**
 *
 * class skeleton
 * 
 * @author  Zsolt Sándor <zsolt.sandor@gmx.com>
 * @license https://opensource.org/licenses/MIT
 * @version 0.0.1
 */
 
 Namespace Application;
 
 class Application {
 
    /**
     *
     * The route failed to match at isSecureMatch().
     *
     * @var string | array | int
     *
     */
    protected $whatever;

    /**
     * Processes the ...
     *
     * @param param
     * @return void | mixed | array | string | bool
     */
    public function __construct()
    {
        //
		echo '__construct <br/>';
    }

    public function __invoke()
    {
        //
		echo '__invoke <br/>';
    }

    public function __destruct()
    {
        //
		echo '__destruct <br/>';
    }

}
