<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Swagger UI</title>
    <link rel="stylesheet" type="text/css"
          href="/vendor/arpanext/swagger-ui-lpkg/components/swagger-ui/dist/swagger-ui.css">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16"/>
    <style>
        html {
            box-sizing: border-box;
            overflow: -moz-scrollbars-vertical;
            overflow-y: scroll;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        body {
            margin: 0 0 320px 0;
            background: #fafafa;
        }
    </style>
</head>

<body>

<div id="swagger-ui"></div>
<script src="/vendor/arpanext/swagger-ui-lpkg/components/swagger-ui/dist/swagger-ui-bundle.js"></script>
<script src="/vendor/arpanext/swagger-ui-lpkg/components/swagger-ui/dist/swagger-ui-standalone-preset.js"></script>
<script src="/vendor/arpanext/swagger-ui-lpkg/components/jquery/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var request = $.ajax({
            url: "{{ route('api.v1.swagger-ui-lpkg.schemas.index') }}",
            method: "GET",
            dataType: "json"
        });

        request.done(function (response) {
            let urls = [];

            response.forEach(function (item) {
                urls.push({
                    name: item.url,
                    url: item.url,
                });
            });

            // Begin Swagger UI call region
            console.log(window.location.pathname);
            const ui = SwaggerUIBundle({
                url: urls[0],
                urls: urls,
                dom_id: '#swagger-ui',
                deepLinking: true,
                presets: [
                    SwaggerUIBundle.presets.apis,
                    SwaggerUIStandalonePreset
                ],
                plugins: [
                    SwaggerUIBundle.plugins.DownloadUrl
                ],
                layout: "StandaloneLayout",
                validatorUrl: "https://validator.swagger.io/validator",
                filter: true,
                withCredentials: true
            })
            // End Swagger UI call region
            window.ui = ui
        });

        request.fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
    });
</script>
</body>
</html>
