

            <footer style="background: rgb(3,47,8);color:white;padding: 6rem 20px;">
                    <div class="container">
                           <div class="col-md-12" align="center" style="color: #f0f0f0">
                                 &copy; 2024 Chaine de restaurants. Tous droit reservé.<br/>
                                 Coded by <a href="mailto:www.dikitelebeni@gmail.com">Beni Sampay Dikitele</a>
                        </div>
                    </div>
                </footer>
        <script src="utilities/bootstrap/font-awesome/fontawesome-all.min.js"></script>
        <script src="utilities/bootstrap/js/jquery.js"></script>
        <script src="utilities/bootstrap/js/bootstrap.min.js"></script>
        <script src="utilities/default.js"></script>
        <script src="utilities/bootstrap/js/bootstrap.bundle.min.js"></script>
        <?php
            if (isset($this->js)) {

                foreach ($this->js as $js) {
                    echo '<script type="text/javascript" src="views/'.$js.'"></script>';
                }
            }
        ?>

    </body>
</html>