<?php 
    include("include/header.php"); 
    include("include/functions.php"); 
    
    $proj_img_dir_pref = 'images/projects/';
    $proj_img_dir_suff = '/';
    $trp = 'trp';
    $rgm = 'rgm';
    $jcd = 'jcd';
    $lmv = 'lmv';
    $fb = 'fb';
    $shell = 'shell';
    $ig = 'ig';
    $alloc = 'alloc';

    $trp_img_dir = $proj_img_dir_pref . $trp . $proj_img_dir_suff; // the root project image directory
    $rgm_img_dir = $proj_img_dir_pref . $rgm . $proj_img_dir_suff; // reverse gerrymandering image directory
    $jcd_img_dir = $proj_img_dir_pref . $jcd . $proj_img_dir_suff; // j class designer image directory
    $lmv_img_dir = $proj_img_dir_pref . $lmv . $proj_img_dir_suff; // lawn mover image directory
    $fb_img_dir = $proj_img_dir_pref . $fb . $proj_img_dir_suff; // fb image directory

    $projects = array($trp => 'The Root Project', 
                        $rgm => 'Reverse Gerrymandering',
                        $jcd => 'JClassDesigner',
                        $lmv => 'Lawn Mower',
                        $alloc => 'Memory Allocator',
                        $shell => 'Bash Shell',
                        $ig => 'Interest Groups',
                        $fb => 'Facebook Clone (Knock Off)'
                    );
?>
<!-- <h1><a href="project.php">Projects</a></h1> -->
<div class="proj-nav">
    <ul>
        projects = [
        <?php 
            $i = 1;
            $num_of_projects = count($projects);
            foreach ($projects as $id => $name) {
                echo '<li>&emsp;<a href="#' 
                    . $id 
                    . '">"'
                    . $name 
                    .'"</a>'
                    . ($i==$num_of_projects?'':',')
                    .'</li>';
                    $i++;
            }
        ?>
        ]
    </ul>

</div>

<div class="projects">
    <div class="proj-target" id="<?php echo $trp ?>">
        <hr>
        <h2><span class="ui-icon ui-icon-triangle-1-e"></span><a href="https://github.com/majiasheng/the-root-project">The Root Project</a></h2>

        <ul class="tech-used">
            <li>Python</li>
            <li>Flask</li>
            <li>MySQL</li>
            <li>SQLAlchemy</li>
        </ul>
        <p></p>
    </div>

    <div class="proj-target" id="<?php echo $rgm ?>">
        <hr>
        <h2><span class="ui-icon ui-icon-triangle-1-e"></span><a href="https://github.com/majiasheng/reverse-gerrymandering">Reverse Gerrymandering</a></h2>
        <div class="proj-desc">
            <?php show_images($rgm_img_dir);?>
            <ul class="tech-used">
                <li>Java</li>
                <li>Spring</li>
                <li>MySQL</li>
                <li>JPA</li>
            </ul>
        </div>
    </div>

    <div class="proj-target" id="<?php echo $jcd ?>">
        <hr>
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
        <h2><span class="ui-icon ui-icon-triangle-1-e"></span><a href="#">JClassDesigner</a></h2>
        <div class="proj-desc">
            The course project is a simplified version of Violet UML Editor.
            One thing that this project is different from the Violet UML Editor is 
            that it could generate java skeleton code from the design.
            </p>

            <?php show_images($jcd_img_dir);?>

            <!-- <img class="fancybox" src="images/projects/cse219_project_1.png" 
            class="proj-image"> <br />
            <p>UML designs</p>
            <p>---</p>
            <img class="fancybox" title="Export UML design to Java code" src="images/projects/cse219_project_2.png" 
            class="proj-image"> <br />
            <p>Export UML design to Java code</p>
            <p>---</p>
            <img class="fancybox" src="images/projects/cse219_project_3.png" 
            class="proj-image"> <br />
            <img class="fancybox" src="images/projects/cse219_project_4.png" 
            class="proj-image"> <br />
            <p>Java code of UML design</p> -->

            <span style="color: violet">=&gt; <a target="_blank" 
            href="http://alexdp.free.fr/violetumleditor/page.php?id=en:tour" 
            style="color: violet";"> Violet UML Editor</a></span>
            <ul class="tech-used">
                <li>Java</li>
                <li>JavaFx</li>
            </ul>
        </div>
    </div> <!-- end of cse219_project-->

    <div class="proj-target" id="<?php echo $lmv ?>">
        <hr>
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
        This course project is based on the <a style="border-bottom: solid;color:green;" target="_blank" href="https://www.youtube.com/watch?v=ae5mJ9wI5aA">DOS Lawn Mower</a>.
        <div class="proj-desc">
            we were tested on memory organization and multi-dimensional arrays in memory.<br>
            The challenging part of this project was the manipulation of 
            the values in each pixel that is visited.<br>
            (* Each pixel in the map is made up of a 2-byte value, stored in a 2-d 
            array in row major order. The first byte represents the ascii 
            character (the objects in the game: mower, flowers, rocks, and 
            etc.), the second byte represents the fore/backgroud colors.)<br>
            <br>
            <?php show_images($lmv_img_dir);?>

            <ul class="tech-used">
                <li>MIPS Assembly</li>
            </ul>
        </div>
    </div> <!-- end of cse220_project-->

        <!-- <h2>
            CSE 320 - Systems Fundamentals II
        </h2>
        <p>
        This course introduces more fundamentals of operating system, 
        including memory management, concurrency, low level programming (in C), 
        and more. <br> -->

    <div class="proj-target" id="<?php echo $alloc ?>">
        <hr>
        <h2><span class="ui-icon ui-icon-triangle-1-e"></span>Memory Allocator</h2>
        <div class="proj-desc">
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
        </div>
    </div>

    <div class="proj-target" id="<?php echo $shell ?>">
        <hr>
        <h2><span class="ui-icon ui-icon-triangle-1-e"></span>Bash Shell</h2>
        <div class="proj-desc">
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
        </div>
    </div>

    
    <div class="proj-target" id="<?php echo $ig ?>">
        <hr>
        <h2><span class="ui-icon ui-icon-triangle-1-e"></span><a href="https://github.com/majiasheng/Interest-Groups">Interest Groups</a></h2>
        <div class="proj-desc">
            This project uses internet domain sockets to support interest-based discussion groups with multi-user.<br>

            <ul class="tech-used">
                <li>Java</li>
                <li>Socket Programming</li>
            </ul>
        </div>
    </div> <!-- end of cse310_project-->


    <div class="proj-target" id="<?php echo $fb ?>">
        <hr>
        <h2><span class="ui-icon ui-icon-triangle-1-e"></span><a target="_blank" href="https://github.com/majiasheng/fb-clone">Facebook Clone</a></h2>
        <div class="proj-desc">
            This is a simplified version of facebook. <br>
            I am responsible for the backend and the general planning of the project.<br>
            <ul class="tech-used">
                <li>Apache</li>
                <li>MySQL</li>
                <li>PHP</li>
            </ul>
        </div>
    </div>
    <hr>
    <div id="proj-stool">More Ideas Brewing...</div>
</div> <!-- end of projects -->

<?php include("include/footer.php"); ?>

