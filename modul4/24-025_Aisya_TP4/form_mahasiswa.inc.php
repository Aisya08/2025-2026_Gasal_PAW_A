<form method="post" action="form_mahasiswa.php">
    <label>Nama:</label><br>
    <input type="text" name="nama"
        value="<?php if (isset($_POST['nama'])) echo htmlspecialchars($_POST['nama']); ?>">
    <br><br>

    <label>Email:</label><br>
    <input type="text" name="email"
        value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
    <br><br>

    <label>Password:</label><br>
    <input type="password" name="password">
    <br><br>

    <label>NIM:</label><br>
    <input type="text" name="nim"
        value="<?php if (isset($_POST['nim'])) echo htmlspecialchars($_POST['nim']); ?>">
    <br><br>

    <label>Tanggal Lahir (YYYY-MM-DD):</label><br>
    <input type="text" name="tanggal"
        value="<?php if (isset($_POST['tanggal'])) echo htmlspecialchars($_POST['tanggal']); ?>">
    <br><br>

    <input type="submit" value="Submit">
</form>
