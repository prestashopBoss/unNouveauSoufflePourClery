<?php
/*session_start();*/
//include "fonction.php";
/*verif_connect();*/
include "head.php";
//var_dump($_SESSION) . " est connecté";

?>
<div class="container">
<form action="" method="post">
    <div>
        <p>
            <input type="button" value="G" />
            <input type="button" value="I" />
            <input type="button" value="Lien" />
            <input type="button" value="Image" />
            <input type="button" value="Citation" />
            <select onchange="insertTag('<' + this.options[this.selectedIndex].value + '>', '</' + this.options[this.selectedIndex].value + '>');">
                <option value="none" class="selected" selected="selected">Taille</option>
                <option value="ttpetit">Très très petit</option>
                <option value="tpetit">Très petit</option>
                <option value="petit">Petit</option>
                <option value="gros">Gros</option>
                <option value="tgros">Très gros</option>
                <option value="ttgros">Très très gros</option>
            </select>
            <img src="smile.gif" alt="smiley" />
            <img src="unsure2.gif" alt="smiley" />
        </p>
        <p>
            <input name="previsualisation" type="checkbox" id="previsualisation" value="previsualisation" />
            <label for="previsualisation">Prévisualisation automatique</label>
        </p>
    </div>

	<textarea id="textarea" cols="150" rows="10"></textarea>
    
	<div id="previewDiv"></div>

	<p>
        <input type="button" value="Visualiser" onclick="view('textarea','viewDiv');" />
    </p>

    <div id="viewDiv"></div>
</form>
<script>
function insertTag(startTag, endTag, textareaId, tagType) {
        var field  = document.getElementById(textareaId); 
        var scroll = field.scrollTop;
        field.focus();
        
        /* === Partie 1 : on récupère la sélection === */
        if (window.ActiveXObject) {
                var textRange = document.selection.createRange();            
                var currentSelection = textRange.text;
        } else {
                var startSelection   = field.value.substring(0, field.selectionStart);
                var currentSelection = field.value.substring(field.selectionStart, field.selectionEnd);
                var endSelection     = field.value.substring(field.selectionEnd);               
        }
        
        /* === Partie 2 : on analyse le tagType === */
        if (tagType) {
                switch (tagType) {
                        case "lien":
                                // Si c'est un lien
                        break;
                        case "citation":
                                // Si c'est une citation
                        break;
                }
        }
        
        /* === Partie 3 : on insère le tout === */
        if (window.ActiveXObject) {
                textRange.text = startTag + currentSelection + endTag;
                textRange.moveStart("character", -endTag.length - currentSelection.length);
                textRange.moveEnd("character", -endTag.length);
                textRange.select();     
        } else {
                field.value = startSelection + startTag + currentSelection + endTag + endSelection;
                field.focus();
                field.setSelectionRange(startSelection.length + startTag.length, startSelection.length + startTag.length + currentSelection.length);
        } 

        field.scrollTop = scroll;     
}
</script>