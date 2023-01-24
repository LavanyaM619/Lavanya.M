
<?php

// connect page top part (heder,top nav)
include "includes/top.php";
if(!isset($_SESSION['user_id']))
{
 header("location:login.php");
}

?>
  <link rel="stylesheet" href="css/coursesstyle.css">
<body>

	<!--header-->
	
    <main>

        <h1 class="faq-heading">Courses</h1>
        <section class="faq-container">
            <div class="faq-one">

                
                <h1 class="faq-page">Business management</h1>

                
                <div class="faq-body">
                    <p>As you register with us, you will have the opportunity to learn many new concepts,
                     tools, models, and strategies which you can use in organizational contexts in the way forward in your career. 
                     You will also have an opportunity to obtain hands-on learning experience of management practices through our 
                     community based project.</p>
                </div>
            </div>
            <hr class="hr-line">

            <div class="faq-two">

                <h1 class="faq-page">Civil Engineering</h1>

              

                <div class="faq-body">
                    <p>Civil Engineers are expected to deliver their expertise in constructing enhanced and safe living surroundings
                     to mankind such as dams, bridges, roads, highways, railways, ports, harbors and etc. Our curriculum has been developed 
                     after careful observation and analysis performed on various decisive factors such as both local and international industrial demands,
                     contemporary technology and etc. We facilitate our students in acquiring deeply-rooted knowledge in mathematics and physics, 
                     in order to forecast various functional aspects of structures from bridges to exceedingly complex irrigation systems. 
                     Such fundamental knowledge gathered initially, will guide the learner to successfully explore the complex scenarios in Structural,
                     Geotechnical, Hydraulics, Environmental and Transportation Engineering gradually. </p>
                </div>
            </div>
            </div>
            <hr class="hr-line">


            <div class="faq-three">

           
                <h1 class="faq-page">Information Technology</h1>


                <div class="faq-body">
                    <p>The Faculty offers a range of internationally recognized undergraduate and postgraduate degree programs in Information Technology. 
                        The Faculty also conducts short term programs for school leavers, job seekers and working professionals. All the academic programs
                        of the Faculty are designed to cater the local and international job market. The Faculty focuses on producing qualified personnel
                        and professionals who can serve local and international community in various disciplines of information technology. To achieve
                        this objective the Faculty maintains strong relationship with well reputed international universities and industry partners.
                        The major strength of the Faculty is its expert and diverse internal and external academics and state-of-the-art laboratory
                        facilities for research and development.

					</p>
                </div>
            </div>

            <hr class="hr-line">


            <div class="faq-four">

           
                <h1 class="faq-page">Data Science</h1>


                <div class="faq-body">
                    <p>This degree in Data Science is an industry-relevant and popular postgraduate programme of study. Data Science and "Big Data" are
                        more important than ever. Graduates trained to garner insights from large data sets, extract patterns and provide actionable information
                        to solve real-world problems are sought after in both the private and public sector.
                        This course will equip you with in-demand theoretical knowledge and practical skills to develop data science systems, use software to analyse
                        and synthesise data, and manage all aspects of data science.

					</p>
                </div>
            </div>

        </section>
    </main>

    <!--footer-->
    
			 
				
		   
		   <script src="js/courses.js"></script>
           <?php 
//connect  page footer
include 'includes/footer.php';
?>
