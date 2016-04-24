<?php

Class indexController Extends baseController {

public function index() {
	/*** set a template variable ***/
       /* $this->registry->template->welcome = 'ROUTER in place !!! <br>Welcome static message | file : indexController.php | Folder : controller';*/
	/*** load the index template ***/
        $this->registry->template->show('index');
}

}

?>
