<?php
/*
Template Name:About Design Page
*/
get_header();
?>
<div class="page-wrapper has-banner">
    <section class="about-section">
        <img class="about-bg"  src="<?php echo get_template_directory_uri(); ?>/public/images/about-banner-image.png" alt="about-banner" /> 
        <div class="container">
            <h1>MDM is one of Australia’s most experienced and accomplished creative agencies. Our team comprises exceptionally trained and highly skilled professionals that are considered the industry’s best. We have traded continuously for over 30 years and developed tens of thousands of projects.</h1>
            <p>Our proven track record and fine-tuned processes are a guarantee that we can produce the most complex projects, seamlessly. We are unreservedly trusted by the biggest companies in Australia. We partner with them, to meet their global needs. We have strong client relationships, some spanning almost 20 years. Our creative flair and tailored solutions have been recognised by industry awards. Our primary objective is to fulfil the client brief and exceed all expectations. </p>
        </div>
    </section>
    <section class="about-grid-section">
        <div class="container">
            <ul class="about-grid-wrapper"> 
                <li>
                    <div class="about-grid-inner">
                        <img  src="<?php echo get_template_directory_uri(); ?>/public/images/about-left-image.jpg" alt="about-left-image" /> 
                    </div>
                </li>
                <li>
                    <div class="about-grid-inner">
                        <img  src="<?php echo get_template_directory_uri(); ?>/public/images/about-right.jpg" alt="about-right-image" /> 
                    </div>
                </li>
            </ul> 
        </div> 
    </section>
    <section class="about-service-block">
        <div class="container">
            <h2>SERVICES</h2>
            <p>Project management, research & analysis, strategy development, concept development, graphic design, iconography design, business models design, packaging prototypes, copywriting & editing, intellectual property protection, text layout, proof reading, photography, filming, print management, share registry liaison, user interface (UI) design, user experience (UX) design, web & app development, online management, online hosting.</p>
        </div>
    </section> 
    <section class="about-directors">
        <div class="container">
            <h2>DIRECTORS</h2>
            <ul class="directors-grid-wrapper">
                <li>
                    <img class="member-img" src="<?php echo get_template_directory_uri(); ?>/public/images/member1.jpg" alt="member1" />
                    <h2>Livio De Marchi<span>Founder & Chief Executive Officer</span></h2>
                    <p> Livio has built an impressive reputation as a creative strategist and business leader. Livio founded MDM Design in 1991 and is responsible for leading the development and growth of the company. He specialises in design and communication strategy and is the company’s joint Creative Director. Livio has lectured part-time, been a guest speaker for industry events and a judge for design and communication awards. Livio’s business acumen and creative drive gives him the ability to achieve outstanding results in all aspects of business.</p>
                    <a href="https://www.linkedin.com/company/mdm-design" title="Linkedin">
                    <em><img src="<?php echo get_template_directory_uri(); ?>/public/images/linkedin.svg" alt="linkedin"></em>
                    Connect</a>
                </li>
                <li>
                    <img class="member-img" src="<?php echo get_template_directory_uri(); ?>/public/images/member2.jpg" alt="member2" /> 
                    <h2>John Manos<span>Founder & Managing Director</span></h2>
                    <p>John is a highly respected corporate branding and investor communication expert. John founded MDM Design in 1991 and is responsible for overseeing the operations of the company. He specialises in brand and communication strategy and is the company’s joint Creative Director. John has been a regular contributor of articles to various publications and a guest speaker for industry events. John is a business savvy leader with a passion for all things aesthetic and strives to achieve excellence in everything he undertakes.</p> 
                    <a href="https://www.linkedin.com/company/mdm-design" title="Linkedin">
                    <em><img src="<?php echo get_template_directory_uri(); ?>/public/images/linkedin.svg" alt="linkedin"></em>
                    Connect</a>
                </li>
            </ul>
        </div>
    </section> 
</div> 
<?php
get_footer();
?>

