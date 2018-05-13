Ini halaman Contact <br>
<?php
  echo form_open('contact/proses');

  echo form_input('fullname','')."<br>"."<br>";
  echo form_input('email','')."<br>"."<br>";
  echo form_textarea('message','')."<br>"."<br>";

  echo form_submit('submit','Simpan')."<br>"."<br>";

  echo form_close();
 ?>
