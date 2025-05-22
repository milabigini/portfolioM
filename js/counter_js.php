if (self._FC2COUNTER38590160_1) {
    _FC2COUNTER38590160_1.disp_img = function() {
        var current = false;
        
        // Controleer of het script correct wordt geplaatst in de HTML
        if ('currentScript' in document && 'parentNode' in document.currentScript && document.currentScript.parentNode != null && 'tagName' in document.currentScript.parentNode && document.currentScript.parentNode.tagName.toUpperCase() != 'HEAD') {
            current = document.currentScript;
        } else {
            current = false;
        }

        // HTML-inhoud die moet worden ingevoegd
        var htmlContent = '<a href="https://counter.fc2.com/" rel="noopener" target="_blank" onMouseOver=_FC2COUNTER38590160_1.show_graph(event); onMouseOut=_FC2COUNTER38590160_1.hide_graph(event);>' +
            '<span><nobr>' +
            '<img border="0" src="https://counter1-cdn-ssl.fc2.com/cimg/19/00002619/2.gif" alt="FC2無料カウンター" title="FC2無料カウンター" style="display:inline;margin:0px;padding:0px;border:none;">' +
            '<img border="0" src="https://counter1-cdn-ssl.fc2.com/cimg/19/00002619/4.gif" alt="FC2無料カウンター" title="FC2無料カウンター" style="display:inline;margin:0px;padding:0px;border:none;">' +
            '<img border="0" src="https://counter1-cdn-ssl.fc2.com/cimg/19/00002619/2.gif" alt="FC2無料カウンター" title="FC2無料カウンター" style="display:inline;margin:0px;padding:0px;border:none;">' +
            '<img border="0" src="https://counter1-cdn-ssl.fc2.com/cimg/19/00002619/9.gif" alt="FC2無料カウンター" title="FC2無料カウンター" style="display:inline;margin:0px;padding:0px;border:none;">' +
            '<img border="0" src="https://counter1-cdn-ssl.fc2.com/cimg/19/00002619/0.gif" alt="FC2無料カウンター" title="FC2無料カウンター" style="display:inline;margin:0px;padding:0px;border:none;">' +
            '</nobr></span></a>';

        // Voeg de HTML in, afhankelijk van de positie van het script
        if (!current) {
            document.body.insertAdjacentHTML('beforeend', htmlContent);
        } else {
            current.insertAdjacentHTML('beforebegin', htmlContent);
        }
    };
    
    // Roep de functie aan om de afbeelding weer te geven
    _FC2COUNTER38590160_1.disp_img();
}
