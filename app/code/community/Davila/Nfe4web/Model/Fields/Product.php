<?php
/**
 * MIT LICENSE 
 * Copyright (c) 2014 Gabriela D'Ávila, http://davila.blog.br
 * http://github.com/gabidavila
 * 
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 * 
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @category    Community
 * @package     Davila_Nfe4web
 * @copyright   Copyright (c) 2014 Gabriela D'Ávila (http://davila.blog.br)
 * @license     http://opensource.org/licenses/MIT  MIT License
 */
 
/**
 * Carrega as opcoes de produtos
 **/
class Davila_Nfe4web_Model_Fields_Product extends Mage_Core_Model_Abstract {
	protected function _construct() {
		$this->_init('nfe4web/fields_product');
	}

	public function toOptionArray() {
		$fields = Mage::helper('nfe4web/data')->getFields('catalog_product');
		$options = array();
		
		foreach($fields as $key => $value) {
			if(strlen($value['frontend_label']) != 0) {
				$options[$value['frontend_label']] = array('value' => $value['attribute_code'], 'label' => $value['frontend_label']);
			}
		}
		
		return $options;
	}
}