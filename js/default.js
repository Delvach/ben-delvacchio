

/**
 *  Called from all page footers
 */
function initialize() {
    
    // Get navigation XML and convert to JSON
    $.get(data.files.nav, function(xml) {
        data.nav = $.xml2json(xml);
        generate_navigation();
    });
    
}

/**
 *  Generate navigation HTML using previously parsed data
 */ 
function generate_navigation() {
    var container = $('#nav_container');
    var li, anchor;
    
    for(var i=0;i<data.nav.navigation.section.length;i++) {
        li = document.createElement('li');
        anchor = document.createElement('a');
        li.appendChild(anchor);
        anchor.innerHTML = data.nav.navigation.section[i].title;
        if(data.nav.navigation.section[i].id != data.page.id) anchor.href = data.nav.navigation.section[i].url;
        container.append(li);
    }
}

