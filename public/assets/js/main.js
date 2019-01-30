$(document).ready(function(){
    $(".calcul").on("keyup", function(){
        var res = $("#sup").val() - $("#inf").val()
        if(res < 0)
            res = "les nombres négatifs ne sont pas admis"
        $("#result").val(res)
    })
})

















var sousCategories = {  "1" : { "1": "P00", "2": "P01" , "3": "P02", "4": "P03", "5": "P04", "6": "P05", "7": "P06", "8": "P07", "9": "P08", "10": "P09", "11": "P10"},
                        "2" : { "12": "B00", "13": "B10", "14": "B25", "15": "B26", "16": "B28", "17": "B29", "18": "B30", "19": "B33", "20": "B34", "21": "B35", "22": "B36", "23": "B40",
                        "24": "B41", "25": "B42","26": "B43", "27": "B44","28": "B45", "29": "B46","30": "B47" },
                        "3" : { "31": "X01", "32": "X02", "33": "X03", "34": "X04", "35": "X05", "36": "X06", "37": "X07", "38": "X08" },
                        "4" : { "39": "A00", "40": "A01", "41": "A02", "42": "A03", "43": "A04", "44": "A05", "45": "A06", "46": "A07", "47": "A08"  },
                        "5" : { "101": "N01", "102": "N02", "103": "N03", "104": "N04", "105": "N05", "106": "N06",     "107": "N07", "108": "N08", "109": "N09", "110": "N10",  },
                        "6" : { "201": "J01", "202": "J02", "203": "J03", "204": "J04", "205": "J05", "206": "J06",
                                "207": "J07", "208": "J08", "209": "J09", "210": "J11", "211": "J11", "212": "J12",
                                "213": "J13", "214": "J14", "215": "J15", "216": "J16", "217": "J17", "218": "J18",
                                "219": "J19", "220": "J20", "221": "J21"
                      },
                       

};
$( "#cat" ).change(function() {
var codeCategorie =$( "#cat" ).val() ;
var identifiantSelectSousCategorie = '#souscat';
// on vide la liste
$(identifiantSelectSousCategorie ).empty();
// Affichage des valeurs en console si besoin
//console.log(sousCategories);
//console.log(codeCategorie);
//console.log(sousCategories[codeCategorie]);
// On charge les nouvelles valeurs
$.each(sousCategories[codeCategorie], function(key, value) {   
$(identifiantSelectSousCategorie)
.append($('<option>', { value : key })
.text(value)); 
});
});
// On déclange l'événement du changement sur le select de la catégorie.
$( "#cat" ).trigger("change");