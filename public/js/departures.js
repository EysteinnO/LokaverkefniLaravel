"use strict"
$(document).ready(function() {
    console.log("ready!");
    var jasonUrl = "http://apis.is/flight?language=is&type=departures"; //Json string
    $.getJSON(jasonUrl, function(data) {
        var flightInfoDepartures = [];   
        
        console.log(flightInfoDepartures);//Array init   
        
        for (var i = 0; i < data.results.length; i++) {
            flightInfoDepartures.push({
                date: data.results[i].date,                   
                to: data.results[i].flightNumber,
                flightNumber: data.results[i].airline,
            	airline: data.results[i].to,                     
                plannedDeparture: data.results[i].plannedArrival                
            });
        }      
        

        /* The function */
        function json2table(json, classes) {
            var cols = Object.keys(json[0]);
            var headerRow = '';
            var bodyRows = '';
            classes = classes || '';            

            function capitalizeFirstLetter(string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }
            
            cols.map(function(col) {
                headerRow += '<th>' + capitalizeFirstLetter(col) + '</th>';

            });
            json.map(function(row) {
                bodyRows += '<tr>';
                cols.map(function(colName) {
                    bodyRows += '<td>' + row[colName] + '</td>';
                })
                bodyRows += '</tr>';

            });
            return '<table class="' + classes + '"><thead><tr>' + headerRow + '</tr></thead><tbody>' + bodyRows + '</tbody></table>';
        }

        var flightsLength = flightInfoDepartures.length;
        var unboundSlice = Array.prototype.slice;
        var slice = Function.prototype.call.bind(unboundSlice);

        function sliceJSON()
        {
            return slice(arguments)
        }

        var sliced = flightInfoDepartures.slice(2, flightInfoDepartures.length)
        console.log(sliced); 
        
        document.getElementById('tableGoesHere').innerHTML = json2table(sliced, 'table');        
        var dom = {            
            table: document.getElementById('tableGoesHere'),
        };  

});
});