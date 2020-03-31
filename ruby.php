<?php include_once("head.php");?>
<title>Ruby On Rails</title>
<body>

<?php require_once("nav.php");?>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h1>Ruby On Rails</h1><br>
  <h3>Stored Notes</h3>
  <p>Creation 31/03/2020<br></p><br>

  <h3>Git Ruby</h3>
  <p><b>Commands:</b>
  <br>cd Sites
  <br>rails new nameOfProject
  <br>cd nameOfProject
  <br>bundle install
  <br><i>Might need to change versons ie SQLite3 in Gemfile</i>
  <br>rails server<br>
  <br><i>Can install shutup to close server, after CTRL'C</i>
  <br>gem install shutup
  <br>shutup<br>
  <br><i>Generate Controller</i>
  <br>rails g contoller "Name ie Posts, Pages, etc"<br>
  <br><i>Configure routes in routes.rb</i>
  <br> root 'posts#index'
  <br><br>rake routes
  <br>rails g model Post
  <br><i>Run migration for database</i>
  <br>rake db:migrate
  </p>
  <br>
  <p>Plural for Controllers ie Posts<br>
  Singular for Models ie Post</p>
</div>




<?php include_once("foot.php")?>