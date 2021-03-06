<?php
require_once dirname(__FILE__) . '/../../../application/controllers/Auth.php';

/**
 * Test class for AuthController.
 * Generated by PHPUnit on 2012-07-30 at 08:44:23
 *
 * @backupGlobals enabled
 */
class AuthControllerTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var AuthController
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
	    $this->object = new \Yaf\Application(
		    __DIR__ . "/../../../application/configs/application.ini"
	    );

	    parent::setup();
	    // new AuthController;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {

    }

//    /**
//     * @covers AuthController::init
//     * @todo Implement testInit().
//     */
//    public function testInit() {
//        // Remove the following lines when you implement this test.
//        $this->markTestIncomplete(
//                'This test has not been implemented yet.'
//        );
//    }

    /**
     * @covers AuthController::indexAction
     * @todo Implement testIndexAction().
     */
    public function testIndexAction()
    {
        $params = array(
            'action'     => 'cadastrar',
            'controller' => 'Empresa',
            'module'     => 'app'
        );

        $urlParams = $this->urlizeOptions($params);
        $url       = $this->url($urlParams);
        $this->dispatch($url);

        // assertions
        $this->assertModule($urlParams['module']);
        $this->assertController($urlParams['controller']);
        $this->assertAction($urlParams['action']);

        /*$controller = new App_EmpresaController(
            $this->request,
            $this->response,
            $this->request->getParams()
        );
        $controller->cadastrarAction();

        $this->assertTrue(isset($controller->view->form));*/
        $boo = true;
        $this->assertTrue($boo);
    }
//
//    /**
//     * @covers AuthController::loginAction
//     * @todo Implement testLoginAction().
//     */
//    public function testLoginAction() {
//        // Remove the following lines when you implement this test.
//        $this->markTestIncomplete(
//                'This test has not been implemented yet.'
//        );
//    }

}

?>
