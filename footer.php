<div class="szybki_kontakt_lewa_strona">		
			<div class="szybki_kontakt_tekst"><p><b>SZYBKI KONTAKT:</b></p></div>
			
				<div class="szybki_kontakt_dane">	
					<p><b>Telefon:</b></p>
					<p>+48 555-555-555</p>
					<p><b>E-Mail:</b></p>
					<p>nazwa@choinki.pl</p>
					<p>Miejscowość</p>
					<p>ul. standardowa 43</p>
					<p>42-350</p>
				</div>	
		</div>	

		
		<div class="stopka_prawa_strona">
		
		<div class="stopka_menu">
			<p class="stopka_menu_tytul">Menu</p>
				<nav>
					<ul>
					<li><a href="#">START</a></li>
					<li><a href="#">O NAS</a></li>
					<li><a href="#">GALERIA</a></li>
					<li><a href="#">KONTAKT</a></li>
					</ul>
				</nav>
		</div>
				
		<div class="stopka_linki">
			<p class="stopka_linki_tytul">Lerem</p>
				<div class="stopka_linki_artykuly">
				<p>Lerem ipsu</p>
				<p>Lerem sda 2</p>
				<p>Le d dsa rem3</p>
				<p>Lere  dsa dm4</p>
				</div>
		</div>
				
				
		<div class="stopka_tekst">
			<p class="stopka_tekst_temat">Lerem</p>
					<p class="stopka_tekst_artykul">Lorem ipsum dolor sit amet,
					consectetur adipiscing elit.
					Nam magna augue, dapibus
					eget elementum sed, 
					ornare eget urna. </p>
		</div>
				
				
		<div class="stopka_kontakt">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo_radex_choinki_sztuczne.png" class="stopka_kontakt_logo"></img><br>
			<p class="nazwa_firmy_stopka">Nazwa</p>
			<p class="opis_dzialalnosci_stopka">sztuczne choinki</p>
			
			<img src="<?php echo get_template_directory_uri(); ?>/images/location.png" class="location"></img><br>
			<img src="<?php echo get_template_directory_uri(); ?>/images/phonee.png" class="phone"></img><br>
			
			<p class="phone_tekst">555-555-555</p>
			<p class="location_tekst">Miejscowość<br>ul. standardowa 77<br>42-350</p>
		</div>
				
				
		<div class="copyright"><p>Copyright © 2016</p></div>
		</div>
		
		
		
			
	
	</div> <!-- końcy container !-->
	<?php wp_footer(); ?>
	</body>
	
	
	
		<!-- menu !-->	
		<script>
		var dropdown = document.querySelectorAll('.dropdown');
var dropdownArray = Array.prototype.slice.call(dropdown,0);
dropdownArray.forEach(function(el){
	var button = el.querySelector('a[data-toggle="dropdown"]'),
			menu = el.querySelector('.dropdown-menu'),
			arrow = button.querySelector('i.icon-arrow');

	button.onclick = function(event) {
		if(!menu.hasClass('show')) {
			menu.classList.add('show');
			menu.classList.remove('hide');
			arrow.classList.add('open');
			arrow.classList.remove('close');
			event.preventDefault();
		}
		else {
			menu.classList.remove('show');
			menu.classList.add('hide');
			arrow.classList.remove('open');
			arrow.classList.add('close');
			event.preventDefault();
		}
	};
})

Element.prototype.hasClass = function(className) {
    return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
};
	</script>	
	<!-- Animacje !-->	
	<script>
		$(".animacja-pulse").hover(function() {
			$(this).toggleClass("animated pulse ;");
		});
	</script>
	
	<!-- animacja zdjęć !-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox-plus-jquery.min.js"></script>
</html>