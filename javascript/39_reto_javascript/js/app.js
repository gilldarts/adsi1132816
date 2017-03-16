var stage1= document.getElementById('stage1')
var stage2 = document.getElementById('stage2')
var next = document.getElementById('next')
var prev= document.getElementById('prev')

stage2.style.display='none'
stage1.classList.add('zoomInDown')

next.onclick=function(){
	stage1.classList.remove('zoomInDown')
	stage1.classList.add('zoomOutUp')
	setTimeout(function){
		stage1.style.display='none'
	},1000)

	stage2.classList.add('zoomInDown')
	setTimeout(function){
		stage2.style.display='block'
	},2000)
}

prev.onclick=function(){
	stage2.classList.remove('zoomInDown')
	stage2.classList.add('zoomOutUp')
	setTimeout(function){
		stage1.style.display='none'
	},1000)

	stage1.classList.add('zoomInDown')
	setTimeout(function){
		stage1.style.display='block'
	},2000)
}