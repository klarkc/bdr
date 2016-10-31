<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('SessionHelper', '/View/Helper/');

/**
 * CakePHP SessionExtHelper
 * @author klarkc
 */
class SessionExtHelper extends SessionHelper
{

       /**
  	 * Used to render the message set in Controller::Session::setFlash()
  	 *
  	 * @param string $key The [Message.]key you are rendering in the view.
  	 * @param array  $attrs Additional attributes to use for the creation of
	 * this flash message. Supports the 'params', and 'element' keys that are used in the helper.
  	 * @return string string
  	 */
    public function flash($key = 'flash', $attrs = array())
    {
           $ret = parent::flash($key, $attrs);
           return $ret;
    }
}
