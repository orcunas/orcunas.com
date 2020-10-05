<?php 

$array = array();
$flags = array("brazil", "turkey", "germany", "france", "south_korea", "canada", "united_kingdom_great_britain_", "sweden", "italy", "paraguay" );
$playerNames = array("Karrigan","Abathur","Root.CatZ","EG Stephano","Zeratul","BroodLord","Vantilator","SilentOsiris", "Parasetamol", "EpistemolojikAnlamlar");
$avatars = array("char1","char2");
$rating_images = array("srank0a","srank1a","srank2a","srank3a","srank4a","srank5a","srank6a");
$perk_images = array("firstaid");
$perk_title = array("First Aid");
$perk_description = array("Reduces enemy movement by 1");
$limit = rand(0,2);

// yeey

for ($i = 0; $i <= $limit; $i++) {
    $perk = mt_rand(0,0);
    $array[] = array(
        'id'                => rand(0,10),
        'hero_name'         => $playerNames[mt_rand(0,9)],
        'hero_flag'         => $flags[mt_rand(0,9)],
        'hero_avatar'       => $avatars[mt_rand(0,1)],
        "hp"                => mt_rand(1,10),
        "dmg"               => mt_rand(1,10),
        "crt"               => mt_rand(1,10),
        "lck"               => mt_rand(1,10),
        "hero_id"           => mt_rand(1,100000),
        "rank"              => mt_rand(1,10000000),
        "rating"            => mt_rand(1,5000),
        "rating_image"      => $rating_images[mt_rand(0,6)],
        "perk_image"        => $perk_images[$perk],
        "perk_title"        => $perk_title[$perk],
        "perk_description"  => $perk_description[$perk],
    );
}

header('Content-Type: application/json');
echo json_encode($array);