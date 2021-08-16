<table class="tabel-data">
    <thead>
        <tr>
            <th>No</th>
            <th>Pelanggan</th>
            <th>Alamat</th>
            <th>Kode Pos</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($data as $value) { ?>
            <tr>
                <td align="center"><?= $no ?></td>
                <td><?= $value->nama_pengguna ?></td>
                <td><?= $value->alamat ?></td>
                <td><?= $value->kode_pos ?></td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>
<table border="0" style="width: 100%; padding-top:15px;">
    <tr>
        <td width="85%"></td>
        <td style="border-bottom: none;">
            Padang, <?= format_indo(date('Y-m-d')) ?><br>
            <br><br><br><br><br><br>
            Pemilik
        </td>
    </tr>
</table>