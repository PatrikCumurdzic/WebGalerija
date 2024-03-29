let galleryImages = document.querySelectorAll(".gallery-img");
let getLatestOpenedImg;
let windowWidth = window.innerWidth;

if(galleryImages){
	galleryImages.forEach(function(image, index){
		image.onclick = function(){
			let getElementCss = window.getComputedStyle(image);
			let getFullImgUrl = getElementCss.getPropertyValue("background-image");
			let getImgUrlPos = getFullImgUrl.split("/img/");
			let setNewImgUrl = getImgUrlPos[1].replace('")','');
			
			getLatestOpenedImg = index+1;

			let container = document.body;
			let newImgWindow = document.createElement("div");
			container.appendChild(newImgWindow);
			newImgWindow.setAttribute("class", "img-window");
			newImgWindow.setAttribute("onclick", "closeimg()");

			let newImg = document.createElement("img");
			newImgWindow.appendChild(newImg);
			newImg.setAttribute("src", "img/" + setNewImgUrl);
		}
	});
}

function closeimg(){
	document.querySelector(".img-window").remove();
}