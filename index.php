<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cosmic
 */

get_header();?>
<main id="main">
  <section class="section-imp section-reveal fake-overlay" id="about-section">
    <div id="about-sectionBG"></div>
    <div id="about-greeting">
      <p class="pfont h1">Discovered Text</p>
      <p>Your ship has picked up a faint signal being transmitted from the planet below. After boosting the receiver, a button appears.
      </p>
      <button class="c2a-button" id="open-about">
        <span>&#x2B39;</span>
        <p>Open Message</p>
        <span>&#x2B39;</span>
      </button>
    </div>
    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-auto-play="false">
      <nav class="orbit-bullets">
        <button class="is-active" data-slide="0">
          <span class="show-for-sr">First slide details.</span>
          <span class="show-for-sr" data-slide-active-label>Current Slide</span>
          <i class="material-icons-outlined">
            account_circle
          </i>
          <div>
            <p id="orbit-bullet-heading">Personal Data</p>
            <p>Private</p>
          </div>
        </button>
        <button data-slide="1">
          <span class="show-for-sr">Second slide details.</span>
          <i class="material-icons-outlined">
            desktop_windows
          </i>
          <div>
            <p id="orbit-bullet-heading">Software &amp; Skills</p>
            <p>Knowledge</p>
          </div>
        </button>
        <button data-slide="2">
          <span class="show-for-sr">Third slide details.</span>
          <i class="material-icons-outlined">
            sports_esports
          </i>
          <div>
            <p id="orbit-bullet-heading">Interests</p>
            <p>Entertainment</p>
          </div>
        </button>
      </nav>
      <div class="orbit-wrapper">
        <ul class="orbit-container">
          <li class="is-active orbit-slide">
            <p>Hello, my name is Anthony Jasper and I’m a 29 year old male from an area known as Kent, England. I’ve been travelling the Sol system for the last 2 years now and thought it was time to note down my life's journey and how I came to be where I am now.
            </p>
            <p>I started with a dream of entering the game development scene. I went to University for 3 years studying game design and software engineering, being awarded with the degree ‘bachelor of engineering’ with a second class honours 1st division. After graduating, I spent the next year looking to get a foot into the door but was turned away everytime. So I decided to get in contact with a few friends from college and we started self-teaching ourselves on App Development using Unity. 
            </p>
            <p>6 months later we had published a simple card matching game on the google store that featured a local highscore, card cover customisation and difficulty selectors. It did okay on the store, but with it being a simple game, it didn’t take off. The App development didn’t last for much longer after that. One of the developers suggested we move onto web development since he had some experience in creating websites.
            </p>
            <p>This is where we ended up creating Cloudyne and the start of my adventure into becoming a front-end web developer &amp; designer begins.
            </p>
          </li>
          <li class="orbit-slide">
            <div id="ss-wrapper">
              <ul>
                <li class="ss-heading h3">Software</li>
                <li>JIRA<span>3 Months</span></li>
                <li>Git<span>1 Year</span></li>
                <li>Wordpress<span>1Year 6Months</span></li>
                <li>Woocommerce<span>1Year 6Months</span></li>
                <li>Gulp<span>1 Year</span></li>
                <li>Hosting / Server Management<span>2 Years</span></li>
                <li>Brackets<span>2 Year</span></li>
                <li>Atom<span>3 Months</span></li>
                <li>Filezilla<span>2 Year</span></li>
                <li>WAMP<span>2 Year</span></li>
                <li>UX Pin<span>6 Months</span></li>
              </ul>
              <ul>
                <li class="ss-heading h3">Skills</li>
                <li>Leadership<span>5 Years</span></li>
                <li>MySQL<span>1 Year</span></li>
                <li>HTML/5<span>2 Years</span></li>
                <li>CSS<span>2 Years</span></li>
                <li>SCSS<span>1 Year </span></li>
                <li>Test Plans<span>1 Year</span></li>
                <li>Business Development<span>2 Years</span></li>
                <li>Jquery<span>1 Year</span></li>
                <li>JavaScript ES6<span>2 Months </span></li>
                <li>Foundation Framework<span>1 Year</span></li>
                <li>Web Design<span>2 Years</span></li>
              </ul> 
            </div>
          </li>
          <li class="orbit-slide">
            <div id="int-wrapper">
              <ul>
                <li class="int-heading h4">Sports(play)</li>
                <li>Tennis</li>
                <li>Ten Pin Bowling</li>
                <li>Badminton</li>
              </ul>
              <ul>
                <li class="int-heading h4">Sports(watch)</li>
                <li>Football</li>
                <li>SuperBowl</li>
                <li>Formula1</li>
                <li>Wimbledon</li>
              </ul> 
              <ul>
                <li class="int-heading h4">Esports</li>
                <li>League of Legends</li>
              </ul> 
              <ul>
                <li class="int-heading h4">Books</li>
                <li>Mass Effect</li>
                <li>Star Wars</li>
                <li>Cirque Du freak</li>
                <li>Golden Compass</li>
                <li>Eragon</li>
              </ul> 
              <ul>
                <li class="int-heading h4">Gaming</li>
                <li>League of Legends</li>
                <li>Battlefield</li>
                <li>Rocket League</li>
                <li>Monster Hunter</li>
                <li>PUBG</li>
                <li>DayZ</li>
                <li>Mass Effect</li>
              </ul> 
            </div>
            <p class="h4">Analyzing Websites</p>
            <p>When surfing the web or looking for some inspiration, I will occasionally open the developer tools and inspect the code. Doing so allows me to view how other developers were able to achieve the result of a certain feature. I will usually compare it to how I would go about creating the feature or try to understand why the developer took the path he did. This then allows me to get a better understanding and learn new techniques.
            </p>
            <p class="h4">Creating and Experimenting with Website Animations
            </p>
            <p>
              Adding animations to a website makes it more appealing and interactive for the user when they visit the website. Different animation styles, determine how you want the information to be presented to the user, e.g. flashing animation draws the users attention, whereas sliding animations sets a hierarchy between two elements. Experimenting with animations allow me to create multiple layers and present information in different but exciting ways.
            </p>
            <p class="h4">Favourite Websites</p>
            <ul id="int-websites">
              <li><a href="https://shoptalkshow.com/archives/" target="_blank">Shop Talk Show</a></li>
              <li><a href="https://css-tricks.com/" target="_blank">CSS Tricks</a></li>
              <li><a href="https://cssgradient.io/gradient-backgrounds/" target="_blank">CSSGradient.io</a></li>
              <li><a href="https://www.awwwards.com/" target="_blank">Awwwards</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div> 
  </section>
  <section class="section-imp section-reveal" id="cloudyne-section">
    <div id="cloudyne-sectionBG"></div>
    <div id="cloudyne-heading">
      <p class="h4 hfont">Cloudyne Limited</p>
      <p>Cloudyne is a business that focuses on providing small businesses with up-to-date websites with the latest trends. Websites can be expensive and can come as a shock to some people, so we provide them with reasonable prices for the size of their business. Alongside websites, Cloudyne offers domain and hosting with no increased recurring pricing. I set this business up to continue my personal development and a way for people to promote their business without having to pay a fortune for a bare minimum, basic looking websites.
      </p>
    </div>
    <div id="previous-work">
      <div id="sun">
        <p>Projects</p>
      </div>
      <div id="supernova">
        <div id="supernova-image"></div>
        <div class="supernova-star" id="star1"></div>
        <div id="cloudyne-work">
          <button class="close-button prev-close" type="button">x</button>
          <div class="prev-logo">
            <p class="h2 hfont">Cloudyne</p>
          </div>
          <div class="prev-likes">
            <p class="h4 hfont">likes</p>
            <ul>
              <li>Colour Scheme</li>
              <li>WHMCS Connection</li>
              <li>Animations</li>
            </ul>
          </div>
          <a class="prev-website" href="https://www.cloudyne.co.uk" target="_blank">www.cloudyne.co.uk</a>
          <div class="prev-dislikes">
            <p class="h4 hfont">dislikes</p>
            <ul>
              <li>Content</li>
              <li>Poor Imagery</li>
            </ul>
          </div>
          <p class="prev-desc">A business that offers design and development for websites, hosting and SEO services.</p>
        </div>
        <div class="supernova-star" id="star2"></div>
        <div id="sheame-work">
          <button class="close-button prev-close" type="button">x</button>
          <div class="prev-logo">
            <p class="h2 hfont">Shea-Me</p>
          </div>
          <div class="prev-likes">
            <p class="h4 hfont">likes</p>
            <ul>
              <li>Colour Scheme</li>
              <li>Modern Layout</li>
              <li>Micro Animations</li>
            </ul>
          </div>
          <a class="prev-website" href="https://www.shea-me.com" target="_blank">www.shea-me.com</a>
          <div class="prev-dislikes">
            <p class="h4 hfont">dislikes</p>
            <ul>
              <li>Cluttered</li>
              <li>Poor Imagery</li>
              <li>Poor Content</li>
            </ul>
          </div>
          <p class="prev-desc">An e-commerce site that sells shea body butter products that help invigorates the senses, reduce acne and other benefits to the skin.
          </p>
        </div>
        <div class="supernova-star" id="star3"></div>
        <div id="sherwood-work">
          <button class="close-button prev-close" type="button">x</button>
          <div class="prev-logo">
            <p class="h2 hfont">Sherwood &amp; Hope</p>
          </div>
          <div class="prev-likes">
            <p class="h4 hfont">likes</p>
            <ul>
              <li>Faded Background</li>
              <li>One Page</li>
              <li>Detailed Content</li>
            </ul>
          </div>
          <a class="prev-website" href="https://www.sherwoodandhope.co.uk" target="_blank">www.sherwoodandhope.co.uk</a>
          <div class="prev-dislikes">
            <p class="h4 hfont">dislikes</p>
            <ul>
              <li>Colour Scheme</li>
              <li>Header &amp; Footer Layouts</li>
              <li>UX</li>
            </ul>
          </div>
          <p class="prev-desc">Independant Funeral Directors in Kent, that handle everything from arranging a funeral, to on the day transportation of a loved one.
          </p>
        </div>
        <div class="supernova-star" id="star4"></div>
        <div id="pout-work">
          <button class="close-button prev-close" type="button">x</button>
          <div class="prev-logo">
            <p class="h2 hfont">Pout &amp; Sparkle</p>
          </div>
          <div class="prev-likes">
            <p class="h4 hfont">likes</p>
            <ul>
              <li>Colour Scheme</li>
              <li>Good Content</li>
              <li>Section Seperators</li>
            </ul>
          </div>
          <a class="prev-website" href="https://www.poutandsparkle.co.uk"target="_blank">www.poutandsparkle.co.uk</a>
          <div class="prev-dislikes">
            <p class="h4 hfont">dislikes</p>
            <ul>
              <li>Button Sparkles</li>
              <li>Poor Imagery</li>
              <li>Page Layout</li>
            </ul>
          </div>
          <p class="prev-desc">A beauty studio who’s qualified as a hairdresser, beautician and elite technician in plasma pen-fibroblasting.
          </p>
        </div>
        <div class="supernova-star" id="star5"></div>
        <div id="medway-work">
          <button class="close-button prev-close" type="button">x</button>
          <div class="prev-logo">
            <p class="h2 hfont">Medway Vegan Festivals</p>
          </div>
          <div class="prev-likes">
            <p class="h4 hfont">likes</p>
            <ul>
              <li>Page Layout</li>
              <li>Colour Scheme</li>
              <li>Minimalist</li>
            </ul>
          </div>
          <a class="prev-website" href="https://projects.cloudyne.co.uk/medwayveganfestival" target="_blank">Under Development</a>
          <div class="prev-dislikes">
            <p class="h4 hfont">dislikes</p>
            <ul>
              <li>UX</li>
              <li>Booking System</li>
            </ul>
          </div>
          <p class="prev-desc">Promotes and Hosts Vegan Festivities across Medway, Kent.
          </p>
        </div>
        <div class="supernova-star" id="star6"></div>
        <div id="tangible-work">
          <button class="close-button prev-close" type="button">x</button>
          <div class="prev-logo">
            <p class="h2 hfont">Tangible</p>
          </div>
          <div class="prev-likes">
            <p class="h4 hfont">likes</p>
            <ul>
              <li>Informative</li>
              <li>Imagery</li>
            </ul>
          </div>
          <a class="prev-website" href="">Not Available(Made Private)</a>
          <div class="prev-dislikes">
            <p class="h4 hfont">dislikes</p>
            <ul>
              <li>Colour Scheme</li>
              <li>Landing Page</li>
            </ul>
          </div>
          <p class="prev-desc">Provides product management and training courses to individuals or businesses.
          </p>
        </div>
      </div>
    </div>


    <div id="roles">
      <ul class="tabs" data-tabs id="example-tabs">
        <p class="h4 hfont">Roles</p>
        <!--aria-selected="true"-->
        <li class="tabs-title"><a>Director</a></li>
        <li class="tabs-title"><a>Financer</a></li>
        <li class="tabs-title"><a>Front-end Developer</a></li>
        <li class="tabs-title"><a>Hosting Management</a></li>
        <li class="tabs-title"><a>Legal</a></li>
        <li class="tabs-title"><a>Customer Support</a></li>
      </ul>

      <div class="tabs-content" data-tabs-content="example-tabs">
        <div class="tabs-panel" id="panel1">
          <p>As a director I make decisions on how to progress the business, such as overseeing the performance of the business, maintaining the finance department, proposing different forms of strategy and technology upgrades.
          </p>
        </div>
        <div class="tabs-panel" id="panel2">
          <p> I maintain the finance documents such as Profit &amp; Loss, Invoicing, Accounts and final word on any expenses.</p>
        </div>
        <div class="tabs-panel" id="panel3">
          <p>All HTML, CSS and JQuery files, Optimising and handling of images and fonts. Also manage and maintain any CMS back-ends such as products and plugins.
          </p>
        </div>
        <div class="tabs-panel" id="panel4">
          <p>Handling of domains available and contact with domain registrars, FTP, SMTP, SSL and file management.</p>
        </div>
        <div class="tabs-panel" id="panel5">
          <p>Handling of contracts for website agreements, maintaining the websites Terms and Conditions, maintaining Privacy Policy and keeping up with GDPR regulations.</p>
        </div>
        <div class="tabs-panel" id="panel6">
          <p>Help any customers add any updates to their website, upgrade their hosting or help with any inquiries regarding any of the services they are receiving.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="section-imp section-reveal" id="experience-section" data-magellan-target="experience">
    <div id="experience-sectionBG"></div>

    <div id="education-wrapper" >
      <p class="hfont h4">Education - University of Greenwich 2010 - 2013<span>BEng (Hons) Games and Entertainment Systems Engineering - Graduated with 2:1</span></p>
      <div id="education-content">
        <div class="education-hoveractive">
          <p>1<span class="circle-base">YEAR</span><span class="circle-spin"><span class="circle-spin-inner"></span></span></p>
          <ul>
            <li>Programming Technologies<span>(1st)</span></li>
            <li>Computer Modelling and Applied Mathematics<span>(2:1)</span></li>
          </ul>
        </div>
        <div class="education-hoveractive">
          <p>2<span class="circle-base">YEAR</span>
            <span class="circle-spin" id="circle-spin-1">
              <span class="circle-spin-inner"></span>
            </span>
            <span class="circle-spin" id="circle-spin-2">
              <span class="circle-spin-inner"></span>
            </span>
          </p>
          <ul>
            <li>Programming for Software Systems<span>1st</span></li>
            <li>3D Games Engineering<span>2:1</span></li>
            <li>Software Engineering with Project Management<span>1st</span></li>
          </ul>
        </div>
        <div class="education-hoveractive">
          <p>3<span class="circle-base">YEAR</span>
            <span class="circle-spin" id="circle-spin-1">
              <span class="circle-spin-inner"></span>
            </span>
            <span class="circle-spin" id="circle-spin-2">
              <span class="circle-spin-inner"></span>
            </span>
            <span class="circle-spin" id="circle-spin-3">
              <span class="circle-spin-inner"></span>
            </span>
          </p>
          <ul>
            <li>Final Year Project - Individual<span>2:1</span></li>
            <li>Management &amp; Communications<span>2:1</span></li>
            <li>2D Games Engineering<span>2:1</span></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="orbit" role="region" id="experience-orbit" aria-label="Favorite Space Pictures" data-orbit data-auto-play="false">
      <p class="hfont h4">Experience</p>
      <nav class="orbit-bullets">
        <button class="is-active" data-slide="0">
          <span class="show-for-sr">First slide details.</span>
          <span class="show-for-sr" data-slide-active-label>Current Slide</span>
          <i class="material-icons-outlined">
            sports_esports
          </i>
          <div>
            <p id="orbit-bullet-heading">Cloudyne Limited</p>
            <p>Director &amp; Front-end Developer</p>
          </div>
        </button>
        <button data-slide="1">
          <span class="show-for-sr">Second slide details.</span>
          <i class="material-icons-outlined">
            sports_esports
          </i>
          <div>
            <p id="orbit-bullet-heading">Music Streaming App</p>
            <p>Developer</p>
          </div>
        </button>
        <button data-slide="2">
          <span class="show-for-sr">Third slide details.</span>
          <i class="material-icons-outlined">
            sports_esports
          </i>
          <div>
            <p id="orbit-bullet-heading">Royal Mail</p>
            <p>Industrial Worker – Mail Sorter</p>
          </div>
        </button>
      </nav>
      <div class="orbit-wrapper">
        <ul class="orbit-container">
          <li class="is-active orbit-slide">
            <p>As the director of Cloudyne I’m responsible for handling the finances, work contracts, T&amp;C for websites and customer support. As for the front-end developer side, I’m responsible for working with the clients during the requirements and design phase, managing fonts, images, CSS, HTML, JQuery and CMS plugins etc. When the site is finished I will also manage their hosting and any support changes they wish to make.
            </p>
          </li>
          <li class="orbit-slide">
            <p>Cloudyne was approached by someone who was interested in developing a music streaming app. Both parties would form under a separate company and have equal shares. The approaching party was responsible for securing funding and company management, whilst my party were responsible for designing and developing the app whilst maintaining it after publication. However, after 1 year, the approaching party was unable to secure the rest of the funding needed to complete the project so it eventually collapsed.
            </p>
            <p>The plan for the project was to create a web-based service and then build native applications that all communicated together. The website wasn’t just for the streaming service itself but was going to be used for pre-development marketing as well.</p>
          </li>
          <li class="orbit-slide">
            <p>In December 2014, I started working for Royal Mail as a Christmas temporary. This involved working within a team to sort through any letters that the machines couldn’t process. I was occasionally assigned to cover for other people within the workplace as well as being responsible for making sure work continued to flow when the line manager was unavailable.
            </p>
          </li>
        </ul>
      </div>
    </div> 
    <div id="edu-projects">
      <div>
        <div>
          <p class="h4 hfont">Project - Match'em Up</p>
          <p>A friend and I wanted to put our skills to the test to see what we were capable of doing. We both decided to create a game in the Unity Engine due to our combined skills within the Engine and JavaScript language. The game became a children's memory game that requires the player to flip over cards and match the images shown. The game was released onto Google Play Store 6 months after development started.
          </p>
        </div>
        <ul>
          <li>Diffculty Selector</li>
          <li>Local Highscores</li>
          <li>Genre Selector</li>
          <li>Collection Area</li>
        </ul>
      </div>
    </div>

  </section>
  <section class="section-imp section-reveal" id="contact-section" data-magellan-target="contact">
    <div id="contact-sectionBG"></div>
    <p class="h4 hfont">Transmit Message to Anthony</p>
    <div id="contact-wrapper">

      <div id="contact-photo">
        <img id="photo-me" src="<?php bloginfo('template_url'); ?>/assets/images/0-removebg-preview.png" />
      </div>
      <div id="contact-content">

        <?php echo do_shortcode(' [contact-form-7 id="8" title="Contact form 1"]'); ?>
      </div>
    </div>

  </section>
  <section class="section-imp section-reveal" id="game-section" data-magellan-target="game">
    <ul>
      <p class="hfont h4">Menu Controls</p>
      <li>Move Up<span>W</span></li>
      <li>Move Down<span>S</span></li>
      <li>Select Highlighted Item<span>Enter</span></li>
      <li>Previous Screen<span>Esc</span></li>
      <li>Purchase Ship One<span>1</span></li>
      <li>Purchase Ship Two<span>2</span></li>
      <li>Purchase Ship Three<span>3</span></li>
    </ul>
    <ul>
      <p class="hfont h4">Ship Controls</p>
      <li>Move Left<span>A</span></li>
      <li>Move Right<span>D</span></li>
      <li>Fire/Shoot<span>Spacebar</span></li>
    </ul>
    <script type="text/javascript">
      startGame();
    </script>
  </section>
<!--  <section class="reveal full" id="hyperspace" data-reveal data-overlay="false">
    <div class="scene">
      <div class="wrap">
        <div class="wall wall-right"></div>
        <div class="wall wall-left"></div>
        <div class="wall wall-top"></div>
        <div class="wall wall-bottom"></div>
        <div class="wall wall-back"></div>
      </div>
      <div class="wrap">
        <div class="wall wall-right"></div>
        <div class="wall wall-left"></div>
        <div class="wall wall-top"></div>
        <div class="wall wall-bottom"></div>
        <div class="wall wall-back"></div>
      </div>
    </div>
  </section>-->
</main>

<?php get_footer();
