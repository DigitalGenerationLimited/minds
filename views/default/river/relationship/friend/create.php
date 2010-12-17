<?php
/**
 * Create friend river view
 */
$subject = $vars['item']->getSubjectEntity();
$object = $vars['item']->getObjectEntity();

$params = array(
	'href' => $object->getURL(),
	'text' => $object->name,
);
$object_link = elgg_view('output/url', $params);
$subject_icon = elgg_view("profile/icon", array('entity' => $subject, 'size' => 'tiny'));
$object_icon = elgg_view("profile/icon", array('entity' => $object, 'size' => 'tiny'));

echo elgg_echo("friends:river:add", array($object_link));

echo '<div class="elgg-river-content clearfix">';
echo $subject_icon;
echo '<span class="elgg-icon elgg-icon-following"></span>';
echo $object_icon;
echo '</div>';
