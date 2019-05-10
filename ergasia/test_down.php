<html>
<p style="width: 70%;margin: auto;margin-top: 5%;font-size:larger;text-align:center">
Download a file from any URL</p>
<form method="post" ">
<input name="url" size="50" placeholder="Source URL" " required>
<input name="submit" type="submit" value="Download" ">
<p >
To <?php echo getcwd(); ?></p>


</form>
<?php
    // maximum execution time in seconds
    // set_time_limit (24 * 60 * 60);
    if (!isset($_POST['submit'])) die();
    // folder to save downloaded files to. must end with slash
    $destination_folder = '';
    $url = $_POST['url'];
    $newfname = $destination_folder . basename($url);
    /*  // old script
    $file = fopen ($url, "rb");
    if ($file) { $newf = fopen ($newfname, "wb");
      if ($newf)
      while(!feof($file)) { fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 ); }
    }
    if ($file) { fclose($file); }
    if ($newf) { fclose($newf); }
    */
    file_put_contents( $newfname, fopen($url, 'r'));
?>
</html>