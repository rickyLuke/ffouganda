// alert(window.scrollTop);

const menu = document.querySelector("#mainmenu");
const menuBtn = document.querySelector("#menu-btn");
const topBtn = document.querySelector("#back-to-top");
let scrollHeight;

const toggleMenu = ()=>
{
	menuBtn.addEventListener('click', (e)=>
	{
		menu.classList.toggle('visible');
	})
}

const backToTop = ()=>
{
	window.addEventListener('scroll', (e)=>{
		scrollHeight = window.scrollY;
		if(scrollHeight > 3500){ topBtn.style.display = "block"; }
		else{ topBtn.style.display = "none"; }
	});	
}


toggleMenu();
backToTop();