<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="SwaggerUI" />
    <title>Correct Hustle</title>
    <link rel="stylesheet" href="{{ asset('dist/swagger-ui.css') }}" />
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        .navbar {
            font-family: sans-serif;
            height: 50px;
            padding: 0.25rem 1rem;
            top: 0;
            background-color: #fff;
            border-bottom: 1px solid #e2e2e2;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #swagger-ui {
            padding: 0rem 0.5rem;
        }

        .form-control {
            padding: 0.75rem;
            width: 100px;
            background: #fff;
            border-radius: 0.5rem;
            border: 1px solid #e0e0e0;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="" style="display:flex">
            <input type="text" id="authInput" placeholder="bearer token" class="form-control" oninput="setKey()">
        </div>

        <h4 style="color:#525252">hustle &copy;</h4>
    </div>

    <div id="swagger-ui"></div>

    <script src="{{ asset('dist/swagger-ui-bundle.js') }}" defer></script>
    <script src="{{ asset('dist/swagger-ui-standalone-preset.js') }}" defer></script>
    <script>
        function setKey() {
            localStorage.setItem("hustle-swaggerToken", event.currentTarget.value)
        }

        window.onload = () => {
            let path = "{{ asset('apis/page1.yaml') }}"

            authInput.value = localStorage.getItem("hustle-swaggerToken");

            window.ui = SwaggerUIBundle({
                url: path,
                dom_id: '#swagger-ui',
                requestInterceptor: function(req) {
                    var key = localStorage.getItem("hustle-swaggerToken");

                    if (key && key.trim() !== "") {
                        req.headers.Authorization = 'Bearer ' + key;
                    }

                    return req;
                },
                presets: [
                    SwaggerUIBundle.presets.apis,
                    SwaggerUIStandalonePreset
                ],
                layout: "StandaloneLayout",
            });
        };
    </script>
</body>

</html>
