let searchField, address;
if (document.getElementById("addressInput")) {
    searchField = document.getElementById("addressInput");
}

if (searchField !== 'undefined') {
    var placesAutocomplete = new google.maps.places.Autocomplete(searchField, {
        types: ["geocode"],
        componentRestrictions: { country: "DE" } // "DE" is the country code for Germany
    });
    searchField.addEventListener('change', function (event) {
        document.getElementById('caclulateBtn').removeAttribute('disabled');
    })

}


function calculateDistance($this) {

    if (!searchField.value) {
        alert('Fill the address');
        return;
    }
    let origin = searchField.value;
    let destinations = JSON.parse($this.getAttribute('data-address'));
    if (destinations.length <= 0) {
        alert('Destination address not found! Please add from the backend');
    }
    let service = new google.maps.DistanceMatrixService();
    let distanceTable = document.getElementById("distanceTable");
    distanceTable.innerHTML = "<tr><th>Destination</th><th>Distance (km)</th></tr>";

    for (let i = 0; i < destinations.length; i++) {
        service.getDistanceMatrix({
            origins: [origin],
            destinations: [destinations[i]],
            travelMode: 'DRIVING',
            unitSystem: google.maps.UnitSystem.METRIC,
        }, function(response, status) {
            if (status === 'OK') {
                var destination = destinations[i];
                var distance = response.rows[0].elements[0].distance.text;
                addRowToTable(destination, distance);
            } else {
                alert('Error: ' + status);
            }
        });
    }
}

function addRowToTable(destination, distance) {
    var distanceTable = document.getElementById("distanceTable");
    var row = distanceTable.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    cell1.innerHTML = destination;
    cell2.innerHTML = distance;
}
