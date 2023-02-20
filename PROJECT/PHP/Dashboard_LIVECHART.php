<!DOCTYPE html>
<html lang="en">
<head>
    <title>LiveChart</title>
    <link rel="stylesheet" href="Dashboard_LIVECHART.css">
</head>
<body>
    <div class="canvas-content">
        <!-- Navigatior Bar -->
        <header>
            <div class="navbar" id="navbar">
                <nav class="navbar">
                    <div id="navbar-left" class="navbar" style="position: fixed;">
                        <a href="#navbar-vertical" class="navbar-tabs" style="width: auto; margin-top: 5px; margin-left: 16px; margin-right: 10px; padding: 0;">
                            <img class="navbar" src="Media/Navicon/list.svg" alt="list_navicon" style="width: 20px;"></a>
                        </li>
                        <a href="Dashboard_LIVECHART.php" class="navbar-tabs" style="padding: 0; height: inherit;">
                            <img class="navbar" src="Media/Image/logo_livechart.png" alt="Logo">
                        </a> 
                        <a href="#browse" class="navbar-tabs navbar-left">Browse</a>
                        <a href="#seasons" class="navbar-tabs navbar-left">Seasons</a>
                        <a href="#schedule" class="navbar-tabs navbar-left">Schedule</a>
                        <a href="#headlines" class="navbar-tabs navbar-left">Headlines</a>
                        <a href="#videos" class="navbar-tabs navbar-left">Videos</a>
                    </div>
                    <div id="navbar-right" class="navbar">
                        <a href="#myaccount" class="navbar-tabs navbar-right"><img src="Media/Navicon/user.svg" alt="myaccount_navicon"></a>
                        <a href="#notification" class="navbar-tabs navbar-right"><img src="Media/Navicon/notification.svg" alt="notification_navicon"></a>
                        <a href="#mylist" class="navbar-tabs navbar-right"><img src="Media/Navicon/bookmark.svg" alt="mylist_navicon"></a>
                        <a href="#search" class="navbar-tabs navbar-right"><img src="Media/Navicon/search.svg" alt="search_navicon"></a>
                    </div>
                </nav>
            </div>
        </header>
        
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-box">
                <div class="page-header-box-content arrow">
                    <img src="Media/Navicon/left-arrow.svg" alt="arrow-left" style="width: 30px; ">
                </div>
                <div class="page-header-box-content title">
                    <div class="page-header-box-content sub_title">January 2023 - March 2023</div>
                    <h1 style="margin: 0;padding: 0; font-weight: normal;">Winter 2023 Anime</h1>
                </div>
                <div class="page-header-box-content arrow">
                    <img src="Media/Navicon/right-arrow.svg" alt="arrow-right" style="width: 30px; ">
                </div>
            </div>
            <div class="page-header-tab">
                <nav class="page-header-tab">
                    <ul>
                        <li class="page-header-tab-content active"><a href="#television" class="page-header-tab">Television</a></li>
                        <li class="page-header-tab-content"><a href="#movies" class="page-header-tab">Movies</a></li>
                        <li class="page-header-tab-content"><a href="#ovas" class="page-header-tab">OVAs</a></li>
                        <li class="page-header-tab-content"><a href="#all" class="page-header-tab">All</a></li>
                        <li class="page-header-tab-content"><a href="#ranking" class="page-header-tab">♛</a></li>
                        <li class="page-header-tab-content"><a href="#imagechart" class="page-header-tab"><img src="Media/Navicon/image.svg" alt="imagechart" style="vertical-align: middle;"></a></li>
                    </ul>
                </nav>
            </div>
            <hr style="opacity: 50%;">
        </div>


        <!-- Options Bar -->
        <div class="page-option">
            <form action="Dashboard_LIVECHART.php">
                <div class="page-option-box page-option-box-v1">
                    <span class="page-option-box">
                        <label for="sorting">Sort by:</label>
                        <select name="Sort" id="sorting btn" class="input">
                            <option value="avgrating">Avgrating</option>
                            <option value="airdate">Airdate</option>
                            <option value="countdown">Countdown</option>
                            <option value="modified">Modified</option>
                            <option value="popularity" selected disabled>Popularity</option>
                            <option value="title">Title</option>
                        </select>
                    </span>
                    <span class="page-option-box">
                        <select name="Titles" id="titles btn" class="input">
                            <option value="romaji-titles">Romaji Titles</option>
                            <option value="english-titles">English Titles</option>
                        </select>
                    </span>
                    <span class="page-option-box">
                        <label for="ongoing">Ongoing Filter:</label>
                        <select name="On going" id="ongoing btn" class="input">
                            <option value="hideall">Hide all</option>
                            <option value="showfromlast_1_season">Show from last season</option>
                            <option value="showfromlast_2_seasons">Show from last 2 seasons</option>
                            <option value="showfromlast_3_seasons">Show from last 3 seasons</option>
                            <option value="showall">Show all</option>
                        </select>
                    </span>
                    <span class="page-option-box">
                        <button class="page-option-box-content">Mark Filter</button>
                    </span>
                </div>
                <div class="page-option-box page-option-box-v2">
                    <span class="page-option-box" >
                        <button class="page-option-box-content">Prefences</button>
                    </span>
                    <span class="page-option-box">
                        <input type="search" name="Search" id="search btn" class="input" placeholder="Search this page">
                    </span>
                </div>
            </form>
        </div>

        <!-- Articles -->
        <div class="page-articles">
            <article class="anime">
                <div class="article-box">
                    <div class="main-title">
                        <h3><a href="#anime-details" class="main-title article">The Eminence in Shadow</a></h3>
                    </div>
                    <div class="anime-tags">
                        <ol class="anime-tags">
                            <li class="anime-tags"><a href="#tag-action" class="anime-tags article">Action</a></li>
                            <li class="anime-tags"><a href="#tag-comedy" class="anime-tags article">Comedy</a></li>
                            <li class="anime-tags"><a href="#tag-fantasy" class="anime-tags article">Fantasy</a></li>
                            <li class="anime-tags"><a href="#tag-isekai" class="anime-tags article">Isekai</a></li>
                        </ol>
                    </div>
                    <div class="anime-poster">
                        <img class="poster" src="Media/Image/anime-1-preview.webp" alt="">
                        <div class="anime-info">
                            <div class="anime-data poster">
                                <div class="anime-studios">
                                    <ul class="anime-studios">
                                        <li><a href="" class="anime-studios article">Nexus</a></li>
                                    </ul>
                                </div>
                                <div class="anime-date">
                                    Began 
                                    <a href="#fall2022" class="article">Fall 2022</a>
                                </div>
                                <div class="anime-meta-data">
                                    <div class="sources">
                                        Light Novel
                                    </div>
                                    <div class="episodes">
                                        20 eps × 24m
                                    </div>
                                </div>
                                <div class="anime-synopsis">
                                    <p class="anime-synopsis">“The Eminence in Shadow.”</p>
                                    <p class="anime-synopsis">Not the main character, and not the last boss. The one who lurks in the shadows of the storyline and holds all the power, hiding his true abilities by acting like a side character. The boy who longs to be a 'Shadowbroker' lives an unobtrusive life as a side character, training to gain magic power until he's killed in an accident and reincarnated into another world.</p>
                                    <p class="anime-synopsis">Reborn as Cid Kagenou, the boy decides to enjoy himself in this other world with a made-up scenario about "the Eminence in Shadow." He starts fooling around with secret maneuvers against an evil cult that he born from his imagination... and it turns out that the cult really does exist! The girls he took on as his subordinates on a whim began worshiping Cid as Shadow, and before he knows it, Cid has become a true "Eminence in Shadow." Before long, Cid—along with his mysterious group the Shadow Garden—will destroy the darkness of his new world.</p>
                                    <p class="anime-synopsis"></p>
                                    <p class="anime-synopsis"></p>
                                </div>
                            </div>
                        </div>
                        <div class="related-links">
                            <ul>
                                <li><a href="#website" class="article"><img src="#website_icon" alt="Website"></a></li>
                                <li><a href="#preview" class="article"><img src="#website_icon" alt="Preview"></a></li>
                                <li><a href="#watch" class="article"><img src="#website_icon" alt="Watch"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="related-links"></div>
                </div>
            </article>

        </div>

    </div>
</body>
</html>