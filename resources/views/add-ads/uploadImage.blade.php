<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue CropGram</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        html,
        body {
            background-color: #000000;
            font-family: 'Nunito', sans-serif;
        }

        .cropper-wrapper {
            width: 100%;
        }

        .cp-view {
            height: 300px;
        }

        .cropper-container {
            width: 100%;
        }

        @media (min-width: 576px) {
            .cropper-wrapper {
                width: auto;
            }

            .cp-view {
                width: 300px;
            }
        }
    </style>
</head>

<body>
    <div class="row">
        <div id="app" class="col-sm-12 justify-content-center">
            <crop-gram v-show="true" ref="cropgram" placeholder-color="#ff4605" selection-text="اختر صور الإعلان"
                selection-text-class="px-2 mb-1 text-left small-9 text-uppercase text-primary2 spacing-05" has-changed>
            </crop-gram>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>
