<?php

Class workController Extends baseController {

public function index() 
{
        $this->registry->template->work_heading = 'This is the work Index';
        $this->registry->template->show('work_index');
}


public function view(){

	/*** should not have to call this here.... FIX ME ***/

	$this->registry->template->work_heading = 'This is the work heading';
	$this->registry->template->work_content = 'This is the work content';
	$this->registry->template->show('work_view');
}

}
?>
