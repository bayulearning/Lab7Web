<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($artikel) > 0): ?>
            <?php foreach ($artikel as $a): ?>
                <tr>
                    <td><?= $a['id']; ?></td>
                    <td>
                        <b><?= $a['judul']; ?></b>
                        <p><small><?= substr(strip_tags($a['isi']), 0, 50); ?></small></p>
                    </td>
                    <td><?= $a['nama_kategori']; ?></td>
                    <td><?= $a['status']; ?></td>
                    <td>
                        <a class="btn btn-sm btn-info" href="/admin/artikel/edit/<?= $a['id']; ?>">Ubah</a>
                        <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin menghapus data?');" href="/admin/artikel/delete/<?= $a['id']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5">Tidak ada data.</td></tr>
        <?php endif; ?>
    </tbody>
</table>
