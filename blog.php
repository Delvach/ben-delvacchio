<?php 

$PAGE_ID = 'blog';
$KEYWORDS = 'Ben, Del Vacchio, Blog';
include("lib/header.inc"); ?>

<section>
    
    <article>
        <h2><time datetime="2012-10-17">October 17, 2012</time></h2>
        
        <p>Starting to play with a bit more PHP, first server-side XML translation into content.
        </p>
    
    </article>
    
    <article>
        <h2><time datetime="2012-10-15">October 15, 2012</time></h2>
        
        <p>I've started doing development locally.  Time to start playing around with outer
        containers and pop a few sprites into the nav, and probably throw together a little JS
        for multi-level navigation.
        </p>
    
    </article>
    
    
    <article>
        <h2><time datetime="2012-10-11">October 11, 2012</time></h2>
        
        <p>Getting ready to implement a slightly better design, need some CSS background
        sprites and related minor magic to pretty up the header, and I've been naughty about
        not doing proper cross-browser testing yet.  I should probably fire up local PHP
        and stop doing all my development live on the site since git is working so nicely.
        </p>
    
    </article>
    
    <article>
        <h2><time datetime="2012-10-08">October 8, 2012</time></h2>
        
        <p>Started documenting ArduAxisAndAllies on the <a href="/project/">Project</a> page,
        created a bunch of thumbnails and uploaded linked images.  Started integration of Facebook
        'Like' button.
        </p>
    
    </article>
    
    
    <article>
        <h2><time datetime="2012-10-03">October 3, 2012</time></h2>
        
        <p>I've stabilized a basic appearance for the header.</p>
    
    </article>
    
    
    <article>
        <h2><time datetime="2012-09-27">September 27, 2012</time></h2>
        
        <p>Added jQuery, CSS3PIE, HTML5 shiv and created a basic nav.xml file.</p>
        <p>Haven't pushed any recent changes to the github repository but I'm currently doing all
        development 'live' on this server, so I don't need to update my local sandbox just yet.</p>
        <p>Focusing on getting the site's infrastructure together before trying to make it look too 
        pretty, so let's hope that nobody but me and the web bots are looking at this version!</p>
        <p>I do realize that I could just use a .js file and <code>jQuery.parseJSON()</code> for the
        navigation data.  That would be easier than parsing an XML document manually or using
        <code>jQuery.xml2json</code>.  But what fun would that be?</p>
        <p>... and now that's done.  Using jQuery is so easy that it almost feels like cheating.  In
        my day we manipulated the <abbr title="Document Object Model">DOM</abbr> manually, and we
        liked it!.  Well that takes care of the skeletal infrastructure, and I've even added
        library support for IE versions below 9.  Guess now I need to add some real content and
        start developing a pretty look &amp; feel for everything.</p>
        
    </article>
    
    
    <article>
        <h2><time datetime="2012-09-26">September 26, 2012</time></h2>
        
        <p>This is my the first entry on my blog page.  Eventually I'll migrate this content to .xml,
        but for now I just need a few additional skeletal pages so I can create the navigation XML
        and probably use jQuery to parse it and insert navigation elements.</p>
        
    </article>
    
    

</section>

<?php include('lib/footer.inc'); ?>