<?php
// Basic Variables
$title = "Wildflower";
$artist = "Billie Eilish";
$mood = "Bittersweet";

// Numeric Variables
$verseCount = 3;
$chorusCount = 3;

// Parts of Speech
$nouns = ["Things", "time", "heart", "girl", "world", "love", "shoulder", "July", "mind", "fever", "sign", "line", "life", "leather", "baby", "Valentine's day", "hotel", "eyes"];
$verbs = ["fall", "breaks", "wasn't", "showed", "fell", "let", "go", "was crying", "could do", "hold", "made", "remind", "burning", "cross", "moves", "ask", "couldn't be", "put", "see", "feels", "touch", "wonder", "hurt", "kept"];
$adjectives = ["good", "better", "different", "happy", "free", "slow", "familiar"];

// Song Sections
$verse1 = [
    "Things fall apart",
    "And time breaks your heart",
    "I wasn't there but I know",
    "She was your girl",
    "You showed her the world",
    "But fell out of love and you both let go"
];

$preChorus1 = [
    "She was crying on my shoulder",
    "All I could do was hold her",
    "Only made us closer until July",
    "Now, I know that you love me",
    "You don't need to remind me",
    "I should put it all behind me, shouldn't I?"
];

$chorus1 = [
    "But I see her in the back of my mind all the time",
    "Like a fever, like I’m burning alive, like a sign",
    "Did I cross the line?"
];

$verse2 = [
    "Well, good things don't last (Good things don't last)",
    "And life moves so fast (Life moves so fast)",
    "I'd never ask who was better (I'd never ask who was better)",
    "'Cause she couldn't be (Couldn't)",
    "More different from me (Different)",
    "Happy and free in leather (Happy)"
];

$preChorus2 = [
    "And I know that you love me (You love me)",
    "You don’t need to remind me (Remind me)",
    "Wanna put it all behind me, but baby"
];

$chorus2 = [
    "I see her in the back of my mind (Back of my mind) all the time (All the time)",
    "Feels like a fever (Like a fever), like I’m burning alive (Burning alive), like a sign",
    "Did I cross the line?"
];

$bridge = [
    "You say no one knows you so well (Oh)",
    "But every time you touch me, I just wonder how she felt",
    "Valentine's Day, crying in the hotel",
    "I know you didn't mean to hurt me, so I kept it to myself"
];

$chorus3 = [
    "And I wonder",
    "Do you see her in the back of your mind in my eyes?"
];

$outro = [
    "You say no one knows you so well",
    "But every time you touch me, I just wonder how she felt",
    "Valentine's Day, cryin' in the hotel",
    "I know you didn’t mean to hurt me, so I kept it to myself"
];

// Operators
$totalSection = $verseCount + $chorusCount + 2;
$chorusLabel = $chorusCount . " repeats";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title . " - " . $artist; ?></title>
<style>
body {
    font-family: Arial, sans-serif;
    text-align: center;
    background-color: #f2f0ef;
    margin: 0;
    padding: 20px;
}

h1 { 
    margin-bottom: 5px; 
}

p.meta {
    color: #0a1d32;
    margin-top: 0;
    margin-bottom: 10px;
}

h2 {
font-weight: bold;
text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
margin: 20px 0 5px 0;
}

img.album-cover {
    width: 300px;
    height: auto;
    margin-bottom: 20px;
    border-radius: 10px;
}

</style>
</head>
<body>
    <img class="album-cover" src="https://images.genius.com/5e7bf410789d01a90983b2641b88e5bd.1000x1000x1.png">

<h1><?php echo $title; ?></h1>
<p class="meta">Artist: <?php echo $artist; ?></p>
<h2>Mood: <?php echo $mood; ?></h2>
<p><strong>Total Sections:</strong> <?php echo $totalSection; ?></p>
<p><strong>Chorus Label:</strong> <?php echo $chorusLabel; ?></p>

<h3>Verse 1</h3>
<div class="verse1">
    <?php foreach ($verse1 as $line) { echo "<p>{$line}</p>"; } ?>
</div>

<h3>Pre-Chorus 1</h3>
<div class="preChorus1">
    <?php foreach ($preChorus1 as $line) { echo "<p>{$line}</p>"; } ?>
</div>

<h3>Chorus 1</h3>
<div class="chorus1">
    <?php foreach ($chorus1 as $line) { echo "<p>{$line}</p>"; } ?>
</div>

<h3>Verse 2</h3>
<div class="verse2">
    <?php foreach ($verse2 as $line) { echo "<p>{$line}</p>"; } ?>
</div>

<h3>Pre-Chorus 2</h3>
<div class="preChorus2">
    <?php foreach ($preChorus2 as $line) { echo "<p>{$line}</p>"; } ?>
</div>

<h3>Chorus 2</h3>
<div class="chorus2">
    <?php foreach ($chorus2 as $line) { echo "<p>{$line}</p>"; } ?>
</div>

<h3>Bridge</h3>
<div class="bridge">
    <?php foreach ($bridge as $line) { echo "<p>{$line}</p>"; } ?>
</div>

<h3>Chorus 3</h3>
<div class="chorus3">
    <?php foreach ($chorus3 as $line) { echo "<p>{$line}</p>"; } ?>
</div>

<h3>Outro</h3>
<div class="outro">
    <?php foreach ($outro as $line) { echo "<p>{$line}</p>"; } ?>
</div>

</body>
</html>
