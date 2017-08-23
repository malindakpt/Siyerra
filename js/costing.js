function setMiniAlbCost() {
    // if ($('#IncludeFA').prop('checked') == true) {
    //     $('#MiniAlbCost').val(cm.get("Mini Album Cost"));
    //     $('#MiniAlbPrice').val(cm.get("Mini Album Price"));
    // } else {
    //     $('#MiniAlbCost').val("");
    //     $('#MiniAlbPrice').val("");
    // }
    var cost = cm.get($('#IncludeFA').val() + ":Mini Album Cost");
    var price = cm.get($('#IncludeFA').val() + ":Mini Album Price");
    $('#MiniAlbCost').val(cost);
    $('#MiniAlbPrice').val(price);
}

function setSigBoardCost() {
    var cost = cm.get($('#SigBoard').val() + ":Signature Board Cost");
    var price = cm.get($('#SigBoard').val() + ":Signature Board Price");
    $('#SigboardCost').val(cost);
    $('#SigboardPrice').val(price);

}

function setHelperCost() {
    var cost = Number(cm.get("Cost For 1 Helper"));
    var price = Number(cm.get("Price For 1 Helper"));

    var count = Number($('#HelperCount').val());

    var totCost = cost * count;
    var totPrice = price * count;

    $('#HelperCost').val(totCost);
    $('#HelperPrice').val(totPrice);
}

function setDroneCost() {
    if ($('#IncludeDrone').prop('checked') == true) {
        $('#DroneCost').val(cm.get("Drone Camera Cost"));
        $('#DronePrice').val(cm.get("Drone Camera Price"));
    } else {
        $('#DroneCost').val("");
        $('#DronePrice').val("");
    }
}

function setVideoCost() {
    var quality, camCount, coverage;
    quality = $('#VidQuality').val();
    camCount = $('#VidNoOfCam').val();
    coverage = $('#VidType').val();

    var key = quality + ":" + camCount + ":" + coverage;

    var cost = cm.get(key + ":Video Cost");
    var price = cm.get(key + ":Video Price");

    $('#VidCost').val(cost);
    $('#VidPrice').val(price);

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

    var cost = Number(cm.get(quality + ":" + size + ":Cost per Card"));
    var price = Number(cm.get(quality + ":" + size + ":Price per Card"));

    var totCost = cost * count;
    var totPrice = price * count;

    totCost = isNaN(totCost) ? "" : totCost;
    totPrice = isNaN(totPrice) ? "" : totPrice;

    if (day == "wed") {
        $('#WedThankCost').val(totCost);
        $('#WedThankPrice').val(totPrice);
    }
    if (day == "home") {
        $('#HomThankCost').val(totCost);
        $('#HomThankPrice').val(totPrice);
    }
}

function setEnlargementCost() {
    var size1 = $('#Enlarge1Size').val();
    var size2 = $('#Enlarge2Size').val();
    var size3 = $('#Enlarge3Size').val();

    var cost1 = Number(cm.get(size1 + ":Cost per Enlargement"));
    var cost2 = Number(cm.get(size2 + ":Cost per Enlargement"));
    var cost3 = Number(cm.get(size3 + ":Cost per Enlargement"));
    var price1 = Number(cm.get(size1 + ":Price per Enlargement"));
    var price2 = Number(cm.get(size2 + ":Price per Enlargement"));
    var price3 = Number(cm.get(size3 + ":Price per Enlargement"));

    var count1 = Number($('#Enlarge1Count').val());
    var count2 = Number($('#Enlarge2Count').val());
    var count3 = Number($('#Enlarge3Count').val());

    var totCost = (isNaN(cost1 * count1) ? 0 : (cost1 * count1)) + (isNaN(cost2 * count2) ? 0 : (cost2 * count2)) + (isNaN(cost3 * count3) ? 0 : (cost3 * count3));
    var totPrice = (isNaN(price1 * count1) ? 0 : (price1 * count1)) + (isNaN(price2 * count2) ? 0 : (price2 * count2)) + (isNaN(price3 * count3) ? 0 : (price3 * count3));

    totCost = isNaN(totCost) ? "" : totCost;
    totPrice = isNaN(totPrice) ? "" : totPrice;

    $('#EnlargeCost').val(totCost);
    $('#EnlargePrice').val(totPrice);
}

function setAlbumCost(album, setPages) {

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

    var keyPages = quality + ":" + size + ":Fixed Pages";
    var keyCost = quality + ":" + size + ":Fixed Cost";
    var keyPrice = quality + ":" + size + ":Fixed Price";
    var keyExCost = quality + ":" + size + ":Extra Page Cost";
    var keyExPrice = quality + ":" + size + ":Extra Page Price";

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

        if (setPages) {
            if (isNaN(pagesLimit)) {
                $('#CAPages').val("");
            } else {
                $('#CAPages').val(pagesLimit);
            }
        }
    }

    if (album == "2") {
        $('#Album2Cost').val(totCost);
        $('#Album2Price').val(totPrice);

        if (setPages) {
            if (isNaN(pagesLimit)) {
                $('#FAPages').val("");
            } else {
                $('#FAPages').val(pagesLimit);
            }
        }
    }

    if (album == "3") {
        $('#Album3Cost').val(totCost);
        $('#Album3Price').val(totPrice);

        if (setPages) {
            if (isNaN(pagesLimit)) {
                $('#PSPages').val("");
            } else {
                $('#PSPages').val(pagesLimit);
            }

        }
    }
}