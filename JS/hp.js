
/* cacher indice, input réponse, bouton envoi réponse et bouton 
entrée au chargement de la page
*/
let $indice=$('#entree');
let $affIndice=$('#affIndice');
$entree=$('#entree');
$indice=$('#indice');

$entree.hide();
$indice.hide();

$affIndice.click(function(){
    $indice.show();
});

let $repAttendue='salle sur demande';
let $reponse=$('#reponse');
let $mauvRep=$('#mauvRep');
//let $btnReponse=$('#btnReponse');
//let $valeurInput=$reponse.val();

$("#btnReponse").click(function(){
    let $str = $reponse.val();
    if($str==$repAttendue) {
        $affIndice.hide();
        $indice.html('la '+$str+'<h3 class="bold">Bienvenue à Poudlard</h3>');
        $entree.show();
    } else {
        $mauvRep.text('Mauvaise réponse, relis bien l\'indice');
        $affIndice.hide();
        $indice.show();
        $('#inputRep').show();
    }
});

//  $btnReponse.on()

//  $btnReponse.click(function() {
    /*
$reponse.keyup(function() {
    let valeurInput=$(this).val();
    $indice.text(valeurInput);
})
/*
    $valeurInput.text(function(i,rep){
        $indice.text(rep);
        $affIndice.hide();
//        $entree.show();
//        $('#loupe').show();
    });
//  });
/*
$('#prenom').keyup(function() {
    let valeurInput=$(this).val();
    $('#sp1').text(valeurInput);
});

//    $indice.html('<p>'+$valeurInput+'</p>');
/*
    if($valeurInput==$repAttendue) {
        $indice.hide();
        $affIndice.hide();
        $entree.show();
    }
*/
/*
let $tdCible=$('td');
$tdCible.hover(function(){
    $(this).text(function(i,touch){
        $('#loupe').html(touch);
        $('#loupe').show();
    });
},function(){
    $('#loupe').hide();
});

/*
if($reponse.text()==$repAttendue) {
    $('#entree').show();
}
/*
if ($element.text() == '') {
    $element.text('N.D');
    $element.addClass('not-defined');
}
*/
// si contenu de input == "bonne réponse" ==> afficher bouton #entree

/*
$('select').change(function() {
    let valeurSelect=$('select').val() || [];
    $('#sp2').text(valeurSelect.join(', '));
});
*/
/*

$('select').change(function() {
    let valeurSelect=$('select').val() || [];
    $('#sp2').text(valeurSelect.join(', '));
});
*/

