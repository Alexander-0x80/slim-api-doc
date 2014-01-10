#<?= $template_data["title"] ."\n" ?>
<?php foreach($template_data["contents"] as $data) { ?>
Route | Method | Description
------|--------|------------
<?php if (sizeof($data["route_data"]) == 4) { ?>
`<?= $data["route_data"][2] ?>` | <?= strtoupper($data["route_data"][1]) ?> | <?= $data["doc"]["description"] ."\n" ?>
<?php } ?>
<?php if(!empty($data["doc"]["params"])) { ?>
<?="\n"?>
<?php foreach ($data["doc"]["params"] as $param) { ?>
<?php if (sizeof($param) == 4) { ?>
* `{<?= $param[1] ?>}`->`<?= $param[2] ?>` :: <?= $param[3] . "\n"?>
<?php } ?>
<?php } ?>
<?php } ?>
<?="\n---\n"?>
<?php } ?>
