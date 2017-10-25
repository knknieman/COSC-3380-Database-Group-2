//Need to change all jcontent.Books for whatever the returning json "Header" reads
function tableFromJson(jsonName) {
    var ajaxhttp = new XMLHttpRequest();
    var url = jsonName;
    var temp = "";

    //Need to change all jcontent.Books for whatever the returning json "Header" reads
    ajaxhttp.open("GET", url, true);
    ajaxhttp.setRequestHeader("content-type", "application/json");
    ajaxhttp.send(null);
    ajaxhttp.onreadystatechange = function () {
        if (ajaxhttp.readyState == 4 && ajaxhttp.status == 200) {
            var output = document.getElementById('showData');
            var jcontent = JSON.parse(ajaxhttp.responseText);

            //Change here
            console.log(jcontent.Books.length);
            console.log("Hello");
            //output.innerHTML = jcontent.Books[1].Category;

            // EXTRACT VALUE FOR HTML HEADER.
            var col = [];

            //Change Here
            for (var i = 0; i < jcontent.Books.length; i++) {
                for (var key in jcontent.Books[i]) {
                    if (col.indexOf(key) === -1) {
                        col.push(key);
                    }
                }
            }

            // CREATE DYNAMIC TABLE.
            var table = document.createElement("table");

            // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

            var tr = table.insertRow(-1);                   // TABLE ROW.

            for (var i = 0; i < col.length; i++) {
                var th = document.createElement("th");      // TABLE HEADER.
                th.innerHTML = col[i];
                tr.appendChild(th);
            }

            //Change Here twice
            // ADD JSON DATA TO THE TABLE AS ROWS.
            for (var i = 0; i < jcontent.Books.length; i++) {

                tr = table.insertRow(-1);


                for (var j = 0; j < col.length; j++) {
                    var tabCell = tr.insertCell(-1);
                    tabCell.innerHTML = jcontent.Books[i][col[j]];
                }
            }

            // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
            var divContainer = document.getElementById("showData");
            divContainer.innerHTML = "";
            divContainer.appendChild(table);
        }

    }
}
