let elementLight = document.querySelector('.element-light');
let elementDark = document.querySelector('.element-dark');
let elementIcon = document.querySelector('.element-icon');

elementIcon.addEventListener('mouseover', function (){
	elementDark.classList.add('d-none')
	elementLight.classList.remove('d-none')
})

elementIcon.addEventListener('mouseout', function (){
	elementDark.classList.remove('d-none')
	elementLight.classList.add('d-none')
})


let weaponLight = document.querySelector('.weapon-light');
let weaponDark = document.querySelector('.weapon-dark');
let weaponIcon = document.querySelector('.weapon-icon');

weaponIcon.addEventListener('mouseover', function (){
	weaponDark.classList.add('d-none')
	weaponLight.classList.remove('d-none')
})

weaponIcon.addEventListener('mouseout', function (){
	weaponDark.classList.remove('d-none')
	weaponLight.classList.add('d-none')
})

let regionLight = document.querySelector('.region-light');
let regionDark = document.querySelector('.region-dark');
let regionIcon = document.querySelector('.region-icon');

regionIcon.addEventListener('mouseover', function (){
	regionDark.classList.add('d-none')
	regionLight.classList.remove('d-none')
})

regionIcon.addEventListener('mouseout', function (){
	regionDark.classList.remove('d-none')
	regionLight.classList.add('d-none')
})
