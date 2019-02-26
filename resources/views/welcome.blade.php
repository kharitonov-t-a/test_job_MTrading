<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        @include('styles')
    </head>
    <body>





        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Banner
                </div>

                <form id="bannerform" method="post" class="validateform" name="send-contact">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-lg-12 field">
                            <input type="text" name="tags" placeholder="Enter tags" required />
                        </div>
                        <div class="col-lg-12 margintop10 field">
                            <p>
                                <button class="btn btn-theme margintop10 pull-left" type="submit">Отправить</button>
                            </p>
                        </div>
                    </div>
                </form>

                <div class="slider-box">
                    <div class="slider">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="m-b-md">
                    <button id="next">></button>
                </div>
            </div>
        </div>


        @include('scripts')
    </body>
</html>
