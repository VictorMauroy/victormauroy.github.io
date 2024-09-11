<!DOCTYPE html>
<html>

<?php
    readfile("../../components/head/head.php");
?>

<body>
    <?php
        // Inserting the header with the navigation bar. 
        readfile("../../components/navigation/navigation.php");

        // Insert the links at the right of the page
        // readfile("../../components/links/links.php");
    ?>


    <section id="banner">
        <div>
            <h1>Victor Mauroy</h1>
            <p>Web and Unity Developer</p>
            <a href="#about">Learn more</a>
        </div>
    </section>

    <section id="about">
        <h2>About me</h2>
        <div> <!-- Flex with image on the right and text on the left-->

            <div id="profile-picture">
                <img src="../../assets/images/profile/profile-picture-with-background.jpg" />
                <button>
                    <img src="../../assets/logos/Download_Arrow.png" />
                    <p>Download resume</p>
                </button>
            </div>
            <div id="presentation">
                <p>
                    <!-- Isn't there too much text ? 
                        I should add informations about current location and experience  -->
                    Hello ! My name is Victor Mauroy, a web developer who is also doing game development. 
                    <br>
                    <br>
                    Originally doing a lot of C# and .NET development, I want to expand my skills. Therefore, practicing more different back-end languages and trying multiple front-end technologies is my current objective on my free time.
                    <br>
                    <br>
                    Working as a software developer implies having a lot of things to learn and always staying up-to-date, that’s what I love : the never-ending path leading to complete mastery.
                </p>
                <hr>
                <div class="links">
                    <div class="github-link" id="github-button">
                    </div>
                    <div class="linkedin-link"  id="linkedin-button">
                    </div>
                    <div class="gmail-link" id="gmail-button"></div>
                </div>
            </div>

        </div>
    </section>

    <section id="current-activity">
        <!-- AI generated image made by TheDigitalArtist -->
        <h2>Currently</h2>
        <p>Searching for a first job or an apprenticeship.</p>
    </section>

    <section id="skills">
        <h2>Technical skills</h2>
        <div class ="left-skills skill-section">
            <h3 class="skill-title-left">Back-end</h3>

            <div class="skill-item highlighted-item">
                <img src="../../assets/logos/net-logo.png" alt=".NET logo" />
                <span>.NET (C#)</span>
            </div>
            <div class="skill-item">
                <img src="../../assets/logos/javascript-logo.png" alt="javascript logo" />
                <span>Javascript</span>
            </div>
            <div class="skill-item">
                <img src="../../assets/logos/php-logo.png" alt="php logo" />
                <span>PHP</span>
            </div>
            <div class="skill-item">
                <img src="../../assets/logos/python-logo.png" alt="python logo" />
                <span>Python</span>
            </div>
            <div class="skill-item">
                <img src="../../assets/logos/pgsql-logo.png" alt="PostgreSQL logo" />
                <span>PostgreSQL</span>
            </div>
            <div class="skill-item">
                <img src="../../assets/logos/mysql-logo.png" alt="mysql logo" />
                <span>MySQL</span>
            </div>
        </div>
        
        <div class="right-skills skill-section">
            <h3 class="skill-title-right">Front-end</h3>

            <div class="skill-item ">
                <img src="../../assets/logos/html5-logo.png" alt="html5 logo" />
                <span>HTML 5</span>
            </div>
            <div class="skill-item ">
                <img src="../../assets/logos/jquery-logo.png" alt="jquery logo" />
                <span>Jquery</span>
            </div>
            <div class="skill-item ">
                <img src="../../assets/logos/css3-logo.png" alt="css3 logo" />
                <span>CSS 3</span>
            </div>
            <div class="skill-item ">
                <img src="../../assets/logos/react-logo.png" alt="react logo" />
                <span>React.js</span>
            </div>
        </div>

        <div class="left-skills skill-section">
            <h3 class="skill-title-left">Miscellaneous</h3>

            <div class="skill-item highlighted-item">
                <img src="../../assets/logos/unity-logo.png" alt="Unity engine logo" />
                <span>Unity Engine</span>
            </div>
            <div class="skill-item">
                <img src="../../assets/logos/adobeXD-logo.png" alt="AdobeXD logo" />
                <span>AdobeXD</span>
            </div>
            <div class="skill-item">
                <img src="../../assets/logos/API.png" alt="API text logo" />
                <span>API Development</span>
            </div>
            <div class="skill-item highlighted-item">
                <img src="../../assets/logos/git-logo.png" alt="git logo" />
                <span>Git</span>
            </div>
            <div class="skill-item">
                <img src="../../assets/logos/ubuntu-logo.png" alt="ubuntu logo" />
                <span>Ubuntu</span>
            </div>
        </div>
    </section>

    <section id="projects">
        <h2>Projects</h2>
        <p>Here are a few things that I've been working on, lately. There isn't always visual, since I am mainly doing back-end development.</p>

        <div class="project-slider">
            <div class="project-wrapper">
                <div class="project-item">
                    <div class="item-case" id="moneybox-img">
                        <p style="padding: 0.8em 0.5em">
                            Advanced website made with the .NET technologies.
                            <br>
                            <br>
                            Account system, complete database, users and articles management, role attribution, being able to order an article, etc.
                        </p>
                        <a href="https://github.com/VictorMauroy/MoneyBoxWebsite" class="github-project-button">
                        <div></div>
                        <p>See more</p>
                        </a>
                    </div>
                    <div class="item-details">
                        <h4 style="color: var(--high-contrast-text)">Moneybox selling website</h4>
                        <div>
                            <img src="../../assets/logos/net-logo.png" alt=".NET Logo" />
                            <img src="../../assets/logos/pgsql-logo.png" alt="PGSQL logo" />
                        </div>
                    </div>
                </div>
    
                <div class="project-item">
                    <div class="item-case" id="DQMJ-img">
                        <p style="padding: 0.8em 0.5em">
                            A .NET API that communicate with a React project. 
                            <br><br>
                            The purpose of the latter is to create a website containing solutions about the game. Such as the synthesis of monsters and other useful tools.
                        </p>
                        <a href="https://github.com/VictorMauroy/SynthesisHelper" class="github-project-button">
                            <div></div>
                            <p>See more</p>
                        </a>
                    </div>
                    <div class="item-details">
                        <h4 style="color: var(--high-contrast-text)">Dragon Quest Monsters: <br> Synthesis Helper</h4>
                        <div>
                            <img src="../../assets/logos/net-logo.png" alt=".NET Logo" />
                            <img src="../../assets/logos/pgsql-logo.png" alt="PGSQL logo" />
                            <img src="../../assets/logos/react-logo.png" alt="React logo" />
                        </div>
                    </div>
                </div>
    
                <div class="project-item">
                    <div class="item-case" id="portfolio-img">
                        <p style="padding: 0.8em 0.5em">
                            My portfolio and a training project for vanilla web development. 
                            <br><br>
                            No import of libraries except for jquery. As a back-end dev, I was lacking of front knowledge.
                        </p>
                        <a href="https://github.com/VictorMauroy/Dev_Portfolio" class="github-project-button">
                            <div></div>
                            <p>See more</p>
                        </a>
                    </div>
                    <div class="item-details">
                        <h4 style="color: var(--high-contrast-text)">Portfolio (current website)</h4>
                        <div>
                            <img src="../../assets/logos/html5-logo.png" alt="html5 Logo" />
                            <img src="../../assets/logos/css3-logo.png" alt="css3 logo" />
                            <img src="../../assets/logos/php-logo.png" alt="php logo" />
                            <img src="../../assets/logos/jquery-logo.png" alt="Jquery logo" />
                        </div>
                    </div>
                </div>

                <div class="project-item">
                    <div class="item-case" id="genetic-algo-img">
                        <p style="padding: 0.8em 0.5em">
                            Using genetic algorithm to find a path with python.
                            <br><br>
                            Be able to analyze a huge list of points, return a very good path and make crossbreed and mutations.
                        </p>
                        <a href="https://github.com/VictorMauroy/genetic-path" class="github-project-button">
                            <div></div>
                            <p>See more</p>
                        </a>
                    </div>
                    <div class="item-details">
                        <h4 style="color: var(--high-contrast-text)">Genetic algorithm</h4>
                        <div>
                            <img src="../../assets/logos/python-logo.png" alt="python Logo" />
                        </div>
                    </div>
                </div>

                <div class="project-item">
                    <div class="item-case" id="codewars-img">
                        <p style="padding: 0.8em 0.5em">
                            Codewars is a website where you can practice on various langages by doing "katas" which are similar to exercices.
                            <br><br>
                            In each kata, you must create an algorithm that must pass specific tests according to a request.
                        </p>
                        <a href="https://github.com/VictorMauroy/Codewars-C-SHARP" class="github-project-button">
                            <div></div>
                            <p>See more</p>
                        </a>
                    </div>
                    <div class="item-details">
                        <h4 style="color: var(--high-contrast-text)">C# Codewars</h4>
                        <div>
                            <img src="../../assets/logos/Logo_C_sharp.png.png" alt="C sharp Logo" />
                        </div>
                    </div>
                </div>

            </div> <!-- End of project wrapper -->

        </div> <!-- End of project slider -->

        <div class="project-controls">
            <button class="previous-project"><img  src="../../assets/images/projects_icons/Arrow.png" alt="Previous"></button>
            <button class="next-project"><img src="../../assets/images/projects_icons/Arrow.png" alt="Previous"></button>
        </div>
    </section>

    <section id="studies">
        <!-- AI generated image made by WastedGeneration -->
        <h2>Studies</h2>
        <div id="studies-slider">
            <div id="studies-wrapper">
                <div class="study-item">
                    <h3>.Net Developer - 5 months</h3>
                    <p>Algorithmie, développement de sites et applications web sous diverses technologies. Technologies .NET et Microsoft.
                    Algorithmie, développement de sites et applications web sous diverses technologies. Technologies .NET et Microsoft.
                    </p>
                </div>
                
                <div class="study-item">
                    <h3>Game Developer - 3 years</h3>
                    <p>Développement de jeux vidéo, cours de Design et de dessin, programmation, travaux en équipe, gestion de projet.</p>
                </div>
                
                <div class="study-item">
                    <h3>DUT in Computer Science - 2 years</h3>
                    <p>Nombreux langages de programmation, gestion de projet, mathématiques et développement d’applications et sites web.
                    </p>
                </div>
            </div>

            <div id="studies-controls">
                <button id="study-first"></button>
                <button id="study-second"></button>
                <button id="study-third"></button>
            </div>
        </div>
    </section>

    <section id="games">
        <h2>Games</h2>
        <p>I also like making video games! Here are a few ones that I really loved to do :)</p>

        <div class="project-slider">
            <div class="game-wrapper">

                <div class="game-item">
                    <div class="item-case" id="cherjournal-img">
                        <p style="padding: 0.8em 0.5em">
                            Cher Journal is a game where you follow the point of view and make choices for two teenagers 
                            who write in their diaries and confide about their lives.
                            <br>
                            <br>
                            It's a narrative game with choices on the themes of adolescence and school bullying.
                        </p>
                        <div class="dual-game-link">
                            <a href="https://mauroyvictor.wixsite.com/website/cher-journal" class="website-button">
                                <div></div>
                                <p>See more</p>
                            </a>
                            <a href="https://www.youtube.com/watch?v=xudUMBcEUQ4" class="youtube-button">
                                <div></div>
                                <p>Trailer</p>
                            </a>
                        </div>
                    </div>
                    <div class="item-details">
                        <h4 style="color: var(--high-contrast-text)">Cher Journal</h4>
                        <div>
                            <img src="../../assets/logos/unity-logo.png" alt="unity Logo" />
                            <img src="../../assets/logos/Logo_C_sharp.png.png" alt="C sharp logo" />
                        </div>
                    </div>
                </div>

                <div class="game-item">
                    <div class="item-case" id="eartgame-img">
                        <p style="padding: 0.8em 0.5em">
                            Created at the request of our school, this game aims to introduce you to our school: 
                            its atmosphere, courses and subjects, as well as some advice from former students!
                            <br>
                            <br>
                            Chat with various characters, interact with the environment and access 
                            mini-games.
                        </p>
                        <a href="https://mauroyvictor.wixsite.com/website/l-%C3%A9cole-e-artsup-lille" class="website-button">
                            <div></div>
                            <p>See more</p>
                        </a>
                    </div>
                    <div class="item-details">
                        <h4 style="color: var(--high-contrast-text)">E-artsup game</h4>
                        <div>
                            <img src="../../assets/logos/unity-logo.png" alt="unity Logo" />
                            <img src="../../assets/logos/Logo_C_sharp.png.png" alt="C sharp logo" />
                        </div>
                    </div>
                </div>

                <div class="game-item">
                    <div class="item-case" id="hardestdungeon-img">
                        <p style="padding: 0.8em 0.5em">
                            Under development, I've mainly be doing various programming challenge on that project and 
                            I learned a lot while developing its game mechanics.
                            <br>
                            <br>
                            Move through the air with ease, throw, tumble or crush your enemies to progress in this 3D platformer.
                        </p>
                        <div class="dual-game-link">
                            <a href="https://mauroyvictor.wixsite.com/website/currentproject" class="website-button">
                                <div></div>
                                <p>See more</p>
                            </a>
                            <a href="https://github.com/VictorMauroy/The-Hardest-Dungeon" class="github-project-button">
                                <div></div>
                                <p>Code</p>
                            </a>
                        </div>
                    </div>
                    <div class="item-details">
                        <h4 style="color: var(--high-contrast-text)">The Hardest Dungeon:<br> Training project</h4>
                        <div>
                            <img src="../../assets/logos/unity-logo.png" alt="unity Logo" />
                            <img src="../../assets/logos/Logo_C_sharp.png.png" alt="C sharp logo" />
                        </div>
                    </div>
                </div>

                
                <div class="game-item">
                    <div class="item-case" id="moregames-img">
                        <p style="padding: 0.8em 0.5em">
                            I made a lot more video games, do you want to see them ? 
                            <br>
                            <br>
                            Check the link bellow !
                        </p>
                        <a href="https://mauroyvictor.wixsite.com/website/mes-jeux" class="website-button">
                            <div></div>
                            <p>See more</p>
                        </a>
                    </div>
                    <div class="item-details">
                        <h4 style="color: var(--high-contrast-text)">My other games</h4>
                    </div>
                </div>

                

            </div> <!-- End of game wrapper -->

        </div> <!-- End of game slider -->

        <div class="project-controls">
            <button class="previous-game"><img  src="../../assets/images/projects_icons/Arrow.png" alt="Previous"></button>
            <button class="next-game"><img src="../../assets/images/projects_icons/Arrow.png" alt="Previous"></button>
        </div>
    </section>

    <?php
        // Insert the footer. 
        readfile("../../components/footer/footer.php");
    ?>
</body>

</html>