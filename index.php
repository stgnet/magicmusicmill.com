<?php

require 'common.php';

$map = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.6000614129402!2d-86.59952688469265!3d34.715266089945445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88626cbcca324b2d%3A0xddb0ebfbcf51cc02!2sMagic+Music+Mill!5e0!3m2!1sen!2sus!4v1471278888763" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';


$page->add(
	pui::row()->add(
		pui::col(12)->add(
			pui::link('/pano.jpg')->add(
				pui::image('/pano.jpg')
			)
		)
	),
	pui::row()->add(
		pui::col(4)->add(
			pui::image('/mmm.png'),
			'<table>
				<tr><td colspan="2" style="font-size: 150%; text-align: center;">Hours</td></tr>
				<tr><td>Wednesday</td><td>4:00 pm - 6:00 pm</td></tr>
				<tr><td>Thursday</td><td>4:00 pm - 6:00 pm</td></tr>
				<tr><td>Friday</td><td>4:00 pm - 8:00 pm</td></tr>
				<tr><td>Saturday</td><td>10:00 am - 6:00 pm</td></tr>
				<tr><td>Sunday-Tueday</td><td>Closed</td></tr>
			</table>'
		),
		pui::col(8)->add(
			'<h3>Now Open at Lowe Mill</h3>
			<h4>Cigar Box Guitars, kits, parts</h4>
			<p>Find us on the first floor, down the ramp, on the right.</p>
			<h4><a href="/lessons.php">Free lessons every Saturday from 12-2 - no experience or purchase required</a></h4>

			<div class="text-center" style="width:100%;overflow:hidden;height:300px;max-width:100%;">
					<?php echo $map ?>
			</div>'
		)
	)
);


echo $page->asHtml();
