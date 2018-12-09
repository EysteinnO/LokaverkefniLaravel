"use strict"
$(document).ready(function() {
    console.log("ready!");
    var jasonUrl = "https://apis.is/petrol"; //Json string
    $.getJSON(jasonUrl, function(data) {
        var gas = [];   
        
        console.log(gas);//Array init   
        
        for (var i = 0; i < data.results.length; i++) {
            gas.push({
                Location: data.results[i].name,
                Company: data.results[i].company,
                Petrol95: data.results[i].bensin95,                                  
                Petrol95Discount: data.results[i].bensin95_discount,                
            	Diesel: data.results[i].diesel,                     
                DieselDiscount: data.results[i].diesel_discount                
            });
        }            
        console.log(gas[0].Petrol95);
        
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
        
        document.getElementById('tableGoesHere').innerHTML = json2table(gas, 'table');        

        var dom = {            
            table: document.getElementById('tableGoesHere'),
        };  
        
        

});
});