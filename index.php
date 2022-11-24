<?php
/*
  This file is part of gitBible.

  Copyright 2022 David Stansfield (www.davidstansfield.id.au).

  gitBible is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  gitBible is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with gitBible.  If not, see <https://www.gnu.org/licenses/>.
*/
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
p.warning {
  font-weight: bold;
  color: red;
}
td.num {
  padding-right: 0.5em;
  vertical-align: top;
}
td.title {
  padding-bottom: 1em;
  padding-top: 1em;
}
td.development, span.development {
  background-color: cyan;
}
</style>
</head>
<body>

<h1>gitBible</h1>

<p class='warning'>Note: This is an <i>exploratory</i> translation of Romans 1:1-23.</p>

<?php
$b = 'romans'; // book: current selection, romans
$c = 1; // chapter: current chapter, 1

$bName = file_get_contents("./$b/name.txt"); // book name: ./romans/name.txt is 'Romans'
echo "<h2>$bName</h2>\n";

echo "<h3>$c</h3>\n";

echo "<table>\n";
$scan  = scandir("./$b/$c"); // scans ./book/chapter for verse folders, e.g. scans ./romans/1
foreach($scan as $v) {
  $path = "./$b/$c/$v";
  if (($v<>'.')&&($v<>'..')&&(is_dir($path))) {
    // process verse folder
    if (file_exists("$path/title.txt")) { // print an interpretive title above the current verse
      $title = file_get_contents("$path/title.txt");
      echo "<tr><td class='title' colspan='2'><strong>$title</strong></td></tr>\n";
    }
    if (file_exists("$path/flag.txt")) { // check flag.txt
      $flagn = intval(file_get_contents("$path/flag.txt"));
      if ($flagn==1) {
        $flag=' development'; // used as CSS class, e.g. to indicate development in progress
      } else {
        $flag='';
      }
    } else {
      $flag = '';
    }
    $tr = file_get_contents("./$b/$c/$v/tr.txt"); // load the translation!
    $tr = nl2br($tr); // replace carriage returns with HTML breaks
    $tr = str_replace('  ','&emsp;',$tr); // replace double-space with tab (how does this render across browsers, though?)
    echo "<tr><td class='num'>".intval($v)."</td><td class='$flag'>$tr</td></tr>\n";
  }
}
echo "</table>\n";
?>

<p>(the translation is incomplete)</p>

&nbsp;

<hr>

<p><small><a href="">gitBible.com</a> is Copyright &copy; <?php echo date('Y'); ?> <a href="https://davidstansfield.id.au">David R. Stansfield</a>.<br>
The <a href="https://github.com/davidrstansfield/gitbible">gitBible repository</a> is released under the <a href="https://www.gnu.org/licenses/gpl-3.0.en.html">GNU General Public License 3.0</a>.<br>
</small></p>
</body>
</html>
