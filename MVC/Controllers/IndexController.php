<?php 

namespace Controllers;

use Libs\Controller;
use Libs\View;


class IndexController extends Controller
{

    public function cake($argument)
    {
        echo "<br><b>We bring you a cake, the arguments are $argument<b>";
    }

    public function index()
    {
        $view = $this->view;
        $view->render('index');
    }

}

?>

