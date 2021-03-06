<?php
        $page_title="Conference Program";
        include("include/header.php");
?>


<h2 class="hcls">Conference Program</h2>

<!--
<div id="prog_ctrl" data-role="navbar">
	<ul>
		<li><a href="#">Monday</a></li>
		<li><a href="#">Tuesday</a></li>
		<li><a href="#" class="ui-btn-active ui-state-persist">All</a></li>
	</ul>
</div>
-->

	<ul id="proglist" data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-dividertheme="a">

		<li class="heading" data-role="list-divider" style="display:block"><h3>Tuesday, December 1, 2015</h3></li>
		
			<?php
		    	tprog_add_session("08:30-09:00", "Coffee and cakes", "", "a");
			?>
			
			<?php
		    	tprog_add_session("09:00-09:15", "Welcome, opening remarks, best paper award", "", "a");
			?>
			
			<?php
		    	tprog_add_session("09:15-10:25", "Keynote", "", "a");
		    	tprog_add_item("Hackers, Fixers and Lone Rangers: The Future of Technology for Development?",
				"",
				"Ken Banks (kiwanja.net)",
				"",
				"",
				"");
			?>
			
			<?php
		    	tprog_add_session("10:25-10:45", "Coffee break", "", "a");
			?>
			
			<?php
		    	tprog_add_session("10:45-12:10", "Session 1: Connectivity and Deployment", "David Johnson (CSIR)", "a");
			?>
			
			<?php
			tprog_add_item("The Challenges of Scaling WISPs",
			"",
			"Shaddi Hasan (UC Berkeley), Yahel Ben-David (De Novo / UC Berkeley), Max Bittman (Sudo Mesh), Barath Raghavan (ICSI)",
			"",
			"",
			"");
		?>
		
		<?php
			tprog_add_item("USSD: The Third Universal App",
			"",
			"Trevor Perrier (University of Washington), Brian Derenzi (University of Cape Town), Richard Anderson (University of Washington)",
			"",
			"",
			"");
		?>
		
		<?php
			tprog_add_item("DUCES: A Framework for Characterizing and Simplifying Mobile Deployments in Low-Resource Settings",
			"",
			"Samuel Sudar (University of Washington), Richard Anderson (University of Washington)",
			"",
			"",
			"");
		?>
		
		<?php
			tprog_add_item("Towards a 2-way communication and analytics platform for emergency response and post-emergency recovery efforts in Sierra Leone",
			"",
			"Meenal Pore (IBM Research), Nuri Purswani (IBM Research), Reginald E. Bryant (IBM Research), Purity Mugambi (IBM Research), Osamuyimen Stewart (IBM Research)",
			"",
			"",
			"");
		?>

		<?php
		    	tprog_add_session("12:10-13:10", "Lunch", "", "a");
		?>
		
		<?php
		    	tprog_add_session("13:10-14:55", "Session 2: Systems", "Agha Ali Raza (Information Technology University)", "a");
		?>
		
		<?php
			tprog_add_item("Toward Alternative Decentralized Infrastructures",
			"",
			"Bill Tomlinson (UC Irvine); Bonnie Nardi (UC Irvine); Donald J. Patterson (UC Irvine); Ankita Raturi (UC Irvine); Debra Richardson (UC Irvine); Jean-Daniel Saphores (UC Irvine); Dan Stokols (UC Irvine)",
			"",
			"",
			"");
		?>
		
		<?php
			tprog_add_item("Internet Media Upload Caching for Poorly-Connected Regions",
			"",
			"Paul Schmitt (University of California, Santa Barbara), Ramya Raghavendra (IBM Research), Elizabeth Belding (University of California, Santa Barbara)",
			"",
			"",
			"");
		?>
		
		<?php
			tprog_add_item("Low-power Low-cost Wireless Sensors for Real-time Plant Stress Detection",
			"",
			"Mattia Zeni (IBM Research Africa), Reagan Mbitiru (IBM Research Africa), Agnes Nyambura (IBM Research Africa), Elizabeth Ondula (IBM Research Africa), Lianna Samuel (IBM Research Africa), Kala Fleming (IBM Research Africa)",
			"",
			"",
			"");
		?>
		
		<?php
			tprog_add_item("Leveraging Smartphones to Monitor Attendance in Public Facilities",
			"",
			"Ali Inam (Technology for People Initiative), Zahra Mansoor (Independent Researcher)",
			"",
			"",
			"");
		?>
		
		<?php
		    	tprog_add_session("14:55-15:20", "Coffee break", "", "a");
		?>
		
		<?php
		    	tprog_add_session("15:20-16:45", "Panel Joshua Blumenstock (University of Washington)", "", "a");
		?>
		
		<?php
		    	tprog_add_session("16:45-18:00", "Poster session", "", "a");
		?>
		
		<?php
		    	tprog_add_item("Bap re Bap! Driving Experiences through Multimodal Unruly Traffic on Bumpy Roads",
				"",
				"Nova Ahmed (North South University); Lamia Iftekhar (North South University); Silvia Ahmed (North South University); Ridwan Rahman (North South University); Tanveer Reza (North South University); Sarah Shoilee (North South University); Charisma F. Choudhury (University of Leeds)",
				"",
				"",
				"");
				
				tprog_add_item("An Investigation into ICT-Addressable Causes of Maternal Mortality in Pakistan",
				"",
				"Amna Batool (Information Technology University (ITU)-Punjab,Pakistan); Samia Razaq (Information Technology University (ITU)-Punjab,Pakistan); Kentaro Toyama (University of Michigan (UM), Ann Arbor, US)",
				"",
				"",
				"");
				
				tprog_add_item("RFTrack: TVWS Spectrum Measurements using Android Phones",
				"",
				"Marco Rainone (Solvitech); Marco Zennaro (ICTP); Ermanno Pietrosemoli (ICTP)",
				"",
				"",
				"");
				
				tprog_add_item("Summarization Search: A New Search Abstraction for Mobile Devices",
				"",
				"Sunandan Chakraborty (New York University); Zohaib Jabbar (New York University Abu Dhabi); Lakshminarayanan Subramanian (New York University)",
				"",
				"",
				"");
				
				tprog_add_item("Octopus: A Zero-Cost Architecture for Stream Network Monitoring",
				"",
				"Andres Arcia-Moret (University of Cambridge); Jesus Gomez (University of Los Andes); Juan Tirado (University of Cambridge); Arjuna Sathiaseelan (University of Cambridge)",
				"",
				"",
				"");
				
				tprog_add_item("Designing for a Rural Online Learning Community",
				"",
				"Aditya Vishwanath (Georgia Institute of Technology); Neha Kumar (Georgia Institute of Technology)",
				"",
				"",
				"");
				
				tprog_add_item("Text for a Ride, in Uganda",
				"",
				"Silvia Figueira (Santa Clara University); Michael Brew (Santa Clara University); Bryant Larsen (Santa Clara University); Pratyusha Joginipally (Santa Clara University); Sowmya Chandrashekarappa (Santa Clara University)",
				"",
				"",
				"");
				
				tprog_add_item("Improving Flight Accuracy for Aerial Wildlife Surveys in Sub-Saharan Africa",
				"",
				"Howard Frederick (Independent consultant); Edward Kohi (TAWIRI); Jay Lorenzo (Vulcan Inc); Michael Coyote (Vulcan Inc); Ted Schmitt (Vulcan Inc); Kirk Larsen (Vulcan Inc)",
				"",
				"",
				"");
				
				tprog_add_item("From sustainable Community Networks to sustainable Community Clouds",
				"",
				"Roger Baig (Fundació guifi.net); Felix Freitag (Universitat Politècnica de Catalunya); Leandro Navarro (Universitat Politècnica de Catalunya); Ramon Roca (Fundació guifi.net); Agustí Moll (Routek, SL); Roger Pueyo (Routek, SL)",
				"",
				"",
				"");
				
				tprog_add_item("Enabling Compliance of Environmental Conditions",
				"",
				"Anirban Dasgupta (IIT Gandhinagar); Utkarsh Dwivedi (IIT Guwahati)",
				"",
				"",
				"");
			?>
			
			<?php
		    	tprog_add_session("18:30", "Wine reception", "", "a");
			?>
		
		

		<li class="heading" data-role="list-divider" style="display:block"><h3>Wednesday, December 2, 2015</h3></li>
		
			<?php
		    	tprog_add_session("08:30-09:00", "Coffee and cakes", "", "a");
			?>
			
			<?php
		    	tprog_add_session("09:00-10:10", "Keynote", "", "a");
		    	tprog_add_item("Growing DEV, Building Community, Making a Difference",
				"",
				"Ed Cutrell (Microsoft Research India)",
				"",
				"",
				"");
			?>
		
			<?php
		    	tprog_add_session("10:10-10:30", "Coffee break", "", "a");
			?>
			
			<?php
		    	tprog_add_session("10:30-12:05", "Session 3: Applications and Interfaces", "Neha Kumar (Georgia Tech)", "a");
			?>
			
			<?php
			tprog_add_item("iPeer: A Sociotechnical Systems Approach for Helping Veterans with Civilian Reintegration",
			"",
			"Rizwana Rizia (Ubicomp Lab, Marquette University)",
			"",
			"",
			"");
			?>
			
			<?php
			tprog_add_item("Suhrid: A Collaborative Mobile Phone Interface for Low Literate People",
			"",
			"Syed Ishtiaque Ahmed (Cornell University), Maruf Hasan Zaber (Bangladesh University of Engineering and Technology), Mehrab Bin Morshed (Bangladesh University of Engineering and Technology), Md. Habibullah Bin Ismail (Bangladesh University of Engineering and Technology), Dan Cosley (Cornell University), Steven J. Jackson (Cornell University)",
			"",
			"",
			"");
			?>
			
			<?php
			tprog_add_item("ICTs in Rural Education: Let the Game Begin",
			"",
			"Adele Botha (CSIR Meraka), Marlien Herselman (CSIR Meraka)",
			"",
			"",
			"");
			?>
		
			<?php
			tprog_add_item("A Usability Study of an Assistive Touch Voice Interface based Automated Teller Machine (ATM)",
			"",
			"Sara Muneeb (Information Technology University), Mustafa Naseem (Information Technology University), Suleman Shahid (Tilburg University)",
			"",
			"",
			"");
			?>
		
			<?php
			tprog_add_item("Classification models for new language communities: building domain-specific message categorization",
			"",
			"Jessica Long (Idibon), Robert Munro (Idibon), Kidus Fisaha Asfaw (UNICEF), Evan Wheeler (UNICEF), Nicholas Gaylord (Idibon)",
			"",
			"",
			"");
			?>
		
			<?php
		    	tprog_add_session("12:05-13:30", "Lunch", "", "a");
			?>
		
			<?php
		    	tprog_add_session("13:30-14:55", "Session 4: Crowds and Communities", "Nicola Dell (Cornell Tech)", "a");
			?>
		
			<?php
			tprog_add_item("The Price Is Right? Statistical evaluation of a crowd-sourced market information system in Liberia",
			"",
			"Joshua E. Blumenstock (University of Washington), Niall Keleher (University of Washington)",
			"",
			"",
			"");
			?>

			<?php
			tprog_add_item("Looking at Cities in Mexico with Crowds",
			"",
			"Darshan Santani (Idiap Research Institute/EPFL, Switzerland), Salvador Ruiz-Correa (Center for Mobile Life, CNS-IPICYT, Mexico), Daniel Gatica-Perez (Idiap Research Institute/EPFL, Switzerland)",
			"",
			"",
			"");
			?>			

			<?php
			tprog_add_item("Janayuja: A People-centric Platform to Generate Reliable and Actionable Insights for Civic Agencies",
			"",
			"Tridib Mukherjee (Xerox Research Center India), Deepthi Chander (Xerox Research Center India), Sharanya Eswaran(Xerox Research Center India), Mridula Singh (Xerox Research Center India), Preethy Varma (Xerox Research Center India), Amandeep Chugh (Xerox Research Center India), Koustuv Dasgupta (Xerox Research Center India)",
			"",
			"",
			"");
			?>
		
			<?php
			tprog_add_item("Understanding Fiado: Informal credit in Brazil",
			"",
			"Heloisa Candello (IBM Research), David Millen (IBM Research), Silvia Biachi (IBM Research), Rogerio de Paula (IBM Research), Claudio Pinhanez (IBM Research)",
			"",
			"",
			"");
			?>
		
			<?php
		    	tprog_add_session("14:55-15:15", "Coffee break", "", "a");
			?>


			<?php
		    	tprog_add_session("15:15-16:30", "Session 5: Network Performance", "Sibren Isaacman (Loyola University)", "a");
			?>

			<?php
			tprog_add_item("Revisiting the State of Cellular Data Connectivity in India",
			"",
			"Asheesh Sharma (IIT Delhi); Manveen Kaur (IIT Delhi); Zahir Koradia (IIT Delhi); Rahul Nishant (IIT Delhi); Sameer Pandit (IIT Delhi); Aravindh Raman (IIT Delhi); Aaditeshwar Seth (IIT Delhi)",
			"",
			"",
			"");
			?>

			<?php
			tprog_add_item("Analysis of end-user QoE in community networks",
			"",
			"Bart Braem (University of Antwerp), Johan Bergs (University of Antwerp), Chris Blondia (University of Antwerp), Sabine Wittevrongel (Ghent University), Leandro Navarro (Universitat Politecnica de Catalunya)",
			"",
			"",
			"");
			?>

			<?php
			tprog_add_item("Optimizing Mobile Application Communication for Challenged Network Environments",
			"",
			"Waylon Brunette (University of Washington), Morgan Vigil (University of California Santa Barbara), Fahad Pervaiz (University of Washington), Shahar Levari (University of Washington), Richard Anderson (University of Washington)",
			"",
			"",
			"");
			?>

			<?php
		    	tprog_add_session("16:30", "Closing", "", "a");
			?>
				
<!--
		<li class="heading" data-role="list-divider" style="display:block"><h3>Tuesday, December 1, 2015</h3></li>
		<li class="heading" data-role="list-divider" style="display:block"><h3>Wednesday, December 2, 2015</h3></li>
-->

	</ul>


<p>
Please email the <a class="lnkcls" href="mailto:arjuna.sathiaseelan@cl.cam.ac.uk">general chairs</a> with any questions you may have.
</p>



<?php
    include ("include/footer.php");
?>
