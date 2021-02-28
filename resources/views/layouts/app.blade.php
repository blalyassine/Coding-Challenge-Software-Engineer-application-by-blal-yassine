<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coding Challenge</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{!! mix('css/app.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg col-12  navbar-light bg-light">
                    <router-link class="nav-item nav-link" to="/Product">Product</router-link>
                    <router-link class="nav-item nav-link" to="/category">Category</router-link>
                </nav>
                <router-view></router-view>
            </div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- script -->
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <script src="{!! mix('js/app.js') !!}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"></script>
</body>
</html>