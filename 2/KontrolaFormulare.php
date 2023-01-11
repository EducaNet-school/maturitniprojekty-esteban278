<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    if (str_word_count($name) < 2) {
        $error1 = "Jmeno musi mit minimalne 2 slova.";
    }
    if (strlen($address) < 10) {
        $error2 = "Adresa musi mit minimalne 10 znaku.";
    }
}
?>
<form method="post" action="">
    <label for="name">Jméno:</label>
    <input type="text" id="name" name="name">
    <?php if (isset($error1)) { ?>
        <p style="color:red;"><?php echo $error1; ?></p>
    <?php } ?>
    <br>
    <label for="address">Adresa:</label>
    <textarea id="address" name="address"></textarea>
    <?php if (isset($error2)) { ?>
        <p style="color:red;"><?php echo $error2; ?></p>
    <?php } ?>
    <br>
    <input type="submit" name="submit" value="Odeslat">
</form>