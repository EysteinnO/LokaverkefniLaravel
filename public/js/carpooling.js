"use strict"
$(document).ready(function() {
    console.log("ready!");
    var jasonUrl = "https://apis.is/rides/samferda-drivers/"; //Json string
    $.getJSON(jasonUrl, function(data) {
        var carpool = [];   
        
        console.log(carpool);//Array init   
        
        for (var i = 0; i < data.results.length; i++) {
            carpool.push({
                link: data.results[i].link,                                  
                from: data.results[i].from,
                to: data.results[i].to,
            	date: data.results[i].date,                     
                time: data.results[i].time                
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

        
        
        document.getElementById('tableGoesHere').innerHTML = json2table(carpool, 'table');        

        var dom = {            
            table: document.getElementById('tableGoesHere'),
        };  
        

});
});