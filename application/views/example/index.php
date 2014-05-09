<section>
	
	<table class="table" style="width:400px;">
		<thead>
			<tr>
				<th style="width:1px;">  </th>
				<th style="width:1px;">  </th>
				<th style="width:1px;">  </th>
				<th>id </th>
				<th>name </th>
				<th>saraly</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($items)) : ?>
			<?php $i=1;foreach ($items as $item): ?>
				<tr>
					<td><?php echo btn_delete(base_url('example/delete/'.$item->id));?></td>
					<td><?php echo btn_edit(base_url('example/edit/'.$item->id));?></td>
 					<td><?php echo btn_simple('example/info/'.$item->id, 'glyphicon-info-sign'); ?> </td>
					<td><?=$i++;?></td>
					<td><?=$item->name?></td>
					<td><?=$item->salary?></td>
				</tr>

			<?php endforeach;?>
			<?php endif;?>
		</tbody>
		
	</table>

</section>