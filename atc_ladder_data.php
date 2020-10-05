<?php 

$array = array();
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$flags = array("brazil", "turkey", "germany", "france", "south_korea", "canada", "united_kingdom_great_britain_", "sweden", "italy", "paraguay" );
$playerNames = array("Karrigan","Abathur","Root.CatZ","EG Stephano","Zeratul","BroodLord","Vantilator","SilentOsiris", "Parasetamol", "EpistemolojikAnlamlar");
$limit += 8 + $page;

for ($i = $page; $i < $limit; $i++) { 
  $array['ladderData'][] = array(
    'playerName' => $playerNames[mt_rand(0,9)],
    'rating' => 4332 - ($page * $i),
    'rank' => $i,
    'flag' => $flags[mt_rand(0,9)]
  );
}

header('Content-Type: application/json');
echo json_encode($array);