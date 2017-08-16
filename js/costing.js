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

cm.set("Enl:15 x 24:Cost", 3000);
cm.set("Enl:16 x 24:Cost", 4000);
cm.set("Enl:17 x 24:Cost", 5000);
cm.set("Enl:15 x 24:Price", 4000);
cm.set("Enl:16 x 24:Price", 5000);
cm.set("Enl:17 x 24:Price", 6000);

cm.set("Single Side Matte:4 x 8:Cost", 12);
cm.set("Single Side Matte:4 x 12:Cost", 15);
cm.set("Single Side Matte:4 x 8:Price", 20);
cm.set("Single Side Matte:4 x 12:Price", 30);

cm.set("Single Side Glossy:4 x 8:Cost", 12);
cm.set("Single Side Glossy:4 x 12:Cost", 15);
cm.set("Single Side Glossy:4 x 8:Price", 20);
cm.set("Single Side Glossy:4 x 12:Price", 30);

cm.set("Blueray:1cam:wed:Cost", 10000);
cm.set("Blueray:2cam:wedHome:Cost", 20000);
cm.set("Blueray:2cam:wedHome:Cost", 30000);
cm.set("Blueray:1cam:wed:Price", 150000);
cm.set("Blueray:2cam:wedHome:Price", 25000);
cm.set("Blueray:2cam:wedHome:Price", 35000);

cm.set("Drone:Cost", 4000);
cm.set("Drone:Price", 5500);

cm.set("MiniAlb:Cost", 4000);
cm.set("MiniAlb:Price", 5500);


cm.set("SigBoard:15 x 24:Cost", 9000);
cm.set("SigBoard:15 x 24:Price", 12000);
cm.set("SigBoard:17 x 24:Cost", 10000);
cm.set("SigBoard:17 x 24:Price", 15000);

function setMiniAlbCost() {
    if ($('#IncludeFA').prop('checked') == true) {
        $('#miniAlbCost').val(cm.get("MiniAlb:Cost"));
        $('#miniAlbPrice').val(cm.get("MiniAlb:Price"));
    } else {
        $('#miniAlbCost').val("");
        $('#miniAlbPrice').val("");
    }
}

function setSigBoardCost() {
    var cost = cm.get("SigBoard:" + $('#SigBoard').val() + ":Cost");
    var price = cm.get("SigBoard:" + $('#SigBoard').val() + ":Price");
    $('#sigBoardCost').val(cost);
    $('#sigBoardPrice').val(price);

}


function setDoneCost() {
    if ($('#IncludeDrone').prop('checked') == true) {
        $('#droneCost').val(cm.get("Drone:Cost"));
        $('#dronePrice').val(cm.get("Drone:Price"));
    } else {
        $('#droneCost').val("");
        $('#dronePrice').val("");
    }
}

function setVideoCost() {
    var quality, camCount, coverage;
    quality = $('#VidQuality').val();
    camCount = $('#VidNoOfCam').val();
    coverage = $('#VidType').val();

    var key = quality + ":" + camCount + ":" + coverage;

    var cost = cm.get(key + ":Cost");
    var price = cm.get(key + ":Price");

    $('#vidCost').val(cost);
    $('#vidPrice').val(price);

}

function setThankCardCost(day) {

    var size, quality, count;

    if (day == "wed") {
        size = $('#thankCardSize').val();
        quality = $('#thankCardQuality').val();
        count = Number($('#wedThankCardCount').val());
    }
    if (day == "home") {
        size = $('#ThankCardSizeH').val();
        quality = $('#ThankCardQualityH').val();
        count = Number($('#homeThankCardCount').val());
    }

    var cost = Number(cm.get(quality + ":" + size + ":Cost"));
    var price = Number(cm.get(quality + ":" + size + ":Price"));

    var totCost = cost * count;
    var totPrice = price * count;


    if (day == "wed") {
        $('#wedThankCost').val(totCost);
        $('#wedThankPrice').val(totPrice);
    }
    if (day == "home") {
        $('#homeThankCost').val(totCost);
        $('#homeThankPrice').val(totPrice);
    }
}


function setEnlargementCost() {
    var size1 = $('#Enlarge1Size').val();
    var size2 = $('#Enlarge2Size').val();
    var size3 = $('#Enlarge3Size').val();

    var cost1 = Number(cm.get("Enl:" + size1 + ":Cost"));
    var cost2 = Number(cm.get("Enl:" + size2 + ":Cost"));
    var cost3 = Number(cm.get("Enl:" + size3 + ":Cost"));
    var price1 = Number(cm.get("Enl:" + size1 + ":Price"));
    var price2 = Number(cm.get("Enl:" + size2 + ":Price"));
    var price3 = Number(cm.get("Enl:" + size3 + ":Price"));

    var count1 = Number($('#Enlarge1Count').val());
    var count2 = Number($('#Enlarge2Count').val());
    var count3 = Number($('#Enlarge3Count').val());

    var totCost = cost1 * count1 + cost2 * count2 + cost3 * count3;
    var totPrice = price1 * count1 + price2 * count2 + price3 * count3;

    $('#EnlCost').val(totCost);
    $('#EnlPrice').val(totPrice);
}

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