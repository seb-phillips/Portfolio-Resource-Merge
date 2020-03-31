<?php include_once("head.php");?>
<title>Git Basics</title>
<body>

<?php require_once("nav.php");?>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h1>Github & Git</h1><br>
  <h3>Basic Commands</h3>
  <p><b>Commands</b><br>
  git init<br>
  git add .<br>
  git commit -m "first commit"<br>
  git branch<br>
  git remote add origin https://github.com/username/repName.git<br>
  git remote<br>
  git remote -v<br>
  git push -u origin master<br>
  Login...<br>
  </p><br>
  <h3>Further Reading</h3>
  <p>The important command is git remote add origin URL. This command 
      needs to be executed in your local project folder (i.e. the folder 
      that contains the Git Repository you want to push to GitHub):</p>
        <li>remote add: Adds a remote Repository to our Git project. 
            In other words, it establishes a connection between the local 
            and the remote Repository</li><br>
        <li>origin: This is the name of the remote Repository. It can be 
            named different, but typically it’s called origin so we’ll 
            also stick to this convention</li><br>
        <li>URL is the URL of the remote Repository on GitHub (our data 
            should be pushed to the correct address shouldn’t it?). 
            GitHub automatically adds the address as we can see on the 
            screenshot</li><br>

    <h3>git remote</h3>
    <p>After running the command in the local project folder, git remote 
        displays the remote Repository in our terminal (git remote -v also 
        shows the URL of the Repository). This confirms that we successfully 
        established a connection between our local and remote Repositories, 
        but we didn’t exchange any data up to this point.</p>

        <h3>git push</h3>
    <p>git push -u origin master allows us to push (i.e. upload) the content of 
        our local Repository to the remote one. -u origin master instructs Git 
        to create an upstream to a specific Branch and Repository, meaning that 
        we want to upload data to the “master” Branch of our “origin” Repository.
        GitHub now asks for our credentials and if we then reload our GitHub page, we should 
        see that our Branch and the Commit(s) of the local Repository were pushed to GitHub.</p>     

    <h3>Local, Remote & Remote Tracking Branches</h3>    
    <li>git branch displays all current Branches in our local Repository</li><br>
    <li>git remote shows the remote Repository we created on GitHub</li><br>
    <li>git branch -r displays the remote tracking Branch</li><br>
    <p>The local Branches are the Branches of our local Repository on our machine, the remote 
        Repository is the Repository in the cloud (on GitHub in our case), I guess that’s clear.</p>
    <p>After the first time we used “push” in this explicit way (the same is also true for “pull” 
    and other commands like “clone”, more on that in a second), this remote tracking Branch is created automatically.</p>
    <p>With the information of this remote tracking Branch, Git knows that git push should upload code to “origin/master” 
    (our master Branch in the origin remote Repository) and with that the right code can be exchanged between the right 
    Repositories and Branches. This allows us to use a shorter form of these commands in the future as Git now is aware of 
    the “address” of our remote Repository and the corresponding Branch. Whenever we’re working in our local master Branch, 
    entering git push is all we have to do now to update the code in our remote Repository. As a sidenote: With “push” the 
    data in both the remote tracking Branch and the remote Branch will be updated. We need to make sure that all three 
    Branches (the local, the remote tracking and the remote one) are synchronized though.</p>
</div>
<?php include_once("foot.php")?>