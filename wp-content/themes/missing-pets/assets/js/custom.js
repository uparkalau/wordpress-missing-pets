jQuery(document).ready(function($) {
    function fetchPets(searchValue) {
        $.ajax({
            url: 'wp-json/missing-pets/v1/pets',
            data: { search: searchValue },
            method: 'GET',
            success: function(data) {
                var petsContainer = $('#pets-container');
                petsContainer.empty();

                $.each(data, function(i, pet) {
                    var petCard = '<div class="row border-bottom">' +
                                  '<div class="col-md-4 p-2">' + pet.name + '</div>' +
                                  '<div class="col-md-4 p-2">' + pet.animal + '</div>' +
                                  '<div class="col-md-4 p-2">' + pet.age + '</div>' +
                                  '</div>';
                    petsContainer.append(petCard);
                });

                var summary = $('#summary');
                summary.empty();
                summary.append('<div class="col-md-4 p-2">Currently displaying ' + data.length + ' pets.</div>');

            }
        });
    }

    fetchPets();

    $('#search').on('input', function() {
        var searchValue = $(this).val().toLowerCase();
        fetchPets(searchValue);
    });
});
