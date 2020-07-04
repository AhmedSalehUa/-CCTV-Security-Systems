var bgColor;


function setFilter(details) {
    switch (details) {
        case 'security-systems':
            const det1 = ["office-equipment-details", "solar-energy-details", "communication-systems-details", "educational-systems-details", "it-solutions-details"];
            removeOtherDetailsSelect(det1);
            if (document.getElementById("security-systems-details").open != true) {
                setColors('security-systems');
                setFilterSectionsLi('security-systems');
            } else {
                setFilterSectionsLi('security-systems');
            }
            break;
        case 'office-equipment':
            const det3 = ["security-systems-details", "solar-energy-details", "communication-systems-details", "educational-systems-details", "it-solutions-details"];
            removeOtherDetailsSelect(det3);
            if (document.getElementById("office-equipment-details").open != true) {
                setColors('office-equipment');
                setFilterSectionsLi('office-equipment');
            } else {
                setFilterSectionsLi('office-equipment');
            }
            break;
        case 'solar-energy':
            const det5 = ["office-equipment-details", "security-systems-details", "communication-systems-details", "educational-systems-details", "it-solutions-details"];
            removeOtherDetailsSelect(det5);
            if (document.getElementById("solar-energy-details").open != true) {
                setColors('solar-energy');
                setFilterSectionsLi('solar-energy');
            } else {
                setFilterSectionsLi('solar-energy');
            }
            break;
        case 'communication-systems':
            const det7 = ["office-equipment-details", "solar-energy-details", "educational-systems-details", "security-systems-details", "it-solutions-details"];
            removeOtherDetailsSelect(det7);
            if (document.getElementById("communication-systems-details").open != true) {
                setColors('communication-systems');
                setFilterSectionsLi('communication-systems');
            } else {
                setFilterSectionsLi('communication-systems');
            }
            break;
        case 'educational-systems':
            const det9 = ["office-equipment-details", "solar-energy-details", "communication-systems-details", "security-systems-details", "it-solutions-details"];
            removeOtherDetailsSelect(det9);
            if (document.getElementById("educational-systems-details").open != true) {
                setColors('educational-systems');
                setFilterSectionsLi('educational-systems');
            } else {
                setFilterSectionsLi('educational-systems');
            }
            break;
        case 'it-solutions':
            const det11 = ["office-equipment-details", "solar-energy-details", "communication-systems-details", "educational-systems-details", "security-systems-details"];
            removeOtherDetailsSelect(det11);
            if (document.getElementById("it-solutions-details").open != true) {
                setColors('it-solutions');
                setFilterSectionsLi('it-solutions');
            } else {
                setFilterSectionsLi('it-solutions');
            }
            break;
    }

}

function removeOtherDetailsSelect(other) {
    other.forEach(myFunction);

    function myFunction(item, index) {
        document.getElementById(item).open = false;
    }

}

function removeOtherArticle(other) {
    other.forEach(myFunction);

    function myFunction(item, index) {
        document.getElementById(item).style.display = "none";
    }
}

function setFilterSections(li) {
    switch (li) {
        case 'fire-alarms':
            // setFilter("security-systems");
            setColors('fire-alarms');
            setFilterSectionsLi('fire-alarms');
            break;
        case 'cctv':
            setFilter("security-systems");
            setColors('cctv');
            setFilterSectionsLi('cctv');
            break;
        case 'theft-alarms':
            setFilter("security-systems");
            setColors('theft-alarms');
            setFilterSectionsLi('theft-alarms');
            break;
        case 'security-gates':
            setFilter("security-systems");
            setColors('security-gates');
            setFilterSectionsLi('security-gates');
            break;
        case 'cash-counting':
            setFilter("office-equipment");
            setColors('cash-counting');
            setFilterSectionsLi('cash-counting');
            break;
        case 'phingerprint':
            setFilter("office-equipment");
            setColors('phingerprint');
            setFilterSectionsLi('phingerprint');
            break;
        case 'photocopier':
            setFilter("office-equipment");
            setColors('photocopier');
            setFilterSectionsLi('photocopier');
            break;
        case 'iron-storage':
            setFilter("office-equipment");
            setColors('iron-storage');
            setFilterSectionsLi('iron-storage');
            break;
        case 'solar-heaters':
            setFilter("solar-energy");
            setColors('solar-heaters');
            setFilterSectionsLi('solar-heaters');
            break;
        case 'solar-power':
            setFilter("solar-energy");
            setColors('solar-power');
            setFilterSectionsLi('solar-power');
            break;
        case 'internal-central':
            setFilter("communication-systems");
            setColors('internal-central');
            setFilterSectionsLi('internal-central');
            break;
        case 'information-networks':
            setFilter("communication-systems");
            setColors('information-networks');
            setFilterSectionsLi('information-networks');
            break;
        case 'sound-systems':
            setFilter("communication-systems");
            setColors('sound-systems');
            setFilterSectionsLi('sound-systems');
            break;
        case 'fax':
            setFilter("communication-systems");
            setColors('fax');
            setFilterSectionsLi('fax');
            break;
        case 'language-labs':
            setFilter("educational-systems");
            setColors('language-labs');
            setFilterSectionsLi('language-labs');
            break;
        case 'data-show':
            setFilter("educational-systems");
            setColors('data-show');
            setFilterSectionsLi('data-show');
            break;
        case 'interactive-whiteboard':
            setFilter("educational-systems");
            setColors('interactive-whiteboard');
            setFilterSectionsLi('interactive-whiteboard');
            break;
        case 'web-applications':
            setFilter("it-solutions");
            setColors('web-applications');
            setFilterSectionsLi('web-applications');
            break;
        case 'desktop-applications':
            setFilter("it-solutions");
            setColors('desktop-applications');
            setFilterSectionsLi('desktop-applications');
            break;
        case 'mobile-apllications':
            setFilter("it-solutions");
            setColors('mobile-apllications');
            setFilterSectionsLi('mobile-apllications');
            break;

    }
}

function setFilterSectionsLi(li) {

    switch (li) {
        case 'security-systems':
            var x1 = document.getElementsByClassName("fire-alarms");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("cctv");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("security-gates");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("theft-alarms");
            setAttribute(x1, "inline-block");
            break;
        case 'office-equipment':
            x1 = document.getElementsByClassName("cash-counting");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("phingerprint");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("photocopier");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("iron-storage");
            setAttribute(x1, "inline-block");
            break;
        case 'solar-energy':
            x1 = document.getElementsByClassName("solar-heaters");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("solar-power");
            setAttribute(x1, "inline-block");
            break;
        case 'communication-systems':
            x1 = document.getElementsByClassName("internal-central");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("information-networks");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("sound-systems");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("fax");
            setAttribute(x1, "inline-block");
            break;
        case 'educational-systems':
            x1 = document.getElementsByClassName("language-labs");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("data-show");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("interactive-whiteboard");
            setAttribute(x1, "inline-block");
            break;
        case 'it-solutions':
            x1 = document.getElementsByClassName("web-applications");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("desktop-applications");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("mobile-apllications");
            setAttribute(x1, "inline-block");
            break;
        case 'fire-alarms':
            x1 = document.getElementsByClassName("fire-alarms");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("cctv");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("security-gates");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("theft-alarms");
            setAttribute(x1, "none");
            break;
        case 'cctv':
            x1 = document.getElementsByClassName("fire-alarms");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("cctv");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("security-gates");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("theft-alarms");
            setAttribute(x1, "none");
            break;
        case 'theft-alarms':
            x1 = document.getElementsByClassName("fire-alarms");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("cctv");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("security-gates");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("theft-alarms");
            setAttribute(x1, "inline-block");
            break;
        case 'security-gates':
            x1 = document.getElementsByClassName("fire-alarms");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("cctv");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("security-gates");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("theft-alarms");
            setAttribute(x1, "none");
            break;
        case 'cash-counting':
            x1 = document.getElementsByClassName("cash-counting");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("phingerprint");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("photocopier");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("iron-storage");
            setAttribute(x1, "none");
            break;

        case 'phingerprint':
            x1 = document.getElementsByClassName("cash-counting");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("phingerprint");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("photocopier");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("iron-storage");
            setAttribute(x1, "none");
            break;
        case 'photocopier':
            x1 = document.getElementsByClassName("cash-counting");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("phingerprint");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("photocopier");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("iron-storage");
            setAttribute(x1, "none");
            break;
        case 'iron-storage':
            x1 = document.getElementsByClassName("cash-counting");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("phingerprint");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("photocopier");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("iron-storage");
            setAttribute(x1, "inline-block");
            break;
        case 'solar-heaters':
            x1 = document.getElementsByClassName("solar-heaters");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("solar-power");
            setAttribute(x1, "none");
            break;
        case 'solar-power':
            x1 = document.getElementsByClassName("solar-heaters");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("solar-power");
            setAttribute(x1, "inline-block");
            break;
        case 'internal-central':
            x1 = document.getElementsByClassName("internal-central");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("information-networks");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("sound-systems");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("fax");
            setAttribute(x1, "none");
            break;
        case 'information-networks':
            x1 = document.getElementsByClassName("internal-central");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("information-networks");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("sound-systems");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("fax");
            setAttribute(x1, "none");
            break;
        case 'sound-systems':
            x1 = document.getElementsByClassName("internal-central");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("information-networks");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("sound-systems");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("fax");
            setAttribute(x1, "none");
            break;
        case 'fax':
            x1 = document.getElementsByClassName("internal-central");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("information-networks");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("sound-systems");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("fax");
            setAttribute(x1, "inline-block");
            break;
        case 'language-labs':
            x1 = document.getElementsByClassName("language-labs");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("data-show");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("interactive-whiteboard");
            setAttribute(x1, "none");
            break;
        case 'data-show':
            x1 = document.getElementsByClassName("language-labs");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("data-show");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("interactive-whiteboard");
            setAttribute(x1, "none");
            break;
        case 'interactive-whiteboard':
            x1 = document.getElementsByClassName("language-labs");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("data-show");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("interactive-whiteboard");
            setAttribute(x1, "inline-block");
            break;
        case 'web-applications':
            x1 = document.getElementsByClassName("web-applications");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("desktop-applications");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("mobile-apllications");
            setAttribute(x1, "none");
            break;
        case 'desktop-applications':
            x1 = document.getElementsByClassName("web-applications");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("desktop-applications");
            setAttribute(x1, "inline-block");
            x1 = document.getElementsByClassName("mobile-apllications");
            setAttribute(x1, "none");
            break;
        case 'mobile-apllications':
            x1 = document.getElementsByClassName("web-applications");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("desktop-applications");
            setAttribute(x1, "none");
            x1 = document.getElementsByClassName("mobile-apllications");
            setAttribute(x1, "inline-block");
            break;
    }
}

function setAttribute(x1, att) {
    for (var i = 0; i < x1.length; i++) {
        x1[i].style.display = att;
    }

}

function setColors(li) {
    switch (li) {
        case 'security-systems':
            setColorsOut(["security-li", "CCTV-li", "theft-li", "fire-li"]);
            break;
        case 'office-equipment':
            setColorsOut(["cash-li", "phingerprint-li", "iron-li", "photocopier-li"]);
            break;
        case 'solar-energy':
            setColorsOut(["solar-heaters-li", "solar-power-li"]);
            break;
        case 'communication-systems':
            setColorsOut(["information-networks-li", "fax-li", "sound-li", "internal-central-li"]);
            break;
        case 'educational-systems':
            setColorsOut(["language-labs-li", "data-show-li", "interactive-whiteboard-li"]);
            break;
        case 'it-solutions':
            setColorsOut(["web-li", "desktop-li", "mobile-li"]);
            break;
        case 'fire-alarms':
            setColorsin("fire-li");
            setColorsOut(["security-li", "CCTV-li", "theft-li"]);
            break;
        case 'cctv':
            setColorsin("CCTV-li");
            setColorsOut(["fire-li", "security-li", "theft-li"]);
            break;
        case 'theft-alarms':
            setColorsin("theft-li");
            setColorsOut(["fire-li", "CCTV-li", "security-li"]);
            break;
        case 'security-gates':
            setColorsin("security-li");
            setColorsOut(["fire-li", "CCTV-li", "theft-li"]);
            break;
        case 'cash-counting':
            setColorsin("cash-li");
            setColorsOut(["iron-li", "phingerprint-li", "photocopier-li"]);
            break;
        case 'phingerprint':
            setColorsin("phingerprint-li");
            setColorsOut(["cash-li", "iron-li", "photocopier-li"]);
            break;
        case 'photocopier':
            setColorsin("photocopier-li");
            setColorsOut(["cash-li", "phingerprint-li", "iron-li"]);
            break;
        case 'iron-storage':
            setColorsin("iron-li");
            setColorsOut(["cash-li", "phingerprint-li", "photocopier-li"]);
            break;
        case 'solar-heaters':
            setColorsin("solar-heaters-li");
            setColorsOut(["solar-power-li"]);
            break;
        case 'solar-power':
            setColorsin("solar-power-li");
            setColorsOut(["solar-heaters-li"]);
            break;
        case 'internal-central':
            setColorsin("internal-central-li");
            setColorsOut(["information-networks-li", "fax-li", "sound-li"]);
            break;
        case 'information-networks':
            setColorsin("information-networks-li");
            setColorsOut(["internal-central-li", "fax-li", "sound-li"]);
            break;
        case 'sound-systems':
            setColorsin("sound-li");
            setColorsOut(["internal-central-li", "information-networks-li", "fax-li"]);
            break;
        case 'fax':
            setColorsin("fax-li");
            setColorsOut(["internal-central-li", "information-networks-li", "sound-li"]);
            break;
        case 'language-labs':
            setColorsin("language-labs-li");
            setColorsOut(["interactive-whiteboard-li", "data-show-li"]);
            break;
        case 'data-show':
            setColorsin("data-show-li");
            setColorsOut(["language-labs-li", "interactive-whiteboard-li"]);
            break;
        case 'interactive-whiteboard':
            setColorsin("interactive-whiteboard-li");
            setColorsOut(["language-labs-li", "data-show-li"]);
            break;
        case 'web-applications':
            setColorsin("web-li");
            setColorsOut(["mobile-li", "desktop-li"]);
            break;
        case 'desktop-applications':
            setColorsin("desktop-li");
            setColorsOut(["web-li", "mobile-li"]);
            break;
        case 'mobile-apllications':
            setColorsin("mobile-li");
            setColorsOut(["web-li", "desktop-li"]);
            break;
    }
}

function setColorsin(li) {
    document.getElementById(li).style.backgroundColor = "#FFF";
    document.getElementById(li).style.color = "#056daa";
}

function setColorsOut(other) {
    other.forEach(myFunction);

    function myFunction(item, index) {
        document.getElementById(item).style.backgroundColor = "#4d9ece";
        document.getElementById(item).style.color = "#FFF";
    }
}

function updatePg(paramVal) {

    var param = 'page';
    var TheAnchor = null;
    var newAdditionalURL = "";
    var tempArray = window.location.href.split("?");
    var baseURL = tempArray[0];
    var additionalURL = tempArray[1];
    var temp = "";

    if (additionalURL) {
        var tmpAnchor = additionalURL.split("#");
        var TheParams = tmpAnchor[0];
        TheAnchor = tmpAnchor[1];
        if (TheAnchor)
            additionalURL = TheParams;

        tempArray = additionalURL.split("&");

        for (var i = 0; i < tempArray.length; i++) {
            if (tempArray[i].split('=')[0] != param) {
                newAdditionalURL += temp + tempArray[i];
                temp = "&";
            }
        }
    } else {
        var tmpAnchor = baseURL.split("#");
        var TheParams = tmpAnchor[0];
        TheAnchor = tmpAnchor[1];

        if (TheParams)
            baseURL = TheParams;
    }

    if (TheAnchor)
        paramVal += "#" + TheAnchor;

    var rows_txt = temp + "" + param + "=" + paramVal;
    window.open(baseURL + "?" + newAdditionalURL + rows_txt, '_self');
}