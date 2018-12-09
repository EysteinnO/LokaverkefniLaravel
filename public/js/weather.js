"use strict"
$(document).ready(function() {
    console.log("ready!");
    var jasonUrl = "https://apis.is/weather/forecasts/en"; //Json string
    $.getJSON(jasonUrl, function(data) {
        var carpool = [];   
        
        console.log(carpool);//Array init   
        
        for (var i = 0; i < data.results.length; i++) {
            carpool.push({
                name: data.results[i].name,
                atime: data.results[i].atime,                                  
                                              
            });
        }   
        /*
        Time: data.results[i].ftime
                Windspeed: data.results[i].F,                                  
                Wind direction: data.results[i].D,
                Temperature: data.results[i].T,
                Description: data.results[i].W,                     
                Cloud cover: data.results[i].N            
        */
        
        /* The function */
        /*
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

        
        
        document.getElementById('tableGoesHere').innerHTML = json2table(carpool, 'table');        

        var dom = {            
            table: document.getElementById('tableGoesHere'),
        };  
        */

});
});