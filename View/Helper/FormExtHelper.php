<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('Bs3FormHelper', '/Plugin/Bs3Helpers/View/Helper/');

/**
 * CakePHP FormExtHelper
 * @author klarkc
 */
class FormExtHelper extends Bs3FormHelper {

	/**
	 * Gera um botao com icone
	 *
	 * @param string $icon nome do icone font awesome
	 * @param mixed $options opcoes para o botao
	 * @return string renderizacao do botao
	 */
	public function iconButton($icon, $options) {
		$icon = $this->Html->icon($icon);
		$caption = "";

		if (!$options['class']) {
			$options['class'] = 'btn btn-default';
		}

		$options['escape'] = false;

		if (isset($options['caption'])) {
			$caption = $options['caption'];
			unset($options['caption']);
		}

		if (isset($options['link'])) {
			$link = $options['link'];
			unset($options['link']);
			return $this->Html->link(nl($icon, $caption), $link, $options);
		}

		return $this->button(nl($icon, $caption), $options);
	}

}
