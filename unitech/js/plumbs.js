change=()=>{
	document.querySelector('.link-top').classList.toggle("link_toggle");
	document.getElementById("charset").classList.toggle("hand");
}
submit=()=>{
	document.getElementById("form").classList.toggle("form");

}
readingmode=()=>{
	//document.getElementById("spantoggle").classList.toggle('toggling');
	let bat = navigator.Battery();
	console.log(bat);
}
//.....scrolling effects section .......
window.addEventListener('scroll', scroll_counter=()=> {
	const count_project = document.querySelector('.ggg');
	const scrollable = document.documentElement.scrollHeight - window.innerHeight;
	const scroll = window.scrollY;
	//console.log(scroll);
	if (Math.floor(scroll) >= 1000) {
				
			let projectdel = 10;
		let project_del = document.getElementById('project_del');
		projectDel=()=>{
			project_del.innerHTML = projectdel;
			if (projectdel < 1500) {
				projectdel = projectdel +10;
			}
			
			
		
		};

		setInterval(projectDel,100);
		//next counter begins
		let projectsat = 10;
		let project_sat = document.getElementById('project_sat');
		
		projectSat=()=>{
			project_sat.innerHTML = projectsat;
			if (projectsat < 1450) {
				projectsat = projectsat +10;

			}
			
			
		
		}

		setInterval(projectSat,100);
		//setTimeout(projectSat,100);
		//next counter begins
	let projectcre = 0;
		let project_cre = document.getElementById('project_cre');
		
		projectCre=()=>{
			project_cre.innerHTML = projectcre + '%';
			if (projectcre < 96) {
				projectcre++;
			}
			
			
		
		}

		setInterval(projectCre,190);
		//setTimeout(projectCre,100);
		//next counting...........

		let projectrel = 0;
		let project_rel = document.getElementById('project_rel');
		
		projectRel=()=>{
			project_rel.innerHTML = projectrel + '%';
			if (projectrel < 95) {
				projectrel++;
			}
			
			
		
		}

		 setInterval(projectRel,190);
		 
		
	
		
	}
		window.removeEventListener('scroll', scroll_counter);
}
);
//........scrolling top effects......b
	window.addEventListener('scroll',scroll_top=()=>{
		const scroll_top = window.scrollY;
		let topone = document.querySelector('.topone');
		let span_top = document.querySelector('.animation');
		let hampone = document.querySelector('#hampone');
		let hamptwo = document.querySelector('#hamptwo');
		let hampthree = document.querySelector('#hampthree');
		if (Math.floor(scroll_top) >= 200) {
			topone.style.backgroundColor = 'white';
			topone.style.transition = '1s ease';
			topone.style.backgroundColor = 'white';
			topone.style.boxShadow =  '-30px -30px 30px rgba(255,255,255,0.5),30px 30px 30px rgba(0,0,0,0.05)';
			hampone.style.backgroundColor = 'black';
			hamptwo.style.backgroundColor = 'black';
			hampthree.style.backgroundColor = 'black';
	
		}
		else{
			topone.style.backgroundColor = '';
			topone.style.transition = '1s ease';
			hampone.style.backgroundColor = '';
			hamptwo.style.backgroundColor = '';
			hampthree.style.backgroundColor = '';
		}
		
	});


	/*....... fading show on scroll......*/
	window.addEventListener('scroll',reveal=()=>{
		const scroll = window.scrollY;
		if (scroll >= 400) {
			let service = document.querySelector('#service');
			service.style.transition = '1s ease';
			service.style.visibility = 'visible';

		}
		else{
			service.style.visibility = '';
		}


			});

/*......toggle mode switching buttons.......*/
toggle_mode = ()=>{
document.querySelector(".mode").classList.toggle('mode_toggle');
document.querySelector("body").classList.toggle('body_toggle');
//document.querySelector("#toggle_p").classList.toggle('toggle_p');
	
};
  //to check if there is overlay of element in the console
  var docwidth = document.documentElement.offsetWidth;
  [].forEach.call(
    document.querySelectorAll('*'),
    function(bl){
      if (bl.offsetWidth > docwidth) {
        console.log(bl);
      }
    }
    );
