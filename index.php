<html>
    <head>
        <?php
        include_once "Layout/head.php"
        ?>
    </head>

    <body>
        <?php
        include_once "Layout/nav.php";
        include_once "Layout/produk.php";
        include_once "Layout/image-gallery.php";
        include_once "Layout/review.php";
        ?>
    </body>

    <footer class="footer">
        <div class="container container-footer">
            <p class="kontak">Kontak Kami<br>
            <form class="form-inline">
                <div class="form-group  mb-2">
                    <label for="inputPassword2" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary mb-2" style="margin-left:1em;">Confirm identity</button>
            </form>
    </footer>
</html>