/*-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=
               VARIABLES
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
//Components
var myGamePiece;
var myEnemies = [];
var projectile = [];
var bossProjectile = [];
var enemyBoss;
var scoreText;
var deathText;
var menuItemOne;
var menuItemTwo;
var menuItemThree;
var shipUpgradeOne;
var shipUpgradeOnePriceDisplay;
var shipUpgradeTwo;
var shipUpgradeTwoPriceDisplay;
var shipUpgradeThree;
var shipUpgradeThreePriceDisplay;
var currencyDisplay;
//Component Images
var playerImageSrc = "wp-content/themes/cosmic/assets/images/default-ship.png";
var enemyImageSrc = "wp-content/themes/cosmic/assets/images/enemy.png";
//var backgroundImage = "wp-content/themes/portfolio/img/default-background.jpg";
//var backgroundImage2 = "wp-content/themes/portfolio/img/background-2.png";
var enemyBossImageSrc = "wp-content/themes/cosmic/assets/images/boss.png";
var shipUpgradeOneSrc = "wp-content/themes/cosmic/assets/images/upgrade-1.png";
var shipUpgradeTwoSrc = "wp-content/themes/cosmic/assets/images/upgrade-2.png";
var shipUpgradeThreeSrc = "wp-content/themes/cosmic/assets/images/upgrade-3.png";
var weapDuoSrc = "wp-content/themes/cosmic/assets/images/x2_weaponUPG.png";
var weapTripleSrc = "wp-content/themes/cosmic/assets/images/x3_weaponUPG.png";
var weapQuadSrc = "wp-content/themes/cosmic/assets/images/x4_weaponUPG.png";
//General
var fired = false;
var timer;
var score = 0;
var activeBoss = false;
var bossHealth = 75;
var levelTwo = false;
var levelThree = false;
var singleShot = true;
var weaponDual;
var weaponDualActive = false;
var weaponTriple;
var weaponTripleActive = false;
var weaponQuad;
var weaponQuadActive = false;
var currency = 0;
var gameOver = false;
var shipUpgradeOnePrice = 130;
var shipUpgradeTwoPrice = 310;
var shipUpgradeThreePrice = 600;
var shipOneActivate = false;
var shipTwoActivate = false;
var shipthreeActivate = false;
var shipOneHP = 2;
var shipTwoHP = 3;
var shipThreeHP = 4;

/*-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=
               CANVAS
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
/*Creates the canvas
-start function - Size, Placement, Refresh Rate, Event Listeners
-gamePlay function - Refresh Rate, Event Listeners
-clear function
-stop function
*/
var myGameArea = {
  canvas: document.createElement("canvas")
  , start: function () {
    this.canvas.width = 1600;
    this.canvas.height = 700;
    this.context = this.canvas.getContext("2d");
    document.getElementById('game-section').insertBefore(this.canvas, document.getElementById('game-section').childNodes[6]);
    this.interval = setInterval(updateMenuArea, 150);
    window.addEventListener('keydown', function (e) {
      myGameArea.key = e.keyCode;
    })
    window.addEventListener('keyup', function (e) {
      myGameArea.key = false;
    })
  }
  , upgrade: function () {
    this.frameNo = 0;
    this.interval = setInterval(updateUpgradeArea, 150);
    window.addEventListener('keydown', function (e) {
      myGameArea.key = e.keyCode;
    })
    window.addEventListener('keyup', function (e) {
      myGameArea.key = false;
    })
    console.log('update');
  }
  , gamePlay: function () {
    this.frameNo = 0;
    /*Refresh rate based on seconds (1000ms).*/
    this.interval = setInterval(updateGameArea, 20);
    /*Detects Key Presses and places into a array so multiple movements can be achieved*/
    window.addEventListener('keydown', function (key) {
      myGameArea.keys = (myGameArea.keys || []);
      myGameArea.keys[key.keyCode] = true;
    })
    window.addEventListener('keyup', function (key) {
      myGameArea.keys[key.keyCode] = false;
    })
  }
  , levelTwo: function () {
    this.frameNo = 0;
    /*Refresh rate based on seconds (1000ms).*/
    this.interval = setInterval(updateGameArea, 20);
    /*Detects Key Presses and places into a array so multiple movements can be achieved*/
    window.addEventListener('keydown', function (key) {
      myGameArea.keys = (myGameArea.keys || []);
      myGameArea.keys[key.keyCode] = true;
    })
    window.addEventListener('keyup', function (key) {
      myGameArea.keys[key.keyCode] = false;
    })
  }
  , levelThree: function () {
    this.frameNo = 0;
    /*Refresh rate based on seconds (1000ms).*/
    this.interval = setInterval(updateGameArea, 20);
    /*Detects Key Presses and places into a array so multiple movements can be achieved*/
    window.addEventListener('keydown', function (key) {
      myGameArea.keys = (myGameArea.keys || []);
      myGameArea.keys[key.keyCode] = true;
    })
    window.addEventListener('keyup', function (key) {
      myGameArea.keys[key.keyCode] = false;
    })
  }
  , /*Clears the Canvas*/
  clear: function () {
    this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
  }
  , /*Stops all activity*/
  stop: function () {
    clearInterval(this.interval);
  }
}
/*-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=
                 GAME START
  =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
/*first function that runs on page load and executes the first components that need to be displayed as well as setting up the canvas*/
function startGame(){
  menuItemOne = new component("60px", "Righteous", "#0093a8", 150, 280, "text");
  menuItemTwo = new component("60px", "Righteous", "#f7feff", 150, 370, "text");
  menuItemThree = new component("60px", "Righteous", "#f7feff", 150, 460, "text");
  //myBackground = new component(1980, 1020, backgroundImage, 0, 0, "background");
  myGameArea.start();
}
/*-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=
               COMPONENT
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
function component(width, height, color, x, y, type) {
  /*Sets up a type for the component*/
  this.type = type;
  if (type == "player" || type == "background" || type == "enemy" || type == "boss" || type == "upgradeship" || type == "weapon") {
    this.image = new Image();
    this.image.src = color;
  }
  this.width = width;
  this.height = height;
  this.x = x;
  this.y = y;
  this.speedX = 0;
  this.speedY = 0;
  this.color = color;
  /*update function for the component*/
  this.update = function () {
    ctx = myGameArea.context;
    /*Draw Images*/
    if (type == "player" || type == "background" || type == "enemy" || type == "boss" || type == "upgradeship" || type == "weapon") {
      ctx.drawImage(this.image, this.x, this.y, this.width, this.height);
      if (type == "background") {
        ctx.drawImage(this.image, this.x, this.y - this.height, this.width, this.height);
      }
      /*Draw Text*/
    }
    else if (this.type == "text") {
      ctx.font = this.width + " " + this.height;
      ctx.fillStyle = this.color;
      ctx.fillText(this.text, this.x, this.y);
    }
    else {
      ctx.fillStyle = color;
      ctx.fillRect(this.x, this.y, this.width, this.height);
    }
  }
  /*Update position of component if it's moving*/
  this.newPos = function () {
    this.x += this.speedX;
    this.y += this.speedY;
    if (this.type == "background") {
      if (this.y == +(this.height)) {
        this.y = 0;
      }
    }
  }
  /*Hit Box Detection for Components*/
  this.crashWith = function (otherobj) {
    /*Player Collision Box*/
    var myleft = this.x;
    var myright = this.x + (this.width);
    var mytop = this.y;
    var mybottom = this.y + (this.height);
    /*Enemy Collision Box*/
    var otherleft = otherobj.x;
    var otherright = otherobj.x + (otherobj.width);
    var othertop = otherobj.y;
    var otherbottom = otherobj.y + (otherobj.height);
    /*Collision Detection*/
    var crash = true;
    if ((mybottom < othertop) || (mytop > otherbottom) || (myright < otherleft) || (myleft > otherright)) {
      crash = false;
    }
    return crash;
  }
}
/*-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=
               FRAMES
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
function everyinterval(n) {
  if ((myGameArea.frameNo / n) % 1 == 0) {
    return true;
  }
}
/*-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=
               WEAPONS
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
function weaponDrop(x, y) {
  var weaponDropChance = Math.floor((Math.random() * 100) + 1);
  if (weaponDropChance >= 1 && weaponDropChance <= 15 && typeof weaponDual === 'undefined') {
    weaponDual = new component(20, 20, weapDuoSrc, x, y, 'weapon');
  }
  if (weaponDropChance >= 26 && weaponDropChance <= 35 && typeof weaponTriple === 'undefined') {
    weaponTriple = new component(20, 20, weapTripleSrc, x, y, 'weapon');
  }
  if (weaponDropChance >= 36 && weaponDropChance <= 38 && typeof weaponQuad === 'undefined') {
    weaponQuad = new component(20, 20, weapQuadSrc, x, y, 'weapon');
  }
}
/*-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=
               START SCREEN
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
function updateMenuArea() {
  myGameArea.clear();
  //myBackground.update();
  menuItemOne.text = "START GAME";
  menuItemOne.update();
  menuItemTwo.text = "UPGRADE";
  menuItemTwo.update();
  menuItemThree.text = "EXIT";
  menuItemThree.update();
  /*Colour Change and Functions for each menu item*/
  /*Menu item one - START GAME*/
  if (menuItemOne.color == '#0093a8') {
    /*Key 13 = Enter*/
    if (myGameArea.key && myGameArea.key == 13) {
      myGameArea.stop();
      myGameArea.gamePlay();
      myGamePiece = new component(50, 50, playerImageSrc, 750, 650, "player");
      //myBackground = new component(1024, 768, backgroundImage2, 0, 0, "background");
      scoreText = new component("15px", "Righteous", "#f7feff", 15, 20, "text");
      deathText = new component("80px", "Righteous", "#a60c0c", 550, 310, "text");
      if (shipOneActivate) {
        myGamePiece = new component(50, 50, shipUpgradeOneSrc , 750, 650, "player");
        singleShot = false;
        weaponDualActive = true;
      }
      else if (shipTwoActivate) {
        myGamePiece = new component(50, 50, shipUpgradeTwoSrc, 750, 650, "player");
        singleShot = false;
        weaponTripleActive = true;
      }
      else if (shipthreeActivate) {
        myGamePiece = new component(50, 50, shipUpgradeThreeSrc, 750, 650, "player");
        singleShot = false;
        weaponQuadActive = true;
      }
    }
    /*Key 83 = S*/
    else if (myGameArea.key && myGameArea.key == 83) {
      menuItemOne.color = "#f7feff";
      menuItemTwo.color = "#0093a8";
    }
    /*Key 87 = W*/
    else if (myGameArea.key && myGameArea.key == 87) {
      menuItemOne.color = "#f7feff";
      menuItemThree.color = "#0093a8";
    }
  }
  /*Menu item two - UPGRADE*/
  else if (menuItemTwo.color == '#0093a8') {
    if (myGameArea.key && myGameArea.key == 13) {
      myGameArea.stop();
      myGameArea.upgrade();
      shipUpgradeOne = new component(100, 100, shipUpgradeOneSrc, 450, 250, "upgradeship");
      shipUpgradeTwo = new component(100, 100, shipUpgradeTwoSrc, 750, 250, "upgradeship");
      shipUpgradeThree = new component(100, 100, shipUpgradeThreeSrc, 1050, 250, "upgradeship");
      shipUpgradeOnePriceDisplay = new component("20px", "Righteous", "#f7feff", 450, 400, "text");
      shipUpgradeTwoPriceDisplay = new component("20px", "Righteous", "#f7feff", 750, 400, "text");
      shipUpgradeThreePriceDisplay = new component("20px", "Righteous", "#f7feff", 1050, 400, "text");
      currencyDisplay = new component("20px", "Righteous", "#a88f00", 750, 100, "text");
    }
    /*Key 83 = S*/
    else if (myGameArea.key && myGameArea.key == 83) {
      menuItemTwo.color = "#f7feff";
      menuItemThree.color = "#0093a8";
    }
    /*Key 87 = W*/
    else if (myGameArea.key && myGameArea.key == 87) {
      menuItemTwo.color = "#f7feff";
      menuItemOne.color = "#0093a8";
    }
  }
  /*Menu item three - EXIT*/
  else if (menuItemThree.color == '#0093a8') {
    if (myGameArea.key && myGameArea.key == 13) {
      myGameArea.stop();
    }
    /*Key 83 = S*/
    else if (myGameArea.key && myGameArea.key == 83) {
      menuItemThree.color = "#f7feff";
      menuItemOne.color = "#0093a8";
    }
    /*Key 87 = W*/
    else if (myGameArea.key && myGameArea.key == 87) {
      menuItemThree.color = "#f7feff";
      menuItemTwo.color = "#0093a8";
    }
  }
}
/*-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=
               UPGRADE SCREEN
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
function updateUpgradeArea() {
  myGameArea.clear();
  //myBackground.update();
  shipUpgradeOne.update();
  shipUpgradeTwo.update();
  shipUpgradeThree.update();
  if (currency < shipUpgradeOnePrice) {
    shipUpgradeOnePriceDisplay.color = '#f7feff';
  }
  if (currency < shipUpgradeTwoPrice) {
    shipUpgradeTwoPriceDisplay.color = '#f7feff';
  }
  if (currency < shipUpgradeThreePrice) {
    shipUpgradeThreePriceDisplay.color = '#f7feff';
  }
  shipUpgradeOnePriceDisplay.text = "Price: 130";
  shipUpgradeTwoPriceDisplay.text = "Price: 310";
  shipUpgradeThreePriceDisplay.text = "Price: 600";
  shipUpgradeOnePriceDisplay.update();
  shipUpgradeTwoPriceDisplay.update();
  shipUpgradeThreePriceDisplay.update();
  currencyDisplay.text = "Currency: " + currency;
  currencyDisplay.update();
  if (myGameArea.key && myGameArea.key == 27) {
    myGameArea.stop();
    startGame();
  }
  if (myGameArea.key && myGameArea.key == 49 && currency >= shipUpgradeOnePrice) {
    console.log('ship1 brought');
    currency = currency - shipUpgradeOnePrice;
    shipOneActivate = true;
    shipTwoActivate = false;
    shipthreeActivate = false;
  }
  if (myGameArea.key && myGameArea.key == 50 && currency >= shipUpgradeTwoPrice) {
    console.log('ship2 brought');
    currency = currency - shipUpgradeTwoPrice;
    shipTwoActivate = true;
    shipOneActivate = false;
    shipthreeActivate = false;
  }
  if (myGameArea.key && myGameArea.key == 51 && currency >= shipUpgradeThreePrice) {
    console.log('ship3 brought');
    currency = currency - shipUpgradeThreePrice;
    shipthreeActivate = true;
    shipOneActivate = false;
    shipTwoActivate = false;
  }
}
/*-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=
               GAME AREA
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
function updateGameArea() {
  var x, y;
  /*random number gen for enemy spawning within canvas width.*/
  var randomWidthSpawn = Math.floor((Math.random() * myGameArea.canvas.width - 40) + 1);
  myGameArea.clear();
  //myBackground.speedY = +0.5;
  //myBackground.newPos();
  //myBackground.update();
  myGamePiece.speedX = 0;
  myGameArea.frameNo += 1;
  if (weaponDual !== undefined) {
    weaponDual.speedY = +0.5;
    weaponDual.newPos();
    weaponDual.update();
  }
  if (weaponTriple !== undefined) {
    weaponTriple.speedY = +0.5;
    weaponTriple.newPos();
    weaponTriple.update();
  }
  if (weaponQuad !== undefined) {
    weaponQuad.speedY = +0.5;
    weaponQuad.newPos();
    weaponQuad.update();
  }
  if (bossHealth == 0 && activeBoss == true && levelTwo == false && levelThree == false) {
    activeBoss = false;
    bossHealth = 150;
    score += 10;
    myGameArea.stop();
    myGameArea.levelTwo();
    levelTwo = true;
    myGameArea.frameNo = 0;
    myEnemies.length = 0;
    projectile.length = 0;
    bossProjectile.length = 0;
    console.log('level two');
  }
  if (bossHealth == 0 && activeBoss == true && levelTwo == true && levelThree == false) {
    activeBoss = false;
    bossHealth = 300;
    score += 20;
    myGameArea.stop();
    myGameArea.levelThree();
    levelTwo = false;
    levelThree = true;
    myGameArea.frameNo = 0;
    myEnemies.length = 0;
    projectile.length = 0;
    bossProjectile.length = 0;
    console.log('level three');
  }
  if (levelTwo && myGameArea.frameNo < 100) {
    var levelTwoIntro = new component("80px", "Righteous", "#a88f00", 300, 750, "text");
    levelTwoIntro.text = "LeveL 2";
    levelTwoIntro.update();
    //myBackground = new component(1024, 768, backgroundImage2, 0, 0, "background");
    //myBackground.speedY = +0.5;
    //myBackground.newPos();
    //myBackground.update();
  }
  if (levelThree && myGameArea.frameNo < 100) {
    var levelThreeIntro = new component("80px", "Righteous", "#a88f00", 300, 750, "text");
    levelThreeIntro.text = "LeveL 3";
    levelThreeIntro.update();
    //myBackground = new component(1024, 768, backgroundImage, 0, 0, "background");
    //myBackground.speedY = +0.5;
    //myBackground.newPos();
    //myBackground.update();
  }
  if (levelThree && bossHealth == 0 && activeBoss == true) {
    deathText.text = "VICTORY";
    deathText.update();
    score += 30;
    gameOver = true;
    myGameArea.stop();
    currency = currency + score;
    myGameArea.frameNo = 0;
    myEnemies.length = 0;
    projectile.length = 0;
    bossProjectile.length = 0;
    weaponQuad = void 0;
    weaponTriple = void 0;
    weaponDual = void 0;
    score = 0;
  }
  scoreText.text = "SCORE: " + score;
  scoreText.update();
  /*-=-=-=-=-=-=-=-=-=--=-=-=-=-
      Movement
  =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
  //Player Movement
  if (myGameArea.keys && myGameArea.keys[68]) {
    if (shipOneActivate == false && shipTwoActivate == false && shipthreeActivate == false) {
      myGamePiece.speedX = +2.5;
    }
    else if (shipOneActivate) {
      myGamePiece.speedX = +3;
    }
    else if (shipTwoActivate) {
      myGamePiece.speedX = +3.5;
    }
    else if (shipthreeActivate) {
      myGamePiece.speedX = +4;
    }
  }
  if (myGameArea.keys && myGameArea.keys[65]) {
    myGamePiece.speedX = -2.5;
    if (shipOneActivate == false && shipTwoActivate == false && shipthreeActivate == false) {
      myGamePiece.speedX = -2.5;
    }
    else if (shipOneActivate) {
      myGamePiece.speedX = -3;
    }
    else if (shipTwoActivate) {
      myGamePiece.speedX = -3.5;
    }
    else if (shipthreeActivate) {
      myGamePiece.speedX = -4;
    }
  }
  if (myGamePiece.x < 2 && myGameArea.keys[65]) {
    myGamePiece.speedX = 0;
  }
  if (myGamePiece.x > 1545 && myGameArea.keys[68]) {
    myGamePiece.speedX = 0;
  }
  myGamePiece.newPos();
  myGamePiece.update();
  //Boss Movement
  if (activeBoss == true && enemyBoss.y < 140) {
    enemyBoss.speedY = +1;
    enemyBoss.newPos();
    enemyBoss.update();
  }
  /*-=-=-=-=-=-=-=-=-=--=-=-=-=-
      Spawning
  =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
  //Player Projectile
  if (myGameArea.keys && myGameArea.keys[32] && fired == false) {
    fired = true;
    if (singleShot) {
      projectile.push(new component(1, 10, '#0093a8', myGamePiece.x + (myGamePiece.width / 2), myGamePiece.y, 'projectile'));
    }
    else if (weaponDualActive) {
      projectile.push(new component(1, 10, '#0093a8', myGamePiece.x + 15, myGamePiece.y, 'projectile'));
      projectile.push(new component(1, 10, '#0093a8', myGamePiece.x + 25, myGamePiece.y, 'projectile'));
    }
    else if (weaponTripleActive) {
      projectile.push(new component(1, 10, '#0093a8', myGamePiece.x + 15, myGamePiece.y, 'projectile'));
      projectile.push(new component(1, 10, '#0093a8', myGamePiece.x + 25, myGamePiece.y, 'projectile'));
      projectile.push(new component(1, 10, '#0093a8', myGamePiece.x, myGamePiece.y + 10, 'projectile'));
    }
    else if (weaponQuadActive) {
      projectile.push(new component(1, 10, '#0093a8', myGamePiece.x + 15, myGamePiece.y, 'projectile'));
      projectile.push(new component(1, 10, '#0093a8', myGamePiece.x + 25, myGamePiece.y, 'projectile'));
      projectile.push(new component(1, 10, '#0093a8', myGamePiece.x, myGamePiece.y + 20, 'projectile'));
      projectile.push(new component(1, 10, '#0093a8', myGamePiece.x + 40, myGamePiece.y + 20, 'projectile'));
    }
    timer = setTimeout(function () {
      fired = false;
    }, 300);
  }
  //Boss Projectile
  if (activeBoss == true && enemyBoss.y >= 140) {
    enemyBoss.speedY = 0;
    enemyBoss.newPos();
    enemyBoss.update();
    if (myGameArea.frameNo == 1 || everyinterval(150) && levelTwo == false && levelThree == false) {
      bossProjectile.push(new component(1, 10, '#a60c0c', enemyBoss.x + (enemyBoss.width / 2), enemyBoss.y + enemyBoss.height, 'projectile'));
    }
    else if (myGameArea.frameNo == 1 || everyinterval(100) && levelTwo == true && levelThree == false) {
      bossProjectile.push(new component(1, 10, '#a60c0c', enemyBoss.x + 30, enemyBoss.y + (enemyBoss.height - 20), 'projectile'));
      bossProjectile.push(new component(1, 10, '#a60c0c', enemyBoss.x + (enemyBoss.width - 30), enemyBoss.y + (enemyBoss.height - 20), 'projectile'));
    }
    else if (myGameArea.frameNo == 1 || everyinterval(50) && levelTwo == false && levelThree == true) {
      bossProjectile.push(new component(1, 10, '#a60c0c', enemyBoss.x + (enemyBoss.width / 2), enemyBoss.y + enemyBoss.height, 'projectile'));
      bossProjectile.push(new component(1, 10, '#a60c0c', enemyBoss.x + 30, enemyBoss.y + (enemyBoss.height - 20), 'projectile'));
      bossProjectile.push(new component(1, 10, '#a60c0c', enemyBoss.x + (enemyBoss.width - 30), enemyBoss.y + (enemyBoss.height - 20), 'projectile'));
    }
  }
  //Boss
  if (score == 20 && activeBoss == false && levelTwo == false && levelThree == false) {
    activeBoss = true;
    enemyBoss = new component(120, 120, enemyBossImageSrc, myGameArea.canvas.width / 2 - 60, -140, 'boss');
    enemyBoss.update();
  }
  else if (score == 45 && activeBoss == false && levelTwo == true && levelThree == false) {
    activeBoss = true;
    enemyBoss = new component(120, 120, enemyBossImageSrc, myGameArea.canvas.width / 2 - 60, -140, 'boss');
    enemyBoss.update();
  }
  else if (score == 90 && activeBoss == false && levelTwo == false && levelThree == true) {
    activeBoss = true;
    enemyBoss = new component(120, 120, enemyBossImageSrc, myGameArea.canvas.width / 2 - 60, -140, 'boss');
    enemyBoss.update();
  }
  /*-=-=-=-=-=-=-=-=-=--=-=-=-=-
      Out of Bounds - Removal
  =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
  for (i = 0; i < projectile.length; i += 1) {
    if (projectile[i].y < myGameArea.canvas.height - (myGameArea.canvas.height + 10)) {
      projectile.splice(i, 1);
      console.log('removed projectile');
    }
  }
  for (i = 0; i < bossProjectile.length; i += 1) {
    if (bossProjectile[i].y > myGameArea.canvas.height + 10) {
      bossProjectile.splice(i, 1);
      console.log('removed boss projectile');
    }
  }
  for (i = 0; i < myEnemies.length; i += 1) {
    if (myEnemies[i].y > myGameArea.canvas.height + 10) {
      myEnemies.splice(i, 1);
      console.log('removed enemy');
    }
  }
  if (weaponDual !== undefined) {
    if (weaponDual.y > myGameArea.canvas.height + 10) {
      weaponDual = void 0;
    }
  }
  else if (weaponTriple !== undefined) {
    if (weaponTriple.y > myGameArea.canvas.height + 10) {
      weaponTriple = void 0;
    }
  }
  else if (weaponQuad !== undefined) {
    if (weaponQuad.y > myGameArea.canvas.height + 10) {
      weaponQuad = void 0;
    }
  }
  /*-=-=-=-=-=-=-=-=-=--=-=-=-=-
          Collisions
  =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
  //Player > Weapon Drop
  if (weaponDual !== undefined) {
    if (myGamePiece.crashWith(weaponDual)) {
      weaponDual = void 0;
      singleShot = false;
      weaponTripleActive = false;
      weaponQuadActive = false;
      weaponDualActive = true;
    }
  }
  if (weaponTriple !== undefined) {
    if (myGamePiece.crashWith(weaponTriple)) {
      weaponTriple = void 0;
      singleShot = false;
      weaponDualActive = false;
      weaponQuadActive = false;
      weaponTripleActive = true;
    }
  }
  if (weaponQuad !== undefined) {
    if (myGamePiece.crashWith(weaponQuad)) {
      weaponQuad = void 0;
      singleShot = false;
      weaponDualActive = false;
      weaponTripleActive = false;
      weaponQuadActive = true;
    }
  }
  //Player > Enemy Collions - Game Over
  for (i = 0; i < myEnemies.length; i += 1) {
    if (myGamePiece.crashWith(myEnemies[i])) {
      if (shipOneActivate) {
        myEnemies.splice(i, 1);
        shipOneHP--;
        if (shipOneHP == 0) {
          deathText.text = "GAME OVER";
          deathText.update();
          gameOver = true;
          myGameArea.stop();
          currency = currency + score;
          myGameArea.frameNo = 0;
          myEnemies.length = 0;
          projectile.length = 0;
          bossProjectile.length = 0;
          weaponQuad = void 0;
          weaponTriple = void 0;
          weaponDual = void 0;
          score = 0;
        }
      }
      else if (shipTwoActivate) {
        myEnemies.splice(i, 1);
        shipTwoHP--;
        if (shipTwoHP == 0) {
          deathText.text = "GAME OVER";
          deathText.update();
          gameOver = true;
          myGameArea.stop();
          currency = currency + score;
          myGameArea.frameNo = 0;
          myEnemies.length = 0;
          projectile.length = 0;
          bossProjectile.length = 0;
          weaponQuad = void 0;
          weaponTriple = void 0;
          weaponDual = void 0;
          score = 0;
        }
      }
      else if (shipthreeActivate) {
        myEnemies.splice(i, 1);
        shipThreeHP--;
        if (shipThreeHP == 0) {
          deathText.text = "GAME OVER";
          deathText.update();
          gameOver = true;
          myGameArea.stop();
          currency = currency + score;
          myGameArea.frameNo = 0;
          myEnemies.length = 0;
          projectile.length = 0;
          bossProjectile.length = 0;
          weaponQuad = void 0;
          weaponTriple = void 0;
          weaponDual = void 0;
          score = 0;
        }
      }
      else {
        deathText.text = "GAME OVER";
        deathText.update();
        gameOver = true;
        myGameArea.stop();
        currency = currency + score;
        myGameArea.frameNo = 0;
        myEnemies.length = 0;
        projectile.length = 0;
        bossProjectile.length = 0;
        weaponQuad = void 0;
        weaponTriple = void 0;
        weaponDual = void 0;
        score = 0;
      }
    }
  }
  //Player > bossProjectile - Game Over
  for (i = 0; i < bossProjectile.length; i += 1) {
    bossProjectile[i].speedY = +2;
    bossProjectile[i].newPos();
    bossProjectile[i].update();
    if (bossProjectile[i].crashWith(myGamePiece)) {
      deathText.text = "GAME OVER";
      deathText.update();
      gameOver = true;
      myGameArea.stop();
      currency = currency + score;
      myGameArea.frameNo = 0;
      myEnemies.length = 0;
      projectile.length = 0;
      bossProjectile.length = 0;
      weaponQuad = void 0;
      weaponTriple = void 0;
      weaponDual = void 0;
      score = 0;
    }
  }
  //Player Projectile > Boss
  if (activeBoss == true) {
    for (j = 0; j < projectile.length; j += 1) {
      if (projectile[j].crashWith(enemyBoss)) {
        projectile.splice(j, 1);
        bossHealth--;
        console.log(bossHealth);
      }
      else projectile[j].speedY = -3;
      projectile[j].newPos();
      projectile[j].update();
    }
    //Enemy Spawn
  }
  else if (myGameArea.frameNo == 1 || everyinterval(150)) {
    x = randomWidthSpawn;
    y = myGameArea.canvas.height - myGameArea.canvas.height;
    myEnemies.push(new component(40, 40, enemyImageSrc, x, y, "enemy"));
  }
  //Player Projectile > Enemy
  for (i = 0; i < myEnemies.length; i += 1) {
    myEnemies[i].speedY = +1;
    myEnemies[i].newPos();
    myEnemies[i].update();
    for (j = 0; j < projectile.length; j += 1) {
      if (projectile[j].crashWith(myEnemies[i])) {
        projectile.splice(j, 1);
        weaponDrop(myEnemies[i].x, myEnemies[i].y);
        myEnemies.splice(i, 1);
        score++;
      }
      else projectile[j].speedY = -3;
      projectile[j].newPos();
      projectile[j].update();
    }
  }
  /*-=-=-=-=-=-=-=-=-=--=-=-=-=-
          Screen Changes
  =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
  if (gameOver) {
    var interval = setInterval(function () {
      gameOver = false;
      startGame();
      clearInterval(interval);
    }, 2000);
  }
}