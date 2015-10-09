<header>
<div id="header">

<div id="navigatie">
    <nav>
        <div id="logo">
        <a href="?page=home">
            <img src="images/logo.jpg" alt="Triggerfinger">
        </a>
        </div>
        <ul>

            <!--<li>
                <a href="?page=home">TRIGGERFINGER!</p></a>
            </li>-->

            <li{if $curr_page eq newsarticles} class = "selected" {/if}>
                <a href='?page=newsarticles'><p class="navibar">News</p></a>
                </li>
            <!--<li>
                <a href='?page=about'><p class="navibar">About</p></a>
            </li>-->
            <li{if $curr_page eq tour} class = "selected" {/if}>
                <a href='?page=tour'><p class="navibar">Tour</p></a>
            </li>
            <li{if $curr_page eq music} class = "selected" {/if}>
                <a href='?page=music'><p class="navibar">Music</p></a>
            </li>
            <div id="searchbar">
            <!--search-->

            <form method="post" action="?page=search" id="searchform">
                <input type="text" name="search_string">
                <input type="submit" name="submit" value="Search">
            </form>
                </div>
         <!--   <form method="post" action="?page=search_string" id="searchform">
                <input type="text" name="search_string">
                <input type="submit" name="submit" value="Search">
            </form>-->

     <!--       <form method="post" action="#" id="searchform">
                <input type="text" name="name">
                <input type="submit" name="submit" value="Search"

            </form>-->
        </ul>
    </nav>
</div>

</div>
</header>