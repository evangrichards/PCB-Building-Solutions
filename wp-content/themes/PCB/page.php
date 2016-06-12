<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>

<p>We have over 20 years of consultancy experience in this area of business and we strive to achieve the following: develop, empower, enable and maintain.</p>

<p>Etiam quis molestie litora enim egestas magna tortor etiam tortor est, faucibus curabitur eget donec pharetra nisl porta sollicitudin vitae donec, turpis metus turpis aptent nulla orci litora euismod adipiscing. <a href="#">You should see ice.</a></p>

<p>Our aim is:</p>

<ul>
	<li>to develop your skills</li>
	<li>to empower you to feel more confident</li>
	<li>to enable you to maintain changes</li>
</ul>

<p>We work with you and carry out research to understand your needs and the needs of your customers. We then <strong>identify the best way</strong> or ways for these needs to be met and enable you to implement this effectively.</p>

<ol>
	<li>to develop your skills</li>
	<li>to empower you to feel more confident</li>
	<li>to enable you to maintain changes</li>
</ol>

<p>Our clients range from <strong>FTSE 300 companies</strong>, to large charitable organisations and some small local businesses who are striving to expand. Most of our clients use our Data Analysis service to inform their strategic decision making and their targets for the immediate, mid-term and long-term future. The data sources that we use for this type of analysis include customer enquiry data, sales figures, costs, market data and customer feedback.</p>

<blockquote>To see a detailed list of our clients and some of their feedback on using us please see our testimonials page.</blockquote>

<?php endwhile; endif; ?>

<?php get_footer(); ?>