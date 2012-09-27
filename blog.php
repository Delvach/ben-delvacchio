<? 

$PAGE_ID = 'blog';

include("lib/header.inc"); ?>

<section id="content">

    
    <article>
        <time datetime="2012-09-26">September 26, 2012</time>
        <p>This is my the first entry on my blog page.  Eventually I'll migrate this content to .xml,
        but for now I just need a few additional skeletal pages so I can create the navigation XML
        and probably use jQuery to parse it and insert navigation elements.</p>
        
    </article>
    
    <article>
        <time datetime="2012-09-27">September 27, 2012</time>
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
        developing a pretty look & feel for everything.</p>
        
    </article>


</section>

<? include('lib/footer.inc'); ?>