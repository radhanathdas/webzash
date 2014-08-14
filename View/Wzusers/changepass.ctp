<?php
/**
 * The MIT License (MIT)
 *
 * Webzash - Easy to use web based double entry accounting software
 *
 * Copyright (c) 2014 Prashant Shah <pshah.mumbai@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
?>
<div class="wzusers changepass form">
<?php
		echo $this->Form->create('Wzuser');
		echo $this->Form->input('existing_password', array('type' => 'password', 'label' => __d('webzash', 'Existing password')));
		echo $this->Form->input('new_password', array('type' => 'password', 'label' => __d('webzash', 'New password')));
		echo $this->Form->end(__d('webzash', 'Submit'));

		if (AuthComponent::user('role') == 'admin') {
			echo $this->Html->link(__d('webzash', 'Back'), array('plugin' => 'webzash', 'controller' => 'admin', 'action' => 'index'));
		} else {
			echo $this->Html->link(__d('webzash', 'Back'), array('plugin' => 'webzash', 'controller' => 'dashboard', 'action' => 'index'));
		}
?>
</div>
