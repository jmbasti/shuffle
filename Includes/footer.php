

			</div>
		</div>
	</div>


	<!-- FOOTER NOW PLAYING BAR-->
	<?php include("includes/nowPlayingBar.php")?> <!--this is optional as the only purpose is to separate the files so that the main index page will not be crowded-->
	
</div>





</body>
</html>






































<!--
STEPS TP CREATE SHUFFLE WEBSITE
1. index.php
2. register.php
3. register-handlers.php
4. Accounts.php
5. Constants.php
6. create database user table
7. config.php
8. create a folder for storing profile pictures
9. test the sign up
10. login-handlers.php
11. create Sessions
12. continue with index.php user interface
13. make mySQL data table to create songs:

	a. go to shuffle click new (song table)
	b. first column / first row - 'id'
	c. click A_i
	d. index - 'PRIMARY'
	e. first column / 2nd row - 'title'
	f. type - VARCHAR
	g. Length/values - 250
	h. first column / 3rd row - 'artist'
	i. type - INT (because we are using numbers a refernce to the artist)
 	j. first column / 4th row - 'album'
	k. type - INT (because we are using numbers a refernce to the artist)
	l. to add columns, click add and specify the number
	m. first column / 5th row - 'genre'
	m. type - INT (because we are using numbers a refernce to the artist)
	o. first column / 6th row - 'duration'
	p. type - VARCHAR
	q. Length/values - 8
	r. first column / 7th row - 'path'
	s. type - VARCHAR
	q. Length/values - 500 
	t. first column / 8th row - 'albumOrder'
	u. type - INT (because we are using numbers a refernce to the artist)
	v. first column / 9th row - 'plays'
	u. type - INT (because we are using numbers a refernce to the artist)
	w. click save
	
	a. go to shuffle click new (genre table)
	b. first column / first row - 'id'
	c. click A_i
	d. index - 'PRIMARY'
	e. first column / 2nd row - 'title'
	f. type - VARCHAR
	g. Length/values - 50

	a. go to shuffle click new (artist table)
	b. first column / first row - 'id'
	c. click A_i
	d. index - 'PRIMARY'
	e. first column / 2nd row - 'title'
	f. type - VARCHAR
	g. Length/values - 50

	a. go to shuffle click new (album table)
	b. first column / first row - 'id'
	c. click A_i
	d. index - 'PRIMARY'
	e. first column / 2nd row - 'title'
	f. type - VARCHAR
	g. Length/values - 250
	h. first column / 3rd row - 'artist'
	i. type - INT (because we are using numbers a refernce to the artist)
 	j. first column / 4th row - 'artworkPath'
	k. type - VARCHAR
	l. Length/values - 500

	INSERTING DATA in ARTIST, SONG, GENRE

	a. go to artist table, click insert tab
	b. go to name row and input the name value 'Micky Mouse'
	c. then click go
	d. you can add as many 

	a. go to genre table, click insert tab
	b. go to name row and input the name value 'Rock'
	c. then click go
	d. you can add as many

	a. go to album table, click insert tab
	b. go to name row and input the name value for title 'Bacon and Egg'
	c. go to artist - 2
	d. go to genre - 1
	e. go artworkPath - assets/images/artwork/clearday.jpg
	f. then click go
	g. you can add as many


	a. go to song table, click insert tab
	b. go to name row and input the name value for title 'Acoustic Breeze'
	c. go to artist - 1
	d. go to album - 1
	e. go to genre - 1
	f. go to duration - 2:37
	g. go to path - assets/music/bensound-acousticbreeze.mp3
	h. go to albumOrder - 1 (up to you choose which order of this song is arrange)
	i. go to plays - 0 
	j. then click go
	k. you can add as many

14. continue with index.php user interface



	































-->



<!-- TO CREATE A DATABASE USER TABLE

1. localhost/phpmyadmin/ , make sure that XAMPP is running
2. Click New
3. Create Name and click
4. Set the number of columns to 8, click go

5. Set Name to id
6. Type stays as INT
7. Click A_I
8. Index  , select PRIMARY

9. Set Name to registerUsername
10. Type sets as VARCHAR
11. Length/Values set to 25

12. Set Name to firstName
13. Type sets as VARCHAR
14. Length/Values set to 50

15. Set Name to lastName
16. Type sets as VARCHAR
17. Length/Values set to 50

18. Set Name to email
19. Type sets as VARCHAR
20. Length/Values set to 200

21. Set Name to password
22. Type sets as VARCHAR
23. Length/Values set to 32

24. Set Name to signUpDate
25. Type sets as DATETIME

26. Set Name to profilePic
27. Type sets as VARCHAR
23. Length/Values set to 500



-->