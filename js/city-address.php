<script>
    $(document).ready(function() {
        const apiUrl = 'https://geo.api.gouv.fr/communes?codePostal=';
        const format = '&format=json';

        let zipcode = $('#zip-code');
        let city = $('#City');
        let errorMessage = $('#error-message');

        $(zipcode).on('blur', function() {
            let code = $(this).val();
            let url = apiUrl + code + format;

            fetch(url, {
                method: 'get'
            }).then(response => response.json()).then(results => {
                $(city).find('option').remove();
                if (results.length) {
                    $.each(results, function(key, value) {
                       
                        $(city).append('<option name="valueCity" value="' + value.nom + '">' + value.nom + '</option>');
                    });
                }
            }).catch(err => {
                console.log(err);
            });
        });
    });
</script>