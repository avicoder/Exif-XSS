<?php
$filename = $_GET['filename'];
echo $filename . "<br/>";
$exif = exif_read_data('tests/' . $filename, 'IFD0');
echo $exif===false ? "No header data found.
\n" : "Image contains headers"
."<br/>";
$exif = exif_read_data('tests/' . $filename, 0, true);
foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
        echo "$key.$name: $val"."<br/>";
    }
}
?>