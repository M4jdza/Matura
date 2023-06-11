table = document.getElementById("Tabela");
var rows = table.rows;

function sortiraj(n) {

    var i, x, y, count = 0;
    var switching = true;

    // Order is set as ascending
    var direction = "ascending";

    // Run loop until no switching is needed
    while (switching) {
        switching = false;

        //Loop to go through all rows
        for (i = 1; i < (rows.length - 1); i++) {
            var Switch = false;

            // Fetch 2 elements that need to be compared
            x = rows[i].getElementsByTagName("td")[n];
            y = rows[i + 1].getElementsByTagName("td")[n];

            // Check the direction of order
            if (direction == "ascending") {

                // Check if 2 rows need to be switched
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    // If yes, mark Switch as needed and break loop
                    Switch = true;
                    break;
                }
            } else if (direction == "descending") {

                // Check direction
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                    // If yes, mark Switch as needed and break loop
                    Switch = true;
                    break;
                }
            }
        }
        if (Switch) {
            // Function to switch rows and mark switch as completed
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;

            // Increase count for each switch
            count++;
        } else {
            // Run while loop again for descending order
            if (count == 0 && direction == "ascending") {
                direction = "descending";
                switching = true;
            }
        }
    }
}

function obojiNeparne() {
    var odd = false;
    for (var i = 0; i < rows.length; i++) {
        if (rows[i].style.display !== 'none') { // or whatever your display mechanism is
            odd = !odd; // toggle back and forth between odd/even
            rows[i].style.backgroundColor = odd ? '#fff' : 'lightgrey'; // set color
        }
    }
}

function polozili(n) {
    for (i = 1; i < rows.length; i++) {
        var x = rows[i].getElementsByTagName("td")[n];
        if (x.innerHTML > 50) {
            rows[i].style.backgroundColor = "#00FF00";
        }
    }
}

function nisuPolozili(n) {
    for (i = 1; i < rows.length; i++) {
        var x = rows[i].getElementsByTagName("td")[n];
        if (x.innerHTML < 50) {
            rows[i].style.backgroundColor = "red";
        }
    }
}

function izdvoji(n) {
    for (i = 1; i < rows.length; i++) {
        var x = rows[i].getElementsByTagName("td")[n];
        if (x.innerHTML < 50) {
            table.deleteRow(i);
        }
    }
    sortiraj1(4);
}

function sortiraj1(n) {
    var i, x, y, count = 0;
    var switching = true;

    // Order is set as ascending
    var direction = "ascending";

    // Run loop until no switching is needed
    while (switching) {
        switching = false;

        //Loop to go through all rows
        for (i = 1; i < (rows.length - 1); i++) {
            var Switch = false;

            // Fetch 2 elements that need to be compared
            x = rows[i].getElementsByTagName("td")[n];
            y = rows[i + 1].getElementsByTagName("td")[n];

            // Check the direction of order
            if (direction == "ascending") {

                // Check if 2 rows need to be switched
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    // If yes, mark Switch as needed and break loop
                    Switch = true;
                    break;
                }
            }
        }
        if (Switch) {
            // Function to switch rows and mark switch as completed
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;

            // Increase count for each switch
            count++;
        } else {
            // Run while loop again for descending order
            if (count == 0 && direction == "ascending") {
                direction = "descending";
                switching = true;
            }
        }
    }
}
