<<!DOCTYPE html>
<html>
    <head>
        <title>Lab 9: The Bookworm Store</title>
        <link rel="stylesheet" href="css/bookworm-style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>


    <body>
        <header>
            <h1>THE BOOKWORM STORE</h1>
            <nav>
                <a href="index.php">HOME</a>
            </nav>
        </header>
       <!DOCTYPE html>
<html>
    <head>
        <title>Lab 9: The Bookworm Store</title>
        <link rel="stylesheet" href="css/bookworm-style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>


    <body>
        <header>
            <h1>THE BOOKWORM STORE</h1>
            <nav>
                <a href="index.php">HOME</a>
            </nav>
        </header>
        <?php include 'includes/book.php'; ?>
        <?php $hunger_games->buy() ?>
        <section>
            <div>
                <h2>The BookWorm Store</h2>
                <h4>I'm not a <span class="emphasized">bookworm</span>, I'm an <span class="emphasized">escape artist</span>.</h4>
            </div>


            <h4 class="decorated"><span><span class="emphasized">The Hunger Games</span></span></h4>


            <div id="content">
                <div class="row">


                    <div class="column">
                        <img src="images/hunger-games.jpeg" style="width:60%">
                        <h5><?= $hunger_games->title ?></h5>
                        <h5><?= $hunger_games->author ?></h5>
                        <h5><?= $hunger_games->showRatingStars() ?></h5>
                        <h5><?= $hunger_games->checkInStock() ?></h5>
                        <h5>$<?= $hunger_games->price ?></h5>
                    </div>


                    <div class="column">
                        <img src="images/catching-fire.jpeg" style="width:60%">
                        <h5><?= $catching_fire->title ?></h5>
                        <h5><?= $catching_fire->author ?></h5>
                        <h5><?= $catching_fire->showRatingStars() ?></h5>
                        <h5><?= $catching_fire->checkInStock() ?></h5>
                        <h5>$<?= $catching_fire->price ?></h5>
                    </div>


                    <div class="column">
                        <img src="images/mockingjay.jpeg" style="width:60%">
                        <h5><?= $mockingjay->title ?></h5>
                        <h5><?= $mockingjay->author ?></h5>
                        <h5><?= $mockingjay->showRatingStars() ?></h5>
                        <h5><?= $mockingjay->checkInStock() ?></h5>
                        <h5>$<?= $mockingjay->price ?></h5>
                    </div>
                </div>
            </div>
        </section>
    </body>

    	<section>
      		<div>
		        <h2>The BookWorm Store</h2>
		        <h4>I'm not a <span class="emphasized">bookworm</span>, I'm an <span class="emphasized">escape artist</span>.</h4>
  			</div>

  			<h4 class="decorated"><span><span class="emphasized">The Hunger Games</span></span></h4>

	  		<div id="content">
	  			<div class="row">

	  				<div class="column">
	  					<img src="images/hunger-games.jpeg" style="width:60%">
	  					<h5>TITLE</h5>
	  					<h5>by AUTHOR</h5>
	  					<!-- SHOW STAR RATINGS -->
	  					<h5><span class="emphasized">CHECK STOCK</span>
						<h5>$PRICE</h5>
	  				</div>

	  				<div class="column">
	  					<img src="images/catching-fire.jpeg" style="width:60%">
	  					<h5>TITLE</h5>
	  					<h5>by AUTHOR</h5>
	  					<!-- SHOW STAR RATINGS -->
	  					<h5><span class="emphasized">CHECK STOCK</span>
						<h5>$PRICE</h5>
	  				</div>

	  				<div class="column">
	  					<img src="images/mockingjay.jpeg" style="width:60%">
	  					<h5>TITLE</h5>
	  					<h5>by AUTHOR</h5>
	  					<!-- SHOW STAR RATINGS -->
	  					<h5><span class="emphasized">CHECK STOCK</span>
						<h5>$PRICE</h5>
	  				</div>
				</div>
			</div>
    	</section>
	</body>
</html>