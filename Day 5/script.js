const Students = [
    {
        Name: "Sakshi",
        Branch: "CSE",
        CGPA: "9.3"
    },
    {
        Name: "Nikhil",
        Branch: "IT",
        CGPA: "8.9"
    },
    {
        Name: "Naina",
        Branch: "AI",
        CGPA: "9.0"
    }
];

let html = "";

Students.forEach(student => {

    html += `
        <div class="col-md-4 card-item">

            <div class="card shadow">

                <div class="card-body">

                    <h4>${student.Name}</h4>

                    <button class="btn btn-primary mt-2">
                        Show Details
                    </button>

                    <div class="details" style="display:none;">

                        <p><strong>Branch:</strong> ${student.Branch}</p>

                        <p><strong>CGPA:</strong> ${student.CGPA}</p>

                    </div>

                </div>

            </div>

        </div>
    `;

});

document.getElementById("container").innerHTML = html;


// Show / Hide Details

$(document).on("click", ".btn", function () {

    let details = $(this).next(".details");

    details.slideToggle();

    if ($(this).text() === "Show Details") {

        $(this).text("Hide Details");

    } else {

        $(this).text("Show Details");

    }

});


// Search Students

$("#search").on("keyup", function () {

    let value = $(this).val().toLowerCase();

    $(".card-item").filter(function () {

        $(this).toggle(
            $(this).text().toLowerCase().indexOf(value) > -1
        );

    });

});