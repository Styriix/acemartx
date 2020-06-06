<?php if(!defined('s7V9pz')) {die();}?>
<?php
function cnf($v = "cnf") {
    $cnf["cnf"] = array(
        "mode" => 1,
        "name" => "Grupo - Baevox Framework",
        "tag" => "Something Beyond Limits",
        "poet" => "Baevox",
        "url" => "http://2vuvjvtadxaxshpx64nzdzstvtlgq75msecgrtmoqnzxubrn6x2cz3id.onion/",
        "region" => "Asia/Kolkata",
        "knob" => "knob",
        "door" => "door",
        "gem" => "gem",
        "bit" => "s7V9pz",
        "chief" => "admin",
        "codeword" => "pass",
        "ext" => "css,js,xml",
        "global" => "1",
        "appversion" => 1,
    );
$cnf["Grupo"] = array(
                'host' => '127.0.5.1',
                'db' => 'dupo',
                'user' => 'root',
                'pass' => 'apagmgaj',
                'prefix' => 'gr_'
                );
if ($v == "all") {
        return $cnf;
    } else if (isset($cnf[$v])) {
        return $cnf[$v];
    }
}
?>

