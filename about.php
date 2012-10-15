<?php 

$PAGE_ID = 'about';
$KEYWORDS = 'Ben, Del Vacchio, about, Broomall, Kutztown, Newtown Square, College, High School, Audubon, Oaks, Bike, Biking, Cycling, Kayak, Kayaking, Arduino, Electronics, HTML, JavaScript, CSS, jQuery, XML, git';
include("lib/header.inc"); ?>

<section>    
    <article>
        <h2>History</h2>
        
        <img src="/images/ben/headshot01.jpg" class="about"/>
        
        <p>Ben was born in <strong>1974</strong> and raised in <strong>Broomall, PA.</strong></p>
        
        <p>He spent four years involved in <strong>Video Crew</strong> and <strong>Stage Crew</strong> while at
        <strong>Marple Newtown Senior High</strong> in <strong>Newtown Square, PA</strong>.  Graduating in 1993, Ben then began 
        studying for a degree in Telecommunications at <strong>Kutztown University</strong> in Kutztown, PA.</p>
        
        <p>While at Kutztown he taught himself <strong>HTML</strong>, <strong>JavaScript</strong>, and
        graphics using <strong>Adobe Photoshop</strong> and <strong>Illustrator</strong>.  Switching majors to English with a focus
        in journalism, he became heavily involved with <strong>The Keystone Newspaper</strong>, KU's student newspaper.</p>
        
        <p>Ben graduated from Kutztown in 1998 with a <strong>Bachelor's degree in English, Professional Writing</strong>
        and has a <strong>minor in Public Relations</strong>.</p>
        
        <p>In 2000 he moved to Mechanicsburg, PA to work for a small software start-up company called
        <strong>CommNav, Inc.</strong>  He spent several years as a <strong>PHP developer</strong> working on CommNav's web application
        products, providing graphics support, and building JavaScript libraries.</p>
        
        <img src="/images/ben/books01.jpg" class="books"/>
        
        <p>In 2004 CommNav was dissolved into its parent company, <strong>Perfect Order</strong>, which was later
        re-named to <strong>Versatile Systems</strong>.  Ben transitioned to the position of <strong>Consultant</strong> and began
        working for <strong>Comcast, Inc.</strong> in <strong>Philadelphia</strong>.  He played a vital role within Comcast's growing
        web &amp; multi-media-focused department, <strong>Comcast Interactive Media</strong>.  While there he was
        regularly responsible for customer-facing web projects.  He spent roughly a year as the
        principle programmer for <strong>TV Planner</strong>, Comcast's first online <strong>TV grid</strong> 
        and <strong>program guide</strong>.
        
        <p>Ben was hired as a full-time <strong>Comcast employee</strong> in 2005.  He spent the next
        several years building content and functionality for various aspects of <strong>comcast.net</strong>.</p>
        
        <p>Currently living in the <strong>Audubon/Oaks</strong> area of Pennsylvania, Ben enjoys 
        <strong>cycling</strong> the local trails and more recently <strong>kayaking</strong> the local waterways.</p>
        
        <p>A lifelong <strong>hobbyist</strong>, Ben spent his earlier years <strong>building models</strong>,
        <strong>painting miniatures</strong>, <strong>sculpting</strong>, making jewelry from <strong>embroidery floss</strong>,
        experimenting with <strong>LEGO Mindstorms</strong>, maintaining and <strong>flying RC helicopters</strong>,
        driving <strong>RC cars</strong>, <strong>crashing</strong>, and most recently learning how
        to program the physical world using <strong>Arduino</strong>, more details of which will 
        be getting posted on <a href="/projects/">here</a> shortly.</p>
        
    </article>    

    
    <article>
        <h2>About This Site</h2>
        
        <p>This site is in the process of being developed from scratch.  It is intended to be a platform
        with which to demonstrate my abilities as a <strong>web developer</strong>, and to provide me a scratchbox
        where I can experiment with various projects.</p>
        
        <p>It uses just enough <strong>PHP</strong> to provide consistency among the current pages and allow for some
        scalability.  Some data (currently only navigation) is stored as <strong>XML</strong> and parsed via the <strong>xml2json</strong> 
        extension for <strong>jQuery</strong>.</p>
        
        <p>The current infrastructure is designed to be simple, as my current focus is honing my
        <strong>HTML5</strong>, <strong>CSS3</strong> and <strong>jQuery</strong> skills.</p>
    </article>
</section>



<?php include('lib/footer.inc'); ?>