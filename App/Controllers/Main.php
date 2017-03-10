<?php
namespace App\Controllers;

use Core\Controller;

class Main extends Controller {

    function index()
    {
        $template = $this->loadView('main_view');
        $template->render();
    }

}

?>
