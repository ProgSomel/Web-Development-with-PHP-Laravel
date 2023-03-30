<?php
//? FOr String we Can use single quotes and double quotes

$name = "Rakib";
$string01 = "my name is $name";
echo $string01;
echo "\n";

$heredoc = <<<EOD
Data 1
New Line {$name}
More Text
EOD;
echo $heredoc;
echo "\n";

//! Now DOC: Using single quotes
$heredoc = <<<'EOD'
Data 1
New Line {$name}
More Text
EOD;
echo $heredoc;
