<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/b8991598b2.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script src="script.js"></script>

</head>
<body>
    <p></p>
    <div class="container-fluid" id="app">
        <div class="header">
            <div class="brand">blog.ru</div>
            <form action="index.php" class="searchform">
                <input type="text" class="search" placeholder="Search.." name="search">
                <div class="fa fa-search" id="search_ikon" v-on:click="message=true"></div>
            </form>
            <template v-if="window.width < 473">
                <div class="fa fa-search" id="poisk" v-on:click="message=true"></div>
            </template>
            <a class="vhod" href="youtube.com">Вход</a>
            <a class="registr" href="youtube.com">Регистрация</a>
        </div>
        <div class="content">
            <div class="search_down"></div>
            <!-- <div class="post"></div> -->
        </div>
    </div>  
    <script>
        var app = new Vue({
            el: '#app',
            data: {
            message: false,
            window: {
                width: 0,
                height: 0
            }
        },
        created() {
            window.addEventListener('resize', this.handleResize);
            this.handleResize();
        },
        destroyed() {
            window.removeEventListener('resize', this.handleResize);
        },
        methods: {
            handleResize() {
                this.window.width = window.innerWidth;
                this.window.height = window.innerHeight;
            }
        }
});
    </script>
</body>
</html>