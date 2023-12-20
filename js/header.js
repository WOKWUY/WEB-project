const header = document.querySelector("header")
	window.addEventListener("scroll", function(){
		x = window.pageYOffset
		if(x>0){
			header.classList.add("sticky")
		}else{
			header.classList.remove("sticky")
		}
	})

/*--------------Slide bar cartegory------------*/
const itemsliderbar = document.querySelectorAll(".cartegory-left-li")
        itemsliderbar.forEach(function(menu,index){
        menu.addEventListener("click",function(){
            menu.classList.toggle("block")
            })
        })

/*------------------Product-------------------*/
const bigImg = document.querySelector(".product-content-left-big-img img")
const smalImg = document.querySelectorAll(".product-content-left-small-img img")
smalImg.forEach(function(imgItem,X){
	imgItem.addEventListener("click", function(){
		bigImg.src = imgItem.src
	})
})

const gioithieu = document.querySelector(".gioithieu")
const chitiet = document.querySelector(".chitiet")
const baoquan = document.querySelector(".baoquan")

if (chitiet){
	chitiet.addEventListener("click", function(){
		document.querySelector(".product-content-right-bottom-content-gioithieu").style.display="none"
		document.querySelector(".product-content-right-bottom-content-baoquan").style.display="none"
		document.querySelector(".product-content-right-bottom-content-chitiet").style.display="block"
	})
}
if (baoquan){
	baoquan.addEventListener("click", function(){
		document.querySelector(".product-content-right-bottom-content-chitiet").style.display="none"
		document.querySelector(".product-content-right-bottom-content-gioithieu").style.display="none"
		document.querySelector(".product-content-right-bottom-content-baoquan").style.display="block"
	})
}
if (gioithieu){
	gioithieu.addEventListener("click", function(){
		document.querySelector(".product-content-right-bottom-content-baoquan").style.display="none"
		document.querySelector(".product-content-right-bottom-content-chitiet").style.display="none"
		document.querySelector(".product-content-right-bottom-content-gioithieu").style.display="block"
	})
}
const butTon = document.querySelector(".product-content-right-bottom-top")
if(butTon){
	butTon.addEventListener("click", function(){
		document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
	})
}