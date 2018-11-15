"use strict"

function initShip() {

	//Ship name, regional code (eg. RE-100) or the registy's registration number

    var jasonUrl = "http://apis.is/ship?search=engey"; //Json string
    $.getJSON(jasonUrl, function (data) {
        var shipInfo = []; //Array init

        console.log(shipInfo); //Testing purposes
        console.log(data);
}

for (var i = 0; i < data.results.length; i++) { //Loop through json
            earthquakeInfo.push({ //Initializing callable array elements
                earthquakeDepth: data.results[i].depth,
                timeStamp: data.results[i].timestamp,
                xcoordinate: data.results[i].latitude,
                ycoordinate: data.results[i].longitude,
                earthquakeSize: data.results[i].size,
                location: data.results[i].humanReadableLocation
            });

        }