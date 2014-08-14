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
<table>
	<tr>
		<th><?php echo __d('webzash', 'Label'); ?></th>
		<th><?php echo __d('webzash', 'Name'); ?></th>
		<th><?php echo __d('webzash', 'Description'); ?></th>
		<th><?php echo __d('webzash', 'Prefix'); ?></th>
		<th><?php echo __d('webzash', 'Suffix'); ?></th>
		<th><?php echo __d('webzash', 'Zero Padding'); ?></th>
		<th><?php echo __d('webzash', 'Actions'); ?></th>
	</tr>
	<?php foreach ($entrytypes as $entrytype) { ?>
		<tr>
			<td><?php echo h($entrytype['Entrytype']['label']); ?></td>
			<td><?php echo h($entrytype['Entrytype']['name']); ?></td>
			<td><?php echo h($entrytype['Entrytype']['description']); ?></td>
			<td><?php echo h($entrytype['Entrytype']['prefix']); ?></td>
			<td><?php echo h($entrytype['Entrytype']['suffix']); ?></td>
			<td><?php echo h($entrytype['Entrytype']['zero_padding']); ?></td>
			<td>
				<?php echo $this->Html->link(__d('webzash', 'Edit'), array('plugin' => 'webzash', 'controller' => 'entrytypes', 'action' => 'edit', $entrytype['Entrytype']['id'])); ?>
				<?php echo $this->Form->postLink(__d('webzash', 'Delete'), array('plugin' => 'webzash', 'controller' => 'entrytypes', 'action' => 'delete', $entrytype['Entrytype']['id']), array('confirm' => __d('webzash', 'Are you sure ?'))); ?>
			</td>
		</tr>
	<?php } ?>
</table>
