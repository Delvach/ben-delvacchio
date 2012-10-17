<?php 

$PAGE_ID = 'projects';
$KEYWORDS = 'Ben, Del Vacchio, projects';
include("../lib/header.inc"); 

// Gallery images
$gallery = array(
    'original01',
    'original02',
    'new_board01',
    'new_board02',
    'new_board03',
    'new_board04',
    'dev01',
    'dev02',
    'dev03',
    'dev04',
    'dev05',
    'dev06',
    'dev07',
    'dev08',
    'dev09',
    'dev10',
    'dev11',
    'dev12',
    'dev13'
);

$num_images = count($gallery);
?>

<section>
    
    <article>
        <h2>ArduAxisAndAllies</h2>
        <a href="/images/aaa/aa_dogs01_full.jpg"><img class="default" src="/images/aaa/aa_dogs01.jpg" /></a>
        
        <p>Axis &amp; Allies is a board game that has seen numerous variations over the years.
        Upon learning that a few friends also played A&amp;A in high school we decided to start up
        a regular gaming session using the new 'Spring 1942' version.</p>
        
        <p>The first thing we noticed was that the company had skimped on how many physical playing
        pieces you get.  Instead of having a big pile of plastic tanks and men, you had a few of them
        and a bunch of chips that would sit under them and represent additional units.  It worked
        well enough for a few games, but we picked up another copy of the game so we could just see
        all the physical men, tanks and planes represented on the board.</p>
        
        <p>But they didn't fit.  All those little dudes were fighting for space.  The only thing to
        do was build a bigger board.  It didn't take me long to figure out that I wasn't the first
        person to have this idea, and found a scalable PDF version of the game board (Note to self:
        locate author of that PDF and link it here).</p>
        
        <p>Then I simply printed out a bunch of glossy prints and spent days
        meticulously piecing them together and securing them to three pieces of foam board that were
        individually small enough to be carried through a door, letting us keep the active game
        intact in a room where a cat doesn't jump up on the table.</p>
        
        <p>But something was still missing.  All that work just to play a game, struggling to keep
        track of what territories are owned by what countries, how much industrial production value
        each player had.</p>
        
        <p>I thought about wiring up the board with little lights.  But it would be a big project and
        the board would be unusable while I worked on it, to say nothing of forcing everyone to play
        through an active debugging process as I worked out the kinks.  Plus I was still determining
        the best way to wire and control the 63 RGB LED's it would take to let every 'controllable'
        country on the game board represent one of five different player colors.</p>
        
        <p>So I decided to re-use one of the original gameboards.  Well, both actually.  I decided
        to mount lights in one, and use the other to keep track of everything.  I initially just
        knew that I wanted lights, I wasn't sure how to handle the interface to keep track of it all.
        It started to seem like I'd be reliant on a tethered computer running Processing, but I
        wanted to make the whole thing stand-alone, so I eventually settled on two projects.</p>
        
        <p>The first project was the board itself, with all the lights, hardware to control them,
        XBee wireless module, and an Arduino.  This would run 'slave' software essentially telling
        the lights to do whatever is communicated via XBee.</p>
        
        <p>The second project was a handheld controller that broadcast commands wirelessly using an
        XBee module.  This being the future and everything I decided to use a touchscreen display,
        which then allowed me to develop a graphic interface with which to control the lights.  Since
        I've got years of experience developing interactives from scratch, this ended up being the
        perfect solution.</p>
        
        <p>I've got a LOT more details to post, but for now here are some pictures!</p>

        </p>
    
    </article>
    
    <article class="gallery">

<?php
    $xml=simplexml_load_file('../config/images.xml');
    
    foreach($xml->images->image as $img) {
        echo(
            "<a href='" 
            . $img->url
            . "'><img src='"
            . $img->url_thumb
            . "' /></a>\n");
    
    }

?>
    
    </article>
    

</section>

<?php include('../lib/footer.inc'); ?>