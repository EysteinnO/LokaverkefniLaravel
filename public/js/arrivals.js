"use strict"
$(document).ready(function() {
    console.log("ready!");
    var jasonUrl = "http://apis.is/flight?language=is&type=arrival"; //Json string
    $.getJSON(jasonUrl, function(data) {
        var flightInfoArrivals = [];   
        
        console.log(flightInfoArrivals);//Array init   
        
        for (var i = 0; i < data.results.length; i++) {
            flightInfoArrivals.push({
                date: data.results[i].date,                   
                from: data.results[i].flightNumber,
                flightNumber: data.results[i].airline,
            	airline: data.results[i].from,                     
                plannedArrival: data.results[i].plannedArrival                
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

        var sliced = flightInfoArrivals.slice(2,17); //Page 1
        var sliced2 = flightInfoArrivals.slice(18,33); //Page 2
        var sliced3 = flightInfoArrivals.slice(34,49); //Page 3
        var sliced4 = flightInfoArrivals.slice(50,65); //Page 4       
       
        document.getElementById('tableGoesHere').innerHTML = json2table(sliced, 'table');        
        var dom = {            
            table: document.getElementById('tableGoesHere'),
        };  

});
});