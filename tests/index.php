<?php

$funct_dir = __DIR__."/../src/functions/";
$tests_dir = __DIR__;

$funct_scan = scandir($funct_dir);
$tests_scan = scandir($tests_dir);

$tests = [];

foreach ($funct_scan as $funct_file) 
{
    if (preg_match("/\.php/", $funct_file))
    {
        $funct_name = substr($funct_file, 0, -4);
        
        if (!isset($tests[$funct_name])) 
        {
            $tests[$funct_name] = [];
        }

        $tests[$funct_name]['funct'] = $funct_dir.$funct_file;
        $tests[$funct_name]['test'] = null;
    }
}

foreach ($tests_scan as $test_file) 
{

    if (preg_match("/\.php/", $test_file))
    {
        $test_name = substr(strtolower($test_file), 0, -4);

        if (isset($tests[$test_name]))
        {
            $tests[$test_name]['test'] = $test_file;
        }
    }
}

?>

<h1>XPL Functions Tests</h1>

<ul>
<?php foreach ($tests as $key => $files): ?>
    <li>
        <strong><?= $key ?></strong>

        <?php if ($files['test']): ?>
            <a href="<?= $key ?>.php">test</a>
        <?php else: ?>
            <i>This function have no test.</i>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul>