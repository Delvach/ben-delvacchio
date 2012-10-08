

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
    var li, anchor, li_child;
    
    // Loop through nav data and generate <li> tags
    // Only generate anchors if NOT on the current page
    // TODO - update this behavior if contextual CSS menus are implemented
    for(var i=0;i<data.nav.navigation.section.length;i++) {
        li = document.createElement('li');
        if(data.nav.navigation.section[i].id == data.page.id) {
            li.className = 'active';
            li.innerHTML = data.nav.navigation.section[i].title;
        } else {
            anchor = document.createElement('a');
            li.appendChild(anchor);
            anchor.innerHTML = data.nav.navigation.section[i].title;
            anchor.href = data.nav.navigation.section[i].url;
        }
        
        container.append(li);
    }
}

