<!DOCTYPE html>
<html>
<html lang="en">

<head>
  <title>Tambah Data</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css3.css"> 
</head>

<body>

<div class="container">  
<div id="contact">
    <h3>Tambah Data</h3>
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("jadwal/tambah"); ?>
    <fieldset>
      <input placeholder="Id Perusahaan" name="input_no" type="text" value="<?php echo set_value('input_Id_Perusahaan'); ?>" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Nama Perusahaan" name="input_hari" type="text" value="<?php echo set_value('input_Nama Perusahaan'); ?>" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="No Telp" name="input_mk" type="text" value="<?php echo set_value('input_ No. Telp Perusahaan'); ?>" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Email" name="input_dosen" type="text" value="<?php echo set_value('input_Email Perusahaan'); ?>" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Alamat Perusahaan" name="input_kode" type="text" value="<?php echo set_value('input_Alamat Perusahaan'); ?>" tabindex="5" required>
    </fieldset>
<?php echo form_close(); ?>
</div>
</div>

</body>
</html>

