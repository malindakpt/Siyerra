//clearAll
//saveNew
//update
//getWedding


function calcTotalPrice() {
    var album1Price = isNaN(document.getElementById("Album1Price").value) ? 0 : Number(document.getElementById("Album1Price").value);
    var album2Price = isNaN(document.getElementById("Album2Price").value) ? 0 : Number(document.getElementById("Album2Price").value);
    var album3Price = isNaN(document.getElementById("Album3Price").value) ? 0 : Number(document.getElementById("Album3Price").value);
    var miniAlbPrice = isNaN(document.getElementById("MiniAlbPrice").value) ? 0 : Number(document.getElementById("MiniAlbPrice").value);
    var sigBoardPrice = isNaN(document.getElementById("SigBoard").value) ? 0 : Number(document.getElementById("sigBoardPrice").value);
    var EnlPrice = isNaN(document.getElementById("EnlargePrice").value) ? 0 : Number(document.getElementById("EnlargePrice").value);
    var wedThankPrice = isNaN(document.getElementById("WedThankPrice").value) ? 0 : Number(document.getElementById("WedThankPrice").value);
    var homeThankPrice = isNaN(document.getElementById("HomThankPrice").value) ? 0 : Number(document.getElementById("HomThankPrice").value);
    var vidPrice = isNaN(document.getElementById("VidPrice").value) ? 0 : Number(document.getElementById("VidPrice").value);
    var dronePrice = isNaN(document.getElementById("DronePrice").value) ? 0 : Number(document.getElementById("DronePrice").value);
    var helperPrice = isNaN(document.getElementById("HelperPrice").value) ? 0 : Number(document.getElementById("HelperPrice").value);
    var PrivateCommentsPrice = isNaN(document.getElementById("PrivateCommentsPrice").value) ? 0 : Number(document.getElementById("PrivateCommentsPrice").value);
    var DesignerPrice = isNaN(document.getElementById("DesignerPrice").value) ? 0 : Number(document.getElementById("DesignerPrice").value);


    var totalPrice = album1Price + album2Price + album3Price + miniAlbPrice + sigBoardPrice +
        EnlPrice + wedThankPrice + homeThankPrice + vidPrice + dronePrice + helperPrice + PrivateCommentsPrice + DesignerPrice;

    if (totalPrice == 0) {
        document.getElementById("Total").value = "";
    } else {
        document.getElementById("Total").value = totalPrice;
    }
    return totalPrice;
}

function calcTotalCost() {
    var album1Cost = isNaN(document.getElementById("Album1Cost").value) ? 0 : Number(document.getElementById("Album1Cost").value);
    var album2Cost = isNaN(document.getElementById("Album2Cost").value) ? 0 : Number(document.getElementById("Album2Cost").value);
    var album3Cost = isNaN(document.getElementById("Album3Cost").value) ? 0 : Number(document.getElementById("Album3Cost").value);
    var miniAlbCost = isNaN(document.getElementById("MiniAlbCost").value) ? 0 : Number(document.getElementById("MiniAlbCost").value);
    var sigBoardCost = isNaN(document.getElementById("SigboardCost").value) ? 0 : Number(document.getElementById("SigboardCost").value);
    var EnlCost = isNaN(document.getElementById("EnlargeCost").value) ? 0 : Number(document.getElementById("EnlargeCost").value);
    var wedThankCost = isNaN(document.getElementById("WedThankCost").value) ? 0 : Number(document.getElementById("WedThankCost").value);
    var homeThankCost = isNaN(document.getElementById("HomThankCost").value) ? 0 : Number(document.getElementById("HomThankCost").value);
    var vidCost = isNaN(document.getElementById("VidCost").value) ? 0 : Number(document.getElementById("VidCost").value);
    var droneCost = isNaN(document.getElementById("DroneCost").value) ? 0 : Number(document.getElementById("DroneCost").value);
    var helperCost = isNaN(document.getElementById("HelperCost").value) ? 0 : Number(document.getElementById("HelperCost").value);
    var PrivateCommentsCost = isNaN(document.getElementById("PrivateCommentsCost").value) ? 0 : Number(document.getElementById("PrivateCommentsCost").value);
    var DesignerCost = isNaN(document.getElementById("DesignerCost").value) ? 0 : Number(document.getElementById("DesignerCost").value);


    var totalCost = album1Cost + album2Cost + album3Cost + miniAlbCost + sigBoardCost +
        EnlCost + wedThankCost + homeThankCost + vidCost + droneCost + helperCost + PrivateCommentsCost + DesignerCost;

    if (totalCost == 0) {
        document.getElementById("TotalCost").value = "";
    } else {
        document.getElementById("TotalCost").value = totalCost;
    }

    return totalCost;
}

setInterval(calcTot, 1000);

function calcTot() {
    var price = calcTotalPrice();
    var cost = calcTotalCost();
    var profit = price - cost;

    if (isNaN(profit) || profit == 0) {
        document.getElementById("profit").innerHTML = "Profit : - - - -";
    } else {
        document.getElementById("profit").innerHTML = "Profit : " + profit;
    }
}

function showCostBoxes() {

    if ($('#showCost').is(":checked")) {
        $('#Album1Cost').show();
        $('#Album2Cost').show();
        $('#Album3Cost').show();
        $('#miniAlbCost').show();
        $('#sigBoardCost').show();
        $('#EnlCost').show();
        $('#wedThankCost').show();
        $('#homeThankCost').show();
        $('#vidCost').show();
        $('#droneCost').show();
        $('#helperCost').show();
        $('#PrivateCommentsCost').show();
        $('#TotalCost').show();
        $('#profit').show();
        $('#DesignerCost').show();


    } else {
        $('#Album1Cost').hide();
        $('#Album2Cost').hide();
        $('#Album3Cost').hide();
        $('#miniAlbCost').hide();
        $('#sigBoardCost').hide();
        $('#EnlCost').hide();
        $('#wedThankCost').hide();
        $('#homeThankCost').hide();
        $('#vidCost').hide();
        $('#droneCost').hide();
        $('#helperCost').hide();
        $('#PrivateCommentsCost').hide();
        $('#TotalCost').hide();
        $('#profit').hide();
        $('#DesignerCost').hide();
    }

}

function validateData() {
    if ("" == $('#name').val()) {
        swal("Invalid Inputs", "Name of the Customer cannot be empty", "error");
        return false;
    } else if ($('#dateW').val() == "" && $('#dateH').val() == "") {
        swal("Invalid Inputs", "You have to add atleast 1 date", "error");
        return false;
    } else if ($('#dateW').val() != "" && Number($('#year').children()[0].value) > Number($('#dateW').val().split("-")[0])) {
        swal("Invalid Inputs", "Main/Wedding date should not be in past", "error");
        return false;
    } else if ($('#dateH').val() != "" && Number($('#year').children()[0].value) > Number($('#dateH').val().split("-")[0])) {
        swal("Invalid Inputs", "Engage./Homecom. date should not be in past", "error");
        return false;
    }
    return true;
}

function getWedding(event) {
    ovOn();
    $("#btnHide").hide();
    $("#allListTable").empty();
    $.post('MainGetWedding.php', {
            ID: event.id,
            DBTableName: tableName
        },
        function(returnedData) {

            var obj = JSON.parse(returnedData);
            $('#ID').val(obj.ID);
            $('#name').val(obj.name);
            $('#email').val(obj.email);
            $('#phone').val(obj.phone);

            $('#NameG').val(obj.NameG).change();
            $('#EmailG').val(obj.EmailG);
            $('#PhoneG').val(obj.PhoneG);

            if (obj.dateW.startsWith("2010-01") || "" == obj.dateW) {
                $('#dateW').val('').change();
            } else {
                $('#dateW').val(obj.dateW).change();
            }

            if (obj.dateH.startsWith("2010-01") || "" == obj.dateH) {
                $('#dateH').val('').change();
            } else {
                $('#dateH').val(obj.dateH).change();
            }

            $('#timeW').val(obj.timeW);
            $('#placeW').val(obj.placeW);
            $('#CASize').val(obj.CASize);
            $('#CAPages').val(obj.CAPages);
            $('#CAQuality').val(obj.CAQuality).change();
            $('#FASize').val(obj.FASize);
            $('#FAPages').val(obj.FAPages);
            $('#FAQuality').val(obj.FAQuality).change();;
            $('#thankCardSize').val(obj.thankCardSize);
            $('#thankCardQuality').val(obj.thankCardQuality).change();
            $('#wedThankCardCount').val(obj.wedThankCardCount);
            $('#homeThankCardCount').val(obj.homeThankCardCount);

            $('#Address').val(obj.Address);

            $('#timeH').val(obj.timeH);
            $('#placeH').val(obj.placeH);
            $('#PSSize').val(obj.PSSize);
            $('#PSPages').val(obj.PSPages);
            $('#PSQuality').val(obj.PSQuality).change();
            $('#VidQuality').val(obj.VidQuality).change();
            $('#VidNoOfCam').val(obj.VidNoOfCam);
            $('#VidType').val(obj.VidType);


            $('#Enlarge1Size').val(obj.Enlarge1Size).change();
            $('#Enlarge2Size').val(obj.Enlarge2Size).change();
            $('#Enlarge3Size').val(obj.Enlarge3Size).change();

            $('#Enlarge1Count').val(obj.Enlarge1Count).change();
            $('#Enlarge2Count').val(obj.Enlarge2Count).change();
            $('#Enlarge3Count').val(obj.Enlarge3Count).change();

            $('#Advance1').val(obj.Advance1);
            $('#Advance2').val(obj.Advance2);
            $('#Advance3').val(obj.Advance3);
            $('#Advance4').val(obj.Advance4);
            $('#Advance5').val(obj.Advance5);
            $('#Advance6').val(obj.Advance6);

            $('#Total').val(obj.Total);
            $('#Comments').val(obj.Comments);

            $('#PrivateComments').val(obj.PrivateComments);
            $('#PrivateCommentsCost').val(obj.PrivateCommentsCost);
            $('#PrivateCommentsPrice').val(obj.PrivateCommentsPrice);

            $('#IncludeFA').val(obj.IncludeFA).change();
            $('#IncludeDrone').prop('checked', obj.IncludeDrone);

            $('#ThankCardSizeH').val(obj.ThankCardSizeH);
            $('#ThankCardQualityH').val(obj.ThankCardQualityH).change();
            $('#Transport').val(obj.Transport);
            $('#Album1Type').val(obj.Album1Type);
            $('#Album2Type').val(obj.Album2Type);

            $('#SigBoard').val(obj.SigBoard).change();

            $('#Album1Cost').val(obj.Album1Cost);
            $('#Album1Price').val(obj.Album1Price);
            $('#Album2Cost').val(obj.Album2Cost);
            $('#Album2Price').val(obj.Album2Price);
            $('#Album3Cost').val(obj.Album3Cost);
            $('#Album3Price').val(obj.Album3Price);

            $('#MiniAlbCost').val(obj.MiniAlbCost);
            $('#MiniAlbPrice').val(obj.MiniAlbPrice);
            $('#SigboardCost').val(obj.SigboardCost);
            $('#SigboardPrice').val(obj.SigboardPrice);
            $('#EnlargeCost').val(obj.EnlargeCost);
            $('#EnlargePrice').val(obj.EnlargePrice);
            $('#WedThankCost').val(obj.WedThankCost);
            $('#WedThankPrice').val(obj.WedThankPrice);
            $('#HomThankCost').val(obj.HomThankCost);
            $('#HomThankPrice').val(obj.HomThankPrice);
            $('#VidCost').val(obj.VidCost);

            $('#VidPrice').val(obj.VidPrice);
            $('#DroneCost').val(obj.DroneCost);
            $('#DronePrice').val(obj.DronePrice);
            $('#HelperCost').val(obj.HelperCost);
            $('#HelperPrice').val(obj.HelperPrice);
            $('#DesignerCost').val(obj.DesignerCost);
            $('#DesignerPrice').val(obj.DesignerPrice);

            $('#CostVersion').val(obj.CostVersion);

            if (cm.get('CostVersion') != obj.CostVersion) {
                // alert("Version mismatch");
                swal("Old Cost Settings", "This event is saved with old cost values. If you change any component, it will be affected by new cost values as per " + cm.get('CostVersion'), "error");
            }


            showRemainingBal();
            setEmailButton();
            ovOff();
            console.log(returnedData);

        }).fail(function() {
        console.log("error");
    });
}

function deleteWedding(event) {

    swal({
            title: "Delete Existing Event",
            text: "Are You Sure ?",
            type: "error",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        },
        function() {

            $.post('deleteWedding.php', {
                    DBTableName: tableName,
                    ID: event.id
                },
                function(returnedData) {
                    $("#btnHide").hide();
                    $("#allListTable").empty();
                    swal("Deleted!", "Event Deleted Successfully", "success");
                    console.log(returnedData);
                }).fail(function() {
                console.log("error");
            });

        });

}

function clearAll() {

    hideAll();
    $('#showCost').prop('checked', false).change();
    // $('#Q1').hide();
    // $('#Q2').hide();

    $('#ID').val("");
    $('#name').val("");
    $('#email').val("");
    $('#phone').val("");

    $('#NameG').val("").change();
    $('#EmailG').val("");
    $('#PhoneG').val("");

    $('#dateW').val("").change();
    $('#timeW').val("N/A");
    $('#placeW').val("");
    $('#CASize').val("0");
    $('#CAPages').val("");
    $('#CAQuality').val("N/A").change();
    $('#FASize').val("0");

    $('#Album1Type').val("Wedding");
    $('#Album2Type').val("Homecoming");

    $('#FAPages').val("");
    $('#FAQuality').val("N/A").change();
    $('#thankCardSize').val("N/A");
    $('#thankCardQuality').val("N/A").change();
    $('#wedThankCardCount').val("");
    $('#homeThankCardCount').val("");

    $('#Address').val("");
    $('#dateH').val("").change();
    $('#timeH').val("N/A");
    $('#placeH').val("");
    $('#PSSize').val("0");
    $('#PSPages').val("");
    $('#PSQuality').val("N/A").change();
    $('#VidQuality').val("N/A").change();
    $('#VidNoOfCam').val("N/A");
    $('#VidType').val("N/A");

    $('#Enlarge1Size').val("N/A").change();
    $('#Enlarge2Size').val("N/A").change();
    $('#Enlarge3Size').val("N/A").change();

    $('#Enlarge1Count').val("").change();
    $('#Enlarge2Count').val("").change();
    $('#Enlarge3Count').val("").change();

    $('#Advance1').val("");
    $('#Advance2').val("");
    $('#Advance3').val("");
    $('#Advance4').val("");
    $('#Advance5').val("");
    $('#Advance6').val("");

    $('#Total').val("");
    $('#Comments').val("");

    $('#PrivateComments').val("");
    $('#PrivateCommentsCost').val("");
    $('#PrivateCommentsPrice').val("");

    $('#IncludeFA').val("N/A").change();
    $('#IncludeDrone').prop('checked', false).change();

    $('#ThankCardSizeH').val("N/A");
    $('#ThankCardQualityH').val("N/A").change();
    $('#Transport').val("");


    $('#SigBoard').val("N/A").change();

    $('#Album1Cost').val("");
    $('#Album1Price').val("");
    $('#Album2Cost').val("");
    $('#Album2Price').val("");
    $('#Album3Cost').val("");
    $('#Album3Price').val("");

    $('#MiniAlbCost').val("");
    $('#MiniAlbPrice').val("");
    $('#SigboardCost').val("");
    $('#SigboardPrice').val("");
    $('#EnlargeCost').val("");
    $('#EnlargePrice').val("");
    $('#WedThankCost').val("");
    $('#WedThankPrice').val("");
    $('#HomThankCost').val("");
    $('#HomThankPrice').val("");
    $('#VidCost').val("");

    $('#VidPrice').val("");
    $('#DroneCost').val("");
    $('#DronePrice').val("");
    $('#HelperCost').val("");
    $('#HelperPrice').val("");
    $('#DesignerCost').val("");
    $('#DesignerPrice').val("");
}

function showAll() {
    ovOn();
    $("#allListTable").empty()
    $.post('showAll.php', {
            DBTableName: tableName,
            year: $('#year').val(),
            month: $('#months').val()
        },
        function(returnedData) {
            ovOff();
            console.log(returnedData);
            if (returnedData != "ip") {
                var allArr = JSON.parse(returnedData);
                allArr.sort(function(a, b) { return Date.parse(a.date) - Date.parse(b.date) });
                if (allArr.length == 0) {
                    $("#allListTable").append("<tr><td style='text-align: center;'>0 results found for this period</td></tr>");
                }
                for (var i = 0; i < allArr.length; i++) {
                    $("#allListTable").append("<tr id='" + allArr[i].ID + "'><td>" + allArr[i].name + "</td><td>" + allArr[i].date + "</td><td>" + allArr[i].time + ':' + allArr[i].type + "</td><td><button id='" + allArr[i].ID + "' class='w3-btn w3-small w3-blue' onclick='getWedding(this)'>Open</button></td><td><button id='" + allArr[i].ID + "' class='w3-btn w3-small w3-red' onclick='deleteWedding(this)'>Delete</button></td></tr>");
                }
            } else {
                document.location = "login.php";
            }

        }).fail(function() {
        console.log("error");
    });
    $("#btnHide").show();
}

function hideAll() {
    $("#allListTable").empty();
    $("#btnHide").hide();
}

function setEmailButton() {
    var mailToLink = "mailto:" + $('#email').val() + "?Subject=Siyeraa Studio Event Plan";
    $("#EmailTo").attr("href", mailToLink);
    console.log("Email set");
}

function saveNew() {

    if (validateData() == false) {
        return;
    }
    swal({
            title: "Save New Event",
            text: "Are You Sure ?",
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        },
        function() {

            setEmailButton();
            $.post('MainAddWedding.php', {

                    DBTableName: tableName,

                    name: $('#name').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),

                    NameG: $('#NameG').val(),
                    EmailG: $('#EmailG').val(),
                    PhoneG: $('#PhoneG').val(),

                    dateW: $('#dateW').val(),
                    timeW: $('#timeW').val(),
                    placeW: $('#placeW').val(),
                    CASize: $('#CASize').val(),
                    CAPages: $('#CAPages').val(),
                    CAQuality: $('#CAQuality').val(),
                    FASize: $('#FASize').val(),
                    FAPages: $('#FAPages').val(),
                    FAQuality: $('#FAQuality').val(),
                    thankCardSize: $('#thankCardSize').val(),
                    thankCardQuality: $('#thankCardQuality').val(),
                    wedThankCardCount: $('#wedThankCardCount').val(),
                    homeThankCardCount: $('#homeThankCardCount').val(),

                    Address: $('#Address').val(),

                    dateH: $('#dateH').val(),
                    timeH: $('#timeH').val(),
                    placeH: $('#placeH').val(),
                    PSSize: $('#PSSize').val(),
                    PSPages: $('#PSPages').val(),
                    PSQuality: $('#PSQuality').val(),
                    VidQuality: $('#VidQuality').val(),
                    VidNoOfCam: $('#VidNoOfCam').val(),
                    VidType: $('#VidType').val(),

                    Enlarge1Size: $('#Enlarge1Size').val(),
                    Enlarge2Size: $('#Enlarge2Size').val(),
                    Enlarge3Size: $('#Enlarge3Size').val(),

                    Enlarge1Count: $('#Enlarge1Count').val(),
                    Enlarge2Count: $('#Enlarge2Count').val(),
                    Enlarge3Count: $('#Enlarge3Count').val(),

                    Comments: $('#Comments').val(),

                    PrivateComments: $('#PrivateComments').val(),
                    PrivateCommentsCost: $('#PrivateCommentsCost').val(),
                    PrivateCommentsPrice: $('#PrivateCommentsPrice').val(),

                    Advance1: parseInt($('#Advance1').val()) ? $('#Advance1').val() : '',
                    Advance2: parseInt($('#Advance2').val()) ? $('#Advance2').val() : '',
                    Advance3: parseInt($('#Advance3').val()) ? $('#Advance3').val() : '',
                    Advance4: parseInt($('#Advance4').val()) ? $('#Advance4').val() : '',
                    Advance5: parseInt($('#Advance5').val()) ? $('#Advance5').val() : '',
                    Advance6: parseInt($('#Advance6').val()) ? $('#Advance6').val() : '',

                    Total: parseInt($('#Total').val()) ? $('#Total').val() : '0',
                    IncludeFA: $('#IncludeFA').val(),
                    IncludeDrone: $('#IncludeDrone').is(":checked"),

                    ThankCardSizeH: $('#ThankCardSizeH').val(),
                    ThankCardQualityH: $('#ThankCardQualityH').val(),
                    Transport: $('#Transport').val(),

                    Album1Type: $('#Album1Type').val(),
                    Album2Type: $('#Album2Type').val(),

                    SigBoard: $('#SigBoard').val(),


                    Album1Cost: $('#Album1Cost').val(),
                    Album1Price: $('#Album1Price').val(),
                    Album2Cost: $('#Album2Cost').val(),
                    Album2Price: $('#Album2Price').val(),
                    Album3Cost: $('#Album3Cost').val(),
                    Album3Price: $('#Album3Price').val(),

                    MiniAlbCost: $('#MiniAlbCost').val(),
                    MiniAlbPrice: $('#MiniAlbPrice').val(),
                    SigboardCost: $('#SigboardCost').val(),
                    SigboardPrice: $('#SigboardPrice').val(),
                    EnlargeCost: $('#EnlargeCost').val(),
                    EnlargePrice: $('#EnlargePrice').val(),
                    WedThankCost: $('#WedThankCost').val(),
                    WedThankPrice: $('#WedThankPrice').val(),
                    HomThankCost: $('#HomThankCost').val(),
                    HomThankPrice: $('#HomThankPrice').val(),
                    VidCost: $('#VidCost').val(),

                    VidPrice: $('#VidPrice').val(),
                    DroneCost: $('#DroneCost').val(),
                    DronePrice: $('#DronePrice').val(),
                    HelperCost: $('#HelperCost').val(),
                    HelperPrice: $('#HelperPrice').val(),
                    DesignerCost: $('#DesignerCost').val(),
                    DesignerPrice: $('#DesignerPrice').val(),

                    CostVersion: $('#CostVersion').text()



                },
                function(returnedData) {
                    console.log(returnedData);
                    ovOff();
                    if (returnedData == "ok") {
                        swal("New Event Saved", $('#name').val(), "success");
                        clearAll();
                    } else {
                        swal("Oops...", "Unexpected Error. Please Contact MSOFT", "error");
                    }
                }).fail(function(returnedData) {
                console.log("error " + returnedData);
            });
        });

}

function update() {

    if ($('#ID').val() == "") {
        swal("Do You Need To Change An Event", "You Don't Have Opened An Event", "error");
        return;
    }

    if (validateData() == false) {
        return;
    }

    swal({
            title: "Do You Need To Change An Event",
            text: "Are You Sure ?",
            type: "warning",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        },
        function() {
            ovOn();
            setEmailButton();
            $.post('MainEditWedding.php', {

                    DBTableName: tableName,
                    ID: $('#ID').val(),

                    name: $('#name').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),

                    NameG: $('#NameG').val(),
                    EmailG: $('#EmailG').val(),
                    PhoneG: $('#PhoneG').val(),

                    dateW: $('#dateW').val(),
                    timeW: $('#timeW').val(),
                    placeW: $('#placeW').val(),
                    CASize: $('#CASize').val(),
                    CAPages: $('#CAPages').val(),
                    CAQuality: $('#CAQuality').val(),
                    FASize: $('#FASize').val(),
                    FAPages: $('#FAPages').val(),
                    FAQuality: $('#FAQuality').val(),
                    thankCardSize: $('#thankCardSize').val(),
                    thankCardQuality: $('#thankCardQuality').val(),
                    wedThankCardCount: $('#wedThankCardCount').val(),
                    homeThankCardCount: $('#homeThankCardCount').val(),

                    Address: $('#Address').val(),

                    dateH: $('#dateH').val(),
                    timeH: $('#timeH').val(),
                    placeH: $('#placeH').val(),
                    PSSize: $('#PSSize').val(),
                    PSPages: $('#PSPages').val(),
                    PSQuality: $('#PSQuality').val(),
                    VidQuality: $('#VidQuality').val(),
                    VidNoOfCam: $('#VidNoOfCam').val(),
                    VidType: $('#VidType').val(),

                    Enlarge1Size: $('#Enlarge1Size').val(),
                    Enlarge2Size: $('#Enlarge2Size').val(),
                    Enlarge3Size: $('#Enlarge3Size').val(),

                    Enlarge1Count: $('#Enlarge1Count').val(),
                    Enlarge2Count: $('#Enlarge2Count').val(),
                    Enlarge3Count: $('#Enlarge3Count').val(),

                    Comments: $('#Comments').val(),

                    PrivateComments: $('#PrivateComments').val(),
                    PrivateCommentsCost: $('#PrivateCommentsCost').val(),
                    PrivateCommentsPrice: $('#PrivateCommentsPrice').val(),

                    Advance1: parseInt($('#Advance1').val()) ? $('#Advance1').val() : '',
                    Advance2: parseInt($('#Advance2').val()) ? $('#Advance2').val() : '',
                    Advance3: parseInt($('#Advance3').val()) ? $('#Advance3').val() : '',
                    Advance4: parseInt($('#Advance4').val()) ? $('#Advance4').val() : '',
                    Advance5: parseInt($('#Advance5').val()) ? $('#Advance5').val() : '',
                    Advance6: parseInt($('#Advance6').val()) ? $('#Advance6').val() : '',

                    Total: parseInt($('#Total').val()) ? $('#Total').val() : '0',

                    IncludeFA: $('#IncludeFA').val(),
                    IncludeDrone: $('#IncludeDrone').is(":checked"),

                    ThankCardSizeH: $('#ThankCardSizeH').val(),
                    ThankCardQualityH: $('#ThankCardQualityH').val(),
                    Transport: $('#Transport').val(),
                    Album1Type: $('#Album1Type').val(),
                    Album2Type: $('#Album2Type').val(),

                    SigBoard: $('#SigBoard').val(),


                    Album1Cost: $('#Album1Cost').val(),
                    Album1Price: $('#Album1Price').val(),
                    Album2Cost: $('#Album2Cost').val(),
                    Album2Price: $('#Album2Price').val(),
                    Album3Cost: $('#Album3Cost').val(),
                    Album3Price: $('#Album3Price').val(),

                    MiniAlbCost: $('#MiniAlbCost').val(),
                    MiniAlbPrice: $('#MiniAlbPrice').val(),
                    SigboardCost: $('#SigboardCost').val(),
                    SigboardPrice: $('#SigboardPrice').val(),
                    EnlargeCost: $('#EnlargeCost').val(),
                    EnlargePrice: $('#EnlargePrice').val(),
                    WedThankCost: $('#WedThankCost').val(),
                    WedThankPrice: $('#WedThankPrice').val(),
                    HomThankCost: $('#HomThankCost').val(),
                    HomThankPrice: $('#HomThankPrice').val(),
                    VidCost: $('#VidCost').val(),

                    VidPrice: $('#VidPrice').val(),
                    DroneCost: $('#DroneCost').val(),
                    DronePrice: $('#DronePrice').val(),
                    HelperCost: $('#HelperCost').val(),
                    HelperPrice: $('#HelperPrice').val(),
                    DesignerCost: $('#DesignerCost').val(),
                    DesignerPrice: $('#DesignerPrice').val(),

                    CostVersion: $('#CostVersion').text()
                },
                function(returnedData) {
                    ovOff();
                    console.log(returnedData);

                    swal("Updated Existing Event", $('#name').val(), "success");
                    //alert("Done" + returnedData);
                }).fail(function(returnedData) {
                console.log("error " + returnedData);
            });
        });
}

function showRemainingBal() {

    var adv1 = parseInt($('#Advance1').val()) ? parseInt($('#Advance1').val()) : 0;
    var adv2 = parseInt($('#Advance2').val()) ? parseInt($('#Advance2').val()) : 0;
    var adv3 = parseInt($('#Advance3').val()) ? parseInt($('#Advance3').val()) : 0;
    var adv4 = parseInt($('#Advance4').val()) ? parseInt($('#Advance4').val()) : 0;
    var adv5 = parseInt($('#Advance5').val()) ? parseInt($('#Advance5').val()) : 0;
    var adv6 = parseInt($('#Advance6').val()) ? parseInt($('#Advance6').val()) : 0;

    // var transport = parseInt($('#Transport').val())?parseInt($('#Transport').val()):0; 
    var Total = parseInt($('#Total').val()) ? parseInt($('#Total').val()) : 0;
    var bal = Total - adv1 - adv2 - adv3 - adv4 - adv5 - adv6;

    document.getElementById('totalPrice').innerHTML = "Total Price        (To be paid=" + bal + ")";
}

function savePDF() {
    var time = (new Date()).toLocaleDateString('en-US');

    var doc = new jsPDF();
    doc.addImage(head, 'PNG', 0, 0, 210, 42);

    doc.addImage(foot, 'PNG', 0, 255, 210, 42);


    var line = 50;

    doc.setFontSize(10);
    doc.text(150, line, new Date().toString().split("GMT")[0]);

    var shift = 0;

    doc.setFontSize(12);

    doc.setFontSize(10);
    doc.text(25, line + 10, 'Customer/Groom Name : ' + $('#name').val());
    doc.text(25, line + 15, 'Email : ' + $('#email').val());
    doc.text(25, line + 20, 'Phone : ' + $('#phone').val());
    doc.text(25, line + 28, 'Addres : ' + $('#Address').val());
    shift = 100;
    doc.setFontSize(10);

    if ($('#NameG').val() != "") {
        doc.text(25 + shift, line + 10, 'Bride Name : ' + $('#NameG').val());
        doc.text(25 + shift, line + 15, 'Email : ' + $('#EmailG').val());
        doc.text(25 + shift, line + 20, 'Phone : ' + $('#PhoneG').val());
    }
    line = line + 35;

    var datePrinted = false;
    var shiftDate = 0;
    if (!$('#dateW').val().startsWith("2010-01") && "" != $('#dateW').val()) {
        doc.text(25, line + 5, $('#Album1Type').val() + ' Date : ' + $('#dateW').val());
        doc.text(25, line + 10, 'Location : ' + $('#placeW').val());
        doc.text(25, line + 15, 'Time : ' + $('#timeW').val());
        datePrinted = true;
        shiftDate = 75;
    }

    if (!$('#dateH').val().startsWith("2010-01") && "" != $('#dateH').val()) {
        doc.text(25 + shiftDate, line + 5, $('#Album2Type').val() + ' Date : ' + $('#dateH').val());
        doc.text(25 + shiftDate, line + 10, 'Location : ' + $('#placeH').val());
        doc.text(25 + shiftDate, line + 15, 'Time : ' + $('#timeH').val());
        datePrinted = true;
    }
    if (datePrinted) {
        line = line + 25;
    }

    var albumsPrinted = false;
    if ($('#CAQuality').val() != "N/A") {
        shift = 0;
        doc.setFontSize(11);
        doc.text(25, line, $('#Album1Type').val() + ' Album');
        doc.setFontSize(10);
        doc.text(30, line + 5, 'Quality : ' + $('#CAQuality').val());
        doc.text(30, line + 10, 'Size : ' + $('#CASize').val());
        doc.text(30, line + 15, 'Pages : ' + $('#CAPages').val());
        albumsPrinted = true;

    }
    if ($('#FAQuality').val() != "N/A") {
        shift = shift + 50;
        doc.setFontSize(11);
        doc.text(25 + shift, line, $('#Album2Type').val() + ' Album');
        doc.setFontSize(10);
        doc.text(30 + shift, line + 5, 'Quality : ' + $('#FAQuality').val());
        doc.text(30 + shift, line + 10, 'Size : ' + $('#FASize').val());
        doc.text(30 + shift, line + 15, 'Pages : ' + $('#FAPages').val());
        //shift = shift+60; 
        albumsPrinted = true;
    }
    if ($('#PSQuality').val() != "N/A") {
        shift = shift + 50;
        doc.setFontSize(11);
        doc.text(25 + shift, line, 'Preshoot Album');
        doc.setFontSize(10);
        doc.text(30 + shift, line + 5, 'Quality : ' + $('#PSQuality').val());
        doc.text(30 + shift, line + 10, 'Size : ' + $('#PSSize').val());
        doc.text(30 + shift, line + 15, 'Pages : ' + $('#PSPages').val());
        albumsPrinted = true;
    }
    if (albumsPrinted) {
        line = line + 25;
    }

    doc.setFontSize(10);
    if ($('#IncludeFA').val() != "N/A") {
        doc.text(25, line, "Mini Album of size " + $('#IncludeFA').val() + " included");
        line = line + 10;
    }

    if ($('#SigBoard').val() != "N/A") {
        doc.text(25, line, "Signature Board of size " + $('#SigBoard').val() + " included");
        line = line + 10;
    }
    //////////////////////Thanking Card Details//////////////////////

    shift = 0;

    var thankCardPrinted = false;
    if ($('#thankCardQuality').val() != "N/A") {

        doc.setFontSize(11);
        doc.text(25, line, "Wedding Thanking Cards ");
        doc.setFontSize(10);
        doc.text(30, line + 5, "Quality : " + $('#thankCardQuality').val());
        doc.text(30, line + 10, "Size : " + $('#thankCardSize').val());
        doc.text(30, line + 15, "No. Thanking Cards : " + $('#wedThankCardCount').val());
        shift = 80;
        thankCardPrinted = true;
    }

    if ($('#ThankCardQualityH').val() != "N/A") {

        doc.setFontSize(11);
        doc.text(25 + shift, line, "Homecoming Thanking Cards ");
        doc.setFontSize(10);
        doc.text(30 + shift, line + 5, "Quality : " + $('#ThankCardQualityH').val());
        doc.text(30 + shift, line + 10, "Size : " + $('#ThankCardSizeH').val());
        doc.text(30 + shift, line + 15, "No. Thanking Cards : " + $('#homeThankCardCount').val());
        thankCardPrinted = true;
    }
    if (thankCardPrinted) {
        line = line + 25;
    }
    //////////////////////////////////////////////////////////////////
    var enlargementPRinted = false;
    if (Number($('#Enlarge1Count').val()) > 0) {
        doc.setFontSize(10);
        doc.text(30, line, "Enlargement Size: " + $('#Enlarge1Size').val() + "       Count: " + $('#Enlarge1Count').val());
        line = line + 5;
        enlargementPRinted = true;
    }
    if (Number($('#Enlarge2Count').val()) > 0) {
        doc.setFontSize(10);
        doc.text(30, line, "Enlargement Size: " + $('#Enlarge2Size').val() + "       Count: " + $('#Enlarge2Count').val());
        line = line + 5;
        enlargementPRinted = true;
    }
    if (Number($('#Enlarge3Count').val()) > 0) {
        doc.setFontSize(10);
        doc.text(30, line, "Enlargement Size: " + $('#Enlarge3Size').val() + "       Count: " + $('#Enlarge3Count').val());
        line = line + 5;
        enlargementPRinted = true;
    }
    if (enlargementPRinted == true) {
        line = line + 5;
    }
    ////////////////////////////////////////////////////////////////////

    if ($('#VidQuality').val() != "N/A") {

        doc.setFontSize(11);
        doc.text(25, line, "Video Details");
        doc.setFontSize(10);
        doc.text(30, line + 5, "Quality : " + $('#VidQuality').val());
        doc.text(30, line + 10, "No Of Cameras : " + $('#VidNoOfCam').val());
        doc.text(30, line + 15, "Type : " + $('#VidType').find(":selected").text());

        if ($('#IncludeDrone').is(":checked") == true) {
            doc.text(30, line + 20, "Drone camera will be used for preshoot video process");
        }
        line = line + 20;
    }

    var adv1 = parseInt($('#Advance1').val()) ? parseInt($('#Advance1').val()) : 0;
    var adv2 = parseInt($('#Advance2').val()) ? parseInt($('#Advance2').val()) : 0;
    var adv3 = parseInt($('#Advance3').val()) ? parseInt($('#Advance3').val()) : 0;
    var adv4 = parseInt($('#Advance4').val()) ? parseInt($('#Advance4').val()) : 0;
    var adv5 = parseInt($('#Advance5').val()) ? parseInt($('#Advance5').val()) : 0;
    var adv6 = parseInt($('#Advance6').val()) ? parseInt($('#Advance6').val()) : 0;

    var sumPayments = adv1 + adv2 + adv3 + adv4 + adv5 + adv6;
    line = line + 10;
    doc.setFontSize(12);
    doc.text(25, line, "Total Album Price : " + $('#Total').val() + "/=");
    doc.setFontSize(10);
    doc.text(25, line + 5, "Advance Payments : " + sumPayments + " ( " +
        (adv1 == 0 ? "" : adv1 + ", ") + (adv2 == 0 ? "" : adv2 + ", ") + (adv3 == 0 ? "" : adv3 + ", ") +
        (adv4 == 0 ? "" : adv4 + ", ") + (adv5 == 0 ? "" : adv5 + ", ") + (adv6 == 0 ? "" : adv6) + ")");

    doc.setFontSize(10);
    var trnsp = $('#Transport').val() == "" ? "N/A" : ($('#Transport').val() + "/= ");
    doc.text(25, line + 10, "Transport Cost : " + trnsp);

    line = line + 15;
    var splitTitle = doc.splitTextToSize($('#Comments').val(), 150);
    if ($('#Comments').val() != "") {
        doc.setFontSize(8);
        doc.text(60, line, splitTitle);
    }
    var fileName = $('#name').val() + '-' + $('#dateW').val() + '.pdf';
    doc.save(fileName);

}

function pdfAll() {
    swal({
        title: "Downloading Shedule",
        text: "Year: " + $('#year').val() + " Month: " + $('#months').val(),
        timer: 3000,
        showConfirmButton: false
    });
    $.post('showAll.php', {
            DBTableName: tableName,
            year: $('#year').val(),
            month: $('#months').val()
        },
        function(returnedData) {
            ovOff();
            console.log(returnedData);
            if (returnedData != "ip") {
                var time = (new Date()).toLocaleDateString('en-US');
                var date = String(new Date()).split("GMT")[0];
                var doc = new jsPDF();
                doc.setFontSize(15);
                var line = 20;
                var shift = 50;
                var pageHeight = doc.internal.pageSize.height;
                var topic = $('#months').val() == "N/A" ? "" : "/" + $('#months').val();
                doc.text(20, line, $('#year').val() + topic + " shedule");
                doc.setFontSize(10);
                doc.text(70, line, date);
                doc.setFontSize(15);
                doc.text(125, line, studioName);
                line = line + 5;
                doc.setFontSize(10);
                var allArr = JSON.parse(returnedData);
                allArr.sort(function(a, b) { return Date.parse(a.date) - Date.parse(b.date) });
                for (var i = 0; i < allArr.length; i++) {
                    line = line + 5;
                    doc.text(20, line, (i + 1) + '.');
                    doc.text(30, line, allArr[i].name);
                    doc.text(70, line, allArr[i].date);
                    doc.text(95, line, allArr[i].time);
                    doc.text(105, line, allArr[i].type);
                    doc.text(125, line, allArr[i].phone);
                    doc.text(147, line, allArr[i].location);

                    if (line + 20 >= pageHeight) {
                        doc.addPage();
                        line = 10;
                    }
                }
                doc.save($('#year').val() + ":" + $('#months').val() + " shedule");
            } else {
                document.location = "login.php";
            }

        }).fail(function() {
        console.log("error");
    });
}

function createFullReport() {
    swal({
        title: "Creating Backup",
        text: "This May Take Few Seconds",
        timer: 3000,
        showConfirmButton: false
    });
    $.post('MainGetAllEvents.php', {
            DBTableName: tableName,
        },
        function(returnedData) {
            ovOff();
            console.log(returnedData);
            downloadCSV(returnedData);

        }).fail(function() {
        console.log("error");
    });
}

function downloadCSV(csv) {
    var utc = new Date().toJSON().slice(0, 10).replace(/-/g, '/');
    var filename, link;
    if (csv == null) return;

    filename = 'backup' + utc + '.csv';

    if (!csv.match(/^data:text\/csv/i)) {
        csv = 'data:text/csv;charset=utf-8,' + csv;
    }
    data = encodeURI(csv);

    link = document.createElement('a');
    link.setAttribute('href', data);
    link.setAttribute('download', filename);
    link.click();
}


function showhideQ1() {
    if ($('#CAQuality').val() == "N/A") {
        $('#Q1').hide();
    } else {
        $('#Q1').show();
    }
}

function showhideQ2() {
    if ($('#FAQuality').val() == "N/A") {
        $('#Q2').hide();
    } else {
        $('#Q2').show();
    }
}

function showhideQ3() {
    if ($('#PSQuality').val() == "N/A") {
        $('#Q3').hide();
    } else {
        $('#Q3').show();
    }
}

function showhideQ4() {
    if ($('#thankCardQuality').val() == "N/A") {
        $('#Q4').hide();
    } else {
        $('#Q4').show();
    }
}

function showhideQ5() {
    if ($('#ThankCardQualityH').val() == "N/A") {
        $('#Q5').hide();
    } else {
        $('#Q5').show();
    }
}

function showhideQ6() {
    if ($('#VidQuality').val() == "N/A") {
        $('#Q6').hide();
    } else {
        $('#Q6').show();
    }
}

function showhideQ7() {
    if ($('#NameG').val() == "") {
        $('#Q7').hide();
    } else {
        $('#Q7').show();
    }
}

function showhideQ8() {
    if ($('#dateW').val() == "") {
        $('#Q8').hide();
    } else {
        $('#Q8').show();
    }
}

function showhideQ9() {
    if ($('#dateH').val() == "") {
        $('#Q9').hide();
    } else {
        $('#Q9').show();
    }
}

function ovOn() {
    document.getElementById("overlay").style.display = "block";
}

function ovOff() {
    document.getElementById("overlay").style.display = "none";
}

window.onload = function() {
    loadScript("js/jquery.js", initializePage);
}

function initializePage() {
    clearAll();
    if (tableName == "siyeraa") {
        $('#help').hide();
    }
    // console.log("JQuery loaded");
    loadScript("js/sweetalert.js", function() {
        // console.log("sweetalert loaded");
    });
    loadScript("js/jspdf.min.js", function() {
        $('#wait').hide();
        // console.log("JSpdf loaded");
    });
    loadHeader();
    loadFooter();

}

function loadScript(url, callback) {

    var script = document.createElement("script")
    script.type = "text/javascript";

    if (script.readyState) { //IE
        script.onreadystatechange = function() {
            if (script.readyState == "loaded" ||
                script.readyState == "complete") {
                script.onreadystatechange = null;

                if (callback) {
                    callback();
                }

                // console.log("loaded IE");
            }
        };
    } else { //Others
        script.onload = function() {
            //callback();
            // console.log("loaded Chomer");
            if (callback) {
                callback();
            }
        };
    }

    script.src = url;
    document.getElementsByTagName("head")[0].appendChild(script);
}