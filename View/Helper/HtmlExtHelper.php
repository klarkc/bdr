<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('Bs3HtmlHelper', '/Plugin/Bs3Helpers/View/Helper/');

/**
 * CakePHP HtmlExtHelper
 * @author klarkc
 */
class HtmlExtHelper extends Bs3HtmlHelper {

	private static $__dataTableLoad = false;

	private static $__jqueryUILoad = false;

	/**
	 * Returns a formatted DIV tag for HTML FORMs.
	 *
	 * ### Options
	 *
	 * - `escape` Whether or not the contents should be html_entity escaped.
	 *
	 * @param string $class CSS class name of the div element.
	 * @param string|array $text If array is given, render each
	 *   array item as a div, otherwise render just one div with the content
	 *   If null, only a start tag will be printed
	 * @param array $options Additional HTML attributes of the DIV tag
	 * @return string The formatted DIV element
	 * @link http://book.cakephp.org/2.0/en/core-libraries/helpers/html.html#HtmlHelper::div
	 */
	public function div($class = null, $text = null, $options = array()) {
		if (is_array($text)) {
			$return = array();
			foreach ($text as $item) {
				$return[] = parent::div($class, $item, $options);
			}
			return call_user_func_array('nl', $return);
		}

		return parent::div($class, $text, $options);
	}

	/**
	 * Importa jquery, caso ainda não tenha sido feito
	 *
	 * @param bool $inline se true carrega inline, caso contrario no head
	 * @return void
	 */
	public function loadJqueryUI($inline = false) {
		if (!$this->_jqueryUILoad) {
			// jquery-ui CSS
			echo $this->css(
				'/third-party/jquery-ui/jquery-ui-1.10.3.custom.css',
				array('inline' => $inline)
			);

			// jquery-ui JavaScript
			echo $this->script('/third-party/jquery-ui/jquery-ui.js', array('inline' => $inline));
			$this->_jqueryUILoad = false;
		}
	}
}
