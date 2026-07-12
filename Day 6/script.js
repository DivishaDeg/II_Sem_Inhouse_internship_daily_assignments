$(document).ready(function () {

    $("#loading").show();

    $.ajax({

        url: "https://jsonplaceholder.typicode.com/users",

        method: "GET",

        success: function (data) {

            $("#loading").hide();

            $("#count").text("Showing " + data.length + " users");

            $.each(data, function (index, user) {

                let bg = (index % 2 == 0) ? "even-card" : "odd-card";

                let card = `

                <div class="col-md-6 col-lg-4">

                    <div class="card ${bg} h-100">

                        <img src="https://i.pravatar.cc/150?img=${user.id}"
                        class="user-img">

                        <div class="card-body text-center">

                            <h4>${user.name}</h4>

                            <p class="text-primary">${user.email}</p>

                            <h6>${user.company.name}</h6>

                        </div>

                    </div>

                </div>

                `;

                $("#user-container").append(card);

            });

        },

        error: function () {

            $("#loading").hide();

            $("#error").removeClass("d-none");

        }

    });

});