<!-- Start main-content -->
<style type="text/css">
    .fx {
    margin-left: -15px !important;
    font-weight: bold;
    font-size: 15px;
}
</style>
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header inner-header-tech" style="background-image:url('<?php echo site_url(); ?>images/bg/java-bg.png');">
       
        <div class="container pt-70 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-white"></h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <ol class="breadcrumb text-left text-black mt-10">
            <li><a href="<?php echo site_url(); ?>home">Home</a></li>

            <li class="active text-gray-silver">Java</li>
        </ol>
    </div>
    <!-- Section: Upcoming Events -->
   <!-- <section id="upcoming-events" class="divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg1.jpg">
        <div class="container pb-50 pt-80">
            <div class="section-content text-center">
                <div class="row">

                    <?php foreach ($datas as  $datas) {         ?>

                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <a href="<?php echo base_url(); ?>technologies/view/<?php echo $datas['id']; ?>">
                            <div class="schedule-box maxwidth500 bg-light mb-30">
                                <div class="thumb">
                                    <!--<img class="img-fullwidth" alt="" src="<?php echo site_url(); ?>images/technologies/<?php echo $datas['image']; ?>">

                                </div>
                                <div class="schedule-details clearfix p-15 pt-10">
                                    <h5 class="font-16 title" ><?php echo $datas['name']; ?></h5>


                                    <!--<div class="mt-10">
                                        <a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="<?php echo base_url(); ?>technologies/view/<?php echo $datas['id']; ?>">View</a>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


<?php } ?>

                </div>
            </div>
        </div>
    </section>-->
</div>
<div class="container">
<div class="row featured-boxes">
<div class="col-md-3">
<div class="featured-box" style="height: 500px;">
    <?php if($search_records['name']!=''){ ?>
         <h4><i class="fa fa-hand-o-right" aria-hidden="true"></i> <a href="<?php echo site_url();?>technologies/view/<?php echo str_replace(' ', '-', $search_records['name']);?>"><?php echo $search_records['name'];?></a></h4>
   <?php }else{ ?>
     <h4><i class="fa fa-hand-o-right" aria-hidden="true"></i> <a href="">No Records Found!</a></h4>
   <?php }?>
   
<!--<ul class="menu" id="java_technologies" data-href="java_technology_tutorials.htm">
<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> <a href="/ant/index.htm" title="Learn Apache ANT">Learn Apache Ant</a></li>
<li><a href="/commons_collections/index.htm" title="Apache Common Collection">Learn Apache Common Collection</a></li>
<li><a href="/commons_io/index.htm" title="Apache Common IO">Learn Apache Common IO</a></li>
<li><a href="/apache_poi_ppt/index.htm" title="Learn Apache POI (Powerpoint)">Learn Apache POI (Powerpoint)</a></li>
<li><a href="/apache_poi_word/index.htm" title="Learn Apache POI (Word)">Learn Apache POI (Word)</a></li>
<li><a href="/apache_poi/index.htm" title="Learn Apache POI">Learn Apache POI</a></li>
<li><a href="/awt/index.htm" title="Learn AWT">Learn AWT</a></li>
<li><a href="/commons_cli/index.htm" title="Learn Apache Commons CLI">Learn Apache Commons CLI</a></li>
<li><a href="/dbutils/index.htm" title="Learn Apache DB Utils">Learn Apache DB Utils</a></li>
<li><a href="/design_pattern/index.htm" title="Learn Design Patterns in Java">Learn Design Patterns</a></li>
<li><a href="/easymock/index.htm" title="Learn EasyMock">Learn EasyMock</a></li>
<li><a href="/eclipse/index.htm" title="Learn Eclipse">Learn Eclipse</a></li>
<li><a href="/ejb/index.htm" title="Learn EJB">Learn EJB</a></li>
<li><a href="/gson/index.htm" title="Learn Gson">Learn Gson</a></li>
<li><a href="/guava/index.htm" title="Learn Guava">Learn Guava</a></li>
<li><a href="/guice/index.htm" title="Learn Guice">Learn Guice</a></li>
<li><a href="/gwt_googlecharts/index.htm" title="Learn GWT Google Charts">Learn GWT Google Charts</a></li>
<li><a href="/gwt_highcharts/index.htm" title="Learn GWT High Charts">Learn GWT High Charts</a></li>
<li><a href="/hibernate/index.htm" title="Learn Hibernate">Learn Hibernate</a></li>
<li><a href="/ibatis/index.htm" title="Learn iBATIS">Learn iBATIS</a></li>
<li><a href="/intellij_idea/index.htm" title="Learn Intellij Idea">Learn Intellij Idea</a></li>
<li><a href="/jackson/index.htm" title="Learn Jackson">Learn Jackson</a></li>
<li><a href="/jasper_reports/index.htm" title="Learn JasperReports">Learn JasperReports</a></li>
<li><a href="/java/index.htm" title="Learn Java">Learn Java</a></li>
<li><a href="/java8/index.htm" title="Learn Java8">Learn Java 8</a></li>
<li><a href="/java9/index.htm" title="Learn Java9">Learn Java 9</a></li>
<li><a href="/java_cryptography/index.htm" title="Learn Java Cryptography">Learn Java Cryptography</a></li>
<li><a href="/java_concurrency/index.htm" title="Learn Java Concurrency">Learn Java Concurrency</a></li>
<li><a href="/java_generics/index.htm" title="Learn Java Generics">Learn Java Generics</a></li>
<li><a href="/java_rmi/index.htm" title="Learn Java RMI">Learn Java RMI</a></li>
<li><a href="/java/io/index.htm" title="Learn Java.io Package">Java.io Package</a></li>
<li><a href="/java_i18n/index.htm" title="Learn Java Internalization">Java Internalization</a></li>
<li><a href="/java/java_interview_questions.htm" title="Java Interview Questions">Java Interview Questions</a></li>
<li><a href="/java/lang/index.htm" title="Learn Java.lang Package">Java.lang Package</a></li>
<li><a href="/javareflect/index.htm" title="Learn Java.reflect Package">Java.reflect Package</a></li>
<li><a href="/javaregex/index.htm" title="Learn Java Regex">Learn Java Regex</a></li>
<li><a href="/javatime/index.htm" title="Learn Java.time Package">Java.time Package</a></li>
<li><a href="/java/math/index.htm" title="Learn Java.math Package">Java.math Package</a></li>
<li><a href="/javaregex/index.htm" title="Learn Java.regex Package">Java.regex Package</a></li>
<li><a href="/java/util/index.htm" title="Learn Java.util Package">Java.util Package</a></li>
<li><a href="/java_xml/index.htm" title="Learn Java XML">Learn Java XML</a></li>
<li><a href="/javazip/index.htm" title="Learn Java Zip">Learn Java Zip</a></li>
<li><a href="/java8/index.htm" title="Learn Java-8">Learn Java-8</a></li>
<li><a href="/javaexamples/index.htm" title="Java  Examples">Java Examples</a></li>
<li><a href="/javafx/index.htm" title="Learn JavaFx">Learn JavaFx</a></li>
<li><a href="/javamail_api/index.htm" title="Learn JavaMail API">Learn JavaMail API</a></li>
<li><a href="/jbpm5/index.htm" title="Learn Jbpm5">Learn Jbpm5</a></li>
<li><a href="/jdb/index.htm" title="Learn JDB">Learn JDB</a></li>
<li><a href="/jdbc/index.htm" title="Learn JDBC">Learn JDBC</a></li>
<li><a href="/jfreechart/index.htm" title="Learn JFreeChart">Learn JFreeChart</a></li>
<li><a href="/jmeter/index.htm" title="Learn jmeter">Learn jMeter</a></li>
<li><a href="/jsoup/index.htm" title="Learn JSoup">Learn JSoup</a></li>
<li><a href="/jogl/index.htm" title="Learn JOGL">Learn JOGL</a></li>
<li><a href="/jpa/index.htm" title="Learn JPA">Learn JPA</a></li>
<li><a href="/json/index.htm" title="Learn JSON">Learn JSON</a></li>
<li><a href="/jsp/index.htm" title="Learn JSP">Learn JSP</a></li>
<li><a href="/junit/index.htm" title="Learn JUnit">Learn JUnit</a></li>
<li><a href="/log4j/index.htm" title="Learn log4j">Learn log4j</a></li>
<li><a href="/lucene/index.htm" title="Learn Lucene">Learn Lucene</a></li>
<li><a href="/maven/index.htm" title="Learn Maven">Learn Maven</a></li>
<li><a href="/pdfbox/index.htm" title="Learn PDFbox">Learn PDFbox</a></li>
<li><a href="/servlets/index.htm" title="Learn Servlets">Learn Servlets</a></li>
<li><a href="/spring/index.htm" title="Learn Spring">Learn Spring</a></li>
<li><a href="/springaop/index.htm" title="Learn Spring AOP">Learn Spring AOP</a></li>
<li><a href="/spring_batch/index.htm" title="Learn Spring Batch">Learn Spring Batch</a></li>
<li><a href="/spring_boot/index.htm" title="Learn Spring Boot">Learn Spring Boot</a></li>
<li><a href="/springbootcli/index.htm" title="Learn Spring Boot Client">Learn Spring Boot Client</a></li>
<li><a href="/springjdbc/index.htm" title="Learn Spring JDBC">Learn Spring JDBC</a></li>
<li><a href="/springmvc/index.htm" title="Learn Spring MVC">Learn Spring MVC</a></li>
<li><a href="/springws/index.htm" title="Learn Spring Web Services">Learn Spring Web Services</a></li>
<li><a href="/struts_2/index.htm" title="Learn Struts 2">Learn Struts 2.x</a></li>
<li><a href="/swing/index.htm" title="Learn Swing">Learn Swing</a></li>
<li><a href="/testng/index.htm" title="Learn TestNG">Learn TestNG</a></li>
<li><a href="/tika/index.htm" title="Learn Apache Tika">Learn Apache Tika</a></li>
<li><a href="/xerces/index.htm" title="Learn Apache Xerces">Learn Apache Xerces</a></li>
<li><a href="/xstream/index.htm" title="Learn XStream">Learn XStream</a></li>
</ul>
<h4>Digital Marketing</h4>
<ul class="menu" id="digital_marketing" data-href="digital_marketing_tutorials.htm">
<li><a href="/amazon_marketplace/index.htm" title="Learn Amazon Marketplace">Learn Amazon Marketplace</a></li>
<li><a href="/ab_testing/index.htm" title="Learn A/B Testing">Learn A/B Testing</a></li>
<li><a href="/content_marketing/index.htm" title="Content Marketing">Content Marketing</a></li>
<li><a href="/conversion_rate_optimization/index.htm" title="Conversion Rate Optimization">Conversion Rate Optimization</a></li>
<li><a href="/digital_marketing/index.htm" title="Learn Digital Marketing">Learn Digital Marketing</a></li>
<li><a href="/email_marketing/index.htm" title="Learn Email Marketing">Learn Email Marketing</a></li>
<li><a href="/facebook_marketing/index.htm" title="Learn Facebook Marketing">Learn Facebook Marketing</a></li>
<li><a href="/google_plus/index.htm" title="Learn Google Plus Marketing">Learn Google Plus Marketing</a></li>
<li><a href="/google_tag_manager/index.htm" title="Learn Google Tag Manager">Learn Google Tag Manager</a></li>
<li><a href="/instagram_marketing/index.htm" title="Learn Instagram Marketing">Learn Instagram Marketing</a></li>
<li><a href="/mobile_marketing/index.htm" title="Learn Mobile Marketing">Learn Mobile Marketing</a></li>
<li><a href="/online_marketing/index.htm" title="Learn Online Marketing">Learn Online Marketing</a></li>
<li><a href="/pay_per_click/index.htm" title="Learn Pay Per Click">Learn Pay Per Click</a></li>
<li><a href="/pinterest_marketing/index.htm" title="Learn Pinterest Marketing">Learn Pinterest Marketing</a></li>
<li><a href="/seo/index.htm" title="Learn Search Engine Optimization">Learn SEO Techniques</a></li>
<li><a href="/social_media_marketing/index.htm" title="Learn Social Media Marketing">Learn Social Media Marketing</a></li>
<li><a href="/twitter_marketing/index.htm" title="Learn Twitter Marketing">Learn Twitter Marketing</a></li>
<li><a href="/youtube_marketing/index.htm" title="Learn Youtube Marketing">Learn Youtube Marketing</a></li>
<li><a href="/web_analytics/index.htm" title="Learn Web Analytics">Learn Web Analytics</a></li>
</ul>
<h4>Databases</h4>
<ul class="menu" id="database_tutorials" data-href="database_tutorials.htm">
<li><a href="/amazonrds/index.htm" title="Learn Amazon RDS">Learn Amazon RDS</a></li>
<li><a href="/arangodb/index.htm" title="Learn ArangoDB">Learn ArangoDB</a></li>
<li><a href="/apache_presto/index.htm" title="Learn Apache Presto">Learn Apache Presto</a></li>
<li><a href="/couchdb/index.htm" title="Learn CouchDB">Learn CouchDB</a></li>
<li><a href="/db2/index.htm" title="Learn DB2">Learn DB2</a></li>
<li><a href="/documentdb_sql/index.htm" title="Learn DocumentDB SQL">Learn DocumentDB SQL</a></li>
<li><a href="/documentdb/index.htm" title="Learn DocumentDB">Learn DocumentDB</a></li>
<li><a href="/dynamodb/index.htm" title="Learn DynamoDB">Learn DynamoDB</a></li>
<li><a href="/h2_database/index.htm" title="Learn H2 Database">Learn H2 Database</a></li>
<li><a href="/hsqldb/index.htm" title="Learn HSQLDB">Learn HSQLDB</a></li>
<li><a href="/ims_db/index.htm" title="Learn IMS DB">Learn IMS DB</a></li>
<li><a href="/mariadb/index.htm" title="Learn MariaDB">Learn MariaDB</a></li>
<li><a href="/memcached/index.htm" title="Learn Memcached">Learn Memcached</a></li>
<li><a href="/mongodb/index.htm" title="Learn MongoDB">Learn MongoDB</a></li>
<li><a href="/mysql/index.htm" title="Learn MySQL">Learn MySQL</a></li>
<li><a href="/mysqli/index.htm" title="Learn MySQLi">Learn MySQLi</a></li>
<li><a href="/neo4j/index.htm" title="Learn Neo4J">Learn Neo4J</a></li>
<li><a href="/obiee/index.htm" title="Learn OBIEE">Learn OBIEE</a></li>
<li><a href="/orientdb/index.htm" title="Learn OrientDB">Learn OrientDB</a></li>
<li><a href="/plsql/index.htm" title="Learn PL/SQL">Learn PL/SQL</a></li>
<li><a href="/postgresql/index.htm" title="Learn PostgreSQL">Learn PostgreSQL</a></li>
<li><a href="/pouchdb/index.htm" title="Learn PouchDB">Learn PouchDB</a></li>
<li><a href="/redis/index.htm" title="Learn Redis">Learn Redis</a></li>
<li><a href="/sql_certificate/index.htm" title="SQL Certification">SQL Certification</a></li>
<li><a href="/sql/index.htm" title="Learn SQL">Learn SQL</a></li>
<li><a href="/sqlite/index.htm" title="Learn SQLite">Learn SQLite</a></li>
<li><a href="/t_sql/index.htm" title="Learn T-SQL">Learn T-SQL</a></li>
</ul>
<h4>XML Technologies</h4>
<ul class="menu" id="xml_technologies" data-href="xml_technologies_tutorials.htm">
<li><a href="/aiml/index.htm" title="Learn AIML">Learn AIML</a></li>
<li><a href="/dom/index.htm" title="Learn DOM">Learn DOM</a></li>
<li><a href="/dtd/index.htm" title="Learn DTD">Learn DTD</a></li>
<li><a href="/ebxml/index.htm" title="Learn ebXML">Learn ebXML</a></li>
<li><a href="/java_xml/index.htm" title="Learn Java XML">Learn Java XML</a></li>
<li><a href="/wsdl/index.htm" title="Learn WSDL">Learn WSDL</a></li>
<li><a href="/xml-rpc/index.htm" title="Learn XML-RPC">Learn XML-RPC</a></li>
<li><a href="/xml/index.htm" title="Learn XML">Learn XML</a></li>
<li><a href="/xpath/index.htm" title="Learn XPath">Learn XPath</a></li>
<li><a href="/xquery/index.htm" title="Learn XQuery">Learn XQuery</a></li>
<li><a href="/xsd/index.htm" title="Learn XSD">Learn XSD</a></li>
<li><a href="/xslt/index.htm" title="Learn XSLT">Learn XSLT</a></li>
</ul>
<h4>Python Technologies</h4>
<ul class="menu" id="python_technologies" data-href="python_technologies_tutorials.htm">
<li><a href="/concurrency_in_python/index.htm" title="Learn Concurrency with Python">Learn Concurrency with Python</a></li>
<li><a href="/cryptography_with_python/index.htm" title="Learn Cryptography with Python">Learn Cryptography with Python</a></li>
<li><a href="/jython/index.htm" title="Jython">Learn Jython</a></li>
<li><a href="/machine_learning_with_python/index.htm" title="Learn Machine Learning with Python">Machine Learning with Python</a></li>
<li><a href="/numpy/index.htm" title="Learn Numpy">Learn Numpy</a></li>
<li><a href="/object_oriented_python/index.htm" title="Learn Object Oriented Python">Learn Object Oriented Python</a></li>
<li><a href="/pygtk/index.htm" title="Learn PyGTK">Learn PyGTK</a></li>
<li><a href="/pyqt/index.htm" title="Learn PyQt">Learn PyQt</a></li>
<li><a href="/python/index.htm" title="Learn Python">Learn Python</a></li>
<li><a href="/python3/index.htm" title="Learn Python-3">Learn Python-3</a></li>
<li><a href="/pycharm/index.htm" title="Learn PyCharm">Learn PyCharm</a></li>
<li><a href="/python_deep_learning/index.htm" title="Python Deep Learning">Python Deep Learning</a></li>
<li><a href="/python_design_patterns/index.htm" title="Python Design Pattern">Python Design Pattern</a></li>
<li><a href="/python_digital_forensics/index.htm" title="Learn Python Digital Forensics ">Learn Python Digital Forensics</a></li>
<li><a href="/python/python_data_structure.htm" title="Learn Python Data Structure">Learn Python Data Structure</a></li>
<li><a href="/python/python_data_science.htm" title="Learn Python Data Science">Learn Python Data Science</a></li>
<li><a href="/python/python_network_programming.htm" title="Learn Python Network Programming">Learn Python Network Programming</a></li>
<li><a href="/python/python_text_processing.htm" title="Learn Python Text Processing">Learn Python Text Processing</a></li>
<li><a href="/artificial_intelligence_with_python/index.htm" title="Learn Artificial Intelligence with Python">Artificial Intelligence with Python</a></li>
<li><a href="/python_forensics/index.htm" title="Learn Python Forensics">Learn Python Forensics</a></li>
<li><a href="/python_pandas/index.htm" title="Learn Python Panda">Learn Python Panda</a></li>
<li><a href="/pyspark/index.htm" title="Learn PySpark">Learn PySpark</a></li>
<li><a href="/seaborn/index.htm" title="Learn Seaborn">Learn Seaborn</a></li>
<li><a href="/scipy/index.htm" title="Learn Scipy">Learn Scipy</a></li>
<li><a href="/wxpython/index.htm" title="Learn WxPython">Learn WxPython</a></li>
</ul>
<h4>Sports</h4>
<ul class="menu" id="sports_tutorials" data-href="sports_tutorials.htm">
<li><a href="/american_football/index.htm" title="American Football">American Football</a></li>
<li><a href="/archery/index.htm" title="Archery">Archery</a></li>
<li><a href="/athletics/index.htm" title="Athletics">Athletics</a></li>
<li><a href="/australian_football/index.htm" title="Australian Football">Australian Football</a></li>
<li><a href="/badminton/index.htm" title="Badminton">Badminton</a></li>
<li><a href="/bandy/index.htm" title="Bandy">Bandy</a></li>
<li><a href="/barefoot_skiing/index.htm" title="Barefoot Skiing">Barefoot Skiing</a></li>
<li><a href="/baseball/index.htm" title="Baseball">Baseball</a></li>
<li><a href="/basketball/index.htm" title="Basketball">Basketball</a></li>
<li><a href="/beach_volleyball/index.htm" title="Beach Volleyball">Beach Volleyball</a></li>
<li><a href="/biathlon/index.htm" title="Biathlon">Biathlon</a></li>
<li><a href="/billiards/index.htm" title="Billiards">Billiards</a></li>
<li><a href="/bmx/index.htm" title="Bmx Sports">BMX</a></li>
<li><a href="/bobsleigh/index.htm" title="Bobsleigh">Bobsleigh</a></li>
<li><a href="/boxing/index.htm" title="Boxing">Boxing</a></li>
<li><a href="/brazilian_jiu_jitsu/index.htm" title="Brazilian Jiu Jitsu">Brazilian Jiu Jitsu</a></li>
<li><a href="/bull_riding/index.htm" title="Bull Riding">Bull Riding</a></li>
<li><a href="/canoeing/index.htm" title="Canoeing">Canoeing</a></li>
<li><a href="/carrom/index.htm" title="Carrom">Carrom</a></li>
<li><a href="/competitive_climbing/index.htm" title="Competitive Climbing">Competitive Climbing</a></li>
<li><a href="/competitive_dance/index.htm" title="Competitive Dance">Competitive Dance</a></li>
<li><a href="/cricket/index.htm" title="Cricket">Cricket</a></li>
<li><a href="/croquet/index.htm" title="Croquet">Croquet</a></li>
<li><a href="/curling/index.htm" title="Curling">Curling</a></li>
<li><a href="/cycling/index.htm" title="Cycling">Cycling</a></li>
<li><a href="/darts/index.htm" title="Darts">Darts</a></li>
<li><a href="/discus_throw/index.htm" title="Discus Throw">Discus Throw</a></li>
<li><a href="/diving/index.htm" title="Diving">Diving</a></li>
<li><a href="/downhill_skiing/index.htm" title="Downhill Skiing">Downhill Skiing</a></li>
<li><a href="/drag_racing/index.htm" title="Drag Racing">Drag Racing</a></li>
<li><a href="/dragon_boating/index.htm" title="Dragon Boating">Dragon Boating</a></li>
<li><a href="/equestrian/index.htm" title="Equestrian">Equestrian</a></li>
<li><a href="/fencing/index.htm" title="Fencing">Fencing</a></li>
<li><a href="/football/index.htm" title="Football">Football</a></li>
<li><a href="/formula_one/index.htm" title="Formula One">Formula One</a></li>
<li><a href="/freestyle_skiing/index.htm" title="Freestyle Skiing">Freestyle Skiing</a></li>
<li><a href="/golf/index.htm" title="Golf">Golf</a></li>
<li><a href="/gymkhana_grid/index.htm" title="Gymkhana Grid">Gymkhana Grid</a></li>
<li><a href="/hammer_throw/index.htm" title="Hammer Throw">Hammer Throw</a></li>
<li><a href="/handball/index.htm" title="Handball">Handball</a></li>
<li><a href="/high_jump/index.htm" title="High Jump">High Jump</a></li>
<li><a href="/hockey/index.htm" title="Hockey">Hockey</a></li>
<li><a href="/horse_racing/index.htm" title="Horse Racing">Horse Racing</a></li>
<li><a href="/ice_hockey/index.htm" title="Ice Hockey">Ice Hockey</a></li>
<li><a href="/ice_mountaineering/index.htm" title="Ice Mountaineering">Ice Mountaineering</a></li>
<li><a href="/indycar/index.htm" title="Indycar">Indycar</a></li>
<li><a href="/javelin_throw/index.htm" title="Javelin Throw">Javelin Throw</a></li>
<li><a href="/judo/index.htm" title="Judo">Judo</a></li>
<li><a href="/kabaddi/index.htm" title="Kabaddi">Kabaddi</a></li>
<li><a href="/karate/index.htm" title="Karate">Karate</a></li>
<li><a href="/kickboxing/index.htm" title="Kick Boxing">Kick Boxing</a></li>
<li><a href="/lacrosse/index.htm" title="Lacrosse">Lacrosse</a></li>
<li><a href="/lawn_bowling/index.htm" title="Lawn Bowling">Lawn Bowling</a></li>
<li><a href="/long_jump/index.htm" title="Long Jump">Long Jump</a></li>
<li><a href="/mixed_martial_arts/index.htm" title="Mixed Martial Arts">Mixed Martial Arts</a></li>
<li><a href="/modern_pentathlon/index.htm" title="Modern Pentathlon">Modern Pentathlon</a></li>
<li><a href="/mountain_biking/index.htm" title="Mountain Biking">Mountain Biking</a></li>
<li><a href="/nordic_combined/index.htm" title="Nordic Combined">Nordic Combined</a></li>
<li><a href="/paragliding/index.htm" title="Paragliding">Paragliding</a></li>
<li><a href="/pole_vault/index.htm" title="Pole Vault">Pole Vault</a></li>
<li><a href="/polo/index.htm" title="Polo">Polo</a></li>
<li><a href="/pool/index.htm" title="pool">Pool</a></li>
<li><a href="/racquetball/index.htm" title="Racquetball">Racquetball</a></li>
<li><a href="/racewalking/index.htm" title="Race Walking ">Race Walking</a></li>
<li><a href="/rafting/index.htm" title="Rafting">Rafting</a></li>
<li><a href="/roller_hockey/index.htm" title="Roller Hockey">Roller Hockey</a></li>
<li><a href="/roller_skating/index.htm" title="Roller Skating">Roller Skating</a></li>
<li><a href="/rally/index.htm" title="Rally">Rally</a></li>
<li><a href="/rowing/index.htm" title="Rowing">Rowing</a></li>
<li><a href="/running/index.htm" title="Running">Running</a></li>
<li><a href="/sailing/index.htm" title="Sailing">Sailing</a></li>
<li><a href="/sambo/index.htm" title="Sambo">Sambo</a></li>
<li><a href="/scootering/index.htm" title="Scootering">Scootering</a></li>
<li><a href="/sepak_takraw/index.htm" title="Sepak Takraw">Sepak Takraw</a></li>
<li><a href="/shot_put/index.htm" title="Shot Put">Shot Put</a></li>
<li><a href="/ski_jumping/index.htm" title="Ski Jumping">Ski Jumping</a></li>
<li><a href="/sky_surfing/index.htm" title="Sky Surfing">Sky Surfing</a></li>
<li><a href="/snooker/index.htm" title="Snooker">Snooker</a></li>
<li><a href="/snowboarding/index.htm" title="Snowboarding">Snowboarding</a></li>
<li><a href="/softball/index.htm" title="Softball">Softball</a></li>
<li><a href="/speed_skating/index.htm" title="Speed Skating">Speed Skating</a></li>
<li><a href="/speedway/index.htm" title="Speedway">Speedway</a></li>
<li><a href="/squash/index.htm" title="Squash">Squash</a></li>
<li><a href="/swimming/index.htm" title="Swimming">Swimming</a></li>
<li><a href="/synchronized_swimming/index.htm" title="Synchronized Swimming">Synchronized Swimming</a></li>
<li><a href="/table_tennis/index.htm" title="Table Tennis">Table Tennis</a></li>
<li><a href="/ten_pin_bowling/index.htm" title="Ten-Pin Bowling">Ten-Pin Bowling</a></li>
<li><a href="/tennis/index.htm" title="Tennis">Tennis</a></li>
<li><a href="/touring_car_racing/index.htm" title="Touring Car Racing">Touring Car Racing</a></li>
<li><a href="/trampolining/index.htm" title="Trampolining">Trampolining</a></li>
<li><a href="/trial_biking/index.htm" title="Trial Biking">Trial Biking</a></li>
<li><a href="/triathlon/index.htm" title="Triathlon">Triathlon</a></li>
<li><a href="/volleyball/index.htm" title="Volleyball">Volleyball</a></li>
<li><a href="/wakeboarding/index.htm" title="Wakeboarding">Wakeboarding</a></li>
<li><a href="/water_polo/index.htm" title="Water Polo">Water Polo</a></li>
<li><a href="/water_skiing/index.htm" title="Water Skiing">Water Skiing</a></li>
<li><a href="/weightlifting/index.htm" title="Weightlifting">Weightlifting</a></li>
<li><a href="/windsurfing/index.htm" title="Windsurfing">Windsurfing</a></li>
<li><a href="/wrestling/index.htm" title="Wrestling">Wrestling</a></li>
<li><a href="/wushu/index.htm" title="Wushu">Wushu</a></li>
</ul>
</div>
</div>
<div class="col-md-3">
<div class="featured-box" style="height: 8470px;">
<h4>Computer Programming</h4>
<ul class="menu" id="computer_programming" data-href="computer_programming_tutorials.htm">
<li><a href="/agile_data_science/index.htm" title="Learn Agile Data Science">Learn Agile Data Science</a></li>
<li><a href="/apex/index.htm" title="Learn Apex Programming">Learn Apex</a></li>
<li><a href="/arduino/index.htm" title="Learn Arduino Programming">Learn Arduino</a></li>
<li><a href="/assembly_programming/index.htm" title="Learn Assembly Programming">Learn Assembly</a></li>
<li><a href="/awk/index.htm" title="Learn Awk Programming">Learn Awk</a></li>
<li><a href="/c_standard_library/index.htm" title="C Standard Library">C Standard Library</a></li>
<li><a href="/clojure/index.htm" title="Learn Clojure">Learn Clojure</a></li>
<li><a href="/cobol/index.htm" title="Learn COBOL">Learn COBOL</a></li>
<li><a href="/computer_programming/index.htm" title="Learn Computer Programming">Learn Computer Programming</a></li>
<li><a href="/cplusplus/index.htm" title="Learn C++">Learn C++</a></li>
<li><a href="/cpp_standard_library/index.htm" title="C++ Standard Library">C++ Standard Library</a></li>
<li><a href="/cprogramming/index.htm" title="Learn C Programming">Learn C</a></li>
<li><a href="/csharp/index.htm" title="Learn C#">Learn C#</a></li>
<li><a href="/dart_programming/index.htm" title="Learn Dart Programming">Learn Dart</a></li>
<li><a href="/d_programming/index.htm" title="Learn D Programming">Learn D</a></li>
<li><a href="/data_structures_algorithms/index.htm" title="Learn Data Structure &amp; Algorithms">Data Structure &amp; Algorithms</a></li>
<li><a href="/elixir/index.htm" title="Learn Elixir">Learn Elixir</a></li>
<li><a href="/erlang/index.htm" title="Learn Erlang">Learn Erlang</a></li>
<li><a href="/euphoria/index.htm" title="Learn Euphoria">Learn Euphoria</a></li>
<li><a href="/fortran/index.htm" title="Learn Fortran">Learn Fortran</a></li>
<li><a href="/fsharp/index.htm" title="Learn F#">Learn F#</a></li>
<li><a href="/go/index.htm" title="Learn Go Programing">Learn Go Programing</a></li>
<li><a href="/groovy/index.htm" title="Learn Groovy Programing">Learn Groovy</a></li>
<li><a href="/haskell/index.htm" title="Learn Haskell">Learn Haskell</a></li>
<li><a href="/inter_process_communication/index.htm" title="Learn Inter Process Communication">Inter Process Communication</a></li>
<li><a href="/java/index.htm" title="Learn Java">Learn Java</a></li>
<li><a href="/java8/index.htm" title="Learn Java-8">Learn Java-8</a></li>
<li><a href="/java_beanutils/index.htm" title="Learn Java Bean Utils">Learn Java Bean Utils</a></li>
<li><a href="/jcl/index.htm" title="Learn JCL">Learn JCL</a></li>
<li><a href="/kdbplus/index.htm" title="Learn KDB+">Learn KDB+</a></li>
<li><a href="/learn_c_by_examples/index.htm" title="Learn C by Examples">Learn C by Examples</a></li>
<li><a href="/lisp/index.htm" title="Learn LISP">Learn LISP</a></li>
<li><a href="/lolcode/index.htm" title="Learn LOLCODE">Learn LOLCODE</a></li>
<li><a href="/logo/index.htm" title="Learn LOGO">Learn LOGO</a></li>
<li><a href="/matlab/index.htm" title="Learn MATLAB">Learn MATLAB</a></li>
<li><a href="/nodejs/index.htm" title="Learn Node.js">Learn Node.js</a></li>
<li><a href="/objective_c/index.htm" title="Learn Objective C Programming">Learn Objective C</a></li>
<li><a href="/oauth2.0/index.htm" title="Learn OAuth2.0">Learn OAuth2.0</a></li>
<li><a href="/pascal/index.htm" title="Learn Pascal Programming">Learn Pascal</a></li>
<li><a href="/parrot/index.htm" title="Learn Parrot">Learn Parrot</a></li>
<li><a href="/perl/perl_cgi.htm" title="Learn CGI with PERL">Learn CGI with PERL</a></li>
<li><a href="/r/index.htm" title="Learn R Programming">Learn R Programming</a></li>
<li><a href="/rexx/index.htm" title="Learn Rexx Programming">Learn Rexx Programming</a></li>
<li><a href="/scala/index.htm" title="Learn Scala">Learn Scala</a></li>
<li><a href="/socket.io/index.htm" title="Learn Socket.io">Learn Socket.io</a></li>
<li><a href="/swift/index.htm" title="Learn Swift Programming">Learn Swift</a></li>
<li><a href="/vb.net/index.htm" title="Learn vb.net">Learn VB.Net</a></li>
<li><a href="/vba/index.htm" title="Learn VBA">Learn VBA</a></li>
</ul>
<h4>Big Data &amp; Analytics</h4>
<ul class="menu" id="big_data_analytics" data-href="big_data_tutorials.htm">
<li><a href="/advanced_excel_charts/index.htm" title="Learn Advanced Excel Charts">Advanced Excel Charts</a></li>
<li><a href="/advanced_excel_functions/index.htm" title="Learn Advanced Excel Functions">Advanced Excel Functions</a></li>
<li><a href="/apache_flume/index.htm" title="Learn Apache Flume">Learn Apache Flume</a></li>
<li><a href="/apache_kafka/index.htm" title="Learn Apache Kafka">Learn Apache Kafka</a></li>
<li><a href="/apache_pig/index.htm" title="Learn Apache Pig">Learn Apache Pig</a></li>
<li><a href="/apache_solr/index.htm" title="Learn Apache Solr">Learn Apache Solr</a></li>
<li><a href="/apache_spark/index.htm" title="Learn Apache Spark">Learn Apache Spark</a></li>
<li><a href="/apache_storm/index.htm" title="Learn Apache Storm">Learn Apache Storm</a></li>
<li><a href="/apache_tajo/index.htm" title="Learn Apache Tajo">Learn Apache Tajo</a></li>
<li><a href="/avro/index.htm" title="Learn Avro">Learn Avro</a></li>
<li><a href="/big_data_analytics/index.htm" title="Learn Big Data Analytics">Learn Big Data Analytics</a></li>
<li><a href="/cassandra/index.htm" title="Learn Cassandra">Learn Cassandra</a></li>
<li><a href="/cognos/index.htm" title="Learn Cognos">Learn Cognos</a></li>
<li><a href="/couchdb/index.htm" title="Learn CouchDB">Learn CouchDB</a></li>
<li><a href="/dax_functions/index.htm" title="Learn Dax Functions">Learn Dax Functions</a></li>
<li><a href="/data_modeling_with_dax/index.htm" title="Learn Data Modeling with DAX">Learn Data Modeling with DAX</a></li>
<li><a href="/excel_dashboards/index.htm" title="Learn Excel Dashboard">Learn Excel Dashboard</a></li>
<li><a href="/excel_dax/index.htm" title="Learn Excel Dax">Learn Excel Dax</a></li>
<li><a href="/excel_data_analysis/index.htm" title="Learn Excel Data Analysis">Learn Excel Data Analysis</a></li>
<li><a href="/excel_pivot_tables/index.htm" title="Learn Excel Pivot Tables">Learn Excel Pivot Tables</a></li>
<li><a href="/excel_macros/index.htm" title="Learn Excel Macros">Learn Excel Macros</a></li>
<li><a href="/excel_power_pivot/index.htm" title="Learn Excel Power Pivot">Learn Excel Power Pivot</a></li>
<li><a href="/excel_power_view/index.htm" title="Learn Excel Power View">Learn Excel Power View</a></li>
<li><a href="/googlecharts/index.htm" title="Learn Google Charts">Learn Google Charts</a></li>
<li><a href="/hadoop/index.htm" title="Learn Hadoop">Learn Hadoop</a></li>
<li><a href="/hbase/index.htm" title="Learn HBase">Learn HBase</a></li>
<li><a href="/hcatalog/index.htm" title="Learn HCatalog">Learn HCatalog</a></li>
<li><a href="/highcharts/index.htm" title="Learn Highcharts">Learn Highcharts</a></li>
<li><a href="/hive/index.htm" title="Learn Hive">Learn Hive</a></li>
<li><a href="/impala/index.htm" title="Learn Apache Impala">Learn Apache Impala</a></li>
<li><a href="/jfreechart/index.htm" title="Learn JFreeChart">Learn JFreeChart</a></li>
<li><a href="/mahout/index.htm" title="Learn Mahout">Learn Mahout</a></li>
<li><a href="/map_reduce/index.htm" title="Learn Map Reduce">Learn Map Reduce</a></li>
<li><a href="/pentaho/index.htm" title="Learn Penthaho">Learn Pentaho</a></li>
<li><a href="/power_bi/index.htm" title="Learn Power BI">Learn Power BI</a></li>
<li><a href="/qlikview/index.htm" title="Learn QlikView">Learn QlikView</a></li>
<li><a href="/r/index.htm" title="Learn R Programming">Learn R Programming</a></li>
<li><a href="/sas/index.htm" title="Learn SAS">Learn SAS</a></li>
<li><a href="/spark_sql/index.htm" title="Learn Spark SQL">Learn Spark SQL</a></li>
<li><a href="/sqoop/index.htm" title="Learn Sqoop">Learn Sqoop</a></li>
<li><a href="/statistics/index.htm" title="Learn Statistics">Learn Statistics</a></li>
<li><a href="/tableau/index.htm" title="Learn Tableau">Learn Tableau</a></li>
<li><a href="/teradata/index.htm" title="Learn Teradata">Learn Teradata</a></li>
<li><a href="/zookeeper/index.htm" title="Learn Zookeeper">Learn Zookeeper</a></li>
</ul>
<h4>Mainframe Development</h4>
<ul class="menu" id="mainfarme" data-href="mainframe_tutorials.htm">
<li><a href="/cics/index.htm" title="Learn CICS">Learn CICS</a></li>
<li><a href="/cobol/index.htm" title="Learn COBOL">Learn COBOL</a></li>
<li><a href="/db2/index.htm" title="Learn DB2">Learn DB2</a></li>
<li><a href="/ims_db/index.htm" title="Learn IMS DB">Learn IMS DB</a></li>
<li><a href="/jcl/index.htm" title="Learn JCL">Learn JCL</a></li>
<li><a href="/vsam/index.htm" title="Learn VSAM">Learn VSAM</a></li>
</ul>
<h4>Microsoft Technologies</h4>
<ul class="menu" id="microsoft_technologies" data-href="microsoft_technologies_tutorials.htm">
<li><a href="/advanced_excel/index.htm" title="Learn Advanced Excel">Learn Advanced Excel</a></li>
<li><a href="/asp.net_core/index.htm" title="Learn ASP.Net Core">Learn ASP.Net Core</a></li>
<li><a href="/asp.net_mvc/index.htm" title="Learn ASP.Net MVC">Learn ASP.Net MVC</a></li>
<li><a href="/asp.net_wp/index.htm" title="Learn ASP.Net WP">Learn ASP.Net WP</a></li>
<li><a href="/asp.net/index.htm" title="Learn ASP.Net">Learn ASP.Net</a></li>
<li><a href="/dotnet_core/index.htm" title="Learn Dot.Net Core">Learn Dot.Net Core</a></li>
<li><a href="/batch_script/index.htm" title="Learn Batch Script">Learn Batch Script</a></li>
<li><a href="/csharp/index.htm" title="Learn C#">Learn C#</a></li>
<li><a href="/entity_framework/index.htm" title="Learn Entity Framework">Learn Entity Framework</a></li>
<li><a href="/excel_charts/index.htm" title="Learn Excel Charts">Learn Excel Charts</a></li>
<li><a href="/excel/index.htm" title="Learn Excel">Learn Excel</a></li>
<li><a href="/fsharp/index.htm" title="Learn F#">Learn F#</a></li>
<li><a href="/linq/index.htm" title="Learn LinQ">Learn LinQ</a></li>
<li><a href="/mfc/index.htm" title="Learn MFC">Learn MFC</a></li>
<li><a href="/microsoft_azure/index.htm" title="Learn Microsoft Azure">Learn Microsoft Azure</a></li>
<li><a href="/microsoft_crm/index.htm" title="Learn Microsoft CRM">Learn Microsoft CRM</a></li>
<li><a href="/microsoft_expression_web/index.htm" title="Learn Microsoft Expression Web">Microsoft Expression Web</a></li>
<li><a href="/microsoft_visio/index.htm" title="Learn Microsoft Visio">Microsoft Visio</a></li>
<li><a href="/microstrategy/index.htm" title="Learn MicroStrategy">Learn MicroStrategy</a></li>
<li><a href="/ms_access/index.htm" title="Learn Microsoft Access">Learn Microsoft Access</a></li>
<li><a href="/ms_project/index.htm" title="Learn Microsoft Project">Learn Microsoft Project</a></li>
<li><a href="/ms_sql_server/index.htm" title="Learn MS SQl Server">Learn MS SQl Server</a></li>
<li><a href="/mvvm/index.htm" title="Learn MVVM">Learn MVVM</a></li>
<li><a href="/nhibernate/index.htm" title="Learn NHibernate">Learn NHibernate</a></li>
<li><a href="/powerpoint/index.htm" title="Learn Powerpoint">Learn Powerpoint</a></li>
<li><a href="/powershell/index.htm" title="Learn Powershell">Learn Powershell</a></li>
<li><a href="/sharepoint/index.htm" title="Learn Sharepoint">Learn Sharepoint</a></li>
<li><a href="/silverlight/index.htm" title="Learn Silverlight">Learn Silverlight</a></li>
<li><a href="/vb.net/index.htm" title="Learn vb.net">Learn VB.Net</a></li>
<li><a href="/vba/index.htm" title="Learn VBA">Learn VBA</a></li>
<li><a href="/wcf/index.htm" title="Learn WCF">Learn WCF</a></li>
<li><a href="/windows_server_2012/index.htm" title="Learn Windows Server 12">Windows Server 12</a></li>
<li><a href="/windows10_development/index.htm" title="Learn Windows 10 Development">Windows 10 Development</a></li>
<li><a href="/windows10/index.htm" title="Learn Windows 10">Learn Windows 10</a></li>
<li><a href="/word/index.htm" title="Learn Word">Learn Word</a></li>
<li><a href="/wpf/index.htm" title="Learn WPF">Learn WPF</a></li>
<li><a href="/xaml/index.htm" title="Learn XAML">Learn XAML</a></li>
</ul>
<h4>Mobile Development</h4>
<ul class="menu" id="mobile_development" data-href="mobile_development_tutorials.htm">
<li><a href="/android/index.htm" title="Learn Android">Learn Android</a></li>
<li><a href="/aurelia/index.htm" title="Learn Aurelia">Learn Aurelia</a></li>
<li><a href="/cordova/index.htm" title="Learn Cordova">Learn Cordova</a></li>
<li><a href="/ionic/index.htm" title="Learn Ionic">Learn Ionic</a></li>
<li><a href="/ios/index.htm" title="Learn iOS">Learn iOS</a></li>
<li><a href="/ios_development_with_swift2/index.htm" title="iOS Development with Swift2">iOS Development with Swift2</a></li>
<li><a href="/jquery_mobile/index.htm" title="jquery Mobile">Learn jQuery Mobile</a></li>
<li><a href="/kotlin/index.htm" title="Learn Kotlin">Learn Kotlin</a></li>
<li><a href="/meteor/index.htm" title="Learn Meteor">Learn Meteor</a></li>
<li><a href="/phonegap/index.htm" title="Learn PhoneGap">Learn PhoneGap</a></li>
<li><a href="/react_native/index.htm" title="Learn React Native">Learn React Native</a></li>
<li><a href="/sl4a/index.htm" title="Learn SL4A">Learn SL4A</a></li>
<li><a href="/xamarin/index.htm" title="Learn Xamarin">Learn Xamarin</a></li>
</ul>
<h4>Telecom</h4>
<ul class="menu" id="telecom" data-href="telecom_tutorials.htm">
<li><a href="/5g/index.htm" title="Learn 5G">Learn 5G</a></li>
<li><a href="/cdma/index.htm" title="Learn CDMA">Learn CDMA</a></li>
<li><a href="/ftth/index.htm" title="Learn FTTH">Learn FTTH</a></li>
<li><a href="/gprs/index.htm" title="Learn GPRS">Learn GPRS</a></li>
<li><a href="/gsm/index.htm" title="Learn GSM">Learn GSM</a></li>
<li><a href="/i-mode/index.htm" title="Learn i-mode">Learn i-Mode</a></li>
<li><a href="/lte/index.htm" title="Learn LTE">Learn LTE</a></li>
<li><a href="/ngn/index.htm" title="Learn NGN">Learn NGN</a></li>
<li><a href="/session_initiation_protocol/index.htm" title="Learn Session Initiation Protocol">Learn SIP</a></li>
<li><a href="/telecom-billing/index.htm" title="Learn Telecom Billing">Learn Telecom Billing</a></li>
<li><a href="/telecommunication_switching_systems_and_networks/index.htm" title="Telecommunication Switching Systems and Networks (TSSN)">Telecommunication Switching Systems and Networks (TSSN)</a></li>
<li><a href="/umts/index.htm" title="Learn UMTS">Learn UMTS</a></li>
<li><a href="/wap/index.htm" title="Learn WAP">Learn WAP</a></li>
<li><a href="/wi-fi/index.htm" title="Learn Wi-Fi">Learn Wi-Fi</a></li>
<li><a href="/wimax/index.htm" title="Learn WiMAX">Learn WiMAX</a></li>
<li><a href="/wml/index.htm" title="Learn WML">Learn WML</a></li>
</ul>
<h4>Exams Syllabus</h4>
<ul class="menu" id="exams_syllabus" data-href="exams_syllabus.htm">
<li><a href="/bihar_psc_syllabus/index.htm" title="Learn Bihar PSC Syllabus">Bihar PSC Syllabus</a></li>
<li><a href="/cbse_syllabus/index.htm" title="Learn CBSE Syllabus">CBSE Syllabus</a></li>
<li><a href="/cds_syllabus/index.htm" title="Learn CDS Syllabus">CDS Syllabus</a></li>
<li><a href="/chhattisgarh_psc_syllabus/index.htm" title="Learn Chhattisgarh PSC Syllabus">Chhattisgarh PSC Syllabus</a></li>
<li><a href="/civil_services_exam_syllabus/index.htm" title="Learn Civil Services Exam Syllabus">Civil Services Exam Syllabus</a></li>
<li><a href="/gate_syllabus/index.htm" title="Learn GATE Syllabus">GATE Exams Syllabus</a></li>
<li><a href="/ibps_po_syllabus/index.htm" title="Learn IBPS PO Syllabus">IBPS PO Syllabus</a></li>
<li><a href="/madhya_pradesh_psc_syllabus/index.htm" title="Learn Madhya Pradesh PSC Syllabus">Madhya Pradesh PSC Syllabus</a></li>
<li><a href="/nda_syllabus/index.htm" title="Learn NDA Syllabus">NDA Syllabus</a></li>
<li><a href="/rajasthan_psc_syllabus/index.htm" title="Learn Rajasthan PSC Syllabus">Rajasthan PSC Syllabus</a></li>
<li><a href="/sbi_po_syllabus/index.htm" title="Learn SBI PO Syllabus">SBI PO Syllabus</a></li>
<li><a href="/uttar_pradesh_psc_syllabus/index.htm" title="Learn Uttar Pradesh PSC Syllabus">Uttar Pradesh PSC Syllabus</a></li>
</ul>
<h4>UPSC IAS Exams</h4>
<ul class="menu" id="upsc_ias_exams" data-href="upsc_ias_exams.htm">
<li><a href="/biology_part1/index.htm" title="Biology Part 1">Biology Part 1</a></li>
<li><a href="/biology_part2/index.htm" title="Biology Part 2">Biology Part 2</a></li>
<li><a href="/chemistry_part1/index.htm" title="Chemistry Part 1">Chemistry Part 1</a></li>
<li><a href="/chemistry_part2/index.htm" title="Chemistry Part 2">Chemistry Part 2</a></li>
<li><a href="/physics_part1/index.htm" title="Physics Part 1">Physics Part 1</a></li>
<li><a href="/physics_part2/index.htm" title="Physics Part 2">Physics Part 2</a></li>
<li><a href="/current_affairs_2016/index.htm" title="Current Affairs 2016">Current Affairs 2016</a></li>
<li><a href="/current_affairs_2017/index.htm" title="Current Affairs 2017">Current Affairs 2017</a></li>
<li><a href="/current_affairs_2018/index.htm" title="Current Affairs 2018">Current Affairs 2018</a></li>
<li><a href="/quantitative_aptitude/index.htm" title="Quantitative Aptitude">Quantitative Aptitude Tutorial</a></li>
<li><a href="/geography/index.htm" title="Geography Tutorial">Geography Tutorial</a></li>
<li><a href="/indian_economy/index.htm" title="Indian Economy Tutorial">Indian Economy Tutorial</a></li>
<li><a href="/indian_polity/index.htm" title="Indian Polity Tutorial">Indian Polity Tutorial</a></li>
<li><a href="/ancient_indian_history/index.htm" title="Ancient Indian History Tutorial">Ancient Indian History</a></li>
<li><a href="/modern_indian_history/index.htm" title="Modern Indian History Tutorial">Modern Indian History</a></li>
<li><a href="/medieval_indian_history/index.htm" title="Medieval Indian History Tutorial">Medieval Indian History</a></li>
<li><a href="/general_knowledge/index.htm" title="General Knowledge Tutorial">General Knowledge Tutorial</a></li>
<li><a href="/verbal_ability/index.htm" title="Verbal Ability Tutorial">Verbal Ability Tutorial</a></li>
<li><a href="/reasoning/index.htm" title="Reasoning Tutorial">Reasoning Tutorial</a></li>
</ul>
<h4>Monuments</h4>
<ul class="menu" id="famous_monuments" data-href="famous_monuments.htm">
<li><a href="/adhai_din_ka_jhonpra/index.htm" title="Adhai Din Ka Jhonpra">Adhai Din Ka Jhonpra</a></li>
<li><a href="/aihole/index.htm" title="Aihole Temples">Aihole Temples</a></li>
<li><a href="/ajanta_caves/index.htm" title="Ajanta Caves">Ajanta Caves</a></li>
<li><a href="/agra_fort/index.htm" title="Agra Fort">Agra Fort</a></li>
<li><a href="/aguada_fort/index.htm" title="Aguada Fort">Aguada Fort</a></li>
<li><a href="/akbars_tomb/index.htm" title="Akbars Tomb">Akbars Tomb</a></li>
<li><a href="/amer_fort/index.htm" title="Amer Fort">Amer Fort</a></li>
<li><a href="/badami_caves/index.htm" title="Badami Caves">Badami Caves</a></li>
<li><a href="/bandel_church/index.htm" title="Bandel Church">Bandel Church</a></li>
<li><a href="/basilica_of_bom_jesus_church/index.htm" title="Basilica of Bom Jesus Church">Basilica of Bom Jesus Church</a></li>
<li><a href="/bhadra_fort/index.htm" title="Bhadra Fort">Bhadra Fort</a></li>
<li><a href="/bara_imambara/index.htm" title="Bara Imambara">Bara Imambara</a></li>
<li><a href="/bibi_ka_maqbara/index.htm" title="Bibi ka Maqbara">Bibi ka Maqbara</a></li>
<li><a href="/bijapur_fort/index.htm" title="Bijapur Fort">Bijapur Fort</a></li>
<li><a href="/brihadeeswara_temple/index.htm" title="Brihadeeswara Temple">Brihadeeswara Temple</a></li>
<li><a href="/chittorgarh_fort/index.htm" title="Chittorgarh Fort">Chittorgarh Fort</a></li>
<li><a href="/chunar_fort/index.htm" title="Chunar Fort">Chunar Fort</a></li>
<li><a href="/diu_fort/index.htm" title="Diu Fort">Diu Fort</a></li>
<li><a href="/fatehpur_sikri_fort/index.htm" title="Fatehpur Sikri Fort">Fatehpur Sikri Fort</a></li>
<li><a href="/feroz_shah_kotla_fort/index.htm" title="Feroz Shah Kotla Fort">Feroz Shah Kotla Fort</a></li>
<li><a href="/golconda_fort/index.htm" title="Golconda Fort">Golconda Fort</a></li>
<li><a href="/golden_temple/index.htm" title="Golden Temple">Golden Temple</a></li>
<li><a href="/gwalior_fort/index.htm" title="Gwalior Fort">Gwalior Fort</a></li>
<li><a href="/jahanpanah_fort/index.htm" title="Jahanpanah  Fort">Jahanpanah Fort</a></li>
<li><a href="/jagannath_temple/index.htm" title="Jagannath  Temple">Jagannath Temple</a></li>
<li><a href="/jaigarh_fort/index.htm" title="Jaigarh  Fort">Jaigarh Fort</a></li>
<li><a href="/jaisalmer_fort/index.htm" title="Jaisalmer  Fort">Jaisalmer Fort</a></li>
<li><a href="/junagarh_fort/index.htm" title="Junagarh  Fort">Junagarh Fort</a></li>
<li><a href="/kumbhalgarh_fort/index.htm" title="Kumbhalgarh  Fort">Kumbhalgarh Fort</a></li>
<li><a href="/lohagarh_fort/index.htm" title="Lohagarh  Fort">Lohagarh Fort</a></li>
<li><a href="/mehrangarh_fort/index.htm" title="Mehrangarh Fort">Mehrangarh Fort</a></li>
<li><a href="/purana_qila/index.htm" title="Purana Qila">Purana Qila</a></li>
<li><a href="/ranthambore_fort/index.htm" title="Ranthambore Fort">Ranthambore Fort</a></li>
<li><a href="/red_fort/index.htm" title="Red Fort">Red Fort</a></li>
<li><a href="/rohtasgarh_fort/index.htm" title="Rohtasgarh Fort">Rohtasgarh Fort</a></li>
<li><a href="/salimgarh_fort/index.htm" title="Salimgarh Fort">Salimgarh Fort</a></li>
<li><a href="/taj_mahal/index.htm" title="Taj Mahal">Taj Mahal</a></li>
</ul>
</div>
</div>
<div class="col-md-3">
<div class="featured-box" style="height: 8470px;">
<h4>Web Development</h4>
<ul class="menu" id="web_development" data-href="web_development_tutorials.htm">
<li><a href="/ajax/index.htm" title="Learn Ajax">Learn Ajax</a></li>
<li><a href="/amazon_web_services/index.htm" title="Learn Amazon Web Services">Learn Amazon Web Services</a></li>
<li><a href="/angular_material/index.htm" title="Learn Angular Material">Learn Angular Material</a></li>
<li><a href="/angular2/index.htm" title="Learn Angular2">Learn Angular2</a></li>
<li><a href="/angular4/index.htm" title="Learn Angular4">Learn Angular4</a></li>
<li><a href="/angularjs/index.htm" title="Learn AngularJS">Learn AngularJS</a></li>
<li><a href="/apache_tapestry/index.htm" title="Learn Apache Tapestry">Learn Apache Tapestry</a></li>
<li><a href="/asp.net/index.htm" title="Learn ASP.Net">Learn ASP.Net</a></li>
<li><a href="/aurelia/index.htm" title="Learn Aurelia">Learn Aurelia</a></li>
<li><a href="/axure_rp/index.htm" title="Learn Axure RP">Learn Axure RP</a></li>
<li><a href="/backbonejs/index.htm" title="Learn BackboneJS">Learn BackboneJS</a></li>
<li><a href="/bootstrap/index.htm" title="bootstrap">Learn Bootstrap</a></li>
<li><a href="/bulma/index.htm" title="Bulma">Learn Bulma</a></li>
<li><a href="/cakephp/index.htm" title="Learn CakePHP">Learn CakePHP</a></li>
<li><a href="/cherrypy/index.htm" title="Learn CherryPy">Learn CherryPy</a></li>
<li><a href="/codeigniter/index.htm" title="Learn Codeigniter">Learn Codeigniter</a></li>
<li><a href="/coffeescript/index.htm" title="Learn CoffeeScript">Learn CoffeeScript</a></li>
<li><a href="/cpanel/index.htm" title="Learn CPanel">Learn CPanel</a></li>
<li><a href="/css/index.htm" title="Learn CSS">Learn CSS</a></li>
<li><a href="/css_buttons/index.htm" title="Learn CSS Buttons">Learn CSS Buttons</a></li>
<li><a href="/d3js/index.htm" title="Learn D3JS">Learn D3JS</a></li>
<li><a href="/dcjs/index.htm" title="Learn DC.js">Learn DC.js</a></li>
<li><a href="/django/index.htm" title="Learn Django">Learn Django</a></li>
<li><a href="/drupal/index.htm" title="Learn Drupal">Learn Drupal</a></li>
<li><a href="/electron/index.htm" title="Learn Electron">Learn Electron</a></li>
<li><a href="/emberjs/index.htm" title="Learn EmberJS">Learn EmberJS</a></li>
<li><a href="/expressjs/index.htm" title="Learn ExpressJS">Learn ExpressJS</a></li>
<li><a href="/extjs/index.htm" title="Learn ExtJS">Learn ExtJS</a></li>
<li><a href="/es6/index.htm" title="Learn ES6">Learn ES6</a></li>
<li><a href="/firebase/index.htm" title="Learn Firebase">Learn Firebase</a></li>
<li><a href="/flask/index.htm" title="Learn Flask">Learn Flask</a></li>
<li><a href="/flex/index.htm" title="Learn Adobe Flex">Learn Adobe Flex</a></li>
<li><a href="/flexbox/index.htm" title="Learn Flexbox">Learn Flexbox</a></li>
<li><a href="/foundation/index.htm" title="Learn Foundation">Learn Foundation</a></li>
<li><a href="/framework7/index.htm" title="Learn Framework7">Learn Framework7</a></li>
<li><a href="/fuelphp/index.htm" title="Learn FuelPHP">Learn FuelPHP</a></li>
<li><a href="/google_maps/index.htm" title="Learn Google Maps">Learn Google Maps</a></li>
<li><a href="/grav/index.htm" title="Learn Grav">Learn Grav</a></li>
<li><a href="/grunt/index.htm" title="Learn Grunt">Learn Grunt</a></li>
<li><a href="/gulp/index.htm" title="Learn Grav">Learn Gulp</a></li>
<li><a href="/gwt/index.htm" title="Learn Google Web Toolkit">Learn GWT</a></li>
<li><a href="/gwt_googlecharts/index.htm" title="Learn GWT Google Charts">Learn GWT Google Charts</a></li>
<li><a href="/gwt_highcharts/index.htm" title="Learn GWT High Charts">Learn GWT High Charts</a></li>
<li><a href="/highcharts/index.htm" title="Learn Highcharts">Learn Highcharts</a></li>
<li><a href="/html/index.htm" title="Learn HTML">Learn HTML</a></li>
<li><a href="/html5/index.htm" title="Learn HTML5">Learn HTML5</a></li>
<li><a href="/http/index.htm" title="Learn HTTP">Learn HTTP</a></li>
<li><a href="/jasminejs/index.htm" title="Learn JasmineJS">Learn JasmineJS</a></li>
<li><a href="/javascript/index.htm" title="Learn JavaScript">Learn JavaScript</a></li>
<li><a href="/joomla/index.htm" title="Learn Joomla">Learn Joomla</a></li>
<li><a href="/jquery/index.htm" title="jquery">Learn jQuery</a></li>
<li><a href="/jqueryui/index.htm" title="jqueryUI">Learn jQueryUI</a></li>
<li><a href="/jsf/index.htm" title="Learn JSF">Learn JSF</a></li>
<li><a href="/knockoutjs/index.htm" title="Learn KnockoutJS">Learn KnockoutJS</a></li>
<li><a href="/koajs/index.htm" title="Learn KoaJS">Learn KoaJS</a></li>
<li><a href="/laravel/index.htm" title="Learn Laravel">Learn Laravel</a></li>
<li><a href="/less/index.htm" title="Learn LESS">Learn LESS</a></li>
<li><a href="/leafletjs/index.htm" title="Learn LeafletJS">Learn LeafletJS</a></li>
<li><a href="/mathml/index.htm" title="Learn MathML">Learn MathML</a></li>
<li><a href="/magento/index.htm" title="Learn Magento Framework">Learn Magento Framework</a></li>
<li><a href="/materialdesignlite/index.htm" title="Learn Material Design Lite">Material Design Lite</a></li>
<li><a href="/materialize/index.htm" title="Learn Materialize">Learn Materialize</a></li>
<li><a href="/momentjs/index.htm" title="Learn Momentjs">Learn Momentjs</a></li>
<li><a href="/mootools/index.htm" title="Learn Mootools">Learn Mootools</a></li>
<li><a href="/mvc_framework/index.htm" title="Learn MVC Framework">Learn MVC Framework</a></li>
<li><a href="/parallax_scrolling_in_web_design/index.htm" title="Learn Srallax Scrolling">Learn Parallax Scrolling</a></li>
<li><a href="/phantomjs/index.htm" title="Learn PhantomJS">Learn PhantomJS</a></li>
<li><a href="/phalcon/index.htm" title="Learn Phalcon">Learn Phalcon</a></li>
<li><a href="/prototype/index.htm" title="Learn Prototype Framework">Learn Prototype</a></li>
<li><a href="/polymer/index.htm" title="Learn Polymer Framework">Learn Polymer</a></li>
<li><a href="/purecss/index.htm" title="Learn Pure.CSS">Learn Pure.CSS</a></li>
<li><a href="/richfaces/index.htm" title="Learn RichFaces">Learn RichFaces</a></li>
<li><a href="/reactjs/index.htm" title="Learn ReactJS">Learn ReactJS</a></li>
<li><a href="/requirejs/index.htm" title="Learn RequireJS">Learn RequireJS</a></li>
<li><a href="/restful/index.htm" title="RESTful Web Services">RESTful Web Services</a></li>
<li><a href="/ruby-on-rails-2.1/index.htm" title="Learn Ruby on Rails-2.1">Learn Ruby on Rails-2.1</a></li>
<li><a href="/ruby-on-rails/index.htm" title="Learn Ruby on Rails">Learn Ruby on Rails</a></li>
<li><a href="/sass/index.htm" title="Sass Tutorial">Learn SASS</a></li>
<li><a href="/sencha_touch/index.htm" title="Learn Sencha Touch">Learn Sencha Touch</a></li>
<li><a href="/script.aculo.us/index.htm" title="script.aculo.us">Learn script.aculo.us</a></li>
<li><a href="/svg/index.htm" title="Learn SVG">Learn SVG</a></li>
<li><a href="/symfony/index.htm" title="Learn Symfony">Learn Symfony</a></li>
<li><a href="/turbogears/index.htm" title="Learn TurboGears">Learn TurboGears</a></li>
<li><a href="/typescript/index.htm" title="Learn Typescript">Learn Typescript</a></li>
<li><a href="/vaadin/index.htm" title="Learn Vaadin">Learn Vaadin</a></li>
<li><a href="/vbscript/index.htm" title="Learn VBScript">Learn VBScript</a></li>
<li><a href="/vuejs/index.htm" title="Learn VueJS">Learn VueJS</a></li>
<li><a href="/w3css/index.htm" title="Learn W3CSS">Learn W3CSS</a></li>
<li><a href="/web_developers_guide/index.htm" title="Web Developers Guide">Web Developer's Guide</a></li>
<li><a href="/web_icons/index.htm" title="Learn Web Icons">Learn Web Icons</a></li>
<li><a href="/web2py/index.htm" title="Learn Web2Py">Learn Web2Py</a></li>
<li><a href="/webgl/index.htm" title="Learn WebGL">Learn WebGL</a></li>
<li><a href="/webrtc/index.htm" title="Learn WebRTC">Learn WebRTC</a></li>
<li><a href="/webservices/index.htm" title="Learn Web Services">Learn Web Services</a></li>
<li><a href="/website_development/index.htm" title="Learn Website Development">Learn Website Development</a></li>
<li><a href="/websockets/index.htm" title="Learn Web Sockets">Learn Web Sockets</a></li>
<li><a href="/wordpress/index.htm" title="Learn Wordpress">Learn Wordpress</a></li>
<li><a href="/xhtml/index.htm" title="Learn XHTML">Learn XHTML</a></li>
<li><a href="/yii/index.htm" title="Learn Yii">Learn Yii</a></li>
<li><a href="/zend_framework/index.htm" title="Learn Zend Framework">Learn Zend Framework</a></li>
</ul>
<h4>Mathematics</h4>
<ul class="menu" id="mathematics" data-href="maths_tutorials.htm">
<li><a href="/3d_figures_and_volumes/index.htm" title="3D Figures and Volumes">3D Figures and Volumes</a></li>
<li><a href="/angles_lines_and_polygons/index.htm" title="Angles Lines and Polygons">Angles Lines and Polygons</a></li>
<li><a href="/add_and_subtract_fractions/index.htm" title="Add and Subtract Fractions">Add and Subtract Fractions</a></li>
<li><a href="/add_and_subtract_whole_numbers/index.htm" title="Add and Subtract Whole Numbers">Add and Subtract Whole Numbers</a></li>
<li><a href="/adding_and_subtracting_decimals/index.htm" title="Add and Subtract Decimal Numbers">Add and Subtract Decimal Numbers</a></li>
<li><a href="/circumference_and_area_of_circles/index.htm" title="Circumference and Area of Circles">Circumference and Area of Circles</a></li>
<li><a href="/converting_between_fractions_decimals_percents/index.htm" title="Convert between Fraction, Decimal &amp; Percents">Convert between Fraction, Decimal &amp; Percents</a></li>
<li><a href="/converting_fractions_to_decimals/index.htm" title="Converting Fractions to Decimals">Converting Fractions to Decimals</a></li>
<li><a href="/converting_decimals_to_fractions/index.htm" title="Converting Decimals to Fractions">Converting Decimals to Fractions</a></li>
<li><a href="/equations_and_applications/index.htm" title="Equations and Applications">Equations and Applications</a></li>
<li><a href="/equivalent_plotting_ordering_fractions/index.htm" title="Equivalent Plotting Ordering">Equivalent Plotting Ordering</a></li>
<li><a href="/evaluating_and_writing_expressions/index.htm" title="Evaluating and Writing Expressions">Evaluating and Writing Expressions</a></li>
<li><a href="/finding_percents_and_percent_equations/index.htm" title="Finding Percents and Percent Equations">Finding Percents and Percent Equation</a></li>
<li><a href="/mean_median_and_mode/index.htm" title="Mean, Median and Mode">Mean, Median and Mode</a></li>
<li><a href="/metric_units_of_measurement/index.htm" title="Metric Units of Measurement">Metric Units of Measurement</a></li>
<li><a href="/mixed_numbers/index.htm" title="Mixed Numbers">Mixed Numbers</a></li>
<li><a href="/multiply_and_divide_decimals/index.htm" title="Multiply and Divide Decimal Numbers">Multiply and Divide Decimal Numbers</a></li>
<li><a href="/multiply_and_divide_fractions/index.htm" title="Multiply and Divide Fractions">Multiply and Divide Fractions</a></li>
<li><a href="/multiply_and_divide_whole_numbers/index.htm" title="Learn Multiply and Divide Whole Numbers">Multiply and Divide Whole Numbers</a></li>
<li><a href="/ordered_pairs/index.htm" title="Ordered Pairs">Ordered Pairs</a></li>
<li><a href="/ordering_rounding_and_order_of_operations/index.htm" title="Ordering and Rounding">Ordering and Rounding</a></li>
<li><a href="/operations_with_integers/index.htm" title="Operations with Integers">Operations with Integers</a></li>
<li><a href="/percentage_increase_and_decrease/index.htm" title="Percentage Increase and Decrease">Percentage Increase and Decrease</a></li>
<li><a href="/perimeter_and_area/index.htm" title="Perimeter and Area">Perimeter and Area</a></li>
<li><a href="/perimeter_and_area_of_polygons/index.htm" title="Perimeter and Area of Polygons">Perimeter and Area of Polygons</a></li>
<li><a href="/place_value_ordering_and_rounding/index.htm" title="Place value Ordering and Rounding">Place value Ordering and Rounding</a></li>
<li><a href="/plotting_and_comparing_signed_numbers/index.htm" title="Plotting and Comparing Signed Numbers">Plotting and Comparing Signed Numbers</a></li>
<li><a href="/prime_numbers_factors_and_multiples/index.htm" title="Prime Numbers Factors and Multiples">Prime Numbers Factors and Multiples</a></li>
<li><a href="/properties_of_real_numbers/index.htm" title="Properties of Real Numbers">Properties of Real Numbers</a></li>
<li><a href="/ratios_and_unit_rates/index.htm" title="Ratios and Unit Rates">Ratios and Unit Rates</a></li>
<li><a href="/surface_areas/index.htm" title="Surface Areas">Surface Areas</a></li>
<li><a href="/tables_graphs_functions_and_sequences/index.htm" title="Tables Graphs Functions and Sequences">Tables Graphs Functions and Sequences</a></li>
<li><a href="/writing_and_solving_one_step_equations/index.htm" title="Writing and Solving one Step Equations">Writing and Solving one Step Equations</a></li>
<li><a href="/writing_graphing_and_solving_inequalities/index.htm" title="Writing Graphing and Solving Inequalities">Writing Graphing and Solving Inequalities</a></li>
<li><a href="/us_customary_units/index.htm" title="US Customary Units">US Customary Units</a></li>
</ul>
<h4>Academic</h4>
<ul class="menu" id="academic_tutorials" data-href="academic_tutorials.htm">
<li><a href="/cbse_syllabus/index.htm" title="CBSE Syllabus">CBSE Syllabus</a></li>
<li><a href="/amplifiers/index.htm" title="Amplifiers">Amplifiers</a></li>
<li><a href="/accounting_basics/index.htm" title="Learn Accounting Basics">Learn Accounting Basics</a></li>
<li><a href="/adaptive_software_development/index.htm" title="Adaptive Software Development">Adaptive Software Development</a></li>
<li><a href="/agile/index.htm" title="Learn Agile Methodology">Learn Agile Methodology</a></li>
<li><a href="/analog_communication/index.htm" title="Learn Analog Communication">Learn Analog Communication</a></li>
<li><a href="/antenna_theory/index.htm" title="Learn Antenna Theory">Learn Antenna Theory</a></li>
<li><a href="/artificial_intelligence/index.htm" title="Learn Artificial Intelligence">Learn Artificial Intelligence</a></li>
<li><a href="/artificial_neural_network/index.htm" title="Learn Artificial Neural Network">Learn Artificial Neural Network</a></li>
<li><a href="/automata_theory/index.htm" title="Learn Automata Theory">Learn Automata Theory</a></li>
<li><a href="/auditing/index.htm" title="Auditing">Auditing</a></li>
<li><a href="/basics_of_computers/index.htm" title="Learn Basics of Computers">Learn Basics of Computers</a></li>
<li><a href="/basics_of_computer_science/index.htm" title="Learn Basics of Computers Science">Learn Basics of Computers Science</a></li>
<li><a href="/basic_electronics/index.htm" title="Learn Basic Electronics">Learn Basic Electronics</a></li>
<li><a href="/behavior_driven_development/index.htm" title="Learn Behavior Driven Development">Learn Behavior Driven Development</a></li>
<li><a href="/biometrics/index.htm" title="Learn biometrics">Learn Biometrics</a></li>
<li><a href="/cloud_computing/index.htm" title="Learn Cloud Computing">Learn Cloud Computing</a></li>
<li><a href="/compiler_design/index.htm" title="Learn Compiler Design">Learn Compiler Design</a></li>
<li><a href="/computer_fundamentals/index.htm" title="Learn Computer Fundamentals">Learn Computer Fundamentals</a></li>
<li><a href="/computer_graphics/index.htm" title="Learn Computer Graphics">Learn Computer Graphics</a></li>
<li><a href="/computer_logical_organization/index.htm" title="Learn Computer Logical Organization">Computer Logical Organization</a></li>
<li><a href="/computer_programming/index.htm" title="Computer Programming Fundamentals">Computer Programming</a></li>
<li><a href="/communication_technologies/index.htm" title="Communication Technologies">Communication Technologies</a></li>
<li><a href="/control_systems/index.htm" title="Control Systems">Control Systems</a></li>
<li><a href="/convex_optimization/index.htm" title="Convex Optimization">Convex Optimization</a></li>
<li><a href="/cryptography/index.htm" title="Learn Cryptography">Learn Cryptography</a></li>
<li><a href="/cosmology/index.htm" title="Learn Cosmology">Learn Cosmology</a></li>
<li><a href="/data_communication_computer_network/index.htm" title="Data Communication and Computer Network">Computer Networking</a></li>
<li><a href="/data_mining/index.htm" title="Learn Data Mining">Learn Data Mining</a></li>
<li><a href="/data_structures_algorithms/index.htm" title="Learn Data Structure &amp; Algorithms">Data Structure &amp; Algorithms</a></li>
<li><a href="/design_and_analysis_of_algorithms/index.htm" title="Learn Design and Analysis of Algorithms">Design and Analysis of Algorithms</a></li>
<li><a href="/dbms/index.htm" title="Learn DBMS">Learn DBMS</a></li>
<li><a href="/digital_communication/index.htm" title="Learn Digital Communication">Learn Digital Communication</a></li>
<li><a href="/digital_circuits/index.htm" title="Learn Digital Circuits">Learn Digital Circuits</a></li>
<li><a href="/digital_signal_processing/index.htm" title="Digital Signal Processing">Digital Signal Processing</a></li>
<li><a href="/dip/index.htm" title="Digital Image Processing">Digital Image Processing</a></li>
<li><a href="/discrete_mathematics/index.htm" title="Discrete Mathematics">Discrete Mathematics</a></li>
<li><a href="/distributed_dbms/index.htm" title="Learn Distributed DBMS">Learn Distributed DBMS</a></li>
<li><a href="/dsl/index.htm" title="Learn DSL">Learn DSL</a></li>
<li><a href="/dwh/index.htm" title="Learn Data Warehouse">Learn Data Warehouse</a></li>
<li><a href="/e_commerce/index.htm" title="Learn E-Commerce">Learn E-Commerce</a></li>
<li><a href="/electronic_circuits/index.htm" title="Learn Electronic Circuits">Learn Electronic Circuits</a></li>
<li><a href="/electrical_safety/index.htm" title="Learn Electrical Safety">Learn Electrical Safety</a></li>
<li><a href="/electronic_measuring_instruments/index.htm" title="Learn Electronic Measuring Instruments">Learn Electronic Measuring Instruments</a></li>
<li><a href="/embedded_systems/index.htm" title="Learn Embedded Systems">Learn Embedded Systems</a></li>
<li><a href="/environmental_studies/index.htm" title="Learn Environmental Studies">Learn Environmental Studies</a></li>
<li><a href="/engineering_ethics/index.htm" title="Learn Engineering Ethics">Learn Engineering Ethics</a></li>
<li><a href="/estimation_techniques/index.htm" title="Learn Estimation Techniques">Learn Estimation Techniques</a></li>
<li><a href="/extreme_programming/index.htm" title="Learn Extreme Programming">Learn Extreme Programming</a></li>
<li><a href="/financial_accounting/index.htm" title="Learn Financial Accounting">Learn Financial Accounting</a></li>
<li><a href="/forex_trading/index.htm" title="Learn Forex Trading">Learn Forex Trading</a></li>
<li><a href="/functional_programming/index.htm" title="Learn Functional Programming">Learn Functional  Programming</a></li>
<li><a href="/fundamentals_of_science_and_technology/index.htm" title="Fundamentals of Science and Technology">Fundamentals of Science and Technology</a></li>
<li><a href="/fuzzy_logic/index.htm" title="Learn Fuzzy Logic">Learn Fuzzy Logic</a></li>
<li><a href="/gate_syllabus/index.htm" title="Learn GATE Syllabus">Learn GATE Syllabus</a></li>
<li><a href="/genetic_algorithms/index.htm" title="Learn Genetic Algorithms">Learn Genetic Algorithms</a></li>
<li><a href="/graph_theory/index.htm" title="Learn Graph Theory">Learn Graph Theory</a></li>
<li><a href="/http/index.htm" title="Learn HTTP">Learn HTTP</a></li>
<li><a href="/human_computer_interface/index.htm" title="Learn Human Computer Interface">Learn Human Computer Interface</a></li>
<li><a href="/information_security_cyber_law/index.htm" title="Information Security and Cyber Law">Information Security and Cyber Law</a></li>
<li><a href="/internet_of_things/index.htm" title="Internet of Things (IoT)">Internet of Things (IoT)</a></li>
<li><a href="/internet_technologies/index.htm" title="Internet Technologies">Internet Technologies</a></li>
<li><a href="/ipv4/index.htm" title="Learn IPv4">Learn IPv4</a></li>
<li><a href="/ipv6/index.htm" title="Learn IPv6">Learn IPv6</a></li>
<li><a href="/java_dip/index.htm" title="Digital Image Processing using Java">Image Processing with Java</a></li>
<li><a href="/linear_integrated_circuits_applications/index.htm" title="Linear Integrated Circuits Applications">Linear Integrated Circuits Applications</a></li>
<li><a href="/management_information_system/index.htm" title="Learn Management Information System">Mgmt Information System</a></li>
<li><a href="/microprocessor/index.htm" title="Learn Microprocessor">Learn Microprocessor</a></li>
<li><a href="/microservice_architecture/index.htm" title="Learn Microservice Architecture">Microservice Architecture</a></li>
<li><a href="/microwave_engineering/index.htm" title="Learn Microwave Engineering">Learn Microwave Engineering</a></li>
<li><a href="/mobile_computing/index.htm" title="Learn Mobile Computing">Learn Mobile Computing</a></li>
<li><a href="/mobile_learning_essentials/index.htm" title="Mobile Learning Essentials">Mobile Learning Essentials</a></li>
<li><a href="/modelling_and_simulation/index.htm" title="Modelling and Simulation">Modelling and Simulation</a></li>
<li><a href="/network_theory/index.htm" title="Network Theory">Learn Network Theory</a></li>
<li><a href="/object_oriented_analysis_design/index.htm" title="Learn Object Oriented Analysis and Design">Learn OOAD</a></li>
<li><a href="/opennlp/index.htm" title="Learn OpenNLP">Learn OpenNLP</a></li>
<li><a href="/opencv/index.htm" title="Learn OpenCV">Learn OpenCV</a></li>
<li><a href="/operating_system/index.htm" title="Learn Operating System">Learn Operating System</a></li>
<li><a href="/optical_networks/index.htm" title="Learn Optical Networks">Optical Networks</a></li>
<li><a href="/parallel_algorithm/index.htm" title="Learn Parallel Algorithm">Learn Parallel Algorithm</a></li>
<li><a href="/parallel_computer_architecture/index.htm" title="Parallel Computer Architecture">Parallel Computer Architecture</a></li>
<li><a href="/power_electronics/index.htm" title="Learn Power Electronics">Learn Power Electronics</a></li>
<li><a href="/principles_of_communication/index.htm" title="Principles of Communication">Principles of Communication</a></li>
<li><a href="/programming_methodologies/index.htm" title="Programming Methodologies">Programming Methodologies</a></li>
<li><a href="/pulse_circuits/index.htm" title="Pulse Circuits">Pulse Circuits</a></li>
<li><a href="/renewable_energy/index.htm" title="Renewable Energy">Renewable Energy</a></li>
<li><a href="/satellite_communication/index.htm" title="Learn Satellite Communication">Satellite Communication</a></li>
<li><a href="/sdlc/index.htm" title="Learn SDLC (Software Development Life Cycle)">S/W Development Life Cycle (SDLC)</a></li>
<li><a href="/semiconductor_devices/index.htm" title="Learn Semiconductor Devices">Semiconductor Devices</a></li>
<li><a href="/seo/index.htm" title="Learn Search Engine Optimization">Learn SEO Techniques</a></li>
<li><a href="/signals_and_systems/index.htm" title="Signals and Systems">Signals and Systems</a></li>
<li><a href="/sinusoidal_oscillators/index.htm" title="Sinusoidal Oscillators">Sinusoidal Oscillator</a></li>
<li><a href="/soa/index.htm" title="Learn SOA">Learn SOA</a></li>
<li><a href="/soap/index.htm" title="Learn SOAP">Learn SOAP</a></li>
<li><a href="/software_architecture_design/index.htm" title="Learn Software Architecture Design">Software Architecture Design</a></li>
<li><a href="/software_engineering/index.htm" title="Software Engineering">Software Engineering</a></li>
<li><a href="/statistics/index.htm" title="Learn Statistics">Learn Statistics</a></li>
<li><a href="/vlsi_design/index.htm" title="Learn VLSI Design">Learn VLSI Design</a></li>
<li><a href="/wireless_communication/index.htm" title="Learn Wireless Communication">Learn Wireless Communication</a></li>
<li><a href="/uddi/index.htm" title="Learn UDDI">Learn UDDI</a></li>
<li><a href="/uml/index.htm" title="Learn UML">Learn UML</a></li>
<li><a href="/unix_sockets/index.htm" title="Learn Unix Sockets">Learn Unix Sockets</a></li>
</ul>
<h4>Software Quality</h4>
<ul class="menu" id="software_quality" data-href="software_quality_tutorials.htm">
<li><a href="/agile_testing/index.htm" title="Learn Agile Testing">Learn Agile Testing</a></li>
<li><a href="/apache_bench/index.htm" title="Learn Apache Bench">Learn Apache Bench</a></li>
<li><a href="/balsamiq_mockups/index.htm" title="Learn Balsamiq Mockups">Learn Balsamiq Mockups</a></li>
<li><a href="/bugzilla/index.htm" title="Learn Bugzilla">Learn Bugzilla</a></li>
<li><a href="/cmmi/index.htm" title="Learn SEI CMMI">Learn SEI CMMI</a></li>
<li><a href="/computer_security/index.htm" title="Learn Computer Security">Learn Computer Security</a></li>
<li><a href="/concordion/index.htm" title="Learn Concordion">Learn Concordion</a></li>
<li><a href="/continuous_integration/index.htm" title="Learn Continuous Integration">Learn Continuous Integration</a></li>
<li><a href="/cucumber/index.htm" title="Learn Cucumber">Learn Cucumber</a></li>
<li><a href="/database_testing/index.htm" title="Learn Database Testing">Learn Database Testing</a></li>
<li><a href="/ethical_hacking/index.htm" title="Learn Ethical Hacking">Learn Ethical Hacking</a></li>
<li><a href="/etl_testing/index.htm" title="Learn ETL Testing">Learn ETL Testing</a></li>
<li><a href="/internet_security/index.htm" title="Learn Internet Security">Learn Internet Security</a></li>
<li><a href="/jenkins/index.htm" title="Learn Jenkins">Learn Jenkins</a></li>
<li><a href="/kali_linux/index.htm" title="Learn Kali Linux">Learn Kali Linux</a></li>
<li><a href="/malware_removal/index.htm" title="Learn Malware Removal">Learn Malware Removal</a></li>
<li><a href="/metasploit/index.htm" title="Learn Metasploit">Learn Metasploit</a></li>
<li><a href="/mobile_security/index.htm" title="Learn Mobile Security">Learn Mobile Security</a></li>
<li><a href="/mobile_testing/index.htm" title="Learn Mobile Testing">Learn Mobile Testing</a></li>
<li><a href="/mockito/index.htm" title="Learn Mockito">Learn Mockito</a></li>
<li><a href="/network_security/index.htm" title="Learn Network Security">Learn Network Security</a></li>
<li><a href="/penetration_testing/index.htm" title="Learn Penetration Testing">Learn Penetration Testing</a></li>
<li><a href="/python_penetration_testing/index.htm" title="Learn Python Penetration Testing">Python Penetration Testing</a></li>
<li><a href="/qc/index.htm" title="Learn QC">Learn QC</a></li>
<li><a href="/qtp/index.htm" title="Learn QTP">Learn QTP</a></li>
<li><a href="/qunit/index.htm" title="Learn QUnit">Learn QUnit</a></li>
<li><a href="/qtest/index.htm" title="Learn QTest">Learn QTest</a></li>
<li><a href="/rspec/index.htm" title="Learn RSpec">Learn RSpec</a></li>
<li><a href="/sap_testing/index.htm" title="Learn SAP Testing">Learn SAP Testing</a></li>
<li><a href="/security_testing/index.htm" title="Learn Security Testing">Learn Security Testing</a></li>
<li><a href="/selenium/index.htm" title="Learn Selenium">Learn Selenium</a></li>
<li><a href="/six_sigma/index.htm" title="Learn Six Sigma">Learn Six Sigma</a></li>
<li><a href="/software_testing_dictionary/index.htm" title="Software Testing Dictionary">Software Testing Dictionary</a></li>
<li><a href="/software_testing/index.htm" title="Learn Software Testing">Learn Software Testing</a></li>
<li><a href="/software_quality_management/index.htm" title="Learn Software Quality Management">Learn Software Quality Management</a></li>
<li><a href="/soapui/index.htm" title="Learn SoapUI">Learn SoapUI</a></li>
<li><a href="/stlc/index.htm" title="Learn STLC">Learn STLC</a></li>
<li><a href="/system_analysis_and_design/index.htm" title="Learn System Analysis and Design">Learn System Analysis and Design</a></li>
<li><a href="/testlink/index.htm" title="Learn TestLink">Learn TestLink</a></li>
<li><a href="/testlodge/index.htm" title="Learn TestLodge">Learn TestLodge</a></li>
<li><a href="/testrail/index.htm" title="Learn TestRail">Learn TesRail</a></li>
<li><a href="/unittest_framework/index.htm" title="Learn Unittest Framework">Learn Unittest Framework</a></li>
<li><a href="/wireless_security/index.htm" title="Learn Wireless Security">Learn Wireless Security</a></li>
</ul>
</div>
</div>
<div class="col-md-3">
<div class="featured-box" style="height: 8470px;">
<h4>Scripts</h4>
<ul class="menu" id="programming_scripts" data-href="scripting_lnaguage_tutorials.htm">
<li><a href="/javascript/index.htm" title="Learn JavaScript">Learn JavaScript</a></li>
<li><a href="/jquery/index.htm" title="jquery">Learn jQuery</a></li>
<li><a href="/jqueryui/index.htm" title="jqueryUI">Learn jQueryUI</a></li>
<li><a href="/lua/index.htm" title="Learn Lua">Learn Lua</a></li>
<li><a href="/perl/index.htm" title="Learn Perl">Learn Perl</a></li>
<li><a href="/php/index.htm" title="Learn PHP">Learn PHP</a></li>
<li><a href="/php7/index.htm" title="Learn PHP-7">Learn PHP-7</a></li>
<li><a href="/python/index.htm" title="Learn Python">Learn Python</a></li>
<li><a href="/python3/index.htm" title="Learn Python-3">Learn Python-3</a></li>
<li><a href="/rspec/index.htm" title="Learn RSpec">Learn RSpec</a></li>
<li><a href="/ruby/index.htm" title="Learn Ruby">Learn Ruby</a></li>
<li><a href="/sed/index.htm" title="Learn Sed">Learn Sed</a></li>
<li><a href="/tcl-tk/index.htm" title="Learn Tcl/Tk">Learn Tcl/Tk</a></li>
<li><a href="/unix/index.htm" title="Learn Unix">Learn Unix</a></li>
<li><a href="/vbscript/index.htm" title="Learn VBScript">Learn VBScript</a></li>
</ul>
<h4>Management</h4>
<ul class="menu" id="management" data-href="management_tutorials.htm">
<li><a href="/appreciative_inquiry/index.htm" title="Learn Appreciative Inquiry">Learn Appreciative Inquiry</a></li>
<li><a href="/advertisement_and_marketing_communications/index.htm" title="Learn Advertisement and Marketing Communications">Adv. and Mkt Communications</a></li>
<li><a href="/aviation_management/index.htm" title="Learn Aviation Management">Learn Aviation Management</a></li>
<li><a href="/bank_management/index.htm" title="Learn Bank Management">Learn Bank Management</a></li>
<li><a href="/brand_management/index.htm" title="Learn Brand Management">Learn Brand Management</a></li>
<li><a href="/business_analysis/index.htm" title="Learn Business Analysis">Learn Business Analysis</a></li>
<li><a href="/business_law/index.htm" title="Learn Business Law">Learn Business Law</a></li>
<li><a href="/business_sales_training/index.htm" title="Learn Business Sales Training">Business Sales Training</a></li>
<li><a href="/classroom_management/index.htm" title="Classroom Management">Classroom Management</a></li>
<li><a href="/coaching_and_mentoring/index.htm" title="Coaching and Mentoring">Coaching and Mentoring</a></li>
<li><a href="/collaborative_management/index.htm" title="Learn Collaborative Management">Learn Collaborative Management</a></li>
<li><a href="/consumer_behavior/index.htm" title="Learn Business Ethics">Learn Consumer Behavior</a></li>
<li><a href="/customer_relationship_management/index.htm" title="Customer Relationship Management">Customer Relationship Management</a></li>
<li><a href="/customer_service/index.htm" title="Customer Service">Customer Service</a></li>
<li><a href="/earn_value_management/index.htm" title="Learn EVM">Learn EVM</a></li>
<li><a href="/employee_engagement/index.htm" title="Learn Employee Engagement">Employee Engagement</a></li>
<li><a href="/employee_onboarding/index.htm" title="Learn Employee Onboarding">Employee Onboarding</a></li>
<li><a href="/entrepreneurship_development/index.htm" title="Learn Entrepreneurship Development">Entrepreneurship Development</a></li>
<li><a href="/entrepreneurship_skills/index.htm" title="Learn Entrepreneurship Skills">Entrepreneurship Skills</a></li>
<li><a href="/food_and_beverage_services/index.htm" title="Food And Beverage Services">Food And Beverage Services</a></li>
<li><a href="/food_production_operations/index.htm" title="Food Production Operations">Food Production Operations</a></li>
<li><a href="/front_office_management/index.htm" title="Front Office Management">Front Office Management</a></li>
<li><a href="/functions_of_sales_manager/index.htm" title="Functions of Sales Manager">Functions of Sales Manager</a></li>
<li><a href="/hotel_housekeeping/index.htm" title="Hotel Housekeeping">Hotel Housekeeping</a></li>
<li><a href="/human_resource_management/index.htm" title="Human Resource Management">Human Resource Management</a></li>
<li><a href="/individual_and_group_behavior/index.htm" title="Learn Individual and Group Behavior">Individual and Group Behavior</a></li>
<li><a href="/international_business_management/index.htm" title="Learn International Business Management">International Business Management</a></li>
<li><a href="/international_finance/index.htm" title="Learn International Finance Management">International Finance</a></li>
<li><a href="/international_marketing/index.htm" title="Learn International Marketing">International Marketing</a></li>
<li><a href="/kanban/index.htm" title="Learn Kanban">Learn Kanban</a></li>
<li><a href="/knowledge_management/index.htm" title="Learn Knowledge Management">Learn Knowledge Management</a></li>
<li><a href="/management_concepts/index.htm" title="Project Management Concepts">Management Concepts</a></li>
<li><a href="/management_principles/index.htm" title="Management Principles">Management Principles</a></li>
<li><a href="/managerial_economics/index.htm" title="Learn Managerial Economics">Learn Managerial Economics</a></li>
<li><a href="/marketing_management/index.htm" title="Marketing Management">Marketing Management</a></li>
<li><a href="/outcome_measurement/index.htm" title="Outcome Measurement">Outcome Measurement</a></li>
<li><a href="/organizational_behavior/index.htm" title="Organizational Behavior">Organizational Behavior</a></li>
<li><a href="/organizational_design/index.htm" title="Learn Organizational Design">Learn Organizational Design</a></li>
<li><a href="/performance_management/index.htm" title="Performance Management">Performance Management</a></li>
<li><a href="/personal_branding/index.htm" title="Personal Branding">Personal Branding</a></li>
<li><a href="/public_library_management/index.htm" title="Public Library Management">Public Library Management</a></li>
<li><a href="/pmp-exams/index.htm" title="PMP Examination">PMP Examination</a></li>
<li><a href="/professional_ethics/index.htm" title="Professional Ethics">Professional Ethics</a></li>
<li><a href="/recruitment_and_selection/index.htm" title="Recruitment and Selection">Recruitment and Selection</a></li>
<li><a href="/retail_management/index.htm" title="Retail Management">Retail Management</a></li>
<li><a href="/rural_marketing/index.htm" title="Rural Marketing">Rural Marketing</a></li>
<li><a href="/sales_and_distribution_management/index.htm" title="Learn Sales and Distribution Management">Sales and Distribution Management</a></li>
<li><a href="/scrum/index.htm" title="Learn Scrum">Learn Scrum</a></li>
<li><a href="/shop_floor_management/index.htm" title="Learn Shop Floor Management">Learn Shop Floor Management</a></li>
<li><a href="/strategic_management/index.htm" title="Strategic Management">Strategic Management</a></li>
<li><a href="/supply_chain_management/index.htm" title="Supply Chain Management">Supply Chain Management</a></li>
<li><a href="/talent_management/index.htm" title="Learn Talent Management">Learn Talent Management</a></li>
<li><a href="/tourism_management/index.htm" title="Learn Tourism Management">Learn Tourism Management</a></li>
</ul>
<h4>SAP</h4>
<ul class="menu" id="sap_tutorials" data-href="sap_tutorials.htm">
<li><a href="/crystal_reports/index.htm" title="Learn Crystal Reports">Learn Crystal Reports</a></li>
<li><a href="/sap_abap/index.htm" title="Learn SAP ABAP">Learn SAP ABAP</a></li>
<li><a href="/sap_apo/index.htm" title="Learn SAP APO">Learn SAP APO</a></li>
<li><a href="/sap_bex/index.htm" title="Learn SAP Bex">Learn SAP Bex</a></li>
<li><a href="/sap_basis/index.htm" title="Learn SAP BASIS">Learn SAP BASIS</a></li>
<li><a href="/sap_bods/index.htm" title="Learn SAP BODS">Learn SAP BODS</a></li>
<li><a href="/sap_bo_analysis_edition_for_olap/index.htm" title="Learn SAP BO Analysis Edition for OLAP">Learn SAP BO Analysis Edition for OLAP</a></li>
<li><a href="/sap_bpc/index.htm" title="Learn SAP BPC">Learn SAP BPC</a></li>
<li><a href="/sap_business_workflow/index.htm" title="Learn SAP Business Workflow">Learn SAP Business Workflow</a></li>
<li><a href="/sap_bw_on_hana/index.htm" title="Learn SAP BW on HANA">Learn SAP BW on HANA</a></li>
<li><a href="/sap_bw/index.htm" title="Learn SAP BW">Learn SAP BW</a></li>
<li><a href="/sap_c4c/index.htm" title="Learn SAP C4C">Learn SAP C4C</a></li>
<li><a href="/sap_cca/index.htm" title="Learn SAP CCA">Learn SAP CCA</a></li>
<li><a href="/sap_crm/index.htm" title="Learn SAP CRM">Learn SAP CRM</a></li>
<li><a href="/sap_dashboards/index.htm" title="Learn SAP Dashboards">Learn SAP Dashboards</a></li>
<li><a href="/sap_design_studio/index.htm" title="Learn SAP Design Studio">Learn SAP Design Studio</a></li>
<li><a href="/sap_ewm/index.htm" title="Learn SAP EWM">Learn SAP EWM</a></li>
<li><a href="/sap_fico/index.htm" title="Learn SAP FICO">Learn SAP FICO</a></li>
<li><a href="/sap_fiori/index.htm" title="Learn SAP Fiori">Learn SAP Fiori</a></li>
<li><a href="/sap_grc/index.htm" title="Learn SAP GRC">Learn SAP GRC</a></li>
<li><a href="/sap_hana/index.htm" title="Learn SAP HANA">Learn SAP HANA</a></li>
<li><a href="/sap_hana_administration/index.htm" title="Learn SAP HANA Administration">Learn SAP HANA Administration</a></li>
<li><a href="/sap_hana_bi_development/index.htm" title="Learn SAP HANA BI Development">Learn SAP HANA BI Development</a></li>
<li><a href="/sap_hr/index.htm" title="Learn SAP HR">Learn SAP HR</a></li>
<li><a href="/sap_hybris/index.htm" title="Learn SAP Hybris">Learn SAP Hybris</a></li>
<li><a href="/sap_idt/index.htm" title="Learn SAP IDT">Learn SAP IDT</a></li>
<li><a href="/sap_lumira/index.htm" title="Learn SAP Lumira">Learn SAP Lumira</a></li>
<li><a href="/sap_mm/index.htm" title="Learn SAP MM">Learn SAP MM</a></li>
<li><a href="/sap_netweaver/index.htm" title="Learn SAP Netweaver">Learn SAP Netweaver</a></li>
<li><a href="/sap_payroll/index.htm" title="Learn SAP Payroll">Learn SAP Payroll</a></li>
<li><a href="/sap_pi/index.htm" title="Learn SAP PI">Learn SAP PI</a></li>
<li><a href="/sap_pm/index.htm" title="Learn SAP PM">Learn SAP PM</a></li>
<li><a href="/sap_pp/index.htm" title="Learn SAP PP">Learn SAP PP</a></li>
<li><a href="/sap_ps/index.htm" title="Learn SAP PS">Learn SAP PS</a></li>
<li><a href="/sap_qm/index.htm" title="Learn SAP QM">Learn SAP QM</a></li>
<li><a href="/sap_simple_finance/index.htm" title="Learn SAP Simple Finance">Learn SAP Simple Finance</a></li>
<li><a href="/sap_simple_logistics/index.htm" title="Learn SAP Simple Logistics">Learn SAP Simple Logistics</a></li>
<li><a href="/sap_scm/index.htm" title="Learn SAP SCM">Learn SAP SCM</a></li>
<li><a href="/sap_smart_forms/index.htm" title="Learn SAP Smart Forms">Learn SAP Smart Forms</a></li>
<li><a href="/sap_scripts/index.htm" title="Learn SAP Scripts">Learn SAP Scripts</a></li>
<li><a href="/sap_sd/index.htm" title="Learn SAP SD">Learn SAP SD</a></li>
<li><a href="/sap_security/index.htm" title="Learn SAP Security">Learn SAP Security</a></li>
<li><a href="/sap_solman/index.htm" title="Learn SAP SOLMAN">Learn SAP SOLMAN</a></li>
<li><a href="/sap_srm/index.htm" title="Learn SAP SRM">Learn SAP SRM</a></li>
<li><a href="/sap_successfactors/index.htm" title="Learn SAP SuccessFactors">Learn SAP SuccessFactors</a></li>
<li><a href="/sap_testing/index.htm" title="Learn SAP Testing">Learn SAP Testing</a></li>
<li><a href="/sap_ui5/index.htm" title="Learn SAP UI5">Learn SAP UI5</a></li>
<li><a href="/sap_web_dynpro/index.htm" title="Learn SAP Web Dynpro">Learn SAP Web Dynpro</a></li>
<li><a href="/sap_webi/index.htm" title="Learn SAP Webi">Learn SAP Webi</a></li>
<li><a href="/sap/index.htm" title="Learn SAP R/3">Learn SAP R/3</a></li>
</ul>
<h4>Soft Skills</h4>
<ul class="menu" id="soft_skill" data-href="soft_skill_tutorials.htm">
<li><a href="/anger_management/index.htm" title="Learn Anger Management">Learn Anger Management</a></li>
<li><a href="/assertiveness/index.htm" title="Learn Assertiveness">Learn Assertiveness</a></li>
<li><a href="/attention_management/index.htm" title="Learn Attention Management">Learn Attention Management</a></li>
<li><a href="/body_language/index.htm" title="Learn Body Language">Learn Body Language</a></li>
<li><a href="/business_acumen/index.htm" title="Learn Business Acumen">Learn Business Acumen</a></li>
<li><a href="/business_dress_code/index.htm" title="Learn Business Dress Code">Learn Business Dress Code</a></li>
<li><a href="/business_ethics/index.htm" title="Learn Business Ethics">Learn Business Ethics</a></li>
<li><a href="/business_etiquette/index.htm" title="Learn Business Etiquette">Learn Business Etiquette</a></li>
<li><a href="/business_negotiation_skills/index.htm" title="Learn Business Negotiation Skills">Learn Business Negotiation Skills</a></li>
<li><a href="/business_writing_skills/index.htm" title="Learn Business Writing Skills">Learn Business Writing Skills</a></li>
<li><a href="/career_development_planning/index.htm" title="Career Development Planning">Career Development Planning</a></li>
<li><a href="/collaborative_writing/index.htm" title="Learn Collaborative Writing">Learn Collaborative Writing</a></li>
<li><a href="/cracking_interviews/index.htm" title="Learn Cracking Interviews">Learn Cracking Interviews</a></li>
<li><a href="/creative_problem_solving/index.htm" title="Learn Creative Problem Solving">Learn Creative Problem Solving</a></li>
<li><a href="/critical_thinking/index.htm" title="Learn Critical Thinking">Learn Critical Thinking</a></li>
<li><a href="/design_thinking/index.htm" title="Learn Design Thinking">Learn Design Thinking</a></li>
<li><a href="/developing_creativity/index.htm" title="Learn Developing Creativity">Learn Developing Creativity</a></li>
<li><a href="/effective_communication/index.htm" title="Effective Communication">Effective Communication</a></li>
<li><a href="/employee_motivation/index.htm" title="Employee Motivation">Employee Motivation</a></li>
<li><a href="/employee_retention/index.htm" title="Employee Retention">Employee Retention</a></li>
<li><a href="/employee_supervision/index.htm" title="Employee Supervision">Employee Supervision</a></li>
<li><a href="/entrepreneurship_skills/index.htm" title="Entrepreneurship Skills">Entrepreneurship Skills</a></li>
<li><a href="/evolution_of_etiquette/index.htm" title="Evolution of Etiquette">Evolution of Etiquette</a></li>
<li><a href="/executive_assistant_coaching/index.htm" title="Executive Assistant Coaching">Executive Assistant Coaching</a></li>
<li><a href="/generation_gap_at_workplace/index.htm" title="Learn Generation Gap at Workplace">Learn Generation Gap at Workplace</a></li>
<li><a href="/how_to_interview/index.htm" title="Learn How to Interview">Learn How to  Interview</a></li>
<li><a href="/impromptu_speaking/index.htm" title="Learn Impromptu Speaking">Learn Impromptu Speaking</a></li>
<li><a href="/improving_personal_productivity/index.htm" title="Improving Personal Productivity">Improving Personal Productivity</a></li>
<li><a href="/incentive_planning/index.htm" title="Incentive Planning">Incentive Planning</a></li>
<li><a href="/interpersonal_skills/index.htm" title="Learn Interpersonal Skills">Learn Interpersonal Skills</a></li>
<li><a href="/job_search_skills/index.htm" title="Learn Job Search Skills">Learn Job Search Skills</a></li>
<li><a href="/managing_the_manager/index.htm" title="Managing the Manager">Managing the Manager</a></li>
<li><a href="/mid_level_managers/index.htm" title="Mid Level Managers">Mid Level Managers</a></li>
<li><a href="/motivating_skills/index.htm" title="Learn Motivating Skills">Learn Motivating Skills</a></li>
<li><a href="/occupational_health_management/index.htm" title="Learn Occupational Health Management">Learn Occupational Health Management</a></li>
<li><a href="/office_filing_procedure/index.htm" title="Learn Office Filing Procedure">Learn Office Filing Procedure</a></li>
<li><a href="/positive_body_language/index.htm" title="Learn Positive Body Language">Learn Positive Body Language</a></li>
<li><a href="/sales_forecasting/index.htm" title="Learn Sales Forecasting">Sales Forecasting</a></li>
<li><a href="/sales_planning/index.htm" title="Learn Sales Planning">Sales Planning</a></li>
<li><a href="/self_confidence/index.htm" title="Learn Self Confidence">Learn Self Confidence</a></li>
<li><a href="/self_esteem/index.htm" title="Learn Self Esteem">Learn Self Esteem</a></li>
<li><a href="/social_intelligence/index.htm" title="Social Intelligence">Social Intelligence</a></li>
<li><a href="/social_learning/index.htm" title="Learn Social Learning">Learn Social Learning</a></li>
<li><a href="/spoken_english_errors/index.htm" title="Spoken English Errors">Spoken English Errors</a></li>
<li><a href="/team_building/index.htm" title="Learn Team Building">Learn Team Building</a></li>
<li><a href="/the_art_of_happiness/index.htm" title="Learn The Art of Happiness">Learn The Art of Happiness</a></li>
<li><a href="/thematic_apperception_test/index.htm" title="Learn Thematic Apperception Test">Learn Thematic Apperception Test</a></li>
<li><a href="/verbal_ability/index.htm" title="Learn Verbal Ability">Learn Verbal Ability</a></li>
<li><a href="/women_in_leadership/index.htm" title="Learn Women in Leadership">Learn Women in Leadership</a></li>
<li><a href="/work_life_balance/index.htm" title="Learn Work Life Balance">Learn Work Life Balance</a></li>
<li><a href="/workplace_civility/index.htm" title="Learn Workplace Civility">Learn Workplace Civility</a></li>
<li><a href="/workplace_diversity/index.htm" title="Learn Workplace Diversity">Learn Workplace Diversity</a></li>
<li><a href="/workplace_politics/index.htm" title="Learn Workplace Politics">Learn Workplace Politics</a></li>
<li><a href="/workplace_safety/index.htm" title="Learn Workplace Safety">Learn Workplace Safety</a></li>
<li><a href="/workplace_stress/index.htm" title="Learn Workplace Stress">Learn Workplace Stress</a></li>
<li><a href="/workplace_wellness/index.htm" title="Learn Workplace Wellness">Learn Workplace Wellness</a></li>
</ul>
<h4>Selected Reading</h4>
<ul class="menu" id="selected_reading" data-href="index.htm">
<li><a href="computer_glossary.htm">Computer Glossary</a></li>
<li><a href="/developers_best_practices/index.htm">Developer's Best Practices</a></li>
<li><a href="free_web_graphics.htm">Download Free Graphics</a></li>
<li><a href="/effective_resume_writing.htm">Effective Resume Writing</a></li>
<li><a href="computer_whoiswho.htm">Who is Who</a></li>
</ul>
<h4>DevOps</h4>
<ul class="menu" id="devops" data-href="devops_tutorials.htm">
<li><a href="/ansible/index.htm" title="Learn Ansible">Learn Ansible</a></li>
<li><a href="/bugzilla/index.htm" title="Learn Bugzilla">Learn Bugzilla</a></li>
<li><a href="/chef/index.htm" title="Learn Chef">Learn Chef</a></li>
<li><a href="/consul/index.htm" title="Learn Consul">Learn Consul</a></li>
<li><a href="/docker/index.htm" title="Learn Docker">Learn Docker</a></li>
<li><a href="/gerrit/index.htm" title="Learn Gerrit">Learn Gerrit</a></li>
<li><a href="/git/index.htm" title="Learn Git">Learn Git</a></li>
<li><a href="/gitlab/index.htm" title="Learn Gitlab">Learn Gitlab</a></li>
<li><a href="/jira/index.htm" title="Learn Jira">Learn Jira</a></li>
<li><a href="/kubernetes/index.htm" title="Learn Kubernetes">Learn Kubernetes</a></li>
<li><a href="/logstash/index.htm" title="Learn LogStash">Learn LogStash</a></li>
<li><a href="/makefile/index.htm" title="Learn Makefile">Learn Makefile</a></li>
<li><a href="/mantis/index.htm" title="Learn Mantis">Learn Mantis</a></li>
<li><a href="/puppet/index.htm" title="Learn Puppet">Learn Puppet</a></li>
<li><a href="/saltstack/index.htm" title="Learn Saltstack">Learn Saltstack</a></li>
<li><a href="/scrapy/index.htm" title="Learn Scrapy">Learn Scrapy</a></li>
<li><a href="/svn/index.htm" title="Learn SVN">Learn SVN</a></li>
<li><a href="/unix/index.htm" title="Learn UNIX">Learn UNIX</a></li>
<li><a href="/linux_admin/index.htm" title="Learn Linux Admin">Learn Linux Admin</a></li>
<li><a href="/ubuntu/index.htm" title="Learn Ubuntu">Learn Ubuntu</a></li>
<li><a href="/virtualization2.0/index.htm" title="Learn Virtualization2.0">Learn Virtualization2.0</a></li>
<li><a href="/versionone/index.htm" title="Learn VersionOne">Learn VersionOne</a></li>
</ul>
<h4>Misc</h4>
<ul class="menu" id="misc" data-href="misc_tutorials.htm">
<li><a href="/adobe_indesign_cc/index.htm" title="Learn Adobe Indesign">Adobe Indesign</a></li>
<li><a href="/adobe_robohelp/index.htm" title="Learn Adobe Robohelp">Adobe Robohelp</a></li>
<li><a href="/abbreviations/index.htm" title="Learn abbreviations">Abbreviations</a></li>
<li><a href="/bpel/index.htm" title="Learn BPEL">BPEL</a></li>
<li><a href="/cloudrail/index.htm" title="Learn CloudRail">Learn CloudRail</a></li>
<li><a href="/dll/index.htm" title="Learn DLL">Learn DLL</a></li>
<li><a href="/drools/index.htm" title="Learn Drools">Learn Drools</a></li>
<li><a href="/elasticsearch/index.htm" title="Learn Elastic Search">Learn Elastic Search</a></li>
<li><a href="/gnu_debugger/index.htm" title="Learn GDB Debugger">Learn GDB Debugger</a></li>
<li><a href="/gradle/index.htm" title="Learn Gradle">Learn Gradle</a></li>
<li><a href="/ifsccode/index.htm" title="Get IFSC Code">Get IFSC Code</a></li>
<li><a href="/itil/index.htm" title="Learn ITIL">Learn ITIL</a></li>
<li><a href="/itext/index.htm" title="Learn  iText">Learn  iText</a></li>
<li><a href="/openshift/index.htm" title="OpenShift">Learn OpenShift</a></li>
<li><a href="/pincode/index.htm" title="Pincode">Learn PinCode</a></li>
<li><a href="/jboss_fuse/index.htm" title="Learn Jboss Fuse">Learn Jboss Fuse</a></li>
<li><a href="/radius/index.htm" title="Learn RADIUS">Learn RADIUS</a></li>
<li><a href="/rss/index.htm" title="Learn RSS">Learn RSS</a></li>
<li><a href="/salesforce/index.htm" title="Learn Salesforce">Learn Salesforce</a></li>
<li><a href="/sublime_text/index.htm" title="Learn Sublime Text">Learn Sublime Text</a></li>
<li><a href="/tex_commands/index.htm" title="Learn Tex Commands">Learn Tex Commands</a></li>
<li><a href="/tweetdeck/index.htm" title="Learn TweetDeck">Learn TweetDeck</a></li>
<li><a href="/vim/index.htm" title="Learn Vim">Learn Vim</a></li>
<li><a href="/yaml/index.htm" title="Learn YAML">Learn YAML</a></li>
</ul>-->
</div>
</div>
</div>
</div>
<!-- end main-content -->