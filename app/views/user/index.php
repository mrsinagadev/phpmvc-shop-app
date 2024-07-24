<div class="ui container" style="margin-top: 5rem; display: flex; justify-content: center; max-width: 60%! important">

	<?php include_once('../app/views/components/flash.php') ?>

	<table class="ui table">
		<thead>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Role</th>
				<th>
					<a href="<?php echo BASE_URL ?>/user/create" class="ui positive labeled icon button fluid">
						<i class="plus icon"></i>Tambah
					</a>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data['users'] as $i => $user) : ?>
				<tr>
					<td><?php echo $i + 1 ?></td>
					<td><?php echo $user['username'] ?></td>
					<td><?php echo $user['role'] ?></td>
					<td class="collapsing">
						<a href="<?php echo BASE_URL ?>/user/edit/<?php echo $user['id'] ?>" class="ui yellow mini labeled icon button">
							<i class="edit icon"></i>Ubah
						</a>
						<a href="<?php echo BASE_URL ?>/user/destroy/<?php echo $user['id'] ?>" class="ui mini labeled negative icon button <?php echo $user['id'] == 1 ? 'disabled' : '' ?>" onclick="return confirm('Yakin ingin menghapus?')">
							<i class="trash icon"></i>Hapus
						</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>