<!doctype html> 
<html>
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Cutive+Mono|Oswald&display=swap');
            h1 {
                color: #391475;
                font-family: 'Oswald', sans-serif;
                text-transform: uppercase;
                letter-spacing: 10px;
                padding-bottom: 2%;
            }
            body {
                margin: 0 auto;
                padding: 10%;
                font-family: 'Cutive Mono', monospace;
                line-height: 20px;
                color: #7d6b99;
            }
          a{
            color: black;
            }
        a:hover {
            background-color: black;
            color: white;
        }
            
        </style>
        <title>Labwork 1: Hello World</title>
    </head>
    <body>
        <h1>This PHP Stuff Is Wild</h1>
            <p>Heya! My name is Cayln and I'm in love with web design. I started working for a small
            marketing agency when I got out of college and I discovered how cool web design really
            was. I picked up HTML quickly on the job and that made me realize this stuff wasn't so scary!
            A year later I started taking classes at LBCC because let's face it, I'm not a 
            learn-it-yourself-on-the-internet kind of a person. 
            I've enjoyed every class I've taken so far, but this is my first programming class. So far,
            I'm contemplating if I really want to be a full-stack developer! I'm sure something will click 
            one of these days and I'll feel way better about PHP. In the meantine, check out my Github 
            <a href="https://github.com/caylncomford">here</a>.</p>
                <p>Here are a few of my favorite things to do:</p>
                    <ul>
                        <li>Watching tons of television and movies</li>
                        <li>Trying new kinds of cuisine</li>
                        <li>Hanging out with my best buddies</li>
                    </ul>
                    
                    <?php 
                    print "<p>I spend most of time on the internet getting lost in <a href='https://youtube.com'>YouTube</a>, 
                    <a href='https://instagram.com'>Instagram</a>, and <a href='https://codepen.io'>Codepen</a>. I love 
                    seeing examples of how others create to inspire my own creativity.";
                    print "Oh boy. This was a hot mess for me. Everything that could have gone wrong did! Including 
                    going to submit this assignment only to find out everything I did in class was somehow not saved,
                    even though I pushed things through to github and heroku. I will take the L for this one. Maybe I will
                    do better next time!"</p>;
                    ?>
            
            /* lab1.php 
            Cayln Comford 
            8/31/2019 */
    </body>
    
    
    
    
</html>