        <?php
        include 'links.php';
        ?>
        
        <!-- START: Footer -->
        <footer class="ps-footer">
            <div class="ps-copyright">
                <div class="container">
                    <div class="ps-copyright-left">
                    </div>
                    <div class="ps-copyright-right">
                        <ul class="social-links-2">                        
                            <li>
                            <?php
                            Echo "<a class='social-twitch' href=$link_twitch>"
                            ?>
                                    <svg class="svg-inline--fa fa-twitch fa-w-14" aria-hidden="true" data-prefix="fab" data-icon="twitch" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="-50 -50 500 500" data-fa-i2svg="">
                                        <path fill="currentColor" d="M40.1 32L10 108.9v314.3h107V480h60.2l56.8-56.8h87l117-117V32H40.1zm357.8 254.1L331 353H224l-56.8 56.8V353H76.9V72.1h321v214zM331 149v116.9h-40.1V149H331zm-107 0v116.9h-40.1V149H224z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                            <?php
                            Echo "<a class='social-facebook' href=$link_facebook>"
                            ?>
                                    <svg class="svg-inline--fa fa-facebook fa-w-14" aria-hidden="true" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="-50 -30 500 500" data-fa-i2svg="">
                                        <path fill="currentColor" d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                            <?php
                            Echo "<a class='social-steam' href=$link_steam>"
                            ?>
                                    <svg class="svg-inline--fa fa-steam fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="steam" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="15 -20 420 500" data-fa-i2svg="">
                                        <path fill="currentColor" d="M496 256c0 137-111.2 248-248.4 248-113.8 0-209.6-76.3-239-180.4l95.2 39.3c6.4 32.1 34.9 56.4 68.9 56.4 39.2 0 71.9-32.4 70.2-73.5l84.5-60.2c52.1 1.3 95.8-40.9 95.8-93.5 0-51.6-42-93.5-93.7-93.5s-93.7 42-93.7 93.5v1.2L176.6 279c-15.5-.9-30.7 3.4-43.5 12.1L0 236.1C10.2 108.4 117.1 8 247.6 8 384.8 8 496 119 496 256zM155.7 384.3l-30.5-12.6a52.79 52.79 0 0 0 27.2 25.8c26.9 11.2 57.8-1.6 69-28.4 5.4-13 5.5-27.3.1-40.3-5.4-13-15.5-23.2-28.5-28.6-12.9-5.4-26.7-5.2-38.9-.6l31.5 13c19.8 8.2 29.2 30.9 20.9 50.7-8.3 19.9-31 29.2-50.8 21zm173.8-129.9c-34.4 0-62.4-28-62.4-62.3s28-62.3 62.4-62.3 62.4 28 62.4 62.3-27.9 62.3-62.4 62.3zm.1-15.6c25.9 0 46.9-21 46.9-46.8 0-25.9-21-46.8-46.9-46.8s-46.9 21-46.9 46.8c.1 25.8 21.1 46.8 46.9 46.8z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                            <?php
                            Echo "<a class='social-discord' href=$link_discord>"
                            ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="discord" class="svg-inline--fa fa-discord fa-w-14" role="img" viewBox="-20 -20 450 450">
                                        <path fill="currentColor" d="M297.216 243.2c0 15.616-11.52 28.416-26.112 28.416-14.336 0-26.112-12.8-26.112-28.416s11.52-28.416 26.112-28.416c14.592 0 26.112 12.8 26.112 28.416zm-119.552-28.416c-14.592 0-26.112 12.8-26.112 28.416s11.776 28.416 26.112 28.416c14.592 0 26.112-12.8 26.112-28.416.256-15.616-11.52-28.416-26.112-28.416zM448 52.736V512c-64.494-56.994-43.868-38.128-118.784-107.776l13.568 47.36H52.48C23.552 451.584 0 428.032 0 398.848V52.736C0 23.552 23.552 0 52.48 0h343.04C424.448 0 448 23.552 448 52.736zm-72.96 242.688c0-82.432-36.864-149.248-36.864-149.248-36.864-27.648-71.936-26.88-71.936-26.88l-3.584 4.096c43.52 13.312 63.744 32.512 63.744 32.512-60.811-33.329-132.244-33.335-191.232-7.424-9.472 4.352-15.104 7.424-15.104 7.424s21.248-20.224 67.328-33.536l-2.56-3.072s-35.072-.768-71.936 26.88c0 0-36.864 66.816-36.864 149.248 0 0 21.504 37.12 78.08 38.912 0 0 9.472-11.52 17.152-21.248-32.512-9.728-44.8-30.208-44.8-30.208 3.766 2.636 9.976 6.053 10.496 6.4 43.21 24.198 104.588 32.126 159.744 8.96 8.96-3.328 18.944-8.192 29.44-15.104 0 0-12.8 20.992-46.336 30.464 7.68 9.728 16.896 20.736 16.896 20.736 56.576-1.792 78.336-38.912 78.336-38.912z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                            <?php
                            Echo "<a class='social-github' href=$link_github>"
                            ?>
                                    <svg class="svg-inline--fa fa-github fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="15 20 450 450" data-fa-i2svg="">
                                        <path fill="currentcolor" d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9 1.4.3 2.6.4 3.8.4 8.3 0 11.5-6.1 11.5-11.4 0-5.5-.2-19.9-.3-39.1-8.4 1.9-15.9 2.7-22.6 2.7-43.1 0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8 11.2 19.6 26.2 25.1 39.6 25.1 10.5 0 20-3.4 25.6-6 2-14.8 7.8-24.9 14.2-30.7-49.7-5.8-102-25.5-102-113.5 0-25.1 8.7-45.6 23-61.6-2.3-5.8-10-29.2 2.2-60.8 0 0 1.6-.5 5-.5 8.1 0 26.4 3.1 56.6 24.1 17.9-5.1 37-7.6 56.1-7.7 19 .1 38.2 2.6 56.1 7.7 30.2-21 48.5-24.1 56.6-24.1 3.4 0 5 .5 5 .5 12.2 31.6 4.5 55 2.2 60.8 14.3 16.1 23 36.6 23 61.6 0 88.2-52.4 107.6-102.3 113.3 8 7.1 15.2 21.1 15.2 42.5 0 30.7-.3 55.5-.3 63 0 5.4 3.1 11.5 11.4 11.5 1.2 0 2.6-.1 4-.4C415.9 449.2 480 363.1 480 261.7 480 134.9 379.7 32 256 32z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                            <?php
                            Echo "<a class='social-wordpress' href=$link_wordpress>"
                            ?>
                                    <svg class="sng-inline--fa fa-wordpress fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="wordpress" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="-45 -20 600 600" data-fa-i2svg="">
                                        <path fill="currentColor" d="M259 271.3L226.2 367h-.1l-25.4 73.1c1.8.5 3.5.9 5.3 1.4h.3c15.8 4.2 32.4 6.5 49.5 6.5 8.5 0 16.8-.5 24.9-1.8 11.2-1.4 22-3.8 32.5-7.1 2.6-.8 5.2-1.7 7.8-2.6-2.8-6-8.8-19.3-9.1-19.9L259 271.3zM80.8 180.5C70.8 203.1 64 230.9 64 256c0 6.3.3 12.6.9 18.8 6.9 71.2 52.9 131 116.1 157.9 2.6 1.1 5.3 2.2 8 3.2L96 180.6c-8-.3-9.5.2-15.2-.1z"></path>
                                        <path fill="currentColor" d="M430.2 175.4c-4.3-9.3-9.4-18.2-15.1-26.6-1.6-2.4-3.4-4.8-5.1-7.2-21.5-28.8-50.8-51.4-84.9-64.6-21.4-8.4-44.8-13-69.2-13-60.3 0-114.2 28-149.4 71.7-6.5 8-12.3 16.6-17.5 25.6 14.2.1 31.8.1 33.8.1 18.1 0 46-2.2 46-2.2 9.4-.6 10.4 13.1 1.1 14.2 0 0-9.4 1.1-19.8 1.6L213 362l37.8-113.3-26.8-73.6c-9.4-.5-18.1-1.6-18.1-1.6-9.4-.5-8.2-14.8 1-14.2 0 0 28.5 2.2 45.5 2.2 18.1 0 46-2.2 46-2.2 9.3-.6 10.5 13.1 1.1 14.2 0 0-9.3 1.1-19.7 1.6l62.3 185.6 17.3-57.6c8.7-22.4 13.1-40.9 13.1-55.7 0-21.3-7.7-36.1-14.3-47.6-8.7-14.3-16.9-26.3-16.9-40.4 0-15.9 12-30.7 29-30.7h2.2c26.2-.7 34.8 25.3 35.9 43v.6c.4 7.2.1 12.5.1 18.8 0 17.4-3.3 37.1-13.1 61.8l-39 112.8-22.3 65.7c1.8-.8 3.5-1.6 5.3-2.5 56.7-27.4 98-82 106.7-146.7 1.3-8.5 1.9-17.2 1.9-26 0-28.9-6.4-56.3-17.8-80.8z"></path>                                        
                                    </svg>
                                </a>
                            </li>
                            <li>
                            <?php
                            Echo "<a class='social-trello' href=$link_trello>"
                            ?>
                                    <svg class="svg-inline--fa fa-trello fa-w-14" aria-hidden="true" data-prefix="fab" data-icon="trello" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="-15 -20 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M392.3 32H56.1C25.1 32 0 57.1 0 88c-.1 0 0-4 0 336 0 30.9 25.1 56 56 56h336.2c30.8-.2 55.7-25.2 55.7-56V88c.1-30.8-24.8-55.8-55.6-56zM197 371.3c-.2 14.7-12.1 26.6-26.9 26.6H87.4c-14.8.1-26.9-11.8-27-26.6V117.1c0-14.8 12-26.9 26.9-26.9h82.9c14.8 0 26.9 12 26.9 26.9v254.2zm193.1-112c0 14.8-12 26.9-26.9 26.9h-81c-14.8 0-26.9-12-26.9-26.9V117.2c0-14.8 12-26.9 26.8-26.9h81.1c14.8 0 26.9 12 26.9 26.9v142.1z"></path>
                                    </svg>
                                </a>
                            </li>
                                    
                            <!-- Additional Social Buttons
                                <li><a class="ps-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                                <li><a class="ps-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                                <li><a class="ps-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a class="ps-social-github" href="#"><span class="fab fa-github"></span></a></li>
                                <li><a class="social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                                <li><a class="social-twitter" href="#" target="_blank"><span class="fab fa-twitter"></span></a></li>
                                <li><a class="social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                <li><a class="social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                                <li><a class="social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                                <li><a class="social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                                <li><a class="social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                                <li><a class="social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                                <li><a class="social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                                <li><a class="social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                                <li><a class="social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                                <li><a class="social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a class="social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                                <li><a class="social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                                <li><a class="social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                                <li><a class="social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                                <li><a class="social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                                <li><a class="social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                                <li><a class="social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                                <li><a class="social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                                <li><a class="social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                                <li><a class="social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                                <li><a class="social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                                <li><a class="social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                            -->

                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: Footer -->
    </div>
    <!-- START: Page Background -->

    <!-- <img class="page-background-top" src="" alt="">
    <img class="page-background-bottom" src="" alt=""> -->

    <!-- END: Page Background -->

    <!-- START: Scripts -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    
    <!-- Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- Sidebar -->
    <script src="assets/js/sidebar.js"></script>

    <!-- END: Scripts -->
</body>
</html>