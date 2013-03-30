<?php

App::uses('Controller', 'Controller');
class AppController extends Controller {
	public $components = array('DebugKit.Toolbar');
	public $helpers = array("Html", "Form", "TwitterBootstrap.TwitterBootstrap", "Session");
}
