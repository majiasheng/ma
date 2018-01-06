<?php include("include/header.php"); ?>
<!-- <h1><a href="project.php">Projects</a></h1> -->


<div class="projects">
    <div>
        <hr>
        <h2><span class="ui-icon ui-icon-triangle-1-e"></span><a href="https://github.com/majiasheng/the-root-project">The Root Project</a></h2>

        <ul class="tech-used">
            <li>python</li>
            <li>flask</li>
            <li>MySQL</li>
            <li>SQLAlchemy</li>
        </ul>
        <p></p>
    </div>

    <div>
        <hr>
        <h2><span class="ui-icon ui-icon-triangle-1-e"></span><a href="https://github.com/majiasheng/reverse-gerrymandering">Reverse Gerrymandering</a></h2>

        <ul class="tech-used">
            <li>Java</li>
            <li>Spring</li>
            <li>MySQL</li>
            <li>JPA</li>
        </ul>
        <p></p>
    </div>
    
    
    <hr>
    <div id="cse219_project">
        <!-- <h2>
            CSE 219 - Object Oriented Programming
        </h2>
        <p>
        This class focuses on object oriented programming.
        It is the first class that introduced me to working with an app
        framework. In addition, it is also the first class in which I 
        get to design and implement large scale project.
        From this class, I learned the importance of planning 
        as well as modularity in software development.<br> -->
        <h2>JClassDesigner</h2>
        The course project is a simplified version of Violet UML Editor.
        One thing that this project is different from the Violet UML Editor is 
        that it could generate java skeleton code from the design.
        </p>
        <img src="archived_images/projects/cse219_project_1.png" 
        class="proj-image"> <br />
        <p>UML designs</p>
        <p>---</p>
        <img src="archived_images/projects/cse219_project_2.png" 
        class="proj-image"> <br />
        <p>Export UML design to Java code</p>
        <p>---</p>
        <img src="archived_images/projects/cse219_project_3.png" 
        class="proj-image"> <br />
        <img src="archived_images/projects/cse219_project_4.png" 
        class="proj-image"> <br />
        <p>Java code of UML design</p>

        <span style="color: violet">=&gt; <a target="_blank" 
        href="http://alexdp.free.fr/violetumleditor/page.php" 
        style="color: violet";"> Violet UML Editor</a></span>
        <br><br>
        <ul class="tech-used">
            <li>Java</li>
            <li>JavaFx</li>
        </ul>
    </div> <!-- end of cse219_project-->

    <hr>
    <div id="cse220_project">
        <!-- <h2>
            CSE 220 - Systems Fundamentals I
        </h2>
        <p>This course introduces MISP assembly language programming and 
        essential concepts of computer organization and architecture.
        Because of the fact that this class is challenging and thus 
        it requires more efforts, 
        I gradually found improvements in my understanding of 
        programming through the homework assignments. <br>

        From this class, I have a better understanding of the internal 
        representation of information. I also learned how a slight change in the 
        data could affect the result. <br>
        Another important takeaway from this class is the value of debugger.
        </p> -->

        <h2>Lawn Mower</h2>
        In this project (written in MIPS assembly), we were 
        tested on memory organization and multi-dimensional arrays in 
        memory.<br>
        The challenging part of this project was the manipulation of 
        the values in each pixel that is visited.<br>
        (* Each pixel in the map is made up of a 2-byte value, stored in a 2-d 
        array in row major order. The first byte represents the ascii 
        character (the objects in the game: mower, flowers, rocks, and 
        etc.), the second byte represents the fore/backgroud colors.)<br>

        <br>
        <img src="archived_images/projects/cse220_project.gif" 
        class="proj-image"> <br />
        <p>Landscape 1 - Lawn mower in action</p>
        <p>---</p>
        <img src="archived_images/projects/cse220_project_1.png" 
        class="proj-image"> <br />
        <p>Landscape 2 - The mower mowed along the pool</p>
        <p>---</p>
        <img src="archived_images/projects/cse220_project_2.png" 
        class="proj-image"> <br />
        <img src="archived_images/projects/cse220_project_3.png" 
        class="proj-image"> <br />
        <p>"Awesome CSE 220" ascii art on the lawn 
        and part of its hex values..</p>
        
        => <a target="_blank" 
        href="https://www.youtube.com/watch?v=ae5mJ9wI5aA" 
        style="background-color: #646464; color: white"> Project Inspiration</a>
        <br><br>
        <ul class="tech-used">
            <li>MIPS Assembly</li>
        </ul>
    </div> <!-- end of cse220_project-->

    <hr>
    <div id="cse320_project">
        <!-- <h2>
            CSE 320 - Systems Fundamentals II
        </h2>
        <p>
        This course introduces more fundamentals of operating system, 
        including memory management, concurrency, low level programming (in C), 
        and more. <br> -->
        <h2><span class="ui-icon ui-icon-triangle-1-e"></span>Memory Allocator</h2>
        <p>
        By implementing a memory allocator, I learned the inner working of 
        *alloc and free operations, and more importantly, 
        pointer arithmetics.<br>
        In this assignment, we were given the wrapper function of the system 
        call sbrk(), and we were to implement malloc(), realloc(), and 
        free() functions utilizing an explicit free list, without using the 
        existing glibc built-in functions.<br>
        </p>

        <ul class="tech-used">
            <li>Unix</li>
            <li>C</li>
        </ul>

        <hr>
        <h2><span class="ui-icon ui-icon-triangle-1-e"></span>Bash Shell</h2>
        Systems Fundamentals Interactive Shell <br>
        From the project of implementing a shell inside a shell, 
        in addition to the knowledge involved in this project, such as system 
        calls: fork(), exec*(), process execution, and the inner working of a 
        shell, I also learned the importance of performance in the design 
        process. <br>
        </p>

        <ul class="tech-used">
            <li>Unix</li>
            <li>C</li>
        </ul>
    </div> <!-- end of cse320_project-->

    <hr>
    <div id="cse310_project">
        <h2><span class="ui-icon ui-icon-triangle-1-e"></span><a href="https://github.com/majiasheng/Interest-Groups">Interest Groups</a></h2>
        <p>
            This project uses internet domain sockets to support interest-based discussion groups with multi-user.<br>
        </p>

        <ul class="tech-used">
            <li>Java</li>
            <li>Socket Programming</li>
        </ul>

    </div> <!-- end of cse310_project-->


    <hr>
    <div id="fb_clone_project">
        <h2><span class="ui-icon ui-icon-triangle-1-e"></span><a target="_blank" href="https://github.com/majiasheng/fb-clone">Facebook Clone</a></h2>
        <p> This is a simplified version of facebook. <br>
        I am responsible for the backend and the general planning of the project.<br>
        </p>
        <ul class="tech-used">
            <li>Apache</li>
            <li>MySQL</li>
            <li>PHP</li>
        </ul>
        
    </div>
    <hr>
    
</div> <!-- end of projects -->

<?php include("include/footer.php"); ?>
