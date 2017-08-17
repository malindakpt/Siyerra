function setMiniAlbCost() {
    if ($('#IncludeFA').prop('checked') == true) {
        $('#miniAlbCost').val(cm.get("MiniAlbumCost"));
        $('#miniAlbPrice').val(cm.get("MiniAlbumPrice"));
    } else {
        $('#miniAlbCost').val("");
        $('#miniAlbPrice').val("");
    }
}

function setSigBoardCost() {
    var cost = cm.get($('#SigBoard').val() + ":SignatureBoardPrice");
    var price = cm.get($('#SigBoard').val() + ":SignatureBoardPrice");
    $('#sigBoardCost').val(cost);
    $('#sigBoardPrice').val(price);

}

function setHelperCost() {
    var cost = Number(cm.get("Cost For 1 Helper"));
    var price = Number(cm.get("Price For 1 Helper"));

    var count = Number($('#helperCount').val());

    var totCost = cost * count;
    var totPrice = price * count;

    $('#helperCost').val(totCost);
    $('#helperPrice').val(totPrice);
}


function setDroneCost() {
    if ($('#IncludeDrone').prop('checked') == true) {
        $('#droneCost').val(cm.get("DroneCameraCost"));
        $('#dronePrice').val(cm.get("DroneCameraPrice"));
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

    var cost = cm.get(key + ":VideoCost");
    var price = cm.get(key + ":VideoPrice");

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

    var cost = Number(cm.get(quality + ":" + size + ":ExtraCardCost"));
    var price = Number(cm.get(quality + ":" + size + ":ExtraCardPrice"));

    var totCost = cost * count;
    var totPrice = price * count;

    totCost = isNaN(totCost) ? "" : totCost;
    totPrice = isNaN(totPrice) ? "" : totPrice;

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

    var cost1 = Number(cm.get(size1 + ":ExtraEnlargementCost"));
    var cost2 = Number(cm.get(size2 + ":ExtraEnlargementCost"));
    var cost3 = Number(cm.get(size3 + ":ExtraEnlargementCost"));
    var price1 = Number(cm.get(size1 + ":ExtraEnlargementPrice"));
    var price2 = Number(cm.get(size2 + ":ExtraEnlargementPrice"));
    var price3 = Number(cm.get(size3 + ":ExtraEnlargementPrice"));

    var count1 = Number($('#Enlarge1Count').val());
    var count2 = Number($('#Enlarge2Count').val());
    var count3 = Number($('#Enlarge3Count').val());

    var totCost = cost1 * count1 + cost2 * count2 + cost3 * count3;
    var totPrice = price1 * count1 + price2 * count2 + price3 * count3;

    totCost = isNaN(totCost) ? "" : totCost;
    totPrice = isNaN(totPrice) ? "" : totPrice;

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

    var keyPages = quality + ":" + size + ":FixedPages";
    var keyCost = quality + ":" + size + ":FixedCost";
    var keyPrice = quality + ":" + size + ":FixedPrice";
    var keyExCost = quality + ":" + size + ":ExtraPageCost";
    var keyExPrice = quality + ":" + size + ":ExtraPagePrice";

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

    totCost = isNaN(totCost) ? "" : totCost;
    totPrice = isNaN(totPrice) ? "" : totPrice;

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