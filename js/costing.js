var cm = new Map();
cm.set("Magazine:8 x 16:Pages", 30);
cm.set("Magazine:8 x 16:Cost", 14000);
cm.set("Magazine:8 x 16:Price", 65000);
cm.set("Magazine:8 x 16:ExCost", 1750);
cm.set("Magazine:8 x 16:ExPrice", 2750);

cm.set("Magazine:8 x 20:Pages", 30);
cm.set("Magazine:8 x 20:Cost", 16000);
cm.set("Magazine:8 x 20:Price", 71000);
cm.set("Magazine:8 x 20:ExCost", 2000);
cm.set("Magazine:8 x 20:ExPrice", 3000);

cm.set("Story Book:8 x 16:Pages", 30);
cm.set("Story Book:8 x 16:Cost", 12000);
cm.set("Story Book:8 x 16:Price", 55000);
cm.set("Story Book:8 x 16:ExCost", 1200);
cm.set("Story Book:8 x 16:ExPrice", 2200);

cm.set("Story Book:8 x 20:Pages", 30);
cm.set("Story Book:8 x 20:Cost", 14000);
cm.set("Story Book:8 x 20:Price", 62000);
cm.set("Story Book:8 x 20:ExCost", 1300);
cm.set("Story Book:8 x 20:ExPrice", 2300);

function setAlbumCost(album) {

    var quality, size, pages;

    if (album == "1") {
        quality = $('#CAQuality').val();
        size = $('#CASize').val();
        pages = Number($('#CAPages').val());
    }

    if (album == "2") {
        quality = $('#FAQuality').val();
        size = $('#FASize').val();
        pages = Number($('#FAPages').val());
    }

    if (album == "3") {
        quality = $('#PSQuality').val();
        size = $('#PSSize').val();
        pages = Number($('#PSPages').val());
    }



    var keyPages = quality + ":" + size + ":Pages";
    var keyCost = quality + ":" + size + ":Cost";
    var keyPrice = quality + ":" + size + ":Price";
    var keyExCost = quality + ":" + size + ":ExCost";
    var keyExPrice = quality + ":" + size + ":ExCost";

    var pagesLimit = Number(cm.get(keyPages));
    var cost = Number(cm.get(keyCost));
    var price = Number(cm.get(keyPrice));
    var exCost = Number(cm.get(keyExCost));
    var exPrice = Number(cm.get(keyExPrice));

    var totCost, totPrice;
    if (pages > pagesLimit) {
        totCost = cost + (pages - pagesLimit) * exCost;
        totPrice = price + (pages - pagesLimit) * exPrice;
    } else {
        totCost = cost;
        totPrice = price;
    }


    if (album == "1") {
        $('#Album1Cost').val(totCost);
        $('#Album1Price').val(totPrice);
    }

    if (album == "2") {
        $('#Album2Cost').val(totCost);
        $('#Album2Price').val(totPrice);
    }

    if (album == "3") {
        $('#Album3Cost').val(totCost);
        $('#Album3Price').val(totPrice);
    }



}