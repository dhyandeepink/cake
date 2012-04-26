<h1>Edit Pasar</h1>
<?php echo $this->Form->create('Pasar',array('action'=>'edit'));?>
<table>
	<tr>
		<td>  Kode Pasar </td><td>:</td>
		<td> <?php echo $this->Form->input('kode_pasar'); ?> </td>
	</tr>
	<tr>
		<td>  Nama Pasar </td><td>:</td>
		<td> <?php echo $this->Form->input('nama_pasar'); ?> </td>
	</tr>
	<tr>
		<td>  Alamat</td><td>:</td>
		<td> <?php echo $this->Form->input('alamat'); ?> </td>
	</tr>
	<tr>
		<td><?php echo $this->Form->end('Save');?></td>
	</tr>

</table>


