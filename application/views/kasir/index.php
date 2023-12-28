<!-- application/views/kasir/index.php -->
<html>
<head>
    <title>Program Kasir Sederhana</title>
</head>
<body>
    <h1>Program Kasir Sederhana</h1>
    <form action="<?= base_url('kasir/proses_pembelian'); ?>" method="post">
        <label>Total Harga:</label>
        <input type="text" name="total_harga" required><br>

        <label>Uang Pembayaran:</label>
        <input type="text" name="uang_pembayaran" required><br>

        <!-- Tambahkan csrf token -->
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">

        <button type="submit">Proses Pembelian</button>
    </form>
</body>
</html>
